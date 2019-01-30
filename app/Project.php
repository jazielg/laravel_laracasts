<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'description'
    ];

    // protected $guarded = [];

    public function tasks() {
        return $this->hasMany(Task::class);
    }

    public function addTask($task) {

        // metodo 3
        $this->tasks()->create($task);

        // Metodo 2
        // Task::create([
        //     'project_id' => $this->id,
        //     'description' => $description
        // ]);
    }
}
