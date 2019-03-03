@extends('layout')
@section('title', $project->title)
@section('content')
<h3 class="title">Project details:</h3>
<div class="content">
    <h4>Title:</h4>
    <p>{{ $project->title }}</p>
    <h4>Description:</h4>
    <p>{{ $project->description }}</p>
</div>
<div>
    <a class="button is-link" href="/projects/{{ $project->id }}/edit">Edit</a>
</div>
@endsection
