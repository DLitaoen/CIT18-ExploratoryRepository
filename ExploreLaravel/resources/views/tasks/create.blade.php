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
    </style>

    <title>Create Task</title>
</head>
<body class="font-poppins bg-gray-25">
    <h1 class="font-black text-3xl text-center mt-8 mb-4">Create Task</h1>

    <form action="{{ route('tasks.store') }}" method="POST" class="max-w-md mx-auto">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-md font-bold mb-2">Title:</label>
            <input type="text" name="title" id="title" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-6">
            <label for="description" class="block text-md font-bold mb-2">Description:</label>
            <textarea name="description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"></textarea>
        </div>
        <button type="submit" class="inline-block bg-blue-400 hover:bg-blue-500 transition text-white font-semibold py-1 px-2 rounded">
            <i class="fas fa-plus mr-1"></i>Create
        </button>
        <a href="{{ route('tasks.index') }}" class="inline-block bg-red-400 hover:bg-red-500 transition text-white font-semibold py-1 px-2 rounded ml-2">
            <i class="fas fa-times mr-1"></i>Cancel
        </a>
    </form>
</body>
</html>