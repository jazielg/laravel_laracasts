<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

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

    
    public function store(Request $request)
    {
        //
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
