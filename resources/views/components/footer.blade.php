<!-- Footer -->
<footer class="bg-white border-t border-gray-300 py-8 mt-auto">
    <div class="mx-auto w-full px-10">
        <div class="flex flex-col lg:flex-row justify-between items-center text-center lg:text-left mb-6">
            <div class="mb-6 lg:mb-0 lg:w-1/2">
                <div class="flex items-center justify-center lg:justify-start mb-2">
                    <img src="images/wargasimpel.png" alt="simpeldesa logo" class="h-12">
                </div>
                <p class="text-gray-500 text-sm">
                    Untuk urusan Administrasi, Pelayanan, dan Ekonomi Desa lebih simpel dengan interaksi digital
                    Pemdes dengan warga
                </p>
            </div>
            <div class="lg:w-1/2 text-black text-sm text-center lg:text-right">
                <p class="font-bold">KONTAK EMAIL</p>
                <p><a href="mailto:cs@wargasimpel.com" class="text-blue-500 hover:underline">cs@wargasimpel.com</a>
                </p>
                <p>Purwokerto, Jawa Tengah, Indonesia</p>
            </div>
        </div>
        <div class="flex justify-center space-x-4 mb-6">
            <a href="#tentang" class="text-black hover:text-blue-500 text-sm">Tentang Kami</a>
            <a href="#kontak" class="text-black hover:text-blue-500 text-sm">Kontak</a>
            @auth
                <a href="{{ route('pengajuan') }}" class="text-black hover:text-blue-500 text-sm">Pengajuan Surat
            @else
                <a href="{{ route('login') }}"
                    onclick="alert('Silakan login terlebih dahulu untuk mengajukan surat.');"
                    class="text-black hover:text-blue-500 text-sm">Pengajuan Surat
                </a>
            @endauth
                <a href="#kontak" class="text-black hover:text-blue-500 text-sm">Pertanyaan</a>
                <button onclick="openModal()"
                    class="text-black hover:text-blue-500 text-sm focus:outline-none">Privacy
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
    </div>
    <div class="border-t border-gray-300 pt-4 text-center text-black text-xs">
        <div class="flex flex-col items-center justify-center">
            <div class="flex items-center justify-center mb-2">
                <img src="images/wargasimpel.png" alt="simpeldesa logo" class="h-5 mr-2">
                <span>&copy; {{ date('Y') }} WargaSimpel, Web. All rights reserved.</span>
            </div>
            <p class="text-xs text-black">Mendukung interaksi digital antara Pemdes dan warga.</p>
        </div>
    </div>
</footer>
