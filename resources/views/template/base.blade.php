<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', config('app.name'))</title>
        {{ Html::favicon('img/logo.png') }}
        @include('template.font')
        @yield('style')
        <style>
            html, body {
                font-family: 'Raleway', sans-serif;
                margin: 0;
            }
        </style>
    </head>
    <body>
        @yield('content')
        @yield('script')
    </body>
</html>
