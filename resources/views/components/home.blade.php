<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>mi islamiyah banjarpoh</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- AOS Animations -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css " />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter :wght@400;600;700&display=swap" rel="stylesheet" />

    <style>
        body {
            font-family: "Inter", sans-serif;
        }

        .hero-bg {
            background-image: url("https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80 ");
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="bg-white text-gray-800">
    <!-- Navbar -->
    <header id="navbar" class="fixed left-0 top-0 z-50 w-full bg-transparent transition duration-300">
        <div class="container mx-auto flex items-center justify-between px-4 py-3 text-white">
            <h1 class="text-xl font-bold">MI Islamiyah Banjarpoh</h1>

            <!-- Desktop Nav -->
            <nav class="hidden space-x-6 md:flex">
                <a href="#tentang" class="hover:underline">Tentang</a>
                <a href="#fasilitas" class="hover:underline">Fasilitas</a>
                <a href="#galeri" class="hover:underline">Galeri</a>
                <a href="#berita" class="hover:underline">Berita</a>
                <a href="#kontak" class="hover:underline">Kontak</a>
            </nav>

            <!-- Mobile Button -->
            <button id="menu-toggle" class="focus:outline-none md:hidden">
                <i class="fa fa-bars text-xl"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="container mx-auto hidden rounded-b-lg bg-blue-700 px-4 pb-3 md:hidden">
            <nav class="flex flex-col space-y-3 py-2">
                <a href="#tentang" class="hover:underline">Tentang</a>
                <a href="#fasilitas" class="hover:underline">Fasilitas</a>
                <a href="#galeri" class="hover:underline">Galeri</a>
                <a href="#berita" class="hover:underline">Berita</a>
                <a href="#kontak" class="hover:underline">Kontak</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-bg relative flex h-screen items-center justify-center text-white">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 mx-auto max-w-3xl px-4 text-center">
            <h2 class="mb-4 text-4xl font-bold md:text-6xl">Selamat Datang di <br>MI Islamiyah Banjarpoh</h2>
            <p class="mb-6 text-lg md:text-xl">Membina generasi unggul, berkarakter, dan siap menghadapi tantangan global.</p>
            <a href="#tentang" class="inline-block rounded-full bg-blue-600 px-6 py-3 transition hover:bg-blue-700"> Pelajari Lebih </a>
        </div>
    </section>

    <!-- Tentang Sekolah -->
    <section id="tentang" class="bg-white py-20">
        <div class="container mx-auto px-6">
            <h3 class="mb-12 text-center text-3xl font-bold" data-aos="fade-up">Tentang Kami</h3>
            <div class="flex flex-col items-center gap-10 md:flex-row" data-aos="fade-right">
                <img src="{{ asset('storage/src/hero.jpg') }}" alt="Sekolah" class="w-full rounded object-cover shadow-md md:w-1/2" />
                <div class="md:w-1/2">
                    <p class="leading-relaxed text-gray-700">
                        Madrasah Ibtidaiyah Islamiyah Banjarpoh merupakan sekolah dasar berbasis Islam yang telah berdiri sejak tahun 1960 di Desa Pulorejo, Kecamatan Ngoro, Kabupaten Jombang. Sekolah ini berkomitmen untuk memberikan pendidikan berkualitas yang mengedepankan nilai-nilai keislaman, akhlak mulia, serta pengembangan karakter siswa. Dengan akreditasi B dan
                        fasilitas yang memadai, MI Islamiyah Banjarpoh terus berupaya menciptakan lingkungan belajar yang kondusif, kreatif, dan inovatif bagi seluruh peserta didik.
                        <br><br>
                        Visi kami adalah menjadi sekolah unggul dalam mencetak generasi penerus bangsa yang berakhlak mulia, cerdas, kreatif, dan mandiri. Semua warga sekolah, mulai dari tenaga pendidik, siswa, hingga orang tua, bahu membahu menciptakan suasana belajar yang harmonis dan penuh semangat untuk mencapai tujuan bersama
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Fasilitas -->
    <section id="fasilitas" class="bg-gray-100 py-20">
        <div class="container mx-auto px-6">
            <h3 class="mb-12 text-center text-3xl font-bold" data-aos="fade-up">Fasilitas Sekolah</h3>
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">

                <!-- Fasilitas 1 -->
                <div class="group transform rounded-lg bg-white shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="zoom-in">
                    <img src="https://images.unsplash.com/photo-1604079628048-943952c2a8d0?auto=format&fit=crop&w=800&q=80 " alt="Perpustakaan" class="h-48 w-full rounded-t-lg object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="p-6">
                        <h4 class="mb-2 text-xl font-bold text-blue-700">Perpustakaan</h4>
                        <p class="text-gray-600">Ruang baca nyaman dengan koleksi buku lengkap dan suasana tenang untuk belajar.</p>
                    </div>
                </div>

                <!-- Fasilitas 2 -->
                <div class="group transform rounded-lg bg-white shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="zoom-in" data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1581093588401-04f23be8ca32?auto=format&fit=crop&w=800&q=80 " alt="Laboratorium" class="h-48 w-full rounded-t-lg object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="p-6">
                        <h4 class="mb-2 text-xl font-bold text-blue-700">Laboratorium</h4>
                        <p class="text-gray-600">Lab IPA dan komputer dilengkapi teknologi modern untuk mendukung pembelajaran praktis.</p>
                    </div>
                </div>

                <!-- Fasilitas 3 -->
                <div class="group transform rounded-lg bg-white shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="zoom-in" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1620714223084-8fcacc6dfd8d?auto=format&fit=crop&w=800&q=80 " alt="Ruang Kelas" class="h-48 w-full rounded-t-lg object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="p-6">
                        <h4 class="mb-2 text-xl font-bold text-blue-700">Ruang Kelas</h4>
                        <p class="text-gray-600">Kelas bersih, nyaman, dan ber-AC mendukung proses belajar yang optimal.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Galeri -->
    <section id="galeri" class="bg-white py-20">
        <div class="container mx-auto px-6">
            <h3 class="mb-12 text-center text-3xl font-bold" data-aos="fade-up">Galeri</h3>
            <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
                <img src="{{ asset('storage/src/galeri1.jpg') }}" alt="Foto 1" class="rounded shadow transition duration-300 hover:scale-105" data-aos="zoom-in" />
                <img src="{{ asset('storage/src/galeri1.jpg') }}" alt="Foto 1" class="rounded shadow transition duration-300 hover:scale-105" data-aos="zoom-in" />
                <img src="{{ asset('storage/src/galeri1.jpg') }}" alt="Foto 1" class="rounded shadow transition duration-300 hover:scale-105" data-aos="zoom-in" />
                <img src="{{ asset('storage/src/galeri1.jpg') }}" alt="Foto 1" class="rounded shadow transition duration-300 hover:scale-105" data-aos="zoom-in" />
            </div>
        </div>
    </section>

    <!-- Berita -->
    <section id="berita" class="bg-gray-100 py-20">
        <div class="container mx-auto px-6">
            <h3 class="mb-12 text-center text-3xl font-bold" data-aos="fade-up">Berita Terbaru</h3>
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <div class="overflow-hidden rounded bg-white shadow transition hover:shadow-xl" data-aos="fade-up">
                    <img src="https://via.placeholder.com/400x200 " alt="Berita 1" class="w-full" />
                    <div class="p-4">
                        <h4 class="mb-2 text-lg font-semibold">Lomba Olimpiade Sains Tingkat Nasional</h4>
                        <p class="text-sm text-gray-600">Siswa SMPN 1 Cerdas berhasil meraih juara 1 tingkat nasional...</p>
                    </div>
                </div>
                <div class="overflow-hidden rounded bg-white shadow transition hover:shadow-xl" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://via.placeholder.com/400x200 " alt="Berita 2" class="w-full" />
                    <div class="p-4">
                        <h4 class="mb-2 text-lg font-semibold">Kunjungan Industri ke PT Teknologi Cerdas</h4>
                        <p class="text-sm text-gray-600">Kegiatan kunjungan industri membuka wawasan siswa tentang dunia kerja...</p>
                    </div>
                </div>
                <div class="overflow-hidden rounded bg-white shadow transition hover:shadow-xl" data-aos="fade-up" data-aos-delay="200">
                    <img src="https://via.placeholder.com/400x200 " alt="Berita 3" class="w-full" />
                    <div class="p-4">
                        <h4 class="mb-2 text-lg font-semibold">Pelantikan OSIS Periode 2025</h4>
                        <p class="text-sm text-gray-600">Acara pelantikan OSIS berlangsung khidmat dan meriah...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak -->
    <section id="kontak" class="bg-white py-20">
        <div class="container mx-auto px-6">
            <h3 class="mb-12 text-center text-3xl font-bold" data-aos="fade-up">Hubungi Kami</h3>
            <div class="mx-auto max-w-4xl rounded bg-gray-50 p-8 shadow" data-aos="fade-up">
                <form>
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <label for="name" class="mb-2 block font-medium text-gray-700">Nama</label>
                            <input type="text" id="name" class="w-full rounded border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" />
                        </div>
                        <div>
                            <label for="email" class="mb-2 block font-medium text-gray-700">Email</label>
                            <input type="email" id="email" class="w-full rounded border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" />
                        </div>
                    </div>
                    <div class="mt-6">
                        <label for="message" class="mb-2 block font-medium text-gray-700">Pesan</label>
                        <textarea id="message" rows="5" class="w-full rounded border px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
                    </div>
                    <button type="submit" class="mt-6 rounded-full bg-blue-600 px-6 py-3 text-white transition hover:bg-blue-700">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-600 py-10 text-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col items-center justify-between md:flex-row">
                <div class="mb-6 md:mb-0">
                    <h3 class="text-2xl font-bold">SMPN 1 Cerdas</h3>
                    <p>Jl. Pendidikan No. 1, Kota Belajar</p>
                </div>
                <div class="text-center md:text-right">
                    <p>&copy; 2025 SMPN 1 Cerdas. All rights reserved.</p>
                    <div class="mt-3 flex justify-center space-x-4 md:justify-end">
                        <a href="#" class="text-white hover:text-gray-200"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white hover:text-gray-200"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white hover:text-gray-200"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
        });
    </script>

    <!-- Scroll Effect Navbar -->
    <script>
        window.addEventListener("scroll", () => {
            const navbar = document.getElementById("navbar");
            if (window.scrollY > 50) {
                navbar.classList.add("bg-blue-700");
                navbar.classList.remove("bg-transparent");
            } else {
                navbar.classList.add("bg-transparent");
                navbar.classList.remove("bg-blue-700");
            }
        });
        document.addEventListener("DOMContentLoaded", function() {
            const menuToggle = document.getElementById("menu-toggle");
            const mobileMenu = document.getElementById("mobile-menu");

            if (menuToggle && mobileMenu) {
                menuToggle.addEventListener("click", () => {
                    mobileMenu.classList.toggle("hidden");
                });
            } else {
                console.error("Hamburger menu elements not found");
            }
        });
    </script>
</body>

</html>
