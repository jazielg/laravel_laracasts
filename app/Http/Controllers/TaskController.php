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
        Task::create([
            'project_id' => $project->id,
            'description' => request('description')
        ]);

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
        $task->update(['completed' => request()->has('completed')]);
        return back();
    }

    
    public function destroy(Task $task)
    {
        //
    }
}
