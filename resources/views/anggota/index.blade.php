<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggota</title>

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css">
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full text-center">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Selamat Datang di Sistem Anggota</h1>

        <a href="{{ route('peminjaman.index') }}"
            class="inline-block px-5 py-3 bg-blue-600 text-white font-semibold rounded hover:bg-blue-700 transition duration-200">
            Lihat Riwayat Peminjaman
        </a>
    </div>
</body>

</html>
