<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Akun</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-gray-900 via-blue-800 to-gray-600 h-screen flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-4xl h-[80vh] overflow-y-auto">
        <div class="text-center">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Tambah Akun</h1>
            <p class="text-gray-600 mb-6">Isi form di bawah ini.</p>
        </div>

        <form action="" method="POST" class="space-y-4">
            <div>
                <label for="id" class="block text-sm font-medium text-gray-700 mb-1">ID</label>
                <input type="text" id="id" name="id" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Masukkan id">
            </div>
            <div>
                <label for="cabang" class="block text-sm font-medium text-gray-700 mb-1">Cabang</label>
                <input type="text" id="cabang" name="cabang" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Masukkan cabang">
            </div>
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
                <input type="text" id="nama" name="nama" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Masukkan nama lengkap">
            </div>
            <div>
                <label for="role" class="block text-sm font-medium text-gray-700 mb-1">Role</label>
                <input type="text" id="role" name="role" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Masukkan role">
            </div>
            <div>
                <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                <input type="text" id="status" name="status" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Masukkan status">
            </div>

            <button type="submit"
                class="block w-full text-center bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-800 text-white font-semibold py-3 rounded-lg shadow-md transition duration-200">
                Tambah
            </button>
        </form>
    </div>
</body>

</html>
