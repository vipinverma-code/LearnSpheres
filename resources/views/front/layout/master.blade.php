<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learnsphere</title>
    <div class="tiny-slider arrow-round arrow-blur arrow-hover mt-4">

    @include('front.layout.head-css')

</head>
<body>
    @include('front.layout.header')

    @yield('content')

    @include('front.layout.footer')
    @include('front.layout.script')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

     
</body>
</html>
