@extends('projectslayout')

@section('content')

    <h2>{{ $project->title }}</h2>
    <p>{{ $project->description }}</p>

    <a href="/projects/{{ $project->id }}/edit">Edit</a>

    
    @if($project->tasks->count())
        <div>
            @foreach ($project->tasks as $task)
                <li>{{ $task->description }}</li>
            @endforeach
        </div>
    @endif

@endsection
