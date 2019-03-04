@extends('layout')
@section('title', 'Projects | Create')
@section('content')
<h3 class="title">Editing project</h3>

<form method="POST" action="/projects/{{ $project->id }}">
    @csrf @method('patch')
    <div class="field">
        <label for="title" class="label">Title</label>
        <div class="control">
            <input class="input" type="text" autocomplete="off" name="title" placeholder="Project title" value="{{ $project->title }}">
        </div>
    </div>
    <div class="field">
        <label for="description" class="label">Description</label>
        <div class="control">
            <textarea class="textarea" name="description" placeholder="Project description">{{ $project->description }}</textarea>
        </div>
    </div>
    <div class="field">
        <a href="/projects/{{ $project->id }}" class="button ">Cancel</a>
        <button class="button is-pulled-right is-primary" type="submit">Save</button>
    </div>
    @if ($errors->any())
    <div class="field">
        <div class="notification is-danger">
            <ul>
                @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
</form>
<br/>
<form method="POST" action="/projects/{{ $project->id }}">
    @csrf @method('delete')
    <div class="field">
        <div class="control">
            <button class="button is-danger is-pulled-right">Delete</button>
        </div>
    </div>
</form>
@endsection
