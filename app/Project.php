<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Mail\ProjectCreated;

class Project extends Model
{
    // protected $fillable = [
    //     'title', 'description'
    // ];
    protected $guarded = [];

    // protected $guarded = [];

    protected static function boot() {
        parent::boot();
        static::created(function ($project) {
            \Mail::to($project->owner->email)->send(new ProjectCreated($project));
        });
    }

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
