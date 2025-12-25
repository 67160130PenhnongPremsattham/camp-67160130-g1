@extends('template.default')

@section('title', 'Multiplication Table')

@section('content')
<div class="container mt-4">
    <h3>สูตรคุณ {{ $num }}</h3>
    <ul>
        @for($i = 1; $i <= 12; $i++)
            <li>
                {{ $num }} x {{ $i }} = {{ $num * $i }}
            </li>
        @endfor
    </ul>
</div>
@endsection
