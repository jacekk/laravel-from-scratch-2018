@extends('layout')

@section('title', $project->title)

@section('content')
    <h3 class="title">Project:</h3>
    <pre>@json($project)</pre>
@endsection
