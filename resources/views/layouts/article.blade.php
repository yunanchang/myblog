<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>it 幫幫忙</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
<main class="m-4 bg-info">
    @if(session()->has('notice'))
    <div class="" style="background-red">
        {{session()->get('notice')}}
    </div>
    @endif
    @yield('main')
</main>

</body>
</html>
