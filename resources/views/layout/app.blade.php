<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    {{--    @stack('styles')--}}

</head>
<body>
@include('layout.header')
<div class="container">
    <div class="contents">
        @yield('appContent')
    </div>
</div>
@include('layout.footer')
</body>
</html>
