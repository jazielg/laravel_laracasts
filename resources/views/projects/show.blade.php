@extends('projectslayout')

@section('content')

    <h2>{{ $project->title }}</h2>
    <p>{{ $project->description }}</p>

    <a href="/projects/{{ $project->id }}/edit">Edit</a>

@endsection
