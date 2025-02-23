@extends('index')

<section class="bg-green-900 font-inter flex items-center justify-center min-h-screen">
    <div class="p-10 w-full max-w-xl">
        <div class="flex flex-col items-center text-center">
            <img src="{{ asset('images/logobesar.png') }}" alt="Logo" class="w-40 md:w-48 lg:w-56 h-auto mb-8">
        </div>
        <h1 class="text-5xl font-bold text-emerald-100 text-center mb-10">VERIFIKASI EMAIL</h1>

        <div class="mb-4 text-sm text-gray-200 text-center">
            {{ __('Terima kasih telah mendaftar! Sebelum memulai, silakan verifikasi email Anda dengan mengklik tautan yang telah kami kirim. Jika Anda tidak menerima email, kami dapat mengirim ulang.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-400 text-center">
                {{ __('Tautan verifikasi baru telah dikirim ke alamat email yang Anda gunakan saat pendaftaran.') }}
            </div>
        @endif

        <div class="mt-6 flex flex-col items-center space-y-4">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit"
                    class="bg-white text-green-950 py-2 px-6 text-xl font-semibold rounded-lg shadow-md border-2 border-gray-300 hover:bg-gray-300">
                    {{ __('Kirim Ulang Verifikasi Email') }}
                </button>
            </form>
            
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-green-200 text-lg underline hover:text-blue-500">
                    {{ __('Keluar') }}
                </button>
            </form>
        </div>

        <p class="text-green-200 flex justify-center text-sm mt-10">© {{ date('Y') }} WargaSimpel, Web. All rights reserved.</p>
    </div>
</section>
