@extends('layouts.app')

@section('content')

    <h1>Create a Project</h1>
    <form method="POST" action="/projects">

        @csrf

        <h1 class="heading is-1">Create a Project</h1>

        <div class="field">
            <label class="label" for="title"></label>

            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title">
            </div>
        </div>
        <div class="field">
            <label class="label" for="description">Description</label>
        </div>

        <div class="control">
            <textarea name="" class="textarea"></textarea>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
                <a href="/projects">Cancel</a>
            </div>
        </div>
    </form>
    
@endsection