<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Perpustakaan')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css">

    <!-- Optional: Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center py-10">
    <div class="w-full max-w-5xl bg-white shadow-xl rounded-2xl p-8">
        <!-- Header -->
        <header class="mb-6 border-b pb-4">
            <h1 class="text-3xl font-semibold text-gray-800">@yield('title')</h1>
        </header>

        <!-- Content -->
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
