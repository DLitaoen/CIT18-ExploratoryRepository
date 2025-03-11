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

    <title>Greet View</title>
</head>
<body class="bg-gradient-to-r from-blue-200 to-green-200 min-h-screen flex flex-col items-center justify-center p-4">
    <h1 class="text-5xl font-extrabold text-blue-700 mb-6 flex items-center">👋 Hello There!</h1>
    <div class="bg-white px-12 py-8 rounded-lg shadow-xl max-w-md w-full text-center">
        <p class="text-lg text-gray-700 mb-4">
            Welcome! This is the 'greet.blade.php' file, now with a touch of magic brought to you by TailwindCSS v4.
        </p>
        <p class="text-md text-gray-500">Do take a peek at the new
            <a href="https://tailwindcss.com" class="font-medium text-blue-600 hover:underline">TailwindCSS</a>
        👀</p>
        <div class="mt-6">
            <a href="/" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded transition-colors">
                <i class="fas fa-star mr-2"></i>Visit the Laravel Home Instead<i class="fas fa-star ml-2"></i>
            </a>
        </div>
    </div>
</body>
</html>