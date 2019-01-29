@extends('projectslayout')

@section('content')
    <h1>Create project</h1>

    <form action="/projects" method="post">
        @csrf
        <div>
            <input type="text" name="title" placeholder="project name">
        </div>
        <div>
            <textarea name="description" placeholder="project description" cols="30" rows="10"></textarea>
        </div>
        <div>
            <button type="submit">Create Project</button>
        </div>
    </form>

@endsection
