<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learnsphere</title>
    @include('front.layout.head-css')
</head>

<body>
    @include('Admin.layouts.admin_sidebar')
    @include('Admin.layouts.topbar')
    @yield('Contents')
    @include('front.layout.script')
</body>

</html>
