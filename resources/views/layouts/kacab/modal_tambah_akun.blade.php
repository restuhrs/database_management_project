<div id="modal-tambah" class="fixed inset-0 bg-white bg-opacity-50 backdrop-blur-sm flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-2xl p-6 max-h-[90vh] overflow-y-auto relative">

        <!-- Tombol Close -->
        <button id="close-modal" class="absolute top-3 right-5 text-gray-600 hover:text-gray-900 text-4xl font-bold">&times;</button>

        <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">Tambah Akun</h2>
        <p class="text-gray-600 mb-6 text-center">Isi form di bawah ini.</p>

        <form action="" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="id" class="block text-sm font-medium text-gray-700 mb-1">ID</label>
                <input type="text" id="id" name="id" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black"
                    placeholder="Masukkan id">
            </div>
            <div>
                <label for="cabang" class="block text-sm font-medium text-gray-700 mb-1">Cabang</label>
                <select id="cabang" name="cabang" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black">
                    <option value="" disabled selected>-- Pilih --</option>
                    <option value="bandung">Bandung</option>
                    <option value="jakarta">Jakarta</option>
                    <option value="solo">Solo</option>
                    <option value="bogor">Bogor</option>
                </select>
            </div>
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700 mb-1">username</label>
                <input type="text" id="username" name="username" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black"
                    placeholder="Masukkan username">
            </div>
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
                <input type="text" id="nama" name="nama" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black"
                    placeholder="Masukkan nama lengkap">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">password</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black"
                    placeholder="Masukkan password">
            </div>
            <div>
                <label for="role" class="block text-sm font-medium text-gray-700 mb-1">Role</label>
                <select id="role" name="role" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black">
                    <option value="" disabled selected>-- Pilih --</option>
                    <option value="admin">Admin</option>
                    <option value="kacab">Kepala Cabang</option>
                    <option value="spv">Supervisor</option>
                    <option value="sales">Sales</option>
                </select>
            </div>
            <div>
                <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status Akun</label>
                <select id="status" name="status" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black">
                    <option value="" disabled selected>-- Pilih --</option>
                    <option value="iya">aktif</option>
                    <option value="tidak">nonaktif</option>
                </select>
            </div>

            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg font-semibold transition">Tambah</button>
        </form>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const modal = document.getElementById('modal-tambah');
        const openBtn = document.getElementById('button-tambah');
        const closeBtn = document.getElementById('close-modal');

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
