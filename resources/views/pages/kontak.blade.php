<x-layouts.app title="Kontak - MI Islamiyah Banjarpoh">
    <section class="relative overflow-hidden bg-gradient-to-br from-blue-900 to-indigo-900 py-28 md:py-36">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?q=80&w=1471&auto=format&fit=crop')] bg-cover bg-center opacity-20"></div>
        <div class="container relative z-10 mx-auto px-4 text-center sm:px-6 lg:px-8"> {{-- Ubah px-6 menjadi px-4 sm:px-6 lg:px-8 untuk responsivitas yang lebih standar --}}
            <h1 class="animate-fade-in-down mb-6 text-4xl font-bold text-white md:text-5xl">Hubungi Kami</h1> {{-- Tambahkan text-white --}}
            <div class="mx-auto mb-8 h-1.5 w-24 rounded-full bg-yellow-400"></div>
            <p class="animate-fade-in-up mx-auto max-w-3xl text-lg leading-relaxed text-blue-100 md:text-xl">
                Kami siap membantu Anda. Hubungi kami melalui berbagai cara berikut ini.
            </p>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-12 bg-gradient-to-t from-gray-900/50 to-transparent"></div>
    </section>

    <section class="bg-gray-50 py-16 md:py-24">
        {{-- Pastikan container utama ini memiliki lebar maksimum dan overflow-x-hidden --}}
        <div class="container mx-auto overflow-x-hidden px-4 sm:px-6 lg:px-8"> {{-- Tambahkan sm:px-6 dan overflow-x-hidden --}}
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-3 lg:gap-12">
                <div class="space-y-6">
                    <div class="rounded-2xl bg-white p-6 shadow-lg transition-shadow duration-300 hover:shadow-xl" data-aos="fade-right">
                        <div class="flex items-start">
                            <div class="mr-4 rounded-xl bg-blue-100 p-3 text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="mb-1 text-xl font-bold text-gray-800">Alamat Sekolah</h3>
                                <p class="text-gray-600">{{ $school->address }}</p>
                                <a class="mt-3 flex items-center text-sm font-medium text-blue-600 transition-colors hover:text-blue-800" href='#peta'>
                                    Lihat di Peta <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl bg-white p-6 shadow-lg transition-shadow duration-300 hover:shadow-xl" data-aos="fade-right" data-aos-delay="100">
                        <div class="flex items-start">
                            <div class="mr-4 rounded-xl bg-green-100 p-3 text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="mb-1 text-xl font-bold text-gray-800">Telepon</h3>
                                <p class="text-gray-600">{{ $school->phone }}</p>
                                <div class="mt-3 flex space-x-3">
                                    {{-- Gunakan $school->phone untuk link telepon --}}
                                    <a href="tel:{{ $school->phone }}" class="rounded-full bg-blue-600 px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-blue-700">
                                        Telepon Sekarang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl bg-white p-6 shadow-lg transition-shadow duration-300 hover:shadow-xl" data-aos="fade-right" data-aos-delay="200">
                        <div class="flex items-start">
                            <div class="mr-4 rounded-xl bg-purple-100 p-3 text-purple-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="mb-1 text-xl font-bold text-gray-800">Email</h3>
                                <p class="text-gray-600">{{ $school->email }}</p>
                                {{-- Gunakan $school->email untuk link email --}}
                                <a href="mailto:{{ $school->email }}" class="mt-3 text-sm font-medium text-blue-600 transition-colors hover:text-blue-800">
                                    Kirim Email
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl bg-white p-6 shadow-lg transition-shadow duration-300 hover:shadow-xl" data-aos="fade-right" data-aos-delay="300">
                        <h3 class="mb-4 text-xl font-bold text-gray-800">Media Sosial</h3>
                        <div class="flex space-x-4">
                            {{-- Perbarui link social media --}}
                            @if ($school->facebook)
                                <a href="{{ $school->facebook }}" target="_blank" rel="noopener noreferrer" class="flex h-10 w-10 items-center justify-center rounded-full bg-blue-600 text-white transition-colors hover:bg-blue-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z" />
                                    </svg>
                                </a>
                            @endif
                            @if ($school->instagram)
                                <a href="{{ $school->instagram }}" target="_blank" rel="noopener noreferrer" class="flex h-10 w-10 items-center justify-center rounded-full bg-pink-600 text-white transition-colors hover:bg-pink-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                    </svg>
                                </a>
                            @endif
                            @if ($school->youtube)
                                <a href="{{ $school->youtube }}" target="_blank" rel="noopener noreferrer" class="flex h-10 w-10 items-center justify-center rounded-full bg-blue-500 text-white transition-colors hover:bg-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
                                    </svg>
                                </a>
                            @endif
                            @if ($school->whatsapp)
                                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $school->whatsapp) }}" target="_blank" rel="noopener noreferrer" class="flex h-10 w-10 items-center justify-center rounded-full bg-green-500 text-white transition-colors hover:bg-green-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.479 5.093 1.479 2.396 0 4.6-1.074 6.06-2.963 1.46-1.889 2.2-4.375 2.199-7.032v-.002c-.001-2.595-1.073-4.99-2.82-6.693-1.747-1.703-4.184-2.638-6.663-2.637-2.5.001-4.999-4.943-4.999-7.448 0-2.507 2.051-4.548 4.565-4.548 2.518 0 4.57 2.054 4.57 4.552 0 1.922-1.186 3.617-3.015 4.231l.803 3.424c.555-.246 1.154-.368 1.733-.368 1.491 0 2.732 1.016 3.05 2.391l1.436 5.425c.166.609.24 1.224.24 1.833-.006 3.405-2.772 6.181-6.17 6.181-1.199 0-2.348-.31-3.36-.918l-.436-.265z" />
                                    </svg>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-2" data-aos="fade-left">
                    <div class="rounded-2xl bg-white p-8 shadow-lg">
                        <h3 class="mb-2 text-2xl font-bold text-gray-800">Kirim Pesan Langsung</h3>
                        <p class="mb-6 text-gray-600">Isi form berikut dan kami akan segera merespon pesan Anda</p>

                        <form class="space-y-6" method="POST" action="{{ url('/kirimpesan') }}">
                            @csrf
                            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                                <div>
                                    <label for="name" class="mb-1 block text-sm font-medium text-gray-700">Nama Lengkap <span class="text-red-500">*</span></label>
                                    <input type="text" id="name" name="name" required class="w-full rounded-lg border border-gray-300 px-4 py-3 transition-all focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                                <div>
                                    <label for="email" class="mb-1 block text-sm font-medium text-gray-700">Alamat Email <span class="text-red-500">*</span></label>
                                    <input type="email" id="email" name="email" required class="w-full rounded-lg border border-gray-300 px-4 py-3 transition-all focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                            </div>

                            <div>
                                <label for="subject" class="mb-1 block text-sm font-medium text-gray-700">Subjek <span class="text-red-500">*</span></label>
                                <input type="text" id="subject" name="subject" required class="w-full rounded-lg border border-gray-300 px-4 py-3 transition-all focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>

                            <div>
                                <label for="message" class="mb-1 block text-sm font-medium text-gray-700">Pesan Anda <span class="text-red-500">*</span></label>
                                <textarea id="message" name="message" rows="5" required class="w-full rounded-lg border border-gray-300 px-4 py-3 transition-all focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                            </div>

                            {{-- <div class="flex items-center">
                                <input type="checkbox" id="consent" name="consent" required
                                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                <label for="consent" class="ml-2 block text-sm text-gray-700">
                                    Saya setuju dengan <a href="#" class="text-blue-600 hover:underline">kebijakan privasi</a> dan <a href="#" class="text-blue-600 hover:underline">persyaratan</a>
                                </label>
                            </div> --}}

                            <button type="submit" class="w-full rounded-lg bg-gradient-to-r from-blue-600 to-indigo-600 px-6 py-3 font-medium text-white shadow-md transition-all hover:from-blue-700 hover:to-indigo-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                Kirim Pesan
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="mt-16" data-aos="zoom-in">
                <div class="mb-6 flex items-center justify-between">
                    <h3 class="text-2xl font-bold text-gray-800">Lokasi Kami</h3>
                    {{-- Perbaiki URL Google Maps --}}
                    <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($school->address) }}" target="_blank" class="flex items-center font-medium text-blue-600 hover:text-blue-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Buka di Google Maps
                    </a>
                </div>
                <div class="h-96 w-full overflow-hidden rounded-2xl shadow-xl" id="peta">
                    {{-- Perbaiki URL Google Maps Embed --}}
                    <iframe src="https://maps.google.com/maps?q={{ urlencode($school->address) }}&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
