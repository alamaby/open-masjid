<?= $this->extend('layout/landing') ?>

<?= $this->section('content') ?>

<div class="bg-background-light dark:bg-background-dark py-12">
    <div class="max-w-[1200px] mx-auto px-6">
        <!-- Hero Search Section -->
        <div class="flex flex-col items-center justify-center text-center py-12">
            <h1 class="text-3xl md:text-4xl font-black tracking-tight mb-8 text-[#121614] dark:text-white">Pusat Bantuan & Tutorial Masj.id</h1>
            <div class="w-full max-w-2xl">
                <div class="relative group">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400 group-focus-within:text-primary">
                        <span class="material-symbols-outlined">search</span>
                    </div>
                    <input class="w-full h-14 pl-12 pr-4 bg-white dark:bg-gray-800 border-none rounded-xl shadow-lg ring-1 ring-gray-200 dark:ring-gray-700 focus:ring-2 focus:ring-primary outline-none text-lg transition-all" placeholder="Bagaimana kami bisa membantu Anda?" type="text"/>
                </div>
            </div>
        </div>

        <!-- Help Categories Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-12">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-md hover:border-primary/30 transition-all cursor-pointer group">
                <div class="size-12 bg-primary/10 rounded-lg flex items-center justify-center text-primary mb-4 group-hover:bg-primary group-hover:text-white transition-colors">
                    <span class="material-symbols-outlined">app_registration</span>
                </div>
                <h3 class="font-bold text-lg mb-1">Pendaftaran Masjid</h3>
                <p class="text-sm text-gray-500 dark:text-gray-400">Langkah awal aktivasi akun masjid Anda</p>
            </div>
            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-md hover:border-primary/30 transition-all cursor-pointer group">
                <div class="size-12 bg-primary/10 rounded-lg flex items-center justify-center text-primary mb-4 group-hover:bg-primary group-hover:text-white transition-colors">
                    <span class="material-symbols-outlined">account_balance_wallet</span>
                </div>
                <h3 class="font-bold text-lg mb-1">Manajemen Keuangan</h3>
                <p class="text-sm text-gray-500 dark:text-gray-400">Panduan kelola donasi dan laporan kas</p>
            </div>
            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-md hover:border-primary/30 transition-all cursor-pointer group">
                <div class="size-12 bg-primary/10 rounded-lg flex items-center justify-center text-primary mb-4 group-hover:bg-primary group-hover:text-white transition-colors">
                    <span class="material-symbols-outlined">group</span>
                </div>
                <h3 class="font-bold text-lg mb-1">Pendataan Jamaah</h3>
                <p class="text-sm text-gray-500 dark:text-gray-400">Kelola database profil jamaah digital</p>
            </div>
            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-md hover:border-primary/30 transition-all cursor-pointer group">
                <div class="size-12 bg-primary/10 rounded-lg flex items-center justify-center text-primary mb-4 group-hover:bg-primary group-hover:text-white transition-colors">
                    <span class="material-symbols-outlined">language</span>
                </div>
                <h3 class="font-bold text-lg mb-1">Pengaturan Domain</h3>
                <p class="text-sm text-gray-500 dark:text-gray-400">Setup subdomain kustom masj.id/anda</p>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Main Content: Video Tutorials -->
            <div class="flex-1">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold">Panduan Video Penggunaan</h2>
                    <a class="text-primary text-sm font-semibold hover:underline" href="#">Lihat Semua Video</a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Video Card 1 -->
                    <div class="group cursor-pointer">
                        <div class="relative aspect-video rounded-xl overflow-hidden bg-gray-200 mb-3 video-thumbnail">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCdV0pa1DgbohTdw8e-3yJFeCv3yjVS05-KlW9X6N0QvIqYsS3Y4kmbJTdLY76W2aO4lRcJBiZXOo0TgUut8OKmIy1_K_V0VFAtj9IfziuZSgwSThSRamQkjlnJukKKOZWY_UejTWLUb_zuad3gQ3C7cRw_jPOk1soOB6OLARJEnKyo0LzlMHJYe0URJwWWIaGlSDMPBcYR--PdC0XhPBLNHBwebL3lnYjXhmm3VBGeTMvjgJ2RWXRq1Ar7ixPEgsFfMEZkSzIuSnbA" alt="Aktivasi Domain"/>
                            <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <div class="size-14 bg-primary text-white rounded-full flex items-center justify-center shadow-lg">
                                    <span class="material-symbols-outlined text-3xl">play_arrow</span>
                                </div>
                            </div>
                            <div class="absolute bottom-3 right-3 bg-black/70 text-white text-xs px-2 py-1 rounded">05:24</div>
                            <div class="absolute top-3 left-3 bg-primary text-white text-[10px] font-bold px-2 py-0.5 rounded-full uppercase tracking-wider">Terpopuler</div>
                        </div>
                        <h4 class="font-bold group-hover:text-primary transition-colors">Cara Aktivasi Domain masj.id/nama-masjid</h4>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Langkah lengkap menghubungkan subdomain masjid Anda.</p>
                    </div>
                    <!-- Video Card 2 -->
                    <div class="group cursor-pointer">
                        <div class="relative aspect-video rounded-xl overflow-hidden bg-gray-200 mb-3 video-thumbnail">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDDp-uCC3WrT7J9lT6cjLXYZUDTpLExfxL6DcfjfoZoSGIPzHOf94LAjm_1VrVD6CAsD202QF8p4g7LzxWEPTbeXjh38mPdPkUHbXX86ZBmKyx5ojHOmgPm537UHbac60v5kedHeorU09pULv2c10ogTjgJYh0m1IBu4L9vdvpohmrxIAnE7dBVUy09MOH87oQlpoxIphIbu5Pb-S81-9FV-wIJfJktqFHIYoEjLcr7818f7v8liJyM1VbnPR8nL5xjzxOCBH4YKoKg" alt="Laporan Keuangan"/>
                            <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <div class="size-14 bg-primary text-white rounded-full flex items-center justify-center shadow-lg">
                                    <span class="material-symbols-outlined text-3xl">play_arrow</span>
                                </div>
                            </div>
                            <div class="absolute bottom-3 right-3 bg-black/70 text-white text-xs px-2 py-1 rounded">08:12</div>
                        </div>
                        <h4 class="font-bold group-hover:text-primary transition-colors">Input Laporan Keuangan Mingguan</h4>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Tutorial mencatat pemasukan dan pengeluaran kas masjid.</p>
                    </div>
                    <!-- Video Card 3 -->
                    <div class="group cursor-pointer">
                        <div class="relative aspect-video rounded-xl overflow-hidden bg-gray-200 mb-3 video-thumbnail">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB6is3bu4OALs3BPvhZFQ7NWShVOuopVw-ryrSjwTMZ8Kn65LeMkUIMEPtJSyH_l5_RpnUThLvaJZzQLWp2lSNFj289pCpj5Z-wkt8mbr_pBu8QAEkI3QiImM1xI-TV7qonyiP2avE5I2IRwO6rizdSf6siYl54xzyedbKKaSEh3ijfdyLBCzmXNS1ZNCxLIrCBgl7QzvBVns4mXt-K3ZO9nKQ8Kl-M-JxsdBghjCz7Cu1yKCPl0i-vNE6s36fRdfNbj_9pKIVOce-U" alt="Import Data"/>
                            <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <div class="size-14 bg-primary text-white rounded-full flex items-center justify-center shadow-lg">
                                    <span class="material-symbols-outlined text-3xl">play_arrow</span>
                                </div>
                            </div>
                            <div class="absolute bottom-3 right-3 bg-black/70 text-white text-xs px-2 py-1 rounded">04:45</div>
                        </div>
                        <h4 class="font-bold group-hover:text-primary transition-colors">Import Data Jamaah dari Excel</h4>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Pindahkan data jamaah lama Anda secara otomatis.</p>
                    </div>
                    <!-- Video Card 4 -->
                    <div class="group cursor-pointer">
                        <div class="relative aspect-video rounded-xl overflow-hidden bg-gray-200 mb-3 video-thumbnail">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA7IsCS6Z_tEKwhRq3ggd9wl-koGRgJrzQpIyuq6FLJNeP0kX7pSchax1O8bGCqJ1I0nWEZOnzdWIh08Ow8NXkbEHY8-ngurYd1wQ3NFcgJna8T4HkqbQ3fY8L0XqQzPnrl9KMdNiZDV-TNKjBHrKcAfU_JFhqoXf4zf49fVFugFPqEKJZuhYp6ZQuaTNZ5gqw-8yYQxSBDiN4zEl1MJuc-ppzuhz2VNB_qZwMpcfSbwrHVR-TTEYWvfAfWb3sjM4qqaRikS49_SZnc" alt="Kostumisasi Tampilan"/>
                            <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <div class="size-14 bg-primary text-white rounded-full flex items-center justify-center shadow-lg">
                                    <span class="material-symbols-outlined text-3xl">play_arrow</span>
                                </div>
                            </div>
                            <div class="absolute bottom-3 right-3 bg-black/70 text-white text-xs px-2 py-1 rounded">06:30</div>
                            <div class="absolute top-3 left-3 bg-blue-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-full uppercase tracking-wider">Baru</div>
                        </div>
                        <h4 class="font-bold group-hover:text-primary transition-colors">Kostumisasi Tampilan Website</h4>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Ganti warna, logo, dan tema website profil masjid Anda.</p>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <aside class="w-full lg:w-80 space-y-6">
                <!-- Popular Articles -->
                <div class="bg-white dark:bg-gray-800 rounded-xl border border-gray-100 dark:border-gray-700 p-6 shadow-sm">
                    <h3 class="text-lg font-bold mb-4">Artikel Populer</h3>
                    <ul class="space-y-4">
                        <li>
                            <a class="flex items-start gap-3 group" href="#">
                                <span class="material-symbols-outlined text-primary text-sm mt-1">description</span>
                                <span class="text-sm font-medium group-hover:text-primary transition-colors leading-snug">Cara reset password admin masjid</span>
                            </a>
                        </li>
                        <li>
                            <a class="flex items-start gap-3 group" href="#">
                                <span class="material-symbols-outlined text-primary text-sm mt-1">description</span>
                                <span class="text-sm font-medium group-hover:text-primary transition-colors leading-snug">Integrasi QRIS untuk donasi masjid</span>
                            </a>
                        </li>
                        <li>
                            <a class="flex items-start gap-3 group" href="#">
                                <span class="material-symbols-outlined text-primary text-sm mt-1">description</span>
                                <span class="text-sm font-medium group-hover:text-primary transition-colors leading-snug">Menambah jadwal kajian rutin</span>
                            </a>
                        </li>
                        <li>
                            <a class="flex items-start gap-3 group" href="#">
                                <span class="material-symbols-outlined text-primary text-sm mt-1">description</span>
                                <span class="text-sm font-medium group-hover:text-primary transition-colors leading-snug">Fitur pengingat iuran wajib</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- WhatsApp CTA -->
                <div class="bg-primary/10 rounded-xl p-6 border border-primary/20">
                    <h3 class="font-bold text-lg mb-2 text-[#121614] dark:text-white">Punya pertanyaan lain?</h3>
                    <p class="text-sm text-[#3d5a4d] dark:text-gray-400 mb-4">Tim kami siap membantu Anda secara langsung melalui WhatsApp.</p>
                    <a href="https://wa.me/6281234567890" target="_blank" class="w-full bg-[#25D366] text-white font-bold py-3 rounded-lg flex items-center justify-center gap-2 hover:brightness-105 transition-all">
                        <span class="material-symbols-outlined">forum</span>
                        Chat Dukungan
                    </a>
                </div>
            </aside>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
