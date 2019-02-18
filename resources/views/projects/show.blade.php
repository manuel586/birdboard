@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between items-end w-full">
            <p class="text-grey text-sm font-normal">
               <a href="/projects" class="text-grey text-sm font-normal no-underline">My Projects</a> / {{ $Project->title }}
            </p>
            <a href="/projects/create" class="text-grey no-underline">New Project</a>
        </div>
    </header>

    <main>
        <div class="lg:flex -mx-3">
            <div class="lg:w-3/4 px-3 mb-6">
                <div class="mb-8">
                    <h2 class="text-grey text-lg font-normal mb-3">Tasks</h2>
                    {{-- tasks --}}
                    <div class="card mb-3">Lorem Ipsum</div>
                    <div class="card mb-3">Lorem Ipsum</div>
                    <div class="card mb-3">Lorem Ipsum</div>
                    <div class="card">Lorem Ipsum</div>
                </div>
                <div>
                    <h2 class="text-grey text-lg font-normal mb-3">General Notes</h2>
                    {{-- general notes --}}

                    <textarea class="card w-full" style="min-height: 200px">Lorem Ipsum.</textarea>
                </div>
            </div>
            <div class="lg:w-1/4 px-3">
                <div class="w-1/3 px-3 pb-6">
                    @include ('projects.card')
                </div>
            </div>
        </div>
    </main>

    

@endsection