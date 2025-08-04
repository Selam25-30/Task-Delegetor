<!DOCTYPE html>
<html>
<head>
    <title>Task Delegator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">Task Delegator</a>
            <div class="navbar-nav">
                <a class="nav-link" href="/">Home</a>
                <a class="nav-link" href="/tasks">Tasks</a>
                <a class="nav-link" href="/tasks/create">Create Task</a>
                <a class="nav-link" href="/users">Users</a>
                <a class="nav-link" href="/users/create">Add User</a>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>
