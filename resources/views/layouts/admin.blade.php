<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('dist/img/fav.png') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
    <title>Welcome To Cleopatra</title>

</head>

<body class="bg-gray-100">
    <!-- start navbar -->
    <x-admin.navbar.nav />

    <!-- end navbar -->

    <!-- strat wrapper -->
    <div class="flex flex-row flex-wrap h-screen">
        <!-- start sidebar -->
        <x-admin.sidebar.side />

        <!-- end sidbar -->

        <!-- strat content -->
        @yield('content')

    </div>
    <!-- end wrapper -->

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="js/scripts.js"></script>
    <!-- end script -->
</body>
<script src="{{ asset('dist/js/scripts.js') }}"></script>

</html>
