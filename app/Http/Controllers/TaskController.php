<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;

class TaskController extends Controller
{
    // Welcome page (/) - query and display only tasks where task_date is today
    public function welcome() {
        $tasks = Task::whereDate('task_date', Carbon::today())->get();
        return view('welcome', compact('tasks'));
    }

    // Task List page (/tasks) - display every task, ordered by date
    public function index() {
        $tasks = Task::orderBy('task_date', 'asc')->get();
        return view('tasks', compact('tasks'));
    }

    // Profile page (/profile) - display the single user record
    public function profile() {
        $user = User::first();
        return view('profile', compact('user'));
    }

    // About page (/about) - static page identifying you as the developer
    public function about() {
        return view('about');
    }
}