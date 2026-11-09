<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
</head>
<body>
    <h1>User Profile</h1>
    <p><strong>Username:</strong> {{ $user->username }}</p>
    <p><strong>Full Name:</strong> {{ $user->full_name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <hr>
    <a href="/">Home</a> | <a href="/tasks">All Tasks</a> | <a href="/profile">Profile</a> | <a href="/about">About</a>
</body>
</html>