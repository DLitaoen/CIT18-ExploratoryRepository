<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700" rel="stylesheet">

    <!-- Tailwind CSS -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: 700;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 3px 10px;
        }
    </style>

    <title>Task CRUD</title>
</head>
<body>
    <h1>Task CRUD</h1>
    <p>This page was made to show an example of CRUD operations for Laravel.</p>
    <br>
    <h2>Tasks List</h2>
    <a href="{{ route('tasks.create') }}">Create Task</a>
    <br> <br>

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {{-- Check if task list is empty, display msg --}}
            @if ($tasks -> isEmpty())
            <tr>
                <td colspan="4">There are no current tasks. Please create a task.</td>
            </tr>

            {{-- If task list is not empty, display tasks --}}
            @else
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task -> title }}</td>
                        <td>{{ $task -> description }}</td>
                        <td>{{ $task -> is_completed ? 'Completed' : 'Pending' }}</td>
                        <td>
                            {{-- Actions Options --}}
                            <a href="{{ route('tasks.show', $task -> id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('tasks.edit', $task -> id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('tasks.destroy', $task -> id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background: none; border: none; padding: 0; color: blue; text-decoration: underline; cursor: pointer; font-size: medium;" onclick="return confirm('Are you sure you want to delete this task?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</body>
</html>