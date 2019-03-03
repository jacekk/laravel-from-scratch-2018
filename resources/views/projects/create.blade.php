@extends('layout')

@section('title', 'Projects | Create')

@section('content')
    <h3>Creating project:</h3>

    <form method="POST" action="/projects">
        @csrf
        <div>
            <input type="text" name="title" placeholder="Project title">
        </div>

        <div>
            <textarea name="description" placeholder="Project description" ></textarea>
        </div>

        <div>
            <button type="submit">Create</button>
        </div>
    </form>
@endsection
