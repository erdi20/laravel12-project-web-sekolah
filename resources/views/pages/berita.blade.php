<x-layouts.app>
    <section class="relative overflow-hidden bg-gradient-to-br from-blue-700 to-indigo-800 py-24 text-white sm:py-32">
        <div class="container relative z-10 mx-auto px-6 text-center">
            <h1 class="mb-6 text-5xl font-extrabold" data-aos="fade-down">
                Berita Terkini SMPN 1 Cerdas
            </h1>
            <p class="mx-auto max-w-3xl text-xl leading-relaxed md:text-2xl" data-aos="fade-up" data-aos-delay="100">
                Dapatkan informasi terbaru seputar kegiatan sekolah, prestasi siswa, dan berbagai pengumuman penting.
            </p>
        </div>
        <div class="absolute inset-0 bg-gradient-to-br from-blue-700 to-indigo-800 opacity-50"></div>
        <div class="absolute bottom-0 left-0 right-0 h-48 bg-gradient-to-t from-indigo-800 to-transparent"></div>
    </section>

    <section class="relative overflow-hidden bg-gray-100 py-24">
        <div class="container mx-auto px-6">
            <div class="flex flex-col gap-12 lg:flex-row">

                <div class="lg:w-3/4">
                    <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
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

                        {{-- <div class="group relative overflow-hidden rounded-xl shadow-md bg-white transition-transform duration-300 hover:scale-105 hover:shadow-xl" data-aos="fade-up" data-aos-delay="100">
                            <img src="https://images.unsplash.com/photo-1581090464777-f3220bbe1b8b?auto=format&fit=crop&w=800&q=80" alt="Berita 2" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110 group-hover:brightness-75">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100 flex flex-col justify-end p-6">
                                <span class="text-sm text-gray-300 mb-1">23 April 2025</span>
                                <h3 class="text-lg font-semibold text-white line-clamp-2 group-hover:text-blue-300 transition-colors duration-300">
                                    Kunjungan Industri ke PT Teknologi Cerdas
                                </h3>
                                <p class="text-sm text-gray-300 leading-relaxed mt-2 line-clamp-3">
                                    Ratusan siswa SMPN 1 Cerdas melakukan kunjungan industri untuk mengenal dunia kerja lebih dekat.
                                </p>
                                <a href="#" class="mt-4 inline-block text-blue-300 hover:underline text-sm font-medium">Baca Selengkapnya →</a>
                            </div>
                        </div>

                        <div class="group relative overflow-hidden rounded-xl shadow-md bg-white transition-transform duration-300 hover:scale-105 hover:shadow-xl" data-aos="fade-up" data-aos-delay="200">
                            <img src="https://images.unsplash.com/photo-1580237541-091c4035a2c8?auto=format&fit=crop&w=800&q=80" alt="Berita 3" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110 group-hover:brightness-75">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100 flex flex-col justify-end p-6">
                                <span class="text-sm text-gray-300 mb-1">20 April 2025</span>
                                <h3 class="text-lg font-semibold text-white line-clamp-2 group-hover:text-blue-300 transition-colors duration-300">
                                    Pelantikan OSIS Periode 2025
                                </h3>
                                <p class="text-sm text-gray-300 leading-relaxed mt-2 line-clamp-3">
                                    Upacara pelantikan pengurus OSIS baru dilangsungkan dengan khidmat dan penuh semangat.
                                </p>
                                <a href="#" class="mt-4 inline-block text-blue-300 hover:underline text-sm font-medium">Baca Selengkapnya →</a>
                            </div>
                        </div>

                        <div class="group relative overflow-hidden rounded-xl shadow-md bg-white transition-transform duration-300 hover:scale-105 hover:shadow-xl" data-aos="fade-up" data-aos-delay="300">
                            <img src="https://images.unsplash.com/photo-1581093588401-04f23be8ca32?auto=format&fit=crop&w=800&q=80" alt="Berita 4" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110 group-hover:brightness-75">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100 flex flex-col justify-end p-6">
                                <span class="text-sm text-gray-300 mb-1">18 April 2025</span>
                                <h3 class="text-lg font-semibold text-white line-clamp-2 group-hover:text-blue-300 transition-colors duration-300">
                                    Lomba Debat Bahasa Indonesia Tingkat Kota
                                </h3>
                                <p class="text-sm text-gray-300 leading-relaxed mt-2 line-clamp-3">
                                    Tim debat SMPN 1 Cerdas menorehkan hasil gemilang dalam lomba bahasa Indonesia antar SMP se-kota.
                                </p>
                                <a href="#" class="mt-4 inline-block text-blue-300 hover:underline text-sm font-medium">Baca Selengkapnya →</a>
                            </div>
                        </div>

                        <div class="group relative overflow-hidden rounded-xl shadow-md bg-white transition-transform duration-300 hover:scale-105 hover:shadow-xl" data-aos="fade-up" data-aos-delay="400">
                            <img src="https://images.unsplash.com/photo-1522071898568-38e1bc6ceeb4?auto=format&fit=crop&w=800&q=80" alt="Berita 5" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110 group-hover:brightness-75">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100 flex flex-col justify-end p-6">
                                <span class="text-sm text-gray-300 mb-1">15 April 2025</span>
                                <h3 class="text-lg font-semibold text-white line-clamp-2 group-hover:text-blue-300 transition-colors duration-300">
                                    Pembukaan Festival Seni dan Budaya Sekolah
                                </h3>
                                <p class="text-sm text-gray-300 leading-relaxed mt-2 line-clamp-3">
                                    Festival seni dan budaya digelar sebagai wadah ekspresi kreativitas siswa selama satu semester.
                                </p>
                                <a href="#" class="mt-4 inline-block text-blue-300 hover:underline text-sm font-medium">Baca Selengkapnya →</a>
                            </div>
                        </div>

                        <div class="group relative overflow-hidden rounded-xl shadow-md bg-white transition-transform duration-300 hover:scale-105 hover:shadow-xl" data-aos="fade-up" data-aos-delay="500">
                            <img src="https://images.unsplash.com/photo-1581093588405-6c818784fee7?auto=format&fit=crop&w=800&q=80" alt="Berita 6" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110 group-hover:brightness-75">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100 flex flex-col justify-end p-6">
                                <span class="text-sm text-gray-300 mb-1">12 April 2025</span>
                                <h3 class="text-lg font-semibold text-white line-clamp-2 group-hover:text-blue-300 transition-colors duration-300">
                                    Penyuluhan Kesehatan Mental di Sekolah
                                </h3>
                                <p class="text-sm text-gray-300 leading-relaxed mt-2 line-clamp-3">
                                    Sekolah bekerja sama dengan psikolog profesional dalam memberikan penyuluhan tentang kesehatan mental kepada siswa.
                                </p>
                                <a href="#" class="mt-4 inline-block text-blue-300 hover:underline text-sm font-medium">Baca Selengkapnya →</a>
                            </div>
                        </div> --}}

                    </div>
                </div>

                <div class="lg:w-1/4">
                    <div class="sticky top-24 rounded-xl bg-white p-6 shadow-md">
                        <h4 class="mb-4 border-b pb-2 text-lg font-bold">Cari Berita</h4>
                        <form class="mb-6" method="GET" action="{{ url('search') }}">
                            <input name="search" type="text" value="{{ request('search') }}" placeholder="Cari..." class="w-full rounded-md border px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-400">
                            <button type="submit" class="sr-only">Cari</button>
                        </form>

                        <h4 class="mb-4 border-b pb-2 text-lg font-bold">Kategori</h4>
                        <ul class="space-y-3 text-sm text-gray-700">
                            @foreach ($kategori as $item)
                                <li>
                                    <a href="{{ url('kategoriberita/' . $item->slug) }}" class="relative z-30 block transition-colors duration-300 hover:text-blue-600">{{ $item->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                {{-- <li><a href="#" class="transition-colors duration-300 hover:text-blue-600">Kegiatan Sekolah</a></li>
                <li><a href="#" class="transition-colors duration-300 hover:text-blue-600">Ekstrakurikuler</a></li>
                <li><a href="#" class="transition-colors duration-300 hover:text-blue-600">Pengumuman</a></li>
                <li><a href="#" class="transition-colors duration-300 hover:text-blue-600">Artikel Pendidikan</a></li> --}}

            </div>
        </div>
    </section>
</x-layouts.app>
