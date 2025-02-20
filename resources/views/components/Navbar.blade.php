<header class="bg-white shadow pt-10">
    <nav
        class="w-full text-md flex justify-between items-center py-4 px-10 fixed top-0 left-0 right-0 bg-white shadow-md z-50">
        <a href="#beranda">
            <img src="images/wargasimpel.png" class="w-40 lg:w-64 h-auto">
        </a>
        <button id="menu-btn" class="lg:hidden text-green-950 focus:outline-none z-50 relative">☰</button>
        <ul id="menu" class="hidden lg:flex space-x-4 ml-auto">
            <li><a href="#beranda" class="text-green-950 hover:font-semibold">BERANDA</a></li>
            <li><a href="#tentang" class="text-green-950 hover:font-semibold">TENTANG KAMI</a></li>
            <li><a href="#kontak" class="text-green-950 hover:font-semibold">KONTAK</a></li>
            @auth
                <li><a href="{{ route('profile.edit') }}" class="text-green-950 hover:font-semibold">PROFIL</a></li>
            @else
                <li><a href="{{ route('login') }}" class="text-green-950 hover:font-semibold">LOGIN</a></li>
            @endauth

            @auth
                <li>
                    <a href="{{ route('pengajuan') }}"
                        class="bg-green-800 text-white py-3 px-6 lg:px-8 rounded-lg hover:bg-green-600 transition-all duration-300">
                        PENGAJUAN SURAT
                    </a>
                </li>
            @else
                <li>
                    <a href="{{ route('login') }}"
                        onclick="alert('Silakan login terlebih dahulu untuk mengajukan surat.');"
                        class="bg-green-800 text-white py-3 px-6 lg:px-8 rounded-lg hover:bg-green-600 transition-all duration-300">
                        PENGAJUAN SURAT
                    </a>
                </li>
            @endauth
        </ul>
    </nav>

    <!-- Menu Mobile -->
    <ul id="mobile-menu"
        class="hidden flex-col space-y-4 bg-white shadow-md p-4 fixed top-[4rem] left-0 w-full z-40 transition-all duration-300">
        <li><a href="#beranda" class="block text-green-950 hover:font-semibold">BERANDA</a></li>
        <li><a href="#tentang" class="block text-green-950 hover:font-semibold">TENTANG KAMI</a></li>
        <li><a href="#kontak" class="block text-green-950 hover:font-semibold">KONTAK</a></li>
        @auth
            <li><a href="{{ route('profile.edit') }}" class="block text-green-950 hover:font-semibold">PROFIL</a></li>
        @else
            <li><a href="{{ route('login') }}" class="block text-green-950 hover:font-semibold">LOGIN</a></li>
        @endauth

        @auth
            <li><a href="{{ route('pengajuan') }}" class="block text-green-950 hover:font-semibold">PENGAJUAN SURAT</a>
            </li>
        @else
            <li>
                <a href="{{ route('login') }}" onclick="alert('Silakan login terlebih dahulu untuk mengajukan surat.');"
                    class="block text-green-950 hover:font-semibold">
                    PENGAJUAN SURAT
                </a>
            </li>
        @endauth
    </ul>
</header>

<!-- Hamburger -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuBtn = document.getElementById("menu-btn");
        const mobileMenu = document.getElementById("mobile-menu");

        menuBtn.addEventListener("click", function() {
            mobileMenu.classList.toggle("hidden");
        });

        function checkScreenSize() {
            if (window.innerWidth >= 1024) {
                mobileMenu.classList.add("hidden");
            }
        }
        window.addEventListener("resize", checkScreenSize);
        checkScreenSize();
    });
</script>
