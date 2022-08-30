<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('page_title')</title>
</head>
<body>
    {{-- Header --}}
    @include('partials.header')

    {{-- Main --}}
    <main>
        @yield('main_content')
    </main>
</html>