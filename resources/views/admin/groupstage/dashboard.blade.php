@extends('layouts.admin')

@section('content')
    <div class="grid flex-1 grid-cols-8 p-6 bg-gray-100 md:mt-16">

        <div class="col-span-2 p-6 mr-8 bg-white border rounded">

            <a href="#" class="tracking-wider uppercase btn-bs-dark">
                <i class="mr-2 fad fa-layer-plus"></i>
                Compose
            </a>
            <hr class="my-6">

            <ul>
                <li class="my-5 mt-0">
                    <a class="text-left btn-indigo" href="#">
                        <i class="mr-1 text-xs fad fa-inbox"></i>
                        inbox
                    </a>
                </li>


                <li>
                    <a class="text-left text-gray-800 bg-white btn hover:bg-gray-100 hover:text-gray-900" href="#">
                        <i class="mr-1 text-xs fad fa-paper-plane"></i>
                        sent
                    </a>
                </li>


                <li>
                    <a class="text-left text-gray-800 bg-white btn hover:bg-gray-100 hover:text-gray-900" href="#">
                        <i class="mr-1 text-xs fad fa-star"></i>
                        Marked
                    </a>
                </li>


                <li>
                    <a class="text-left text-gray-800 bg-white btn hover:bg-gray-100 hover:text-gray-900" href="#">
                        <i class="mr-1 text-xs fad fa-inbox-in"></i>
                        draft
                    </a>
                </li>


                <li>
                    <a class="text-left text-gray-800 bg-white btn hover:bg-gray-100 hover:text-gray-900" href="#">
                        <i class="mr-1 text-xs fad fa-inbox-out"></i>
                        sent
                    </a>
                </li>


                <li>
                    <a class="text-left text-gray-800 bg-white btn hover:bg-gray-100 hover:text-gray-900" href="#">
                        <i class="mr-1 text-xs fad fa-trash"></i>
                        trash
                    </a>
                </li>

                <!-- seprator -->
                <hr class="my-10">

                <li>
                    <a class="text-left text-gray-800 bg-white btn hover:bg-gray-100 hover:text-gray-900" href="#">
                        <i class="mr-1 text-indigo-700 fad fa-dot-circle"></i>
                        Custom Work
                    </a>
                </li>


                <li>
                    <a class="text-left text-gray-800 bg-white btn hover:bg-gray-100 hover:text-gray-900" href="#">
                        <i class="mr-1 text-gray-700 fad fa-dot-circle"></i>
                        Important
                    </a>
                </li>


                <li>
                    <a class="text-left text-gray-800 bg-white btn hover:bg-gray-100 hover:text-gray-900" href="#">
                        <i class="mr-1 text-green-700 fad fa-dot-circle"></i>
                        work
                    </a>
                </li>


                <li>
                    <a class="text-left text-gray-800 bg-white btn hover:bg-gray-100 hover:text-gray-900" href="#">
                        <i class="mr-1 text-yellow-700 fad fa-dot-circle"></i>
                        design
                    </a>
                </li>


                <li>
                    <a class="text-left text-gray-800 bg-white btn hover:bg-gray-100 hover:text-gray-900" href="#">
                        <i class="mr-1 text-red-700 fad fa-dot-circle"></i>
                        laravel
                    </a>
                </li>

                <li>
                    <a class="text-left text-gray-800 bg-white btn hover:bg-gray-100 hover:text-gray-900" href="#">
                        <i class="mr-1 text-teal-800 fad fa-dot-circle"></i>
                        add new label
                    </a>
                </li>

            </ul>

        </div>
        <div class="flex flex-col col-span-6 card">

            <div class="px-3 border-b">
                <form action="" class="flex">
                    <input class="flex-1 p-3" type="text" placeholder="search">
                    <button type="submit" class="p-3">
                        <i class="fad fa-search"></i>
                    </button>
                </form>
            </div>

            <div class="flex flex-col flex-1">

                <!-- message -->
                <div class="flex items-center p-5 transition-all duration-300 ease-in-out shadow-xs hover:shadow-md">
                    <div class="w-10 h-10 overflow-hidden rounded-md">
                        <img class="img-responsive" src="img/user1.jpg" alt="">
                    </div>
                    <h1 class="ml-3">mohamed</h1>
                    <p class="flex-1 ml-6 text-xs">page when looking at its layout looking at its layout The point of using
                        Lorem...</p>
                    <p class="font-bold text-gray-900">05:09 AM</p>
                </div>
                <!-- message -->
                <!-- message -->
                <div class="flex items-center p-5 transition-all duration-300 ease-in-out shadow-xs hover:shadow-md">
                    <div class="w-10 h-10 overflow-hidden rounded-md">
                        <img class="img-responsive" src="img/user1.jpg" alt="">
                    </div>
                    <h1 class="ml-3">mohamed</h1>
                    <p class="flex-1 ml-6 text-xs">page when looking at its layout looking at its layout The point of using
                        Lorem...</p>
                    <p class="font-bold text-gray-900">05:09 AM</p>
                </div>
                <!-- message -->
                <!-- message -->
                <div class="flex items-center p-5 transition-all duration-300 ease-in-out shadow-xs hover:shadow-md">
                    <div class="w-10 h-10 overflow-hidden rounded-md">
                        <img class="img-responsive" src="img/user1.jpg" alt="">
                    </div>
                    <h1 class="ml-3">mohamed</h1>
                    <p class="flex-1 ml-6 text-xs">page when looking at its layout looking at its layout The point of using
                        Lorem...</p>
                    <p class="font-bold text-gray-900">05:09 AM</p>
                </div>
                <!-- message -->
                <!-- message -->
                <div class="flex items-center p-5 transition-all duration-300 ease-in-out shadow-xs hover:shadow-md">
                    <div class="w-10 h-10 overflow-hidden rounded-md">
                        <img class="img-responsive" src="img/user1.jpg" alt="">
                    </div>
                    <h1 class="ml-3">mohamed</h1>
                    <p class="flex-1 ml-6 text-xs">page when looking at its layout looking at its layout The point of using
                        Lorem...</p>
                    <p class="font-bold text-gray-900">05:09 AM</p>
                </div>
                <!-- message -->
                <!-- message -->
                <div class="flex items-center p-5 transition-all duration-300 ease-in-out shadow-xs hover:shadow-md">
                    <div class="w-10 h-10 overflow-hidden rounded-md">
                        <img class="img-responsive" src="img/user1.jpg" alt="">
                    </div>
                    <h1 class="ml-3">mohamed</h1>
                    <p class="flex-1 ml-6 text-xs">page when looking at its layout looking at its layout The point of using
                        Lorem...</p>
                    <p class="font-bold text-gray-900">05:09 AM</p>
                </div>
                <!-- message -->
                <!-- message -->
                <div class="flex items-center p-5 transition-all duration-300 ease-in-out shadow-xs hover:shadow-md">
                    <div class="w-10 h-10 overflow-hidden rounded-md">
                        <img class="img-responsive" src="img/user1.jpg" alt="">
                    </div>
                    <h1 class="ml-3">mohamed</h1>
                    <p class="flex-1 ml-6 text-xs">page when looking at its layout looking at its layout The point of using
                        Lorem...</p>
                    <p class="font-bold text-gray-900">05:09 AM</p>
                </div>
                <!-- message -->
                <!-- message -->
                <div class="flex items-center p-5 transition-all duration-300 ease-in-out shadow-xs hover:shadow-md">
                    <div class="w-10 h-10 overflow-hidden rounded-md">
                        <img class="img-responsive" src="img/user1.jpg" alt="">
                    </div>
                    <h1 class="ml-3">mohamed</h1>
                    <p class="flex-1 ml-6 text-xs">page when looking at its layout looking at its layout The point of using
                        Lorem...</p>
                    <p class="font-bold text-gray-900">05:09 AM</p>
                </div>
                <!-- message -->
                <!-- message -->
                <div class="flex items-center p-5 transition-all duration-300 ease-in-out shadow-xs hover:shadow-md">
                    <div class="w-10 h-10 overflow-hidden rounded-md">
                        <img class="img-responsive" src="img/user1.jpg" alt="">
                    </div>
                    <h1 class="ml-3">mohamed</h1>
                    <p class="flex-1 ml-6 text-xs">page when looking at its layout looking at its layout The point of using
                        Lorem...</p>
                    <p class="font-bold text-gray-900">05:09 AM</p>
                </div>
                <!-- message -->
                <!-- message -->
                <div class="flex items-center p-5 transition-all duration-300 ease-in-out shadow-xs hover:shadow-md">
                    <div class="w-10 h-10 overflow-hidden rounded-md">
                        <img class="img-responsive" src="img/user1.jpg" alt="">
                    </div>
                    <h1 class="ml-3">mohamed</h1>
                    <p class="flex-1 ml-6 text-xs">page when looking at its layout looking at its layout The point of using
                        Lorem...</p>
                    <p class="font-bold text-gray-900">05:09 AM</p>
                </div>
                <!-- message -->

            </div>

            <div class="flex justify-between card-footer">
                <p>4.41 GB (25%) of 17 GB used Manage</p>
                <p>Last account activity: 36 minutes ago</p>
            </div>
        </div>

    </div>
@endsection
