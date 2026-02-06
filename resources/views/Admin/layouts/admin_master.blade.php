<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learnsphere</title>
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    @include('front.layout.head-css')
</head>

<body>
    @include('Admin.layouts.admin_sidebar')
    <div class="page-content">
        @include('Admin.layouts.topbar')
        <div class="page-content-wrapper border">
            @yield('Contents')
        </div>
    </div>
    @include('front.layout.script')
    @yield('scripts')
</body>

</html>
