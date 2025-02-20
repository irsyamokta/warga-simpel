<header class="bg-green-950 shadow">
    <nav
        class="w-full flex flex-wrap items-center justify-between py-4 px-10 fixed top-0 left-0 right-0 bg-green-950 shadow-md z-50">
        <div class="flex-grow flex justify-center md:justify-start">
            <a href="{{ route('home') }}">
                <img src="images/wargasimpel.png" class="w-40 lg:w-64 h-auto">
            </a>
        </div>
        <ul class="hidden md:flex md:space-x-6 lg:space-x-10">
            <li>
                <a href="{{ route('home') }}"
                    class="block text-center bg-emerald-500 text-green-950 py-2 px-4 sm:py-2 sm:px-6 text-sm sm:text-md md:text-lg rounded-lg hover:bg-gray-300 transition-all duration-300">
                    BERANDA
                </a>
            </li>
        </ul>
    </nav>
</header>
