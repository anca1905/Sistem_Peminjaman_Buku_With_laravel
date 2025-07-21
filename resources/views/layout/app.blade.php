<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Perpustakaan')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css">
</head>
<body class="bg-gray-100 p-6">
    <div class="container mx-auto bg-white shadow-md rounded p-6">
        <h1 class="text-2xl font-bold mb-4">@yield('title')</h1>
        @yield('content')
    </div>
</body>
</html>
