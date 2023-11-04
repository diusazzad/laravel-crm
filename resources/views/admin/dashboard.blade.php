@extends('layouts.admin')

@section('content')
    <div class="flex-1 p-6 bg-gray-100 md:mt-16">
        <!-- General Report -->

        <x-admin.content.overview />
        <!-- End General Report -->

        <!-- strat Analytics -->
        {{-- <div class="grid grid-cols-2 gap-6 mt-6 xl:grid-cols-1">
            <!-- update section -->
            <div class="text-white bg-teal-400 border-teal-400 shadow-md card">
                <div class="flex flex-row card-body">
                    <!-- image -->
                    <div class="flex items-center justify-center w-40 h-40 img-wrapper">
                        <img src="./img/happy.svg" alt="img title" />
                    </div>
                    <!-- end image -->

                    <!-- info -->
                    <div class="py-2 ml-10">
                        <h1 class="h6">Good Job, Mohamed!</h1>
                        <p class="text-xs text-white">
                            You've finished all of your tasks for this
                            week.
                        </p>

                        <ul class="mt-4">
                            <li class="text-sm font-light">
                                <i class="mb-2 mr-2 fad fa-check-double"></i>
                                Finish Dashboard Design
                            </li>
                            <li class="text-sm font-light">
                                <i class="mb-2 mr-2 fad fa-check-double"></i>
                                Fix Issue #74
                            </li>
                            <li class="text-sm font-light">
                                <i class="mr-2 fad fa-check-double"></i>
                                Publish version 1.0.6
                            </li>
                        </ul>
                    </div>
                    <!-- end info -->
                </div>
            </div>
            <!-- end update section -->

            <!-- carts -->
            <div class="flex flex-col">
                <!-- alert -->
                <div class="mb-6 alert alert-dark">
                    Hi! Wait A Minute . . . . . . Follow Me On Twitter
                    <a class="ml-2" target="_blank" href="https://twitter.com/MohamedSaid__">@moesaid</a>
                </div>
                <!-- end alert -->

                <!-- charts -->
                <div class="grid h-full grid-cols-2 gap-6">
                    <div class="card">
                        <div class="flex flex-row justify-between px-4 py-3">
                            <h1 class="h6">
                                <span class="num-4"></span>k
                                <p>page view</p>
                            </h1>

                            <div
                                class="flex items-center justify-center w-10 h-10 text-teal-700 bg-teal-200 border border-teal-300 rounded-full">
                                <i class="fad fa-eye"></i>
                            </div>
                        </div>
                        <div class="analytics_1"></div>
                    </div>

                    <div class="card">
                        <div class="flex flex-row justify-between px-4 py-3">
                            <h1 class="h6">
                                <span class="num-2"></span>k
                                <p>Unique Users</p>
                            </h1>

                            <div
                                class="flex items-center justify-center w-10 h-10 text-indigo-700 bg-indigo-200 border border-indigo-300 rounded-full">
                                <i class="fad fa-users-crown"></i>
                            </div>
                        </div>
                        <div class="analytics_1"></div>
                    </div>
                </div>
                <!-- charts    -->
            </div>
            <!-- end charts -->
        </div> --}}
        <!-- end Analytics -->

        <!-- Sales Overview -->
        {{-- <div class="mt-6 card">
            <!-- header -->
            <div class="flex flex-row justify-between card-header">
                <h1 class="h6">Sales Overview</h1>

                <div class="flex flex-row items-center justify-center">
                    <a href="">
                        <i class="mr-6 fad fa-chevron-double-down"></i>
                    </a>

                    <a href="">
                        <i class="fad fa-ellipsis-v"></i>
                    </a>
                </div>
            </div>
            <!-- end header -->

            <!-- body -->
            <div class="grid grid-cols-2 gap-6 card-body lg:grid-cols-1">
                <div class="p-8">
                    <h1 class="h2">5,337</h1>
                    <p class="font-medium text-black">
                        Sales this month
                    </p>

                    <div class="flex items-center mt-20 mb-2">
                        <div class="px-3 py-1 mr-3 text-green-900 bg-green-200 rounded">
                            <i class="fa fa-caret-up"></i>
                        </div>
                        <p class="text-black">
                            <span class="text-green-400 num-2"></span><span class="text-green-400">% more
                                sales</span>
                            in comparison to last month.
                        </p>
                    </div>

                    <div class="flex items-center">
                        <div class="px-3 py-1 mr-3 text-red-900 bg-red-200 rounded">
                            <i class="fa fa-caret-down"></i>
                        </div>
                        <p class="text-black">
                            <span class="text-red-400 num-2"></span><span class="text-red-400">% revenue per
                                sale</span>
                            in comparison to last month.
                        </p>
                    </div>

                    <a href="#" class="mt-6 btn-shadow">view details</a>
                </div>

                <div class="">
                    <div id="sealsOverview"></div>
                </div>
            </div>
            <!-- end body -->
        </div> --}}
        <!-- end Sales Overview -->

        <!-- start numbers -->

        {{-- <x-admin.content.analytics/> --}}
        <!-- end nmbers -->

        <!-- start quick Info -->
        <div class="grid grid-cols-1 gap-6 mt-6 xl:grid-cols-1">
            <!-- Browser Stats -->

            {{-- <x-admin.content.browserstats/> --}}


            <!-- end Browser Stats -->

            <!-- Start Recent Sales -->
            <div class="col-span-2 card xl:col-span-1">
                <div class="card-header">Recent User Information Information</div>

                <table class="w-full text-left table-auto">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border-r">Name</th>
                            <th class="px-4 py-2 border-r">Account</th>
                            <th class="px-4 py-2 border-r">Revenue</th>
                            <th class="px-4 py-2 border-r">Stage</th>
                            <th class="px-4 py-2 border-r">Owner</th>
                            <th class="px-4 py-2 border-r">Probability</th>
                            <th class="px-4 py-2 border-r">Trend</th>
                            <th class="px-4 py-2 border-r">Files</th>
                            <th class="px-4 py-2 border-r">Type</th>
                            <th class="px-4 py-2 border-r">Lead Source</th>
                            <th class="px-4 py-2 border-r">Close Date</th>
                            <th class="px-4 py-2 border-r">Forecasted Revenue</th>
                            <th class="px-4 py-2">Updated By</th>
                            <th class="px-4 py-2">Created By</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600">
                        <tr>
                            {{-- <td class="px-4 py-2 text-center text-green-500 border border-l-0">
                                <i class="fad fa-circle">

                                </i>
                            </td> --}}

                            @foreach ($leads as $lead)
                        <tr>
                            <td>{{ $lead->name }}</td>
                            <td>{{ $lead->account }}</td>
                            <td>{{ $lead->revenue }}</td>
                            <td>{{ $lead->stage }}</td>
                            <td>{{ $lead->owner }}</td>
                            <td>{{ $lead->probability }}</td>
                            <td>{{ $lead->trend }}</td>
                            <td>{{ $lead->files }}</td>
                            <td>{{ $lead->type }}</td>
                            <td>{{ $lead->lead_source }}</td>
                            <td>{{ $lead->close_date }}</td>
                            <td>{{ $lead->forecasted_revenue }}</td>
                            <td>{{ $lead->updated_by }}</td>
                            <td>{{ $lead->created_by }}</td>
                        </tr>
                        @endforeach
                        </tr>

                        {{-- @foreach ($leads as $lead)

                        @endforeach --}}

                    </tbody>
                </table>
            </div>
            <!-- End Recent Sales -->
        </div>
        <!-- end quick Info -->
    </div>
    <!-- end content -->
@endsection
