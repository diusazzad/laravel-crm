@extends('layouts.admin')

@section('content')
    <div class="flex-1 p-6 bg-gray-100 md:mt-16">

        <!-- congrats & summary -->
        <div class="grid grid-cols-3 gap-5 lg:grid-cols-1">
            <!-- congrats -->
            <div class="col-span-1 card">

                <div class="flex flex-col justify-between h-full card-body">

                    <div>
                        <h1 class="text-lg font-bold tracking-wide">Congratulations Moe!</h1>
                        <p class="mt-2 text-gray-600">Best seller of the month</p>
                    </div>

                    <div class="flex flex-row items-end mt-10">

                        <div class="flex-1">
                            <h1 class="text-4xl font-extrabold text-teal-400">$89k</h1>
                            <p class="mt-3 mb-4 text-xs text-gray-500">You have done 57.6% more sales today.</p>
                            <a href="#" class="py-3 btn-shadow">
                                view sales
                            </a>
                        </div>

                        <div class="flex-1 w-32 h-32 ml-10 overflow-hidden lg:w-auto lg:h-auto">
                            <img class="object-cover" src="img/congrats.svg">
                        </div>

                    </div>

                </div>

            </div>
            <!-- end congrats -->
            <div class="flex flex-row col-span-2 p-0 overflow-hidden card lg:col-span-1 lg:flex-col">

                <!-- right -->
                <div class="w-2/3 border-r border-gray-200 lg:w-full lg:mb-5">

                    <!-- top -->
                    <div class="flex flex-row flex-wrap items-center justify-between p-5">
                        <h2 class="text-lg font-bold">Order Summary</h2>
                        <div class="flex flex-row items-center justify-center">
                            <a href="#" class="block py-2 mr-4 text-sm btn">month</a>
                            <a href="#" class="block py-2 text-sm btn-shadow">week</a>
                        </div>
                    </div>
                    <!-- end top -->

                    <!-- chart -->
                    <div id="SummaryChart"></div>
                    <!-- end chart -->

                </div>
                <!-- end right -->

                <!-- left -->
                <div class="w-1/3 lg:w-full">

                    <!-- top -->
                    <div class="p-5 border-b border-gray-200">
                        <h2 class="mb-6 text-lg font-bold">Sales History</h2>

                        <div class="flex flex-row justify-between mb-3">
                            <div class="">
                                <h4 class="font-thin text-gray-600">Puma Shoes</h4>
                                <p class="text-xs font-hairline text-gray-400">30 min ago</p>
                            </div>
                            <div class="text-sm font-medium">
                                <span class="text-green-400">+</span> $250
                            </div>
                        </div>

                        <div class="flex flex-row justify-between mb-3">
                            <div class="">
                                <h4 class="font-thin text-gray-600">Google Pixel 4 xl</h4>
                                <p class="text-xs font-hairline text-gray-400">1 day ago</p>
                            </div>
                            <div class="text-sm font-medium">
                                <span class="text-red-400">-</span> $10
                            </div>
                        </div>

                        <div class="flex flex-row justify-between">
                            <div class="">
                                <h4 class="font-thin text-gray-600">Nike Air Jordan</h4>
                                <p class="text-xs font-hairline text-gray-400">2 hour ago</p>
                            </div>
                            <div class="text-sm font-medium">
                                <span class="text-red-400">-</span> $98
                            </div>
                        </div>



                    </div>
                    <!-- end top -->

                    <!-- bottom -->
                    <div class="p-5">
                        <h2 class="mb-2 text-lg font-bold">Sales History</h2>
                        <strong class="text-xl font-extrabold text-teal-400">$82,950.96</strong>

                        <div class="relative h-2 mt-2 bg-gray-300 rounded-full">
                            <div class="w-3/4 h-full bg-teal-400 rounded-full shadow-md"></div>
                        </div>
                    </div>
                    <!-- end bottom -->

                </div>
                <!-- end left -->

            </div>



        </div>
        <!-- end congrats & summary -->

        <!-- status -->
        <div class="grid grid-cols-5 gap-5 mt-5 lg:grid-cols-2">

            <!-- status -->
            <div class="col-span-1 card">
                <div class="card-body">
                    <h5 class="text-xs font-extrabold tracking-wider uppercase">today</h5>
                    <h1 class="mt-1 mb-1 text-lg capitalize">$<span class="num-3"></span> <span
                            class="text-xs font-extrabold tracking-widest"> / <span class="num-2"></span>
                            orders</span></h1>
                    <p class="text-xs text-gray-500 capitalize">( $<span class="num-2"></span> in the last year )
                    </p>
                </div>
            </div>
            <!-- status -->

            <!-- status -->
            <div class="col-span-1 card">
                <div class="card-body">
                    <h5 class="text-xs font-extrabold tracking-wider uppercase">yesterday</h5>
                    <h1 class="mt-1 mb-1 text-lg capitalize">$<span class="num-3"></span> <span
                            class="text-xs font-extrabold tracking-widest"> / <span class="num-2"></span>
                            orders</span></h1>
                    <p class="text-xs text-gray-500 capitalize">( $<span class="num-2"></span> in the last year )
                    </p>
                </div>
            </div>
            <!-- status -->

            <!-- status -->
            <div class="col-span-1 card">
                <div class="card-body">
                    <h5 class="text-xs font-extrabold tracking-wider uppercase">last week</h5>
                    <h1 class="mt-1 mb-1 text-lg capitalize">$<span class="num-3"></span> <span
                            class="text-xs font-extrabold tracking-widest"> / <span class="num-2"></span>
                            orders</span></h1>
                    <p class="text-xs text-gray-500 capitalize">( $<span class="num-2"></span> in the last year )
                    </p>
                </div>
            </div>
            <!-- status -->

            <!-- status -->
            <div class="col-span-1 card">
                <div class="card-body">
                    <h5 class="text-xs font-extrabold tracking-wider uppercase">last month</h5>
                    <h1 class="mt-1 mb-1 text-lg capitalize">$<span class="num-3"></span> <span
                            class="text-xs font-extrabold tracking-widest"> / <span class="num-2"></span>
                            orders</span></h1>
                    <p class="text-xs text-gray-500 capitalize">( $<span class="num-2"></span> in the last year )
                    </p>
                </div>
            </div>
            <!-- status -->

            <!-- status -->
            <div class="col-span-1 card lg:col-span-2">
                <div class="card-body">
                    <h5 class="text-xs font-extrabold tracking-wider uppercase">last 90-days</h5>
                    <h1 class="mt-1 mb-1 text-lg capitalize">$<span class="num-3"></span> <span
                            class="text-xs font-extrabold tracking-widest"> / <span class="num-2"></span>
                            orders</span></h1>
                    <p class="text-xs text-gray-500 capitalize">( $<span class="num-2"></span> in the last year )
                    </p>
                </div>
            </div>
            <!-- status -->


        </div>
        <!-- end status -->

        <!-- best seller & traffic -->
        <div class="grid grid-cols-2 gap-5 mt-5 lg:grid-cols-1">
            <div class="card">

                <div class="card-body">
                    <div class="flex flex-row items-center justify-between">
                        <h1 class="text-lg font-extrabold">best sellers</h1>
                        <a href="#" class="text-sm btn-gray">view all</a>
                    </div>

                    <table class="w-full mt-5 text-right table-auto">

                        <thead>
                            <tr>
                                <td class="py-4 text-sm font-extrabold text-left">product</td>
                                <td class="py-4 text-sm font-extrabold">price</td>
                                <td class="py-4 text-sm font-extrabold">sold</td>
                                <td class="py-4 text-sm font-extrabold">profit</td>
                            </tr>
                        </thead>

                        <tbody>

                            <!-- item -->
                            <tr class="">
                                <td class="flex flex-row items-center py-4 text-sm text-left text-gray-600">
                                    <div class="w-8 h-8 mr-3 overflow-hidden">
                                        <img src="img/sneakers.svg" class="object-cover">
                                    </div>
                                    Sneakers and Tennis
                                </td>
                                <td class="py-4 text-xs text-gray-600">$ <span class="num-2"></span></td>
                                <td class="py-4 text-xs text-gray-600"><span class="num-3"></span></td>
                                <td class="py-4 text-xs text-gray-600">$ <span class="num-4"></span></td>
                            </tr>
                            <!-- end item -->

                            <!-- item -->
                            <tr class="">
                                <td class="flex flex-row items-center py-4 text-sm text-gray-600">
                                    <div class="w-8 h-8 mr-3 overflow-hidden">
                                        <img src="img/socks.svg" class="object-cover">
                                    </div>
                                    Crazy Socks & Graphic Socks for Men
                                </td>
                                <td class="py-4 text-xs text-gray-600">$ <span class="num-2"></span></td>
                                <td class="py-4 text-xs text-gray-600"><span class="num-3"></span></td>
                                <td class="py-4 text-xs text-gray-600">$ <span class="num-4"></span></td>
                            </tr>
                            <!-- end item -->

                            <!-- item -->
                            <tr class="">
                                <td class="flex flex-row items-center py-4 text-sm text-gray-600">
                                    <div class="w-8 h-8 mr-3 overflow-hidden">
                                        <img src="img/soccer.svg" class="object-cover">
                                    </div>
                                    Adidas Soccer Ball
                                </td>
                                <td class="py-4 text-xs text-gray-600">$ <span class="num-2"></span></td>
                                <td class="py-4 text-xs text-gray-600"><span class="num-3"></span></td>
                                <td class="py-4 text-xs text-gray-600">$ <span class="num-4"></span></td>
                            </tr>
                            <!-- end item -->

                            <!-- item -->
                            <tr class="">
                                <td class="flex flex-row items-center py-4 text-sm text-gray-600">
                                    <div class="w-8 h-8 mr-3 overflow-hidden">
                                        <img src="img/food.svg" class="object-cover">
                                    </div>
                                    Best Chocolate Chip Cookies
                                </td>
                                <td class="py-4 text-xs text-gray-600">$ <span class="num-2"></span></td>
                                <td class="py-4 text-xs text-gray-600"><span class="num-3"></span></td>
                                <td class="py-4 text-xs text-gray-600">$ <span class="num-4"></span></td>
                            </tr>
                            <!-- end item -->

                        </tbody>

                    </table>

                </div>
            </div>
            <div class="card">

                <div class="card-body">
                    <h2 class="mb-10 text-lg font-bold">Recent Orders</h2>

                    <!-- start a table -->
                    <table class="w-full table-fixed">

                        <!-- table head -->
                        <thead class="text-left">
                            <tr>
                                <th class="w-1/2 pb-10 text-sm font-extrabold tracking-wide">customer</th>
                                <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">Product</th>
                                <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">Invoice</th>
                                <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">price</th>
                                <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">status</th>
                            </tr>
                        </thead>
                        <!-- end table head -->

                        <!-- table body -->
                        <tbody class="text-left text-gray-600">

                            <!-- item -->
                            <tr>
                                <!-- name -->
                                <th
                                    class="flex flex-row items-center w-1/2 w-full mb-4 text-xs font-extrabold tracking-wider">
                                    <div class="w-8 h-8 overflow-hidden rounded-full">
                                        <img src="img/user2.jpg" class="object-cover">
                                    </div>
                                    <p class="ml-3 name-1">user name</p>
                                </th>
                                <!-- name -->

                                <!-- product -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Nike Sport
                                </th>
                                <!-- product -->

                                <!-- invoice -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">#<span
                                        class="num-4"></span></th>
                                <!-- invoice -->

                                <!-- price -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">$<span
                                        class="num-2"></span></th>
                                <!-- price -->

                                <!-- status -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">shipped</th>
                                <!-- status -->

                            </tr>
                            <!-- item -->


                            <!-- item -->
                            <tr>
                                <!-- name -->
                                <th
                                    class="flex flex-row items-center w-1/2 w-full mb-4 text-xs font-extrabold tracking-wider">
                                    <div class="w-8 h-8 overflow-hidden rounded-full">
                                        <img src="img/user3.jpg" class="object-cover">
                                    </div>
                                    <p class="ml-3 name-1">user name</p>
                                </th>
                                <!-- name -->

                                <!-- product -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Nike Sport
                                </th>
                                <!-- product -->

                                <!-- invoice -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">#<span
                                        class="num-4"></span></th>
                                <!-- invoice -->

                                <!-- price -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">$<span
                                        class="num-2"></span></th>
                                <!-- price -->

                                <!-- status -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">shipped</th>
                                <!-- status -->

                            </tr>
                            <!-- item -->


                            <!-- item -->
                            <tr>
                                <!-- name -->
                                <th
                                    class="flex flex-row items-center w-1/2 w-full mb-4 text-xs font-extrabold tracking-wider">
                                    <div class="w-8 h-8 overflow-hidden rounded-full">
                                        <img src="img/user2.jpg" class="object-cover">
                                    </div>
                                    <p class="ml-3 name-1">user name</p>
                                </th>
                                <!-- name -->

                                <!-- product -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Nike Sport
                                </th>
                                <!-- product -->

                                <!-- invoice -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">#<span
                                        class="num-4"></span></th>
                                <!-- invoice -->

                                <!-- price -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">$<span
                                        class="num-2"></span></th>
                                <!-- price -->

                                <!-- status -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">shipped</th>
                                <!-- status -->

                            </tr>
                            <!-- item -->

                            <!-- item -->
                            <tr>
                                <!-- name -->
                                <th
                                    class="flex flex-row items-center w-1/2 w-full mb-4 text-xs font-extrabold tracking-wider">
                                    <div class="w-8 h-8 overflow-hidden rounded-full">
                                        <img src="img/user1.jpg" class="object-cover">
                                    </div>
                                    <p class="ml-3 name-1">user name</p>
                                </th>
                                <!-- name -->

                                <!-- product -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Nike Sport
                                </th>
                                <!-- product -->

                                <!-- invoice -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">#<span
                                        class="num-4"></span></th>
                                <!-- invoice -->

                                <!-- price -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">$<span
                                        class="num-2"></span></th>
                                <!-- price -->

                                <!-- status -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">shipped</th>
                                <!-- status -->

                            </tr>
                            <!-- item -->

                            <!-- item -->
                            <tr>
                                <!-- name -->
                                <th
                                    class="flex flex-row items-center w-1/2 w-full mb-4 text-xs font-extrabold tracking-wider">
                                    <div class="w-8 h-8 overflow-hidden rounded-full">
                                        <img src="img/user3.jpg" class="object-cover">
                                    </div>
                                    <p class="ml-3 name-1">user name</p>
                                </th>
                                <!-- name -->

                                <!-- product -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Nike Sport
                                </th>
                                <!-- product -->

                                <!-- invoice -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">#<span
                                        class="num-4"></span></th>
                                <!-- invoice -->

                                <!-- price -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">$<span
                                        class="num-2"></span></th>
                                <!-- price -->

                                <!-- status -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">shipped</th>
                                <!-- status -->

                            </tr>
                            <!-- item -->




                        </tbody>
                        <!-- end table body -->

                    </table>
                    <!-- end a table -->
                </div>

            </div>

        </div>
        <!-- end best seller & traffic -->


    </div>
@endsection
