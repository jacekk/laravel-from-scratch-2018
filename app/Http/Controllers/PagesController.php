<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $tasks = [
            'Hit the gym',
            'Prepare post-workout meal',
            'Eat meal',
            'Relax on sauna',
        ];

        return view('welcome', compact('tasks'));
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }
}
