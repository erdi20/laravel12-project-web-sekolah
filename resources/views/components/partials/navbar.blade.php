<header id="navbar" class="fixed left-0 top-0 z-50 w-full bg-transparent transition-all duration-300">
    <div class="container mx-auto flex items-center justify-between px-4 py-3 text-white">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex items-center space-x-2 text-xl font-bold">
            <img src="{{ asset('storage/'.$school->logo) }}" alt="Logo Sekolah" class="h-8 w-8 object-contain">
            <span>{{ $school->name ?? 'Sekolah' }}</span>
        </a>

        <!-- Desktop Nav -->
        <nav class="hidden items-center space-x-6 md:flex">
            <a href="{{ url('/') }}" class="transition hover:text-blue-300">Beranda</a>
            <a href="{{ url('/ekstra') }}" class="transition hover:text-blue-300">Ekstrakurikuler</a>
            <a href="{{ url('/galeri') }}" class="transition hover:text-blue-300">Galeri</a>
            <a href="{{ url('/berita') }}" class="transition hover:text-blue-300">Berita</a>
            <a href="{{ url('/kontak') }}" class="transition hover:text-blue-300">Kontak</a>
        </nav>

        <!-- Mobile Button -->
        <button id="menu-toggle" class="rounded p-2 transition hover:bg-blue-800 focus:outline-none md:hidden">
            <svg id="menu-open-icon" class="block h-6 w-6" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
            <svg id="menu-close-icon" class="hidden h-6 w-6" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="container mx-auto hidden rounded-b-lg bg-blue-800 px-4 pb-3 pt-2">
        <nav class="flex flex-col space-y-3 text-white">
            <a href="{{ url('/') }}" class="rounded px-3 py-2 transition hover:text-blue-300">Beranda</a>
            <a href="{{ url('/ekstra') }}" class="rounded px-3 py-2 transition hover:text-blue-300">Ekstrakurikuler</a>
            <a href="{{ url('/galeri') }}" class="rounded px-3 py-2 transition hover:text-blue-300">Galeri</a>
            <a href="{{ url('/berita') }}" class="rounded px-3 py-2 transition hover:text-blue-300">Berita</a>
            <a href="{{ url('/kontak') }}" class="rounded px-3 py-2 transition hover:text-blue-300">Kontak</a>
        </nav>
    </div>
</header>

<!-- Script untuk toggle menu mobile -->
{{-- <script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const openIcon = document.getElementById('menu-open-icon');
    const closeIcon = document.getElementById('menu-close-icon');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        openIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    });

    // Scroll Effect - Navbar berubah warna saat discroll
    window.addEventListener("scroll", () => {
        const navbar = document.getElementById("navbar");
        if (window.scrollY > 50) {
            navbar.classList.remove("bg-transparent");
            navbar.classList.add("bg-blue-700", "shadow-lg");
        } else {
            navbar.classList.remove("bg-blue-700", "shadow-lg");
            navbar.classList.add("bg-transparent");
        }
    });
</script> --}}
