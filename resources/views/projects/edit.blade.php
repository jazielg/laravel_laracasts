@extends('projectslayout')

@section('content')

    <h1>Edit Project</h1>

    <form action="/projects/{{ $project->id }}" method="post">
        @method('PATCH')
        @csrf
        <div>
            <input type="text" name="title" value="{{ $project->title }}">
        </div>
        <div>
            <textarea name="description" cols="30" rows="10">{{ $project->description }}</textarea>
        </div>
        <div>
            <button type="submit">Update Project</button>
        </div>
    </form>

    <form action="/projects/{{ $project->id }}" method="post">
        @method('DELETE')
        @csrf
        <div>
            <button type="submit">Delete Project</button>
        </div>
    </form>

@endsection
