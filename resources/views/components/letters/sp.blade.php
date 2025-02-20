<!-- Surat Pengantar -->
<div x-data="{ open: false }" class="mb-4">
    <button @click="open = !open"
        class="w-full px-6 py-3 text-left border-2 rounded-lg flex justify-between items-center hover:bg-gray-200 transition-all duration-300">
        <span class="text-xl font-semibold">SURAT PENGANTAR</span>
        <svg :class="{ 'rotate-90': open }" class="w-6 h-6 transition-transform" fill="none"
            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
        </svg>
    </button>
    <div x-show="open" x-transition class="mt-4 p-4 w-full max-w-2xl">
        <input type="text" id="nikSP" placeholder="NIK"
            class="w-full p-3 border-2 rounded-md mb-3 transition-all duration-300 focus:ring-green-950"
            required>
        <input type="text" id="namaSP" placeholder="Nama Lengkap"
            class="w-full p-3 border-2 rounded-md mb-3 transition-all duration-300 focus:ring-green-950"
            required>
        <input type="text" id="tempatLahirSP" placeholder="Tempat Lahir"
            class="w-full p-3 border-2 rounded-md mb-4 transition-all duration-300 focus:ring-green-950"
            required>
        <input type="text" id="tanggalLahirSP"
            class="w-full p-4 border-2 rounded-md mb-4 transition-all duration-300 focus:ring-green-950"
            placeholder="Tanggal Lahir" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'"
            required>
        <select id="jenisKelaminSP"
            class="w-full p-3 border-2 rounded-md mb-3 transition-all duration-300 focus:ring-green-950"
            required>
            <option value="">-- Pilih Jenis Kelamin --</option>
            <option value="Laki - Laki">Laki - Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <select id="statusKawinSP"
            class="w-full p-3 border-2 rounded-md mb-3 transition-all duration-300 focus:ring-green-950"
            required>
            <option value="">-- Pilih Status Kawin --</option>
            <option value="Belum Kawin">Belum Kawin</option>
            <option value="Kawin">Kawin</option>
            <option value="Cerai Hidup">Cerai Hidup</option>
            <option value="Cerai Mati">Cerai Mati</option>
        </select>
        <input type="text" id="alamatSP" placeholder="Alamat"
            class="w-full p-3 border-2 rounded-md mb-3 transition-all duration-300 focus:ring-green-950"
            required>
        <p class="text-sm mb-4 text-gray-500 italic">*Sesuai KTP</p>
        <input type="text" id="keperluanSP" placeholder="Keperluan"
            class="w-full p-3 border-2 rounded-md mb-3 transition-all duration-300 focus:ring-green-950"
            required>
        <input type="text" id="tanggalPengajuanSP"
            class="w-full p-4 border-2 rounded-md transition-all duration-300 focus:ring-green-950"
            placeholder="Tanggal Pengajuan" onfocus="(this.type='date')"
            onblur="if(!this.value)this.type='text'" required>
        <div class="flex justify-end">
            <button id="btnBuatSuratPengantar"
                class="bg-white text-emerald-500 p-2 px-3 text-xl font-semibold rounded-lg shadow-md border-2 border-gray-300 hover:bg-gray-300">
                Buat Surat
            </button>
        </div>
    </div>
</div>
