<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Task;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Exactly one user record
        User::create([
            'username' => 'xisferareza',
            'full_name' => 'Xielef Ferareza',
            'email' => 'xisferareza@gmail.com',
        ]);

        // At least 8 tasks spanning at least 3 different dates (Today, Yesterday, Tomorrow)
        Task::insert([
            ['title' => 'Design Laravel migration schema', 'status' => 'pending', 'task_date' => Carbon::today(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Build Eloquent models and controllers', 'status' => 'pending', 'task_date' => Carbon::today(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Setup project database environment', 'status' => 'pending', 'task_date' => Carbon::yesterday(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Configure database seeders', 'status' => 'pending', 'task_date' => Carbon::yesterday(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Draft project repository structure', 'status' => 'pending', 'task_date' => Carbon::yesterday(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Design distinct Blade templates', 'status' => 'pending', 'task_date' => Carbon::tomorrow(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Prepare GitHub repository and README', 'status' => 'pending', 'task_date' => Carbon::tomorrow(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Deploy application to live hosting', 'status' => 'pending', 'task_date' => Carbon::tomorrow(), 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
