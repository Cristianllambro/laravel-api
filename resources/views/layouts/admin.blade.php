<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'BooleanPost')}} | @yield('pageTitle')</title>
    <script src="{{ asset('js/frontOffice.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <x-navbar />
        @yield('content')
        @include('partials.footer')
    </div>
</body>
</html>