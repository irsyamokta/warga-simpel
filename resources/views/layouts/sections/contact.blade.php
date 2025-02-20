<!-- Kontak -->
<section id="kontak" class="bg-green-950 text-white py-20 px-4">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            <div>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4">Anda punya pertanyaan lain?</h2>
                <p class="text-xl sm:text-2xl mb-6">Silahkan kirim pertanyaan Anda di sini</p>
                <div class="mb-4">
                    <p class="font-bold text-xl sm:text-2xl">Kontak</p>
                    <p class="text-sm sm:text-base">Telepon / WhatsApp: 0987654321</p>
                </div>
                <div>
                    <p class="font-bold text-xl sm:text-2xl">Alamat</p>
                    <p class="text-sm sm:text-base">Purwokerto, Jawa Tengah, Indonesia</p>
                </div>
            </div>
            <form action="#" id="contactForm" class="space-y-4">
                <input type="text" id="nama" name="nama"
                    class="w-full px-4 py-3 rounded-lg bg-green-950 border border-black placeholder-white text-white focus:outline-none focus:ring-2 focus:ring-green-700"
                    placeholder="Nama Lengkap" required style="background-color: rgba(169, 169, 169, 0.5);">

                <input type="email" id="email" name="email"
                    class="w-full px-4 py-3 rounded-lg bg-green-950 border border-black placeholder-white text-white focus:outline-none focus:ring-2 focus:ring-green-700"
                    placeholder="Email" required style="background-color: rgba(169, 169, 169, 0.5);">

                <input type="text" id="notelp" name="notelp"
                    class="w-full px-4 py-3 rounded-lg bg-green-950 border border-black placeholder-white text-white focus:outline-none focus:ring-2 focus:ring-green-700"
                    placeholder="No. Telepon" required style="background-color: rgba(169, 169, 169, 0.5);">

                <input type="text" id="kategori" name="kategori"
                    class="w-full px-4 py-3 rounded-lg bg-green-950 border border-black placeholder-white text-white focus:outline-none focus:ring-2 focus:ring-green-700"
                    placeholder="Kategori" required style="background-color: rgba(169, 169, 169, 0.5);">

                <textarea id="keterangan" name="keterangan" rows="4"
                    class="w-full px-4 py-3 rounded-lg bg-green-950 border border-black placeholder-white text-white focus:outline-none focus:ring-2 focus:ring-green-700"
                    placeholder="Keterangan" required
                    style="background-color: rgba(169, 169, 169, 0.5);"></textarea>
                <button type="submit" id="sendMessageButton"
                    class="w-full bg-white text-green-950 font-bold py-3 px-6 rounded-lg hover:bg-gray-300">Kirim</button>
            </form>
        </div>
    </div>
</section>
