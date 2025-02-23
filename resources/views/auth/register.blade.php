@extends('index')
<section class="bg-green-950 font-inter flex items-center justify-center min-h-screen">
    <div class="p-8 w-full max-w-xl">
        <div class="flex flex-col items-center text-center">
            <img src="{{ asset('images/logobesar.png') }}" alt="Logo" class="w-96 md:w-96 lg:w-96 h-auto">
            <p class="mt-4 text-sm md:text-sm lg:text-sm text-green-200 mb-20">
                Untuk urusan Administrasi, Pelayanan, dan Ekonomi Masyarakat lebih simpel melalui interaksi digital
                Pemerintah Desa dengan Warga
            </p>
        </div>
        <h1 class="text-6xl font-bold text-green-200 text-center mb-10">DAFTAR AKUN</h1>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <strong>Error:</strong> {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-4">
                <input type="email" name="email" placeholder="Email"
                    class="w-full p-2 rounded border placeholder-gray-700 bg-green-200 border-black focus:ring-2 focus:ring-green-500 focus:outline-none"
                    value="{{ old('email') }}">
            </div>
            <div class="mb-4">
                <input type="text" name="name" placeholder="Nama Lengkap"
                    class="w-full p-2 rounded border placeholder-gray-700 bg-green-200 border-black focus:ring-2 focus:ring-green-500 focus:outline-none"
                    value="{{ old('name') }}">
            </div>
            <div class="mb-4 relative">
                <input id="newPassword" type="password" name="password" placeholder="Password"
                    class="w-full p-2 pr-10 rounded border placeholder-gray-700 bg-green-200 border-black focus:ring-2 focus:ring-green-500 focus:outline-none">
                <button type="button" class="absolute inset-y-0 right-2 flex items-center justify-center w-10 h-10"
                    onclick="togglePassword('newPassword', 'eyeIconNew')">
                    <i id="eyeIconNew" class="fa-solid fa-eye-slash text-gray-700"></i>
                </button>
            </div>
            <div class="mb-2 relative">
                <input id="password_confirmation" type="password" name="password_confirmation"
                    placeholder="Konfirmasi Password"
                    class="w-full p-2 pr-10 rounded border placeholder-gray-700 bg-green-200 border-black focus:ring-2 focus:ring-green-500 focus:outline-none">
                <button type="button" class="absolute inset-y-0 right-2 flex items-center justify-center w-10 h-10"
                    onclick="togglePassword('password_confirmation', 'eyeIconConfirm')">
                    <i id="eyeIconConfirm" class="fa-solid fa-eye-slash text-gray-700"></i>
                </button>
            </div>
            <p class="text-sm text-green-200 mb-4">* Min. 8 Karakter</p>
            <div class="flex justify-center items-center space-x-10">
                <button type="submit"
                    class="bg-white text-green-950 py-1 px-4 text-xl font-semibold rounded-lg shadow-md border-2 border-gray-300 hover:bg-gray-300">Buat
                    Akun</button>
                <a href="{{ route('login') }}" class="text-green-200 underline">Sudah Punya Akun</a>
            </div>
        </form>
        <div class="text-sm py-4 flex justify-center space-x-4 mt-20">
            <a href="{{ route('home') }}" class="text-green-200 hover:text-blue-500">Beranda </a>
            @auth
                <a href="{{ route('pengajuan') }}" class="text-green-200 hover:text-blue-500">Pengajuan Surat
                </a>
            @else
                <a href="{{ route('login') }}" onclick="alert('Silakan login terlebih dahulu untuk mengajukan surat.');"
                    class="text-green-200 hover:text-blue-500">Pengajuan Surat
                </a>
            @endauth
            <button onclick="openModal()" class="text-green-200 hover:text-blue-500 focus:outline-none">Privacy
                Policy</button>
        </div>
        <div id="privacyModal" class="fixed inset-0 items-center justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white p-8 rounded-2xl shadow-xl max-w-md w-full relative">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Privacy Policy</h2>
                <p class="text-gray-600 text-sm leading-relaxed mb-6">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Possimus cumque vitae rem ipsa molestiae officiis itaque quo quas qui aliquam,
                    culpa laboriosam enim! Reprehenderit, molestiae in aut deleniti eum dolorum assumenda maxime
                    aliquid quas unde sequi saepe fugiat modi consectetur autem culpa illum necessitatibus repellat
                    vero tempore ullam, quibusdam accusamus, nobis pariatur. Consequuntur assumenda tempora
                    possimus, at molestiae dolore pariatur vero necessitatibus culpa dolores nisi id, perferendis
                    numquam quae amet. Nobis, reprehenderit. Repellat architecto, tempore id dignissimos quasi rerum
                    itaque consectetur veniam atque dolorem. Culpa corporis vel neque, fuga quibusdam voluptatibus
                    recusandae nihil enim quas cumque, quae dolorem reprehenderit quod!</p>
                <div class="flex justify-center">
                    <button onclick="closeModal()"
                        class="px-6 py-3 bg-green-800 text-white rounded-lg shadow-md transition duration-200 ease-in-out transform hover:scale-105 focus:outline-none w-full sm:w-auto">
                        Saya Mengerti
                    </button>
                </div>
            </div>
        </div>
        <p class="text-green-200 flex justify-center text-sm mt-10">© {{ date('Y') }} WargaSimpel, Web. All rights reserved.</p>
    </div>
</secti>

<!-- Icon Eye -->
<script>
    function togglePassword(inputId, iconId) {
        const passwordInput = document.getElementById(inputId);
        const eyeIcon = document.getElementById(iconId);

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeIcon.classList.replace("fa-eye-slash", "fa-eye");
        } else {
            passwordInput.type = "password";
            eyeIcon.classList.replace("fa-eye", "fa-eye-slash");
        }
    }
</script>

<!-- Modal Privacy Policy -->
<script>
    function openModal() {
        let modal = document.getElementById("privacyModal");
        modal.style.display = "flex";
        modal.classList.remove("hidden");
    }

    function closeModal() {
        let modal = document.getElementById("privacyModal");
        modal.style.display = "none";
    }
</script>
