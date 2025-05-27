<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Ekstrakurikuler - SMPN 1 Cerdas</title>

  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss @3.4.1/dist/tailwind.min.css" rel="stylesheet">

  <!-- AOS Animations -->
  <link href="https://unpkg.com/aos @2.3.4/dist/aos.css" rel="stylesheet">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css " />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter :wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<body class="bg-white text-gray-800">

  <!-- Navbar Sederhana -->
  <header class="bg-blue-600 text-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
      <h1 class="text-xl font-bold">SMPN 1 Cerdas</h1>
      <nav class="space-x-6 hidden md:flex">
        <a href="index.html" class="hover:text-blue-200 transition">Beranda</a>
        <a href="#" class="hover:text-blue-200 transition">Ekstrakurikuler</a>
        <a href="kontak.html" class="hover:text-blue-200 transition">Kontak</a>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white py-20">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl md:text-5xl font-bold mb-4">Ekstrakurikuler Kami</h2>
      <p class="text-lg md:text-xl max-w-2xl mx-auto">
        Pilihan kegiatan minat dan bakat untuk pengembangan diri siswa di luar jam pelajaran.
      </p>
    </div>
  </section>

  <!-- Ekstrakurikuler Grid -->
  <section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
      <h3 class="mb-12 text-center text-3xl font-bold" data-aos="fade-up">Pilihan Ekstrakurikuler</h3>
      <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">

        <!-- Drumband -->
        <div class="group transform rounded-lg overflow-hidden bg-white shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="zoom-in">
          <img src="https://images.unsplash.com/photo-1598619048659-a06b669d3321?auto=format&fit=crop&w=800&q=80 " alt="Drumband" class="h-48 w-full object-cover transition-transform duration-500 group-hover:scale-110">
          <div class="p-6">
            <h4 class="mb-2 text-xl font-bold text-blue-700">Drumband</h4>
            <p class="text-gray-600">Mengasah keterampilan musik dan kerjasama tim melalui latihan drumband yang dinamis.</p>
          </div>
        </div>

        <!-- Banjari -->
        <div class="group transform rounded-lg overflow-hidden bg-white shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="zoom-in" data-aos-delay="100">
          <img src="https://images.unsplash.com/photo-1582991113538-0c1ebfbc2c28?auto=format&fit=crop&w=800&q=80 " alt="Banjari" class="h-48 w-full object-cover transition-transform duration-500 group-hover:scale-110">
          <div class="p-6">
            <h4 class="mb-2 text-xl font-bold text-blue-700">Banjari</h4>
            <p class="text-gray-600">Seni musik rebana yang menggabungkan irama dan syiar dalam nuansa islami.</p>
          </div>
        </div>

        <!-- Pramuka -->
        <div class="group transform rounded-lg overflow-hidden bg-white shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="zoom-in" data-aos-delay="200">
          <img src="https://images.unsplash.com/photo-1578764004614-ded654b6c264?auto=format&fit=crop&w=800&q=80 " alt="Pramuka" class="h-48 w-full object-cover transition-transform duration-500 group-hover:scale-110">
          <div class="p-6">
            <h4 class="mb-2 text-xl font-bold text-blue-700">Pramuka</h4>
            <p class="text-gray-600">Membentuk karakter kepemimpinan, disiplin, dan cinta alam melalui kegiatan pramuka.</p>
          </div>
        </div>

        <!-- Kaligrafi -->
        <div class="group transform rounded-lg overflow-hidden bg-white shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="zoom-in" data-aos-delay="300">
          <img src="https://images.unsplash.com/photo-1580484674958-0ad7fbd6fad8?auto=format&fit=crop&w=800&q=80 " alt="Kaligrafi" class="h-48 w-full object-cover transition-transform duration-500 group-hover:scale-110">
          <div class="p-6">
            <h4 class="mb-2 text-xl font-bold text-blue-700">Kaligrafi</h4>
            <p class="text-gray-600">Melatih kesabaran dan seni tulisan indah ayat-ayat suci Al-Quran.</p>
          </div>
        </div>

        <!-- Qiroah -->
        <div class="group transform rounded-lg overflow-hidden bg-white shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="zoom-in" data-aos-delay="400">
          <img src="https://images.unsplash.com/photo-1591248869903-8e2a1fd4a7c2?auto=format&fit=crop&w=800&q=80 " alt="Qiroah" class="h-48 w-full object-cover transition-transform duration-500 group-hover:scale-110">
          <div class="p-6">
            <h4 class="mb-2 text-xl font-bold text-blue-700">Qiroah</h4>
            <p class="text-gray-600">Latihan membaca Al-Quran dengan tartil dan tajwid yang benar.</p>
          </div>
        </div>

        <!-- Silat -->
        <div class="group transform rounded-lg overflow-hidden bg-white shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="zoom-in" data-aos-delay="500">
          <img src="https://images.unsplash.com/photo-1610945415271-53cc1efcff2c?auto=format&fit=crop&w=800&q=80 " alt="Silat" class="h-48 w-full object-cover transition-transform duration-500 group-hover:scale-110">
          <div class="p-6">
            <h4 class="mb-2 text-xl font-bold text-blue-700">Silat</h4>
            <p class="text-gray-600">Seni bela diri tradisional yang melatih fisik, mental, dan budi pekerti luhur.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-blue-600 text-white py-10">
    <div class="container mx-auto px-6">
      <div class="flex flex-col md:flex-row justify-between items-center">
        <div class="mb-6 md:mb-0">
          <h3 class="text-2xl font-bold">SMPN 1 Cerdas</h3>
          <p>Jl. Pendidikan No. 1, Kota Belajar</p>
        </div>
        <div class="text-center md:text-right">
          <p>&copy; 2025 SMPN 1 Cerdas. All rights reserved.</p>
          <div class="flex justify-center md:justify-end mt-3 space-x-4">
            <a href="#" class="text-white hover:text-gray-200"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-white hover:text-gray-200"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-white hover:text-gray-200"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- AOS JS -->
  <script src="https://unpkg.com/aos @2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 800,
      once: true
    });
  </script>

</body>
</html>
