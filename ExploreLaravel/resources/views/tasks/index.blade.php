<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Meta Tags --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700" rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Tailwind CSS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Vanilla CSS --}}
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>

    <title>Task CRUD</title>
</head>
<body class="font-poppins bg-gray-25">
    <h1 class="font-black text-5xl text-center mt-8 mb-4">Task CRUD</h1>
    <p class="text-center">This page was made to show an example of CRUD operations for a <a href="https://laravel.com" class="text-red-500 hover:underline">Laravel</a> project.</p>
    <div class="max-w-[1000px] mx-auto mt-12">
        <h2 class="font-bold text-3xl text-center">Tasks List</h2>
        <div class="text-center mt-4">
                <a href="{{ route('tasks.create') }}" class="inline-block bg-blue-400 hover:bg-blue-500 transition text-white font-semibold py-1 px-2 rounded">
                    <i class="fas fa-plus mr-1"></i>Create Task
                </a>
        </div>
        <br> <br>

        <table class="border-collapse border-t border-b w-full">
            <thead>
                <tr>
                    <th class="border-b p-1 px-2 w-1/5 text-xl">Title</th>
                    <th class="border-b p-1 px-2 w-1/3 text-xl">Description</th>
                    <th class="border-b p-1 px-2 w-1/9 text-xl">Status</th>
                    <th class="border-b p-1 px-2 w-1/4 text-xl">Actions</th>
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
                            <td class="p-1 px-2 font-semibold">{{ $task -> title }}</td>
                            <td class="p-1 px-2">{{ $task -> description }}</td>
                            <td class="p-1 px-2 text-center {{ $task->is_completed ? 'font-medium text-green-500' : 'font-medium text-yellow-500' }}">
                                {{ $task->is_completed ? 'Completed' : 'Pending' }}
                            </td>
                            <td class="p-1 px-2 text-center">
                                {{-- Actions Options --}}
                                <a href="{{ route('tasks.show', $task -> id) }}" class="inline-block bg-green-500 hover:bg-green-600 transition text-white font-medium py-1 px-2 rounded">
                                    <i class="fas fa-eye mr-1"></i>View
                                </a>
                                <a href="{{ route('tasks.edit', $task -> id) }}" class="inline-block bg-blue-400 hover:bg-blue-500 transition text-white font-medium py-1 px-2 rounded">
                                    <i class="fas fa-pencil mr-1"></i>Edit
                                </a>
                                <form action="{{ route('tasks.destroy', $task -> id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-block bg-red-400 hover:bg-red-500 transition text-white font-medium py-1 px-2 rounded" onclick="return confirm('Are you sure you want to delete this task?')">
                                        <i class="fas fa-trash mr-1"></i>Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

        {{-- Display Success Message --}}
        @if (session('success'))
            <div class="mt-12 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.15 2.759 3.152a1.2 1.2 0 0 1 0 1.697z"/></svg>
                </span>
            </div>
        @endif
    </div>
</body>
</html>