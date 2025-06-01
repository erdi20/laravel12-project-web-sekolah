<x-layouts.app>
    <section class="relative z-10 bg-gradient-to-br from-blue-900 to-gray-900 py-16 md:py-24">
        <div class="container mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-4 xl:gap-16">

                <div class="rounded-xl bg-white p-8 shadow-lg md:p-10 lg:col-span-3" data-aos="fade-up" data-aos-duration="800">

                    <h1 class="mb-6 text-4xl font-extrabold leading-tight text-gray-900 sm:text-5xl lg:text-5xl" data-aos="fade-down" data-aos-delay="100">
                        {{ $berita->title }}
                    </h1>

                    <div class="mb-8 flex items-center space-x-6 border-b pb-4 text-sm font-medium text-gray-600" data-aos="fade-up" data-aos-delay="200">
                        <div class="flex items-center">
                            <i class="far fa-calendar-alt mr-2 text-blue-500"></i>
                            <span>{{ $berita->created_at->format('d M Y') }}</span>
                        </div>
                        <div class="flex items-center">
                            <i class="far fa-user mr-2 text-blue-500"></i>
                            <span>Oleh: {{ $berita->user->name }}</span>
                        </div>
                    </div>

                    <figure class="mb-8 transform overflow-hidden rounded-lg shadow-lg transition-transform duration-500 hover:scale-[1.01]" data-aos="zoom-in" data-aos-delay="300">
                        <img src="{{ asset('storage/' . $berita->image) }}" alt="{{ $berita->title }}" class="h-80 w-full object-cover object-center md:h-96">
                        <figcaption class="bg-gray-100 p-4 text-center text-sm text-gray-500">
                            {{ $berita->summary }}
                        </figcaption>
                    </figure>

                    <article class="prose prose-lg max-w-none space-y-6 leading-relaxed text-gray-800" data-aos="fade-up" data-aos-delay="400">
                        {!! str($berita->content)->sanitizeHtml() !!}
                    </article>

                    {{-- <div class="mt-10 pt-6 border-t flex flex-wrap items-center gap-3" data-aos="fade-up" data-aos-delay="500">
                        <span class="text-gray-700 font-semibold text-base mr-2">Tags:</span>
                        <span class="bg-blue-100 text-blue-700 text-sm px-4 py-2 rounded-full font-medium transition-colors duration-300 hover:bg-blue-200 cursor-pointer">#PrestasiSiswa</span>
                        <span class="bg-indigo-100 text-indigo-700 text-sm px-4 py-2 rounded-full font-medium transition-colors duration-300 hover:bg-indigo-200 cursor-pointer">#Olimpiade</span>
                        <span class="bg-green-100 text-green-700 text-sm px-4 py-2 rounded-full font-medium transition-colors duration-300 hover:bg-green-200 cursor-pointer">#Sains</span>
                    </div> --}}

                    <div class="mt-12 text-center" data-aos="fade-up" data-aos-delay="600">
                        <a href="{{ url('berita') }}" class="inline-flex transform items-center rounded-full bg-blue-600 px-8 py-4 font-semibold text-white shadow-lg transition-all duration-300 ease-in-out hover:-translate-y-1 hover:scale-105 hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                            <i class="fas fa-arrow-left mr-3"></i>
                            Kembali ke Portal Berita
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-1" data-aos="fade-left" data-aos-delay="200" data-aos-duration="800">
                    <div class="sticky top-8 rounded-xl bg-white p-6 shadow-lg md:p-8">
                        <h4 class="mb-6 border-b pb-3 text-xl font-bold text-gray-800">Cari Berita</h4>
                        <form class="mb-6" method="GET" action="{{ url('search') }}">
                            <input name="search" type="text" value="{{ request('search') }}" placeholder="Cari..." class="w-full rounded-md border px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-400">
                            <button type="submit" class="sr-only">Cari</button>
                        </form>

                        <h4 class="mb-6 border-b pb-3 text-xl font-bold text-gray-800">Berita Terbaru Lainnya</h4>
                        <ul class="space-y-6">
                            <li>
                                <a href="#" class="block transition-colors duration-300 hover:text-blue-600">
                                    <h5 class="text-base font-semibold leading-snug text-gray-800">Lomba Debat Bahasa Indonesia Tingkat Kota</h5>
                                    <span class="mt-1 block text-xs text-gray-500">23 April 2025</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block transition-colors duration-300 hover:text-blue-600">
                                    <h5 class="text-base font-semibold leading-snug text-gray-800">Pelantikan OSIS Periode 2025</h5>
                                    <span class="mt-1 block text-xs text-gray-500">20 April 2025</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block transition-colors duration-300 hover:text-blue-600">
                                    <h5 class="text-base font-semibold leading-snug text-gray-800">Penyuluhan Kesehatan Mental di Sekolah</h5>
                                    <span class="mt-1 block text-xs text-gray-500">12 April 2025</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block transition-colors duration-300 hover:text-blue-600">
                                    <h5 class="text-base font-semibold leading-snug text-gray-800">Kunjungan Industri ke PT Teknologi Cerdas</h5>
                                    <span class="mt-1 block text-xs text-gray-500">23 April 2025</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
