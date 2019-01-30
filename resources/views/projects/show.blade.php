@extends('projectslayout')

@section('content')

    <h2>{{ $project->title }}</h2>
    <p>{{ $project->description }}</p>

    <a href="/projects/{{ $project->id }}/edit">Edit</a>

    
    @if($project->tasks->count())
        <div>
            @foreach ($project->tasks as $task)

                <form action="/completed-tasks/{{ $task->id }}" method="POST">
                    @if ($task->completed)
                        @method('DELETE')
                    @endif
                    @csrf
                    <div class="{{ $task->completed ? 'is-completed' : '' }}">
                        <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                        {{ $task->description }}
                    </div>
                </form>

            @endforeach
        </div>
    @endif

    <form action="/projects/{{ $project->id }}/tasks" method="post">
        @csrf
        <input type="text" name="description">
        <input type="submit" value="Add Task">
    </form>

    @include ('errors')

@endsection
