@vite('resources/css/app.css')

<div id="modal-edit" class="fixed inset-0 bg-white bg-opacity-50 backdrop-blur-sm flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-2xl p-6 max-h-[90vh] overflow-y-auto relative">

        <!-- Tombol Close -->
        <button id="close-modal-edit" class="btn btn-circle btn-outline hover:bg-blue-100 hover:text-blue-600 transition-all duration-200 rounded-xl ">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-8 w-8"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M15 19l-7-7 7-7" />
            </svg>
        </button>

        <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">Update Data Customer</h2>
        <p class="text-gray-600 mb-6 text-center">Isi form di bawah ini.</p>

        <form id="form-edit" method="POST" action="">
            @csrf
            @method('PUT')
            <div>
                <label for="cabang" class="block text-sm font-medium text-gray-700 mb-1">Cabang</label>
                <select id="cabang" name="cabang" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black">
                    <option value="" disabled selected>-- Pilih --</option>
                    <option value="bandung">TVBGT</option>
                    <option value="jakarta">Jakarta</option>
                    <option value="solo">Solo</option>
                    <option value="bogor">Bogor</option>
                </select>
            </div>
            <div>
                <label for="sales" class="block text-sm font-medium text-gray-700 mb-1">Salesman</label>
                <input type="text" id="sales" name="sales" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black"
                    placeholder="Masukkan sales">
            </div>
            <div>
                <label for="sumber_data" class="block text-sm font-medium text-gray-700 mb-1">Sumber Data</label>
                <input type="text" id="sumber_data" name="sumber_data" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black"
                    placeholder="Masukkan sumber data">
            </div>
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
                <input type="text" id="nama" name="nama" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black"
                    placeholder="Masukkan nama lengkap">
            </div>
            <div>
                <label for="kota" class="block text-sm font-medium text-gray-700 mb-1">Kota</label>
                <input type="text" id="kota" name="kota" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black"
                    placeholder="Masukkan kota">
            </div>
            <div>
                <label for="jenis_kendaraan" class="block text-sm font-medium text-gray-700 mb-1">Jenis Kendaraan</label>
                <input type="text" id="jenis_kendaraan" name="jenis_kendaraan" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black"
                    placeholder="Masukkan jenis kendaraan">
            </div>
            <div>
                <label for="progress" class="block text-sm font-medium text-gray-700 mb-1">Progress</label>
                <select id="progress" name="progress" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black">
                    <option value="" disabled selected>-- Pilih --</option>
                    <option value="spk">SPK</option>
                    <option value="pending">Pending</option>
                    <option value="reject">Reject</option>
                    <option value="no_tdk_aktif">No. tidak aktif</option>
                </select>
            </div>
            <div>
                <label for="alasan" class="block text-sm font-medium text-gray-700 mb-1">Alasan</label>
                <input type="text" id="alasan" name="alasan" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black"
                    placeholder="Masukkan alasan">
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
                <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black"
                    placeholder="Masukkan tanggal lahir">
            </div>
            <div>
                <label for="gender" class="block text-sm font-medium text-gray-700 mb-1">Gender</label>
                <select id="gender" name="gender" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black">
                    <option value="" disabled selected>-- Pilih --</option>
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
                <input type="date" id="tgl_gatepass" name="tgl_gatepass" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black"
                    placeholder="Masukkan tanggal gatepass">
            </div>
            <div>
                <label for="no_telp" class="block text-sm font-medium text-gray-700 mb-1">No. Telepon</label>
                <input type="number" id="no_telp" name="no_telp" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-white text-black"
                    placeholder="Masukkan no telepon">
            </div>
            <button type="submit"
                class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold transition duration-300 ease-in-out hover:bg-blue-700 hover:scale-[1.02] hover:shadow-lg">
                Update
            </button>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const modalEdit = document.getElementById('modal-edit');
    const closeModalEdit = document.getElementById('close-modal-edit');
    const formEdit = document.getElementById('form-edit');

    document.querySelectorAll('.button-edit').forEach(button => {
        button.addEventListener('click', function () {
            const id = this.getAttribute('data-id');
            formEdit.action = `/admin/big_data_admins/${id}`;

            // Isi field seperti biasa
            formEdit.querySelector('[name="cabang"]').value = this.dataset.cabang;
            formEdit.querySelector('[name="sales"]').value = this.dataset.sales;
            formEdit.querySelector('[name="sumber_data"]').value = this.dataset.sumber_data;
            formEdit.querySelector('[name="nama"]').value = this.dataset.nama;
            formEdit.querySelector('[name="kota"]').value = this.dataset.kota;
            formEdit.querySelector('[name="jenis_kendaraan"]').value = this.dataset.jenis_kendaraan;
            formEdit.querySelector('[name="progress"]').value = this.dataset.progress;
            formEdit.querySelector('[name="alasan"]').value = this.dataset.alasan;
            formEdit.querySelector('[name="alamat"]').value = this.dataset.alamat;
            formEdit.querySelector('[name="kelurahan"]').value = this.dataset.kelurahan;
            formEdit.querySelector('[name="kecamatan"]').value = this.dataset.kecamatan;
            formEdit.querySelector('[name="tanggal_lahir"]').value = this.dataset.tanggal_lahir;
            formEdit.querySelector('[name="gender"]').value = this.dataset.gender;
            formEdit.querySelector('[name="tipe_pelanggan"]').value = this.dataset.tipe_pelanggan;
            formEdit.querySelector('[name="tenor"]').value = this.dataset.tenor;
            formEdit.querySelector('[name="tgl_gatepass"]').value = this.dataset.tgl_gatepass;
            formEdit.querySelector('[name="no_telp"]').value = this.dataset.no_telp;

            modalEdit.classList.remove('hidden');
        });
    });

    closeModalEdit.addEventListener('click', function () {
        modalEdit.classList.add('hidden');
    });
});
</script>
