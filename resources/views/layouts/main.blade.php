<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC Comics</title>
    <!--inclusione assets con direttiva vite-->
    @vite('resources/js/app.js')
    <!--/inclusione assets con direttiva vite-->
</head>

<body class="py-5 my-5">
    {{--header--}}
    @include('shared.header')
    {{--/header--}}
    {{--main--}}
    @yield('main')
    {{--/main--}}
    {{--footer--}}
    @include('shared.footer')
    {{--/footer--}}
</body>

</html>