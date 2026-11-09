<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Tasks</title>
</head>
<body>
    <h1>All Tasks (Ordered by Date)</h1>
    <ul>
        @foreach($tasks as $task)
            <li>[{{ $task->task_date }}] <strong>{{ $task->title }}</strong> - Status: {{ $task->status }}</li>
        @endforeach
    </ul>
    <hr>
    <a href="/">Home</a> | <a href="/tasks">All Tasks</a> | <a href="/profile">Profile</a> | <a href="/about">About</a>
</body>
</html>