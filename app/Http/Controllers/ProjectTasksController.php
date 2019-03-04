<?php

namespace App\Http\Controllers;

use App\Project;
use App\Task;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    public function store(Project $project) {
        $attrs = request()->validate([
            'description' => ['required', 'min:3'],
        ]);
        $project->addTask($attrs);

        return back();
    }

    public function update(Task $task) {
        $task->update([
            'is_completed' => request()->has('is_completed'),
        ]);

        return back();
    }
}
