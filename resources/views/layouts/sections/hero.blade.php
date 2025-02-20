<section id="beranda" class="text-white py-56 px-4 md:px-10 lg:px-20 bg-cover bg-center h-[100vh]"
    style="background-image: url('images/banner.png');">
    <div class="container flex flex-col md:flex-row items-center justify-between text-left md:text-left">
        <div class="max-w-2xl">
            <h1 class="text-4xl md:text-6xl font-bold italic mb-4 leading-tight">
                Mau Bikin Surat<br> Tapi Gak Sempet<br> Ke Balai Desa?
            </h1>
            <p class="mb-6 text-lg md:text-xl">
                Tinggal bikin aja di Website
                <a href="#" class="font-bold">www.wargasimpel.com</a><br>
                Bikinnya <b>Mudah, Cepat & Praktis</b>
            </p>
            @auth
                <a href="{{ route('pengajuan') }}"
                    class="bg-white text-black font-bold text-lg py-4 px-8 rounded-lg border border-black shadow-md hover:shadow-lg hover:border-green-950 transition-all duration-300">
                    Pengajuan Surat</a>
            @else
                <a href="#" onclick="event.preventDefault(); showLoginAlert();"
                    class="bg-white text-black font-bold text-lg py-4 px-8 rounded-lg border border-black shadow-md hover:shadow-lg hover:bg-green-800 hover:border-green-950 hover:text-white transition-all duration-300">
                    Pengajuan Surat
                </a>
            @endauth
            <h2 class="mt-6 text-sm md:text-base">
                *Hanya berlaku bagi penduduk Indonesia yang memiliki Nomor Induk Kewarganegaraan
            </h2>
        </div>
    </div>
</section>

<script>
    function showLoginAlert() {
        Swal.fire({
            title: 'Akses Ditolak',
            text: 'Silakan login terlebih dahulu untuk mengajukan surat.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Login Sekarang',
            cancelButtonText: 'Nanti Saja',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = @json(route('login'));
            }
        });
    }
</script>


