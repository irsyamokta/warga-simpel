@extends('index')
<section class="bg-transparent flex items-center justify-center min-h-screen">
    <x-header />
    <div class="backdrop-blur-md p-6 text-center w-full max-w-xl pt-20">
        <h2 class="text-6xl font-bold text-green-800 mb-6">PROFIL AKUN</h2>
        <form id="profileForm" action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data"
            class="space-y-4">
            @csrf
            <div class="relative w-24 h-24 mx-auto mb-6">
                <img id="profileImage"
                    src="{{ $user->image ? asset('storage/' . $user->image) : asset('images/default.png') }}"
                    class="w-24 h-24 rounded-full border-4 border-green-950 shadow-md object-cover">
                <input type="file" id="imageUpload" name="image" accept="image/*" class="hidden"
                    onchange="previewImage(event)">
                <img src="{{ asset('images/add.png') }}" class="absolute bottom-0 right-0 w-8 h-8 cursor-pointer"
                    onclick="document.getElementById('imageUpload').click();">
            </div>
            @error('image')
                <p class="text-red-500 text-sm text-center">ukuran gambar tidak boleh lebih dari 10mb!</p>
            @enderror
            <div>
                <input type="text" id="nama" name="nama" placeholder="Nama Pengguna"
                    value="{{ old('name', $user->name) }}"
                    class="w-full px-4 py-2 border border-gray-400 rounded-lg placeholder-gray-700 focus:outline-none focus:ring-2 bg-green-200 focus:ring-emerald-500"
                    disabled>
                <p class="text-sm text-gray-700 text-left">*username</p>
            </div>
            <div>
                <input type="email" id="email" name="email" placeholder="Email"
                    value="{{ old('email', $user->email) }}"
                    class="w-full px-4 py-2 border border-gray-400 rounded-lg placeholder-gray-700 focus:outline-none focus:ring-2 bg-green-200 focus:ring-emerald-500"
                    disabled>
                <p class="text-sm text-gray-700 text-left">*email</p>
            </div>
            <div>
                <input type="text" id="nik" name="nik" placeholder="NIK"
                    value="{{ old('nik', $user->nik) }}"
                    class="w-full px-4 py-2 border border-gray-400 rounded-lg placeholder-gray-700 focus:outline-none focus:ring-2 bg-green-200 focus:ring-emerald-500">
                @error('nik')
                    <p class="text-red-500 text-sm text-left">nik harus berjumlah 16 angka</p>
                @enderror
            </div>
            <div>
                <input type="text" id="namaLengkap" name="namaLengkap" placeholder="Nama Lengkap"
                    value="{{ old('namaLengkap', $user->nama_lengkap) }}"
                    class="w-full px-4 py-2 border border-gray-400 rounded-lg placeholder-gray-700 focus:outline-none focus:ring-2 bg-green-200 focus:ring-emerald-500">
            </div>
            <div>
                <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir"
                    value="{{ old('tempat_lahir', $user->tempat_lahir) }}"
                    class="w-full px-4 py-2 border border-gray-400 rounded-lg placeholder-gray-700 focus:outline-none focus:ring-2 bg-green-200 focus:ring-emerald-500">
            </div>
            <div>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                    value="{{ old('tanggal_lahir', $user->tanggal_lahir) }}"
                    class="w-full px-4 py-2 border border-gray-400 rounded-lg placeholder-gray-700 focus:outline-none focus:ring-2 bg-green-200 focus:ring-emerald-500">
            </div>
            <div class="relative border-gray-400">
                <select id="jenis_kelamin" name="jenis_kelamin"
                    class="peer w-full px-4 py-2 border border-gray-400 rounded-lg shadow-sm focus:outline-none focus:ring-2 bg-green-200 ocus:ring-emerald-500 text-gray-700">
                    <option value="" disabled>Pilih Jenis Kelamin</option>
                    <option value="Pria" {{ old('jenis_kelamin', $user->jenis_kelamin) == 'Pria' ? 'selected' : '' }}>
                        Pria</option>
                    <option value="Wanita"
                        {{ old('jenis_kelamin', $user->jenis_kelamin) == 'Wanita' ? 'selected' : '' }}>Wanita</option>
                </select>
            </div>
            <div>
                <input type="text" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan"
                    value="{{ old('pekerjaan', $user->pekerjaan) }}"
                    class="w-full px-4 py-2 border border-gray-400 rounded-lg placeholder-gray-700 focus:outline-none focus:ring-2 bg-green-200 focus:ring-emerald-500">
            </div>
            <div>
                <input type="text" id="alamat" name="alamat" placeholder="Alamat"
                    value="{{ old('alamat', $user->alamat) }}"
                    class="w-full px-4 py-2 border border-gray-400 rounded-lg placeholder-gray-700 focus:outline-none focus:ring-2 bg-green-200 focus:ring-emerald-500">
            </div>
            <button type="submit" id="editButton"
                class="bg-white text-emerald-500 w-32 h-12 text-xl font-semibold rounded-lg shadow-lg border-2 hover:bg-gray-300">
                Edit
            </button>
        </form>
        <form action="{{ route('logout') }}" method="POST" class="mt-4">
            @csrf
            <button type="submit"
                class="bg-emerald-500 text-white w-32 h-12 text-xl font-semibold rounded-lg shadow-lg border-2 hover:bg-gray-300">
                Logout
            </button>
        </form>
        <p class="text-grey-300 flex justify-center text-sm mt-10">© 2025 WargaSimpel, Web. All rights reserved.</p>
    </div>
</section>

<!-- Preview Gambar -->
<script>
    function previewImage(event) {
        let file = event.target.files[0];
        if (file) {
            let reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('profileImage').src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    }
</script>

<!-- Tambah Gambar -->
<script>
    function previewImage(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('profileImage').src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    }
</script>
