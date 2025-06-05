<x-layouts.app title="home">
    <!-- Hero Section -->
    <section class="hero-bg relative flex h-screen items-center justify-center text-white">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 mx-auto max-w-3xl px-4 text-center">
            <h2 class="mb-4 text-4xl font-bold md:text-6xl">Selamat Datang di <br>{{ $school->name ?? 'Sekolah' }}</h2>
            <p class="mb-6 text-lg md:text-xl">{{ $school->tagline ?? 'Tagline' }}</p>
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
                        {!! str($school->description)->sanitizeHtml() !!}
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
                @foreach ($fasilitas as $item)
                    <div class="group transform rounded-lg bg-white shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="zoom-in">
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama }}" {{-- Tambahkan alt text untuk aksesibilitas --}} class="h-48 w-full rounded-t-lg object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="p-6">
                            <h4 class="mb-2 text-xl font-bold text-blue-700">{{ $item->nama }}</h4>
                            <p class="text-gray-600"> {!! str($item->deskripsi)->sanitizeHtml() !!}</p>
                        </div>
                    </div>
                @endforeach

                {{-- <!-- Fasilitas 2 -->
                <div class="group transform rounded-lg bg-white shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="zoom-in" data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1581093588401-04f23be8ca32?auto=format&fit=crop&w=800&q=80 " alt="Laboratorium" class="h-48 w-full rounded-t-lg object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="p-6">
                        <h4 class="mb-2 text-xl font-bold text-blue-700">Laboratorium</h4>
                        <p class="text-gray-600">Lab IPA dan komputer dilengkapi teknologi modern untuk mendukung pembelajaran praktis.</p>
                    </div>
                </div> --}}

                <!-- Fasilitas 3 -->
                {{-- <div class="group transform rounded-lg bg-white shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl" data-aos="zoom-in" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1620714223084-8fcacc6dfd8d?auto=format&fit=crop&w=800&q=80 " alt="Ruang Kelas" class="h-48 w-full rounded-t-lg object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="p-6">
                        <h4 class="mb-2 text-xl font-bold text-blue-700">Ruang Kelas</h4>
                        <p class="text-gray-600">Kelas bersih, nyaman, dan ber-AC mendukung proses belajar yang optimal.</p>
                    </div>
                </div> --}}

            </div>
        </div>
    </section>

    <!-- Galeri -->
    <section id="galeri" class="bg-white py-20">
        <div class="container mx-auto px-6">
            <h3 class="mb-12 text-center text-3xl font-bold" data-aos="fade-up">Galeri</h3>
            <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
                @foreach ($galeri as $item)
                    <!-- Item 1 -->
                    <div class="group relative overflow-hidden rounded-xl shadow-lg transition-all duration-500 hover:shadow-xl" data-aos="fade-up" {{ $item->id }}>
                        <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="Pramuka" class="h-72 w-full object-cover transition-transform duration-700 group-hover:scale-110">
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
            </div>
        </div>
    </section>

    <!-- Berita -->
    <section id="berita" class="bg-gray-100 py-20">
        <div class="container mx-auto px-6">
            <h3 class="mb-12 text-center text-3xl font-bold" data-aos="fade-up">Berita Terbaru</h3>
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                @foreach ($berita as $item)
                    <div data="{{ $item->id }}" class="group relative overflow-hidden rounded-xl bg-white shadow-md transition-transform duration-300 hover:scale-105 hover:shadow-xl" data-aos="fade-up">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="h-64 w-full object-cover transition-transform duration-500 group-hover:scale-110 group-hover:brightness-75">

                        <div class="absolute inset-0 flex flex-col justify-end bg-gradient-to-t from-black/80 via-black/40 to-transparent p-6 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            <span class="mb-1 text-sm text-gray-300">{{ $item->created_at->format('d M Y') }}</span>
                            <h3 class="line-clamp-2 text-lg font-semibold text-white transition-colors duration-300 group-hover:text-blue-300">
                                {{ $item->title }}
                            </h3>
                            <p class="mt-2 line-clamp-3 text-sm leading-relaxed text-gray-300">
                                {{ $item->summary }}

                            </p>
                            <!-- Tambahkan ini di blade template -->
                            {{-- {{ dd(url('beritadetail/' . $item->id)) }} --}}
                            <a href="/beritadetail/{{ $item->slug }}" class="relative z-10 mt-4 inline-block text-sm font-medium text-blue-300 hover:underline">Baca Selengkapnya →</a>
                        </div>

                        {{-- Ini adalah "stretched link" yang membuat seluruh card bisa diklik --}}
                        <a href="/beritadetail/{{ $item->slug }}" class="absolute inset-0 z-[5] cursor-pointer"></a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layouts.app>
