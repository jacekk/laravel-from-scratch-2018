@extends('layout')

@section('content')
    <h3 class="title">Hello World :)</h3>
    <ul class="list">
        @foreach ($tasks as $task)
            <li class="list-item">{{ $task }}</li>
        @endforeach
    </ul>
@endsection
