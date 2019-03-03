@extends('layout')

@section('title', 'Projects')

@section('content')
    <h3>Projects:</h3>

    <ul>
        @foreach ($projects as $project)
            <li>{{ $project->title }}</li>
        @endforeach
    </ul>

    <p>
        <a href="/projects/create">Add a project</a>
    </p>
@endsection
