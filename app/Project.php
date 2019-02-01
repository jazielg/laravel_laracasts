<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Events\ProjectCreated;

class Project extends Model
{
    // protected $fillable = [
    //     'title', 'description'
    // ];
    protected $guarded = [];

    // protected $guarded = [];

    protected $dispatchesEvents = [
        'created' => ProjectCreated::class
    ];

    public function owner() {
        return $this->belongsTo(User::class);
    }

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
