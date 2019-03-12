@extends('layout')
@section('title', $project->title)
@section('content')
<h3 class="title">Project details</h3>
<div class="content">
    <h4>Title:</h4>
    <p>{{ $project->title }}</p>
    @if($project->owner_id !== Auth::id())
        <h4>Author:</h4>
        <p>{{ $project->owner->name }}</p>
    @endif
    <h4>Description:</h4>
    <p>{!! nl2br(e($project->description)) !!}</p>
    <h4>Tasks:</h4>
    <div class="list">
        @forelse($project->tasks as $task)
            <div class="list-item">
                <form method="post" action="/tasks/{{ $task->id }}">
                    @csrf
                    @method('patch')
                    <label
                        class="checkbox @if($task->is_completed) has-text-grey-light @endif"
                        for="is_completed"
                    >
                        <input
                            type="checkbox"
                            name="is_completed"
                            onchange="this.form.submit()"
                            @if($task->is_completed) checked @endif
                        >
                        {{ $task->description }}
                    </label>
                </form>
            </div>
        @empty
            <div class="notification">No tasks yet.</div>
        @endforelse
    </div>
</div>
<form action="/projects/{{ $project->id }}/tasks" method="POST">
    @csrf
    <div class="field has-addons">
        <div class="control">
            <input
                autocomplete="off"
                class="input"
                name="description"
                placeholder="New Task"
                type="text"
                value="{{ old('description') }}"
            />
        </div>
        <div class="control">
            <button type="submit" class="button">Add Task</button>
        </div>
    </div>
    @include('errors')
</form>
<br>
<div class="buttons has-addons">
    <a href="/projects" class="button">Go to list</a>
    <a class="button is-link" href="/projects/{{ $project->id }}/edit">Edit</a>
</div>
@endsection
