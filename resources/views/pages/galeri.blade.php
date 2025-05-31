<x-layouts.app title="Galeri">
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-r from-blue-600 to-indigo-800 py-28 text-white md:py-36">
        <div class="absolute inset-0 z-0 bg-black/20"></div>
        <div class="container relative z-10 mx-auto px-6 text-center">
            <h1 class="animate-fade-in-down mb-6 text-4xl font-bold md:text-5xl">Galeri Sekolah</h1>
            <div class="mx-auto mb-6 h-1 w-20 bg-yellow-400"></div>
            <p class="animate-fade-in-up mx-auto max-w-3xl text-lg leading-relaxed md:text-xl">
                Dokumentasi momen berharga dan aktivitas pembelajaran di MI Islamiyah Banjarpoh
            </p>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-16 bg-white/10 backdrop-blur-sm"></div>
    </section>

    <!-- Gallery Section -->
    <section class="bg-gray-50 py-16 md:py-24">
        <div class="container mx-auto px-4">
            <div class="mb-16 text-center">
                <h2 class="mb-4 text-3xl font-bold text-gray-800 md:text-4xl" data-aos="fade-up">Kegiatan Sekolah</h2>
                <p class="mx-auto max-w-2xl text-gray-600" data-aos="fade-up" data-aos-delay="100">
                    Dokumentasi berbagai kegiatan akademik dan ekstrakurikuler siswa
                </p>
            </div>

            <!-- Filter Buttons -->
            <div class="mb-12 flex flex-wrap justify-center gap-3" data-aos="fade-up">
                <a href="{{ url('/galeri') }}" class="rounded-full bg-blue-600 px-5 py-2 font-medium text-white transition-all hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Semua
                </a>
                <a href="{{ url('/galeriakademik') }}" class="rounded-full bg-white px-5 py-2 font-medium text-gray-700 transition-all hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Akademik
                </a>
                <a href="{{ url('/galeriekstra') }}" class="rounded-full bg-white px-5 py-2 font-medium text-gray-700 transition-all hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Ekstrakurikuler
                </a>
                <a href="{{ url('/galerievent') }}" class="rounded-full bg-white px-5 py-2 font-medium text-gray-700 transition-all hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Event
                </a>
            </div>

            <!-- Gallery Grid -->
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($galeri as $item)
                    <!-- Item 1 -->
                    <div class="group relative overflow-hidden rounded-xl shadow-lg transition-all duration-500 hover:shadow-xl" data-aos="fade-up" {{ $item->id }}>
                        <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                            <img src="{{ asset('storage/'.$item->image) }}" alt="Pramuka" class="h-72 w-full object-cover transition-transform duration-700 group-hover:scale-110">
                        </div>
                        <div class="absolute inset-0 flex items-end bg-gradient-to-t from-black/70 via-black/40 to-transparent p-6 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            <div class="translate-y-4 transform transition-transform duration-300 group-hover:translate-y-0">
                            <h3 class="mb-1 text-xl font-bold text-white">{{ $item->name }}</h3>
                                <p class="text-sm text-gray-200">{{ $item->description }}</p>
                            </div>
                        </div>
                        <div class="absolute right-4 top-4">
                            <span class="rounded-full bg-blue-600 px-3 py-1 text-xs font-semibold text-white">{{ $item->category }}</span>
                        </div>
                    </div>
                @endforeach

                <!-- Item 2 -->
                {{-- <div class="group relative overflow-hidden rounded-xl shadow-lg transition-all duration-500 hover:shadow-xl" data-aos="fade-up" data-aos-delay="100">
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                        <img src="https://images.pexels.com/photos/591774/pexels-photo-591774.jpeg" alt="Drumband" class="h-72 w-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 flex items-end bg-gradient-to-t from-black/70 via-black/40 to-transparent p-6 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        <div class="translate-y-4 transform transition-transform duration-300 group-hover:translate-y-0">
                            <h3 class="mb-1 text-xl font-bold text-white">Latihan Drumband</h3>
                            <p class="text-sm text-gray-200">Persiapan lomba antar sekolah</p>
                        </div>
                    </div>
                    <div class="absolute right-4 top-4">
                        <span class="rounded-full bg-green-600 px-3 py-1 text-xs font-semibold text-white">Event</span>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg transition-all duration-500 hover:shadow-xl" data-aos="fade-up" data-aos-delay="200">
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                        <img src="https://images.pexels.com/photos/730547/pexels-photo-730547.jpeg" alt="Banjari" class="h-72 w-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 flex items-end bg-gradient-to-t from-black/70 via-black/40 to-transparent p-6 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        <div class="translate-y-4 transform transition-transform duration-300 group-hover:translate-y-0">
                            <h3 class="mb-1 text-xl font-bold text-white">Seni Banjari</h3>
                            <p class="text-sm text-gray-200">Ekstrakurikuler seni islami</p>
                        </div>
                    </div>
                    <div class="absolute right-4 top-4">
                        <span class="rounded-full bg-blue-600 px-3 py-1 text-xs font-semibold text-white">Ekstrakurikuler</span>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg transition-all duration-500 hover:shadow-xl" data-aos="fade-up" data-aos-delay="300">
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                        <img src="https://images.pexels.com/photos/2607333/pexels-photo-2607333.jpeg" alt="Silat" class="h-72 w-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 flex items-end bg-gradient-to-t from-black/70 via-black/40 to-transparent p-6 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        <div class="translate-y-4 transform transition-transform duration-300 group-hover:translate-y-0">
                            <h3 class="mb-1 text-xl font-bold text-white">Latihan Silat</h3>
                            <p class="text-sm text-gray-200">Beladiri tradisional</p>
                        </div>
                    </div>
                    <div class="absolute right-4 top-4">
                        <span class="rounded-full bg-blue-600 px-3 py-1 text-xs font-semibold text-white">Ekstrakurikuler</span>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg transition-all duration-500 hover:shadow-xl" data-aos="fade-up" data-aos-delay="400">
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                        <img src="https://images.pexels.com/photos/2607244/pexels-photo-2607244.jpeg" alt="Qiroah" class="h-72 w-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 flex items-end bg-gradient-to-t from-black/70 via-black/40 to-transparent p-6 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        <div class="translate-y-4 transform transition-transform duration-300 group-hover:translate-y-0">
                            <h3 class="mb-1 text-xl font-bold text-white">Membaca Al-Quran</h3>
                            <p class="text-sm text-gray-200">Kegiatan harian siswa</p>
                        </div>
                    </div>
                    <div class="absolute right-4 top-4">
                        <span class="rounded-full bg-purple-600 px-3 py-1 text-xs font-semibold text-white">Akademik</span>
                    </div>
                </div>

                <!-- Item 6 -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg transition-all duration-500 hover:shadow-xl" data-aos="fade-up" data-aos-delay="500">
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                        <img src="https://images.pexels.com/photos/1397548/pexels-photo-1397548.jpeg" alt="Kaligrafi" class="h-72 w-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 flex items-end bg-gradient-to-t from-black/70 via-black/40 to-transparent p-6 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        <div class="translate-y-4 transform transition-transform duration-300 group-hover:translate-y-0">
                            <h3 class="mb-1 text-xl font-bold text-white">Latihan Kaligrafi</h3>
                            <p class="text-sm text-gray-200">Seni menulis arab indah</p>
                        </div>
                    </div>
                    <div class="absolute right-4 top-4">
                        <span class="rounded-full bg-blue-600 px-3 py-1 text-xs font-semibold text-white">Ekstrakurikuler</span>
                    </div>
                </div> --}}
            </div>

            <!-- Load More Button -->
            {{-- <div class="mt-12 text-center" data-aos="fade-up">
                <button class="rounded-full bg-white px-8 py-3 font-semibold text-blue-600 shadow-md transition-all hover:bg-blue-50 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Lihat Lebih Banyak
                </button>
            </div> --}}
        </div>
    </section>

    <!-- Floating Action Button -->
    <div class="fixed bottom-8 right-8 z-50">
        <button class="flex h-14 w-14 items-center justify-center rounded-full bg-blue-600 text-white shadow-lg transition-all hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
        </button>
    </div>
</x-layouts.app>
