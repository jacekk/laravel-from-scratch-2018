<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description', 'owner_id'];

    public function tasks() {
        return $this->hasMany(Task::class);
    }

    public function owner() {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function addTask($taskAttrs) {
        $this->tasks()->create($taskAttrs);
    }
}
