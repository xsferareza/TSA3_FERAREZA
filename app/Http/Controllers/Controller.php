<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;

class TaskController extends Controller
{
    // Welcome Page: only today's tasks
    public function welcome() {
        $tasks = Task::whereDate('task_date', Carbon::today())->get();
        return view('welcome', compact('tasks'));
    }

    // Task List Page: all tasks ordered by date
    public function index() {
        $tasks = Task::orderBy('task_date', 'asc')->get();
        return view('tasks', compact('tasks'));
    }

    // Profile Page: single user record
    public function profile() {
        $user = User::first();
        return view('profile', compact('user'));
    }

    // About Page: static developer info
    public function about() {
        return view('about');
    }
}