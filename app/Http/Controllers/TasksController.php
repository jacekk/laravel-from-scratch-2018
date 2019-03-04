<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function update(Task $task) {
        $task->update([
            'is_completed' => request()->has('is_completed'),
        ]);

        return back();
    }
}
