<div id="modal-detail" class="fixed inset-0 bg-white bg-opacity-50 backdrop-blur-sm flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-2xl p-6 max-h-[90vh] overflow-y-auto relative">

        <!-- Tombol Close -->
        <button id="close-modal-detail" class="absolute top-3 right-5 text-gray-600 hover:text-gray-900 text-4xl font-bold">&times;</button>

        <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">Detail Customer</h2>
        <p class="text-gray-600 mb-6 text-center">Isi form di bawah ini.</p>

        <form action="" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="cabang" class="block text-sm font-medium text-gray-700 mb-1">Cabang</label>
                <input type="text" id="cabang" name="cabang" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black"
                    placeholder="Masukkan cabang">
            </div>
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
                <input type="text" id="nama" name="nama" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black"
                    placeholder="Masukkan nama lengkap">
            </div>
            <div>
                <label for="alamat" class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
                <input type="text" id="alamat" name="alamat" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black"
                    placeholder="Masukkan alamat">
            </div>
            <div>
                <label for="kelurahan" class="block text-sm font-medium text-gray-700 mb-1">Kelurahan</label>
                <input type="text" id="kelurahan" name="kelurahan" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black"
                    placeholder="Masukkan kelurahan">
            </div>
            <div>
                <label for="kecamatan" class="block text-sm font-medium text-gray-700 mb-1">Kecamatan</label>
                <input type="text" id="kecamatan" name="kecamatan" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black"
                    placeholder="Masukkan kecamatan">
            </div>
            <div>
                <label for="kota" class="block text-sm font-medium text-gray-700 mb-1">Kota</label>
                <input type="text" id="kota" name="kota" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black"
                    placeholder="Masukkan kota">
            </div>
            <div>
                <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black"
                    placeholder="Masukkan tanggal lahir">
            </div>
            <div>
                <label for="gender" class="block text-sm font-medium text-gray-700 mb-1">Gender</label>
                <select id="gender" name="gender" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black">
                    <option value="" disabled selected>Pilih gender</option>
                    <option value="L">L</option>
                    <option value="P">P</option>
                </select>
            </div>
            <div>
                <label for="tipe_pelanggan" class="block text-sm font-medium text-gray-700 mb-1">Tipe Pelanggan</label>
                <input type="text" id="tipe_pelanggan" name="tipe_pelanggan" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black"
                    placeholder="Masukkan tipe pelanggan">
            </div>
            <div>
                <label for="tenor" class="block text-sm font-medium text-gray-700 mb-1">Tenor</label>
                <input type="text" id="tenor" name="tenor" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black"
                    placeholder="Masukkan tenor">
            </div>
            <div>
                <label for="tgl_gatepass" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Gatepass</label>
                <input type="text" id="tgl_gatepass" name="tgl_gatepass" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black"
                    placeholder="Masukkan tanggal gatepass">
            </div>
            <div>
                <label for="jenis_kendaraan" class="block text-sm font-medium text-gray-700 mb-1">Jenis Kendaraan</label>
                <input type="text" id="jenis_kendaraan" name="jenis_kendaraan" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black"
                    placeholder="Masukkan jenis kendaraan">
            </div>
            <div>
                <label for="no_telp" class="block text-sm font-medium text-gray-700 mb-1">No. Telepon</label>
                <input type="text" id="no_telp" name="no_telp" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black"
                    placeholder="Masukkan no telepon">
            </div>
            <div>
                <label for="sales" class="block text-sm font-medium text-gray-700 mb-1">Salesman</label>
                <input type="text" id="sales" name="sales" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black"
                    placeholder="Masukkan sales">
            </div>
            <div>
                <label for="progress" class="block text-sm font-medium text-gray-700 mb-1">Progress</label>
                <input type="text" id="progress" name="progress" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black"
                    placeholder="Masukkan progress">
            </div>
            <div>
                <label for="alasan" class="block text-sm font-medium text-gray-700 mb-1">Alasan</label>
                <input type="text" id="alasan" name="alasan" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black"
                    placeholder="Masukkan alasan">
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const modal = document.getElementById('modal-detail');
        const openBtn = document.getElementById('button-detail');
        const closeBtn = document.getElementById('close-modal-detail');

        openBtn.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });

        closeBtn.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        window.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.add('hidden');
            }
        });
    });
</script>
