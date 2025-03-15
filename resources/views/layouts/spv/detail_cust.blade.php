<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Customer</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-gray-900 via-blue-800 to-gray-600 h-screen flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-4xl h-[80vh] overflow-y-auto">
        <div class="text-center">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Detail Customer</h1>
            <p class="text-gray-600 mb-6">Isi form di bawah ini.</p>
        </div>

        <form action="" method="POST" class="space-y-4">
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
                <label for="alamat" class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
                <input type="text" id="alamat" name="alamat" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Masukkan alamat">
            </div>
            <div>
                <label for="kelurahan" class="block text-sm font-medium text-gray-700 mb-1">Kelurahan</label>
                <input type="text" id="kelurahan" name="kelurahan" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Masukkan kelurahan">
            </div>
            <div>
                <label for="kecamatan" class="block text-sm font-medium text-gray-700 mb-1">Kecamatan</label>
                <input type="text" id="kecamatan" name="kecamatan" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Masukkan kecamatan">
            </div>
            <div>
                <label for="kota" class="block text-sm font-medium text-gray-700 mb-1">Kota</label>
                <input type="text" id="kota" name="kota" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Masukkan kota">
            </div>
            <div>
                <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Masukkan tanggal lahir">
            </div>
            <div class="mb-5">
                <label for="gender" class="block mb-2 text-sm font-medium text-gray-700 ">Gender</label>
                <select id="gender" name="gender" class="select select-error w-full max-w-xs px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option disabled selected>--Pilih gender--</option>
                    <option value="laki_laki">L</option>
                    <option value="perempuan">P</option>
                </select>
            </div>
            <div>
                <label for="tipe_pelanggan" class="block text-sm font-medium text-gray-700 mb-1">Tipe pelanggan</label>
                <input type="text" id="tipe_pelanggan" name="tipe_pelanggan" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Masukkan tipe pelanggan">
            </div>
            <div>
                <label for="pekerjaan" class="block text-sm font-medium text-gray-700 mb-1">Pekerjaan</label>
                <input type="text" id="pekerjaan" name="pekerjaan" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Masukkan pekerjaan">
            </div>
            <div>
                <label for="tenor" class="block text-sm font-medium text-gray-700 mb-1">Tenor</label>
                <input type="text" id="tenor" name="tenor" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Masukkan tenor">
            </div>
            <div>
                <label for="tgl_gatepass" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Gatepass</label>
                <input type="number" id="tgl_gatepass" name="tgl_gatepass" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Masukkan tanggal gatepass">
            </div>
            <div>
                <label for="jenis kendaraan" class="block text-sm font-medium text-gray-700 mb-1">Jenis Kendaraan</label>
                <input type="text" id="jenis kendaraan" name="jenis kendaraan" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Masukkan jenis kendaraan">
            </div>
            <div>
                <label for="no_hp" class="block text-sm font-medium text-gray-700 mb-1">No. Telepon</label>
                <input type="number" id="no_hp" name="no_hp" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Masukkan no Telepon">
            </div>
            <div>
                <label for="sales" class="block text-sm font-medium text-gray-700 mb-1">Salesman</label>
                <input type="text" id="sales" name="sales" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Masukkan nama sales">
            </div>
            <div class="mb-5">
                <label for="progress" class="block mb-2 text-sm font-medium text-gray-700 ">Progress</label>
                <select id="progress" name="progress" class="select select-error w-full max-w-xs px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option disabled selected>--Pilih progress--</option>
                    <option value="nomor_tidak_valid">Nomor tidak valid</option>
                    <option value="tidak_berminat">Tidak berminat</option>
                    <option value="pending">Pending</option>
                    <option value="spk">SPK</option>
                </select>
            </div>
            <div>
                <label for="alasan" class="block text-sm font-medium text-gray-700 mb-1">Alasan</label>
                <textarea id="alasan" name="alasan" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Masukkan alasan" rows="4"></textarea>
            </div>
        </form>
    </div>
</body>

</html>
