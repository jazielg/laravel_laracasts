<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

use App\Project;

class TaskController extends Controller
{
   
    public function index()
    {
        //
    }

    
    public function create()
    {
        //
    }

    
    public function store(Project $project)
    {
        // Task::create([
        //     'project_id' => $project->id,
        //     'description' => request('description')
        // ]);
        $attributes = request()->validate(['description' => 'required|min:3|max:255']);

        $project->addTask($attributes);

        return back();
    }

   
    public function show(Task $task)
    {
        //
    }

    
    public function edit(Task $task)
    {
        //
    }

    
    public function update(Request $request, Task $task)
    {
        // Metodo 1 - Alterar o valor no controller
        // $task->update(['completed' => request()->has('completed')]);

        // Metodo 2 - Enviar para uma função true ou false
        // $task->complete(request()->has('completed'));

        // Metodo 3 - Enviar para função se true ou enviar para outra função se false.
        // request()->has('completed') ? $task->complete() : $task->incomplete();

        // Metodo 4 - Armazena o nome do metodo na variavel e chama no final
        $method = request()->has('completed') ? 'complete' : 'incomplete';
        $task->$method();

        return back();
    }

    
    public function destroy(Task $task)
    {
        //
    }
}
