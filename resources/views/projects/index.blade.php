@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between items-end w-full">
            <h2 class="text-grey text-sm font-normal">My Projects</h2>
            <a href="/projects/create" class="text-grey no-underline">New Project</a>
        </div>
    </header>

    <main class="flex flex-wrap -mx-3">
        @forelse ($projects as $project)
            @include ('projects.card')
        @empty
            <div>No projects yet.</div> 
        @endforelse
        </main>
    
@endsection