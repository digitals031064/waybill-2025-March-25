<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\User;
use Illuminate\Http\Request;

class ActivityLogController extends Controller
{
    /**
     * Displays the activity logs.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Fetch all activity logs, including related user and waybill data, sorted by latest first
        $logs = ActivityLog::with(['user', 'waybill'])->latest()->get();

        // Pass the logs data to the view
        return view('admin.user-management', compact('logs'));
    }

    public function track(Request $request){
        $logs = null;

        if ($request->has('waybill_no')) {
            $request->validate([
                'waybill_no' => 'required|digits:6' 
            ]);

            $logs = ActivityLog::whereHas('waybill', function ($query) use ($request) {
                $query->where('waybill_no', $request->waybill_no);
            })->orderBy('created_at', 'desc')->get();
        }

        return view('tracking', compact('logs'));
    }
}
