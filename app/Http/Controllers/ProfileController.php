<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Waybill;
use App\Models\ActivityLog;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function show(){
        $users = User::simplePaginate(5);
        $waybills = Waybill::where('status', '!=', 'Delivered')
                   ->orderBy('updated_at', 'asc')
                   ->simplePaginate(10);
        $totalWaybills = Waybill::count();
        $activeWaybills = Waybill::where('status', '!=', 'Delivered')->count();
        $logs = ActivityLog::simplePaginate(5);

        $user = auth()->user(); // Get the authenticated user

        if ($user->usertype === 'admin') {
            return view('admin.dashboard', compact('waybills','users', 'logs', 'totalWaybills', 'activeWaybills'));
        } else {
            return view('dashboard', compact('waybills'));
        }
    }
}
