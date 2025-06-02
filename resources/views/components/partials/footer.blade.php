<footer class="bg-gray-900 py-12 text-white">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 gap-10 md:grid-cols-4">

            <!-- About School -->
            <div>
                <h3 class="mb-4 text-xl font-bold">{{ $school->name }}</h3>
                <p class="text-sm leading-relaxed text-gray-400">
                    {{ $school->tagline }}
                </p>
                <div class="mt-4 flex space-x-4">
                    <a href="#" class="text-gray-400 transition hover:text-blue-500"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-400 transition hover:text-blue-400"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-400 transition hover:text-pink-500"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="mb-4 text-lg font-semibold">Menu Cepat</h3>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="{{ url('/') }}" class="transition hover:text-blue-400">Beranda</a></li>
                    <li><a href="#tentang" class="transition hover:text-blue-400">Tentang Kami</a></li>
                    <li><a href="{{ url('/ekstra') }}" class="transition hover:text-blue-400">Ekstrakurikuler</a></li>
                    <li><a href="{{ url('/berita') }}" class="transition hover:text-blue-400">Berita</a></li>
                    <li><a href="{{ url('/kontak') }}" class="transition hover:text-blue-400">Kontak</a></li>
                </ul>
            </div>

            <!-- Useful Links -->
            <div>
                <h3 class="mb-4 text-lg font-semibold">Layanan</h3>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="#" class="transition hover:text-blue-400">PPDB Online</a></li>
                    <li><a href="#" class="transition hover:text-blue-400">Kurikulum</a></li>
                    <li><a href="#" class="transition hover:text-blue-400">Fasilitas</a></li>
                    <li><a href="{{ url('/galeri') }}" class="transition hover:text-blue-400">Galeri</a></li>
                    <li><a href="#" class="transition hover:text-blue-400">Prestasi</a></li>
                </ul>
            </div>

            <!-- Newsletter / Contact Info -->
            <div>
                <h3 class="mb-4 text-lg font-semibold">Hubungi Kami</h3>
                <address class="space-y-2 text-sm not-italic text-gray-400">
                    <p>{{ $school->address ?? 'Alamat' }}</p>
                    <p>Email: {{ $school->email ?? 'Email' }}</p>
                    <p>Telepon: {{ $school->phone ?? 'Telepon' }}</p>
                </address>

                <!-- Optional: Newsletter -->
                <!--
                <div class="mt-6">
                    <h4 class="mb-2 text-sm font-medium">Langganan Berita</h4>
                    <form class="flex">
                        <input type="email" placeholder="Email Anda" class="w-full rounded-l px-3 py-2 text-gray-800 focus:outline-none">
                        <button class="rounded-r bg-blue-600 px-3 py-2 transition hover:bg-blue-700">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
                -->
            </div>

        </div>

        <!-- Bottom Bar -->
        <div class="mt-10 border-t border-gray-800 pt-6 text-center text-sm text-gray-500">
            <p>&copy; 2025 MI Islamiyah Banjarpoh. All rights reserved.</p>
        </div>
    </div>
</footer>
