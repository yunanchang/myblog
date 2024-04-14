<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>it 幫幫忙</title>
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
    {{-- @vite('resources/css/app.css') --}}
    {{-- <link rel="stylesheet" href="{{Vite::asset('resources/js/app.js')}}"> --}}
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
</head>

<body>
<main class="m-4 bg-info">
    @yield('main')
</main>
{{-- <script src="{{ Vite::asset('resources/js/app.js')}} "></script> --}}
{{-- <script src="{{asset('js/app.js')}}"></script> --}}
</body>
</html>