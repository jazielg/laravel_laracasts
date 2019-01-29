@extends('projectslayout')

@section('content')
    
    <h1>Projects</h1>

    <ul>
        @foreach ($projects as $project)
            
            <li>
                <a href="/projects/{{ $project->id }}">{{ $project->title }}</a>
            </li>
            
        @endforeach
    </ul>

    <p>
        <a href="/projects/create">Create Project</a>
    </p>

@endsection
