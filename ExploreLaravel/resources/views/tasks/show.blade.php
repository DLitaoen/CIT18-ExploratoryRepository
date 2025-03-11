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
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
    <script src="{{ asset('resources/js/app.js') }}" defer></script>

    {{-- Vanilla CSS --}}
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        /* h1, h2, h3, h4, h5, h6 {
            font-weight: 700;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 3px 10px;
        } */
    </style>
    <title>View Task</title>
</head>
<body>
    <h1 class="font-black text-3xl text-center mt-8 mb-4">Task Details</h1>

    <div class="max-w-md mx-auto p-4">
        <div class="max-w-md mx-auto p-4 border rounded-lg shadow focus:shadow-outline">
            <p class="mb-2">
                <strong class="font-bold">Title:</strong> {{ $task->title }}
            </p>
            <p class="mb-2">
                <strong class="font-bold">Description:</strong> {{ $task->description }}
            </p>
            <p class="mb-4">
                <strong class="font-bold">Status:</strong> <span class="p-1 px-2 text-center {{ $task->is_completed ? 'font-medium text-green-500' : 'font-medium text-yellow-500' }}">
                    {{ $task->is_completed ? 'Completed' : 'Pending' }}
                </span>
            </p>
        </div>
    
        <a href="{{ route('tasks.index') }}" class="mt-8 inline-block bg-green-500 hover:bg-green-600 transition text-white font-semibold py-1 px-2 rounded">
            <i class="fas fa-arrow-left mr-1"></i>Back to List
        </a>
    </div>
</body>
</html>