<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--[ Favicon]-->
    <title>@yield('page-title')</title>
    <!--[ STYLES]-->
    @include('layout.style')
    @yield('custom-style')
</head>

<body class="qboat admin" data-qboat="theme-DodgerBlue">
    <!--[ Start:: main sidebar menu link ]-->
    @include('layout.navigation')
    <!--[ End:: main sidebar menu link ]-->
    <div class="page order-2 flex-grow-1">
        <!--[ Start:: page header link ]-->
        @include('layout.header')
        <!--[ End:: page header link ]-->
        <!--[ Start:: page content link ]-->
        @yield('page-content')
        <!--[ End:: page content link ]-->

        <!--[ Start:: main footer link ]-->
        @include('layout.footer')
        <!--[ End:: main footer menu link ]-->
    </div>

    <!--[ Start:: main modals link ]-->
    @include('layout.modals')
    <!--[ End:: main modals menu link ]-->

    <!--[ SCRIPTS]-->
    @include('layout.script')
    <script>
        $(document).ready(function() {
            $('.my_data_table').addClass('nowrap').dataTable({
                responsive: true,
            });
        });
    </script>
    @yield('custom-script')
    @stack('scripts')
</body>

</html>
