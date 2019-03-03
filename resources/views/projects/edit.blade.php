@extends('layout')

@section('title', 'Projects | Create')

@section('content')
    <h3 class="title">Editing project:</h3>

    <form method="POST" action="/projects/{{ $project->id }}">
        @csrf
        <div class="field">
            <label for="title" class="label">Title</label>
            <div class="control">
                <input class="input" type="text" name="title" placeholder="Project title">
            </div>
        </div>

        <div class="field">
            <label for="description" class="label">Description</label>
            <div class="control">
                <textarea class="textarea" name="description" placeholder="Project description" ></textarea>
            </div>
        </div>

        <div class="field is-grouped">
            <div class="control">
                <a href="/projects" class="button">Go to list</a>
            </div>
            <div class="control">
                <button class="button is-primary" type="submit">Save</button>
            </div>
        </div>
    </form>
@endsection