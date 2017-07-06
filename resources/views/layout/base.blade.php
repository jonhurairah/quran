<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', config('app.name'))</title>
        {{-- {{ Html::favicon('img/logo.png') }} --}}
        @include('layout.font')
        @yield('style')
    </head>
    <body>
        @yield('content')
    </body>
</html>
