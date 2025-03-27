<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto mb-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white  rounded-lg p-8 md:p-12">
                    <p class="text-lg font-normal text-gray-500 mb-4">Active Waybills</p>
                    <h2 class="text-gray-900 text-3xl font-extrabold mb-2">{{$activeWaybills}}</h2>
                </div>
                <div class="bg-white  rounded-lg p-8 md:p-12">
                    <p class="text-lg font-normal text-gray-500 mb-4">All Waybills</p>
                    <h2 class="text-gray-900 text-3xl font-extrabold mb-2">{{$totalWaybills}}</h2>
                </div>
                <div class="bg-white  rounded-lg p-8 md:p-12">
                    <p class="text-lg font-normal text-gray-500 mb-4">All Waybills</p>
                    <h2 class="text-gray-900 text-3xl font-extrabold mb-2">20</h2>
                    
                </div>
            </div>
            <div class="bg-white mt-4 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="my-8 px-8">
                    <h3 class="mb-4">Waybill List</h3>                      
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-blue-300">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Waybill Number
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Consignee
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Price
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($waybills as $waybill)
                                <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{$waybill->waybill_no}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$waybill->consignee->name}}
                                    </td>
                                    <td class="px-6 py-4">
                                        PHP{{$waybill->price}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$waybill->status}}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{route('waybills.edit', ['waybill' => $waybill])}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                                    </td>
                                </tr>
                                
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="my-8 px-8">
                    <h3 class="mb-4"> User List</h3>                      
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-blue-300">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Full Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Role
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{$user->name}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$user->email}}
                                    </td>
                                    <th scope="col" class="px-6 py-3">
                                        {{$user->usertype}}
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <a href="" class="font-medium text-blue-600 hover:underline">View</a>
                                    </th>
                                </tr>
                                
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="my-8 px-8">
                    <h3 class="mb-4"> Recent Activity</h3>                      
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-blue-300">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Time
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Waybill
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        View
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($logs as $log)
                                <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{$log->user->name}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$log->updated_at}}
                                    </td>
                                    <th scope="col" class="px-6 py-3">
                                        {{$log->waybill->waybill_no}}
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <a href="" class="font-medium text-blue-600 hover:underline">View</a>
                                    </th>
                                </tr>
                                
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
