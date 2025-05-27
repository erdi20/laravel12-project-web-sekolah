<x-layouts.app>
    <section class="py-16 md:py-24 bg-gray-50 relative z-10">
        <div class="container mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-12 xl:gap-16">

                <div class="lg:col-span-3 bg-white p-8 md:p-10 rounded-xl shadow-lg" data-aos="fade-up" data-aos-duration="800">

                    <h1 class="text-4xl sm:text-5xl lg:text-5xl font-extrabold text-gray-900 leading-tight mb-6" data-aos="fade-down" data-aos-delay="100">
                        Siswa SMPN 1 Cerdas Raih Juara Olimpiade Sains Nasional
                    </h1>

                    <div class="flex items-center space-x-6 text-sm text-gray-600 font-medium border-b pb-4 mb-8" data-aos="fade-up" data-aos-delay="200">
                        <div class="flex items-center">
                            <i class="far fa-calendar-alt text-blue-500 mr-2"></i>
                            <span>25 April 2025</span>
                        </div>
                        <div class="flex items-center">
                            <i class="far fa-user text-blue-500 mr-2"></i>
                            <span>Oleh: Admin Sekolah</span>
                        </div>
                    </div>

                    <figure class="mb-8 rounded-lg overflow-hidden shadow-lg transform transition-transform duration-500 hover:scale-[1.01]" data-aos="zoom-in" data-aos-delay="300">
                        <img src="https://images.unsplash.com/photo-1581090722127-1fadcf408b5f?auto=format&fit=crop&w=1200&q=80"
                            alt="Siswa Raih Juara Olimpiade Sains Nasional"
                            class="w-full h-80 md:h-96 object-cover object-center">
                        <figcaption class="p-4 text-sm text-gray-500 text-center bg-gray-100">
                            Tim sains SMPN 1 Cerdas berhasil meraih juara pertama di ajang OSN.
                        </figcaption>
                    </figure>

                    <article class="prose prose-lg max-w-none text-gray-800 leading-relaxed space-y-6" data-aos="fade-up" data-aos-delay="400">
                        <p>
                            Prestasi membanggakan diraih oleh tim sains SMPN 1 Cerdas pada ajang **Olimpiade Sains Nasional (OSN)** tingkat nasional di Jakarta. Setelah melalui tahap seleksi ketat di tingkat kota dan provinsi, tim ini berhasil menjadi juara pertama dalam kompetisi OSN bidang IPA.
                        </p>
                        <p>
                            Kompetisi yang diselenggarakan oleh Kementerian Pendidikan dan Kebudayaan tersebut diikuti oleh ratusan peserta dari seluruh Indonesia. Tim SMPN 1 Cerdas yang terdiri dari tiga siswa, yakni **Andi Prasetyo, Budi Santoso, dan Citra Lestari**, mampu bersaing dengan strategi yang matang dan persiapan yang luar biasa.
                        </p>
                        <blockquote class="border-l-4 border-blue-500 pl-4 py-2 italic text-gray-700 bg-blue-50 p-4 rounded-md">
                            "Kami sangat bangga atas pencapaian ini. Prestasi ini membuktikan bahwa siswa-siswi kita tidak hanya unggul secara akademis, tetapi juga memiliki semangat pantang menyerah."
                            <footer class="mt-2 text-sm text-gray-500 not-italic">- Ibu Dr. Hani Susanti, Kepala Sekolah</footer>
                        </blockquote>
                        <p>
                            Dalam kesempatan yang sama, salah satu anggota tim, Andi Prasetyo, mengungkapkan rasa syukurnya. "Kami latihan setiap hari setelah sekolah, dibimbing langsung oleh guru pembina kami. Ini adalah kerja keras semua pihak," tuturnya.
                        </p>
                        <p>
                            Rencananya, tim akan diberikan penghargaan khusus dalam upacara bendera minggu depan. **Selamat dan jaya terus untuk tim sains SMPN 1 Cerdas!**
                        </p>
                    </article>

                    <div class="mt-10 pt-6 border-t flex flex-wrap items-center gap-3" data-aos="fade-up" data-aos-delay="500">
                        <span class="text-gray-700 font-semibold text-base mr-2">Tags:</span>
                        <span class="bg-blue-100 text-blue-700 text-sm px-4 py-2 rounded-full font-medium transition-colors duration-300 hover:bg-blue-200 cursor-pointer">#PrestasiSiswa</span>
                        <span class="bg-indigo-100 text-indigo-700 text-sm px-4 py-2 rounded-full font-medium transition-colors duration-300 hover:bg-indigo-200 cursor-pointer">#Olimpiade</span>
                        <span class="bg-green-100 text-green-700 text-sm px-4 py-2 rounded-full font-medium transition-colors duration-300 hover:bg-green-200 cursor-pointer">#Sains</span>
                    </div>

                    <div class="mt-12 text-center" data-aos="fade-up" data-aos-delay="600">
                        <a href="{{ url('berita') }}"
                            class="inline-flex items-center px-8 py-4 bg-blue-600 text-white font-semibold rounded-full shadow-lg hover:bg-blue-700 transition-all duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300">
                            <i class="fas fa-arrow-left mr-3"></i>
                            Kembali ke Portal Berita
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-1" data-aos="fade-left" data-aos-delay="200" data-aos-duration="800">
                    <div class="bg-white rounded-xl shadow-lg sticky top-8 p-6 md:p-8">
                        <h4 class="font-bold text-xl text-gray-800 mb-6 border-b pb-3">Cari Berita</h4>
                        <form class="mb-8">
                            <input type="text" placeholder="Cari..."
                                class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-300">
                        </form>

                        <h4 class="font-bold text-xl text-gray-800 mb-6 border-b pb-3">Berita Terbaru Lainnya</h4>
                        <ul class="space-y-6">
                            <li>
                                <a href="#" class="block hover:text-blue-600 transition-colors duration-300">
                                    <h5 class="text-base font-semibold text-gray-800 leading-snug">Lomba Debat Bahasa Indonesia Tingkat Kota</h5>
                                    <span class="text-xs text-gray-500 mt-1 block">23 April 2025</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block hover:text-blue-600 transition-colors duration-300">
                                    <h5 class="text-base font-semibold text-gray-800 leading-snug">Pelantikan OSIS Periode 2025</h5>
                                    <span class="text-xs text-gray-500 mt-1 block">20 April 2025</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block hover:text-blue-600 transition-colors duration-300">
                                    <h5 class="text-base font-semibold text-gray-800 leading-snug">Penyuluhan Kesehatan Mental di Sekolah</h5>
                                    <span class="text-xs text-gray-500 mt-1 block">12 April 2025</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block hover:text-blue-600 transition-colors duration-300">
                                    <h5 class="text-base font-semibold text-gray-800 leading-snug">Kunjungan Industri ke PT Teknologi Cerdas</h5>
                                    <span class="text-xs text-gray-500 mt-1 block">23 April 2025</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
