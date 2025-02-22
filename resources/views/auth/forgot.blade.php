@extends('index')
<section class="bg-green-900 font-inter flex items-center justify-center min-h-screen">
    <div class="p-10 w-full max-w-xl">
        <div class="flex flex-col items-center text-center">
            <img src="{{ asset('images/logobesar.png') }}" alt="Logo" class="w-40 md:w-48 lg:w-56 h-auto mb-8">
        </div>
        <h1 class="text-5xl font-bold text-emerald-100 text-center mb-10">LUPA AKUN</h1>

        @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
            <strong>Error:</strong> {{ $errors->first() }}
        </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="mb-4">
                <input type="email" name="email" placeholder="Masukan Email"
                class="w-full p-2 rounded border placeholder-gray-700 bg-green-200 border-black focus:ring-2 focus:ring-green-500 focus:outline-none"
                value="{{ old('email') }}">
                <x-auth-session-status class="mb-4" :status="session('status')" />
            </div>
            <div class="flex justify-center items-center space-x-20">
                <button type="submit"
                    class="bg-white text-green-950 py-1 px-4 text-xl font-semibold rounded-lg shadow-md border-2 border-gray-300 hover:bg-gray-300">
                    Submit
                </button>
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
        <p class="text-green-200 flex justify-center text-sm mt-10">© 2025 WargaSimpel, Web. All rights reserved.</p>
    </div>
</section>
