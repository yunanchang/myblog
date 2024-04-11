@extends('layouts/app')

@section('main')
<body>
    <h1>about0432</h1>
    {{ $name }}
    {{-- {{!!$js!!}} --}}
    {{-- @unless (true) --}}
    {{-- @if (true)
    123
    @else
    456
    @endif --}}
    @if (count($heroes) > 0)
        @foreach ($heroes as $hero)
            @if ($loop->even)
                <li>
                    <strong>* {{ $hero }}*</strong>
                </li>
            @else
                <li>
                    {{ $hero }}
                </li>
                @endif
            @endforeach
        @endif


</body>
@endsection
<h1>h1</h1>