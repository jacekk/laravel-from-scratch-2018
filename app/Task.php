<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['is_completed', 'description', 'project_id'];

    public function project() {
        return $this->belongsTo(Project::class);
    }

    public function complete($isCompleted = true) {
        $this->update([
            'is_completed' => $isCompleted,
        ]);
    }

    public function incomplete() {
        $this->complete(false);
    }
}
