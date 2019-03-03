@extends('layout')

@section('title', 'Projects')

@section('content')
    <h3 class="title">Projects:</h3>

    <div class="list">
        @foreach ($projects as $project)
            <a class="list-item" href="/projects/{{ $project->id }}">
                {{ $project->title }}
            </a>
        @endforeach
    </div>
    <div>
        <a class="button" href="/projects/create">Add a project</a>
    </div>
@endsection
