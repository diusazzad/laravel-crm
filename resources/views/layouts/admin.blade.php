<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('template/src/css/satoshi.css') }}">
    <link rel="stylesheet" href="{{ asset('template/src/css/style.css') }}">

    <script src="{{ asset('template/src/js/components/chart-01.js') }}"></script>
    <script src="{{ asset('template/src/js/components/chart-02.js') }}"></script>
    <script src="{{ asset('template/src/js/components/chart-03.js') }}"></script>
    <script src="{{ asset('template/src/js/components/chart-04.js') }}"></script>
    <script src="{{ asset('template/src/js/components/map-01.js') }}"></script>


    <script src="{{ asset('template/src/js/index.js') }}"></script>
    <script src="{{ asset('template/src/js/us-aea-en.js') }}"></script>


    <script src="{{ asset('build/assets/app-550d0007.css') }}"></script>
    <script src="{{ asset('build/assets/app-63bb58ea.js') }}"></script>

    <script src="//unpkg.com/alpinejs" defer></script>
 

</head>

<body>
    {{-- x-data="{ page: 'ecommerce', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
    $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{ 'dark text-bodydark bg-boxdark-2': darkMode === true }"
    > --}}
    <!-- ===== Preloader Start ===== -->
    {{-- @include('partials.preloader') --}}
    <!-- ===== Preloader End ===== -->

    <!-- ===== Page Wrapper Start ===== -->
    <div class="flex h-screen overflow-hidden">
        <!-- ===== Sidebar Start ===== -->
        @include('partials.sidebar')
        <!-- ===== Sidebar End ===== -->

        <!-- ===== Content Area Start ===== -->
        <div class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto">
            <!-- ===== Header Start ===== -->
            {{-- @include('partials.header') --}}
            <!-- ===== Header End ===== -->

            <!-- ===== Main Content Start ===== -->
            <main>
                @yield('content')

            </main>
            <!-- ===== Main Content End ===== -->
        </div>
        <!-- ===== Content Area End ===== -->
    </div>
    <!-- ===== Page Wrapper End ===== -->
</body>

</html>
