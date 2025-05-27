<x-layouts.app title="home">
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
</x-layouts.app>
