<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tasks For Today</title>
</head>
<body>
    <h1>Welcome - Today's Tasks</h1>
    <ul>
        @forelse($tasks as $task)
            <li><strong>{{ $task->title }}</strong> (Status: {{ $task->status }}) - Date: {{ $task->task_date }}</li>
        @empty
            <li>No tasks scheduled for today.</li>
        @endforelse
    </ul>
    <hr>
    <a href="/">Home</a> | <a href="/tasks">All Tasks</a> | <a href="/profile">Profile</a> | <a href="/about">About</a>
</body>
</html>