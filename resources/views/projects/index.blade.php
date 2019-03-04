@extends('layout')
@section('title', 'Projects')
@section('content')
<h3 class="title">Projects</h3>

<div class="list">
    @forelse($projects as $project)
        <a class="list-item" href="/projects/{{ $project->id }}">
            {{ $project->title }}
        </a>
    @empty
        <div class="notification is-warning">There are no projects yet.</div>
    @endforelse
</div>
<div>
    <a class="button" href="/projects/create">Add a project</a>
</div>
@endsection
