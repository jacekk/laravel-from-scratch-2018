@extends('layout')
@section('title', 'Projects | Create')
@section('content')
<h3 class="title">Creating project</h3>

<form method="POST" action="/projects">
    @csrf
    <div class="field">
        <label for="title" class="label">Title</label>
        <div class="control">
            <input class="input" autocomplete="off" type="text" name="title" placeholder="Project title" value="{{ old('title') }}">
        </div>
    </div>
    <div class="field">
        <label for="description" class="label">Description</label>
        <div class="control">
            <textarea class="textarea" name="description" placeholder="Project description">{{ old('description') }}</textarea>
        </div>
    </div>
    <div class="field is-grouped">
        <div class="control">
            <a href="/projects" class="button">Go to list</a>
        </div>
        <div class="control">
            <button class="button is-primary" type="submit">Create</button>
        </div>
    </div>
    @if($errors->any())
    <div class="field">
        <div class="notification is-danger">
            <ul>
                @foreach($errors->all() as $item)
                <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
</form>
@endsection
