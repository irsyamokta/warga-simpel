@extends('index')

<section class="bg-green-950 font-inter flex items-center justify-center min-h-screen">
    <div class="p-8 w-full max-w-xl">
        <div class="flex flex-col items-center text-center">
            <img src="{{ asset('images/logobesar.png') }}" alt="Logo" class="w-96 md:w-96 lg:w-96 h-auto">
            <p class="mt-4 text-sm md:text-sm lg:text-sm text-green-200 mb-20">
        </div>
        <h1 class="text-6xl font-bold text-green-200 text-center mb-10">RESET PASSWORD</h1>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <strong>Error:</strong> {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <input type="hidden" name="token" value="{{ request()->route('token') }}">

            <div class="mb-4">
                <input type="email" name="email" placeholder="Masukan Email"
                class="w-full p-2 rounded border placeholder-gray-700 bg-green-200 border-black focus:ring-2 focus:ring-green-500 focus:outline-none"
                value="{{ old('email', request()->email) }}" required>
            </div>

            <div class="mb-4 relative">
                <input id="password" type="password" name="password" placeholder="Password Baru"
                class="w-full p-2 pr-10 rounded border placeholder-gray-700 bg-green-200 border-black focus:ring-2 focus:ring-green-500 focus:outline-none"
                required>
                <button type="button" class="absolute inset-y-0 right-2 flex items-center justify-center w-10 h-10"
                    onclick="togglePassword('password', 'eyeIconPassword')">
                    <i id="eyeIconPassword" class="fa-solid fa-eye-slash text-gray-700"></i>
                </button>
            </div>

            <div class="mb-4 relative">
                <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Konfirmasi Password Baru"
                class="w-full p-2 pr-10 rounded border placeholder-gray-700 bg-green-200 border-black focus:ring-2 focus:ring-green-500 focus:outline-none"
                required>
                <button type="button" class="absolute inset-y-0 right-2 flex items-center justify-center w-10 h-10"
                    onclick="togglePassword('password_confirmation', 'eyeIconConfirm')">
                    <i id="eyeIconConfirm" class="fa-solid fa-eye-slash text-gray-700"></i>
                </button>
            </div>

            <div class="flex justify-center items-center space-x-10">
                <button type="submit"
                    class="bg-white text-green-950 py-1 px-4 text-xl font-semibold rounded-lg shadow-md border-2 border-gray-300 hover:bg-gray-300">
                    Reset Password
                </button>
                <a href="{{ route('login') }}" class="text-green-200 underline">Kembali ke Login</a>
            </div>
        </form>

        <p class="text-green-200 flex justify-center text-sm mt-10">© {{ date('Y') }} WargaSimpel, Web. All rights reserved.</p>
    </div>
</section>

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
