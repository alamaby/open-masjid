<?= $this->extend('layout/dashboard') ?>

<?= $this->section('content') ?>
<div class="flex flex-col lg:flex-row gap-6 -m-8 h-[calc(100vh-65px)] overflow-hidden">
    <!-- Main Content -->
    <div class="flex-1 flex flex-col min-w-0 bg-background-light dark:bg-slate-950 overflow-y-auto p-8">
        <!-- Breadcrumbs -->
        <div class="flex flex-wrap gap-2 mb-4">
            <a class="text-[#608a7e] text-sm font-medium hover:text-primary transition-colors" href="<?= base_url('dashboard') ?>">Dashboard</a>
            <span class="text-[#608a7e] text-sm font-medium">/</span>
            <span class="text-[#111816] dark:text-white text-sm font-medium">Program & Kegiatan</span>
        </div>

        <!-- Page Title & CTA -->
        <div class="flex flex-wrap justify-between items-center gap-6 mb-6">
            <div class="flex flex-col gap-1">
                <p class="text-[#111816] dark:text-white text-3xl font-black leading-tight tracking-[-0.033em]">Program & Kegiatan</p>
                <p class="text-[#608a7e] text-sm font-normal">Kelola program masjid, kegiatan rutin, dan pemantauan dampak sosial secara transparan.</p>
            </div>
            <button class="flex items-center gap-2 px-5 py-2.5 bg-primary text-white rounded-lg font-bold text-sm shadow-lg shadow-primary/20 hover:scale-[1.02] transition-transform">
                <span class="material-symbols-outlined text-lg">add_circle</span>
                <span>Tambah Program Baru</span>
            </button>
        </div>

        <!-- Filters -->
        <div class="py-4 flex flex-wrap gap-3 mb-6 items-center">
            <div class="flex gap-2 p-1 bg-white dark:bg-white/5 rounded-xl border border-[#f0f5f3] dark:border-white/10 shadow-sm">
                <button class="px-4 py-1.5 rounded-lg bg-primary text-white text-xs font-bold">Semua</button>
                <button class="px-4 py-1.5 rounded-lg hover:bg-background-light dark:hover:bg-white/10 text-[#111816] dark:text-white/70 text-xs font-medium">Aktif</button>
                <button class="px-4 py-1.5 rounded-lg hover:bg-background-light dark:hover:bg-white/10 text-[#111816] dark:text-white/70 text-xs font-medium">Draft</button>
                <button class="px-4 py-1.5 rounded-lg hover:bg-background-light dark:hover:bg-white/10 text-[#111816] dark:text-white/70 text-xs font-medium">Selesai</button>
            </div>
            <div class="h-8 w-px bg-[#f0f5f3] dark:bg-white/10 mx-2"></div>
            <button class="flex h-10 items-center gap-x-2 rounded-lg bg-white dark:bg-white/5 px-4 border border-[#f0f5f3] dark:border-white/10 text-sm font-medium">
                <span>Kategori: Sosial</span>
                <span class="material-symbols-outlined text-lg">expand_more</span>
            </button>
            <button class="flex h-10 items-center gap-x-2 rounded-lg bg-white dark:bg-white/5 px-4 border border-[#f0f5f3] dark:border-white/10 text-sm font-medium">
                <span>Jenis: Rutin</span>
                <span class="material-symbols-outlined text-lg">expand_more</span>
            </button>
        </div>

        <!-- Program Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-3 gap-6">
            <!-- Program Card 1 -->
            <div class="group bg-white dark:bg-white/5 border border-[#f0f5f3] dark:border-white/10 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 relative overflow-hidden flex flex-col">
                <div class="aspect-video w-full overflow-hidden bg-gray-200">
                    <img alt="Santunan Anak Yatim" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCHK3I-K7gda8xCz1tPwDqrLIB3Tq1g55J2rsxx11UF_VOp2giIY30mEOMsQnWOvXSQvqAju3A4lGLK8PZj7z5NaQPxd54qzzjhf0OUhH7l3U-bUmlg-A92MN5H9Xz1Jv4nokPF43agweUvrXZKWjjfLt875XkWU780lyeytOLaFkyjDKZ84txnsMIBaRa1S7zjcWNrmtyZ2TxDwxX40y-mJcwIxFz5iAvI4jjpCrwB9jA7SruoLOhtFOfukcZvv7iMA201sZgpYl9n"/>
                </div>
                <div class="p-5 flex-1">
                    <div class="flex justify-between items-start mb-4">
                        <div class="flex flex-col gap-1">
                            <div class="flex items-center gap-2 mb-1">
                                <span class="px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-700 text-[10px] font-bold uppercase tracking-wider">Sosial</span>
                                <span class="px-2 py-0.5 rounded-full bg-blue-100 text-blue-700 text-[10px] font-bold uppercase tracking-wider">Rutin</span>
                            </div>
                            <h3 class="text-[#111816] dark:text-white font-bold text-lg group-hover:text-primary transition-colors">Santunan Anak Yatim</h3>
                            <p class="text-[#608a7e] text-sm flex items-center gap-1">
                                <span class="material-symbols-outlined text-sm">schedule</span>
                                Setiap Selasa, 16:00 WIB
                            </p>
                        </div>
                        <span class="flex items-center gap-1.5 px-3 py-1 bg-primary/10 text-primary rounded-full text-xs font-bold">
                            <span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
                            Aktif
                        </span>
                    </div>
                    <div class="mb-6 bg-background-light dark:bg-white/5 p-4 rounded-xl">
                        <div class="flex justify-between text-xs mb-2">
                            <span class="text-[#608a7e] font-medium">Donasi Terkumpul</span>
                            <span class="text-primary font-bold">65%</span>
                        </div>
                        <div class="w-full bg-gray-200 dark:bg-white/10 rounded-full h-2 mb-3">
                            <div class="bg-primary h-2 rounded-full" style="width: 65%"></div>
                        </div>
                        <div class="flex justify-between items-end">
                            <div class="flex flex-col">
                                <p class="text-[10px] text-[#608a7e] uppercase font-bold tracking-tight">Terkumpul</p>
                                <p class="text-sm font-bold text-[#111816] dark:text-white">Rp 16.250.000</p>
                            </div>
                            <div class="flex flex-col text-right">
                                <p class="text-[10px] text-[#608a7e] uppercase font-bold tracking-tight">Target</p>
                                <p class="text-sm font-bold text-gray-500">Rp 25.000.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex -space-x-2">
                            <div class="w-7 h-7 rounded-full border-2 border-white dark:border-background-dark bg-gray-300 bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDdX5n3zpmzCGdUhx2NGH04YHsOhVQ048l2dCTN13p5gD3uc1vfE0H4p7qOdZm99f4vzOaNTPnirjvZ7MaPXIZiWs1Et8o2hmig2F37Tshq2x-Jp8K28ljwYxOvGLs1kkGUV-TusIFrVjLs32UpTCpoACr_pVwCX-c_nXaDmxDC4215Pl0G6-Pl-DO-WOtaXB8t7itQpbygB4xgphEDpUFvUNGZmIwlcIv9X_nTYuYw4ojxRjWtJV8BTSomfoKBbhhhER5KzDmw3-um')"></div>
                            <div class="w-7 h-7 rounded-full border-2 border-white dark:border-background-dark bg-gray-300 bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA9p7ulGrE8ZFO8hk8AAKFmMYS2qNlyQcwiWw4sIYqBo6l9rLkpXKIrEcYdfDe8V94qw3VyhdZsdRTW84WoDOZKEgxwdi0vi2eJhsLaxjJdTIG3vocD06h-NT8CJDFnJBPBbVF5GQR9iMBpqPl5y3BWihqbGbEkEsywLmBLs62_qGCf380y9VjrcQpNPISdscwDAHagWDC3bfrttti8fH2QfelGhZiMSmw1oqOdl8h8FqMg-zf8sMrBPBcmfeywBkvekWrShthtZOQS')"></div>
                            <div class="w-7 h-7 rounded-full border-2 border-white dark:border-background-dark bg-gray-200 flex items-center justify-center text-[10px] font-bold text-gray-500">+8</div>
                        </div>
                        <button class="flex items-center gap-2 text-primary font-bold text-sm hover:underline">
                            Detail Program
                            <span class="material-symbols-outlined text-base">arrow_forward</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Program Card 2 -->
            <div class="group bg-white dark:bg-white/5 border border-[#f0f5f3] dark:border-white/10 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 relative overflow-hidden flex flex-col">
                <div class="aspect-video w-full overflow-hidden bg-gray-200">
                    <img alt="Kajian Tafsir" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQWdyUMB1p64f5UglZL5T585iQ40meQU4SgmyznRfirk4zW72tTRW_51kjg6RfnAanGG76EPtlsmc4KJmG2gonUY6Hg2shBZqTuwV0YjbXB6Comhl0nSRX29Gf81aSmeW2O_OfeFwxu-2Zw9LGPlioK87kOFlz61RzkMF_JNjM-eGjgXTIZxryg8Cug23WsFpjywxadi8EeaC9tqenM_esg1G2EqkqTETp-yC7OfJdmQaq0846t4y0DS05J9BpCiKGSwFg8g4XSukf"/>
                </div>
                <div class="p-5 flex-1">
                    <div class="flex justify-between items-start mb-4">
                        <div class="flex flex-col gap-1">
                            <div class="flex items-center gap-2 mb-1">
                                <span class="px-2 py-0.5 rounded-full bg-amber-100 text-amber-700 text-[10px] font-bold uppercase tracking-wider">Dakwah</span>
                                <span class="px-2 py-0.5 rounded-full bg-blue-100 text-blue-700 text-[10px] font-bold uppercase tracking-wider">Rutin</span>
                            </div>
                            <h3 class="text-[#111816] dark:text-white font-bold text-lg group-hover:text-primary transition-colors">Kajian Tafsir Ba'da Maghrib</h3>
                            <p class="text-[#608a7e] text-sm flex items-center gap-1">
                                <span class="material-symbols-outlined text-sm">schedule</span>
                                Setiap Senin & Kamis
                            </p>
                        </div>
                        <span class="flex items-center gap-1.5 px-3 py-1 bg-primary/10 text-primary rounded-full text-xs font-bold">
                            <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                            Aktif
                        </span>
                    </div>
                    <div class="mb-6 h-[104px] border-2 border-dashed border-[#f0f5f3] dark:border-white/10 rounded-xl flex items-center justify-center bg-background-light/30">
                        <div class="text-center">
                            <span class="material-symbols-outlined text-gray-400">lock</span>
                            <p class="text-[11px] font-medium text-gray-500">Internal / Non-Donasi</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex -space-x-2">
                            <div class="w-7 h-7 rounded-full border-2 border-white dark:border-background-dark bg-gray-300 bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCkF3BTP3N3M_oFAyqjBDP3lCs64V1ucaRRASdEelixVYZWUsJppSi3pOGdxKpKRjyn5o5ou0fRYiVjERLTVq7oQCT7ockdoCEJhegsUYHB0wKOwafymRavVzOlhTJjd5AXWzNmD3i2S-KsoMm3vv_muhqSYU433rj785sor0cgoWkdgmcwMsU1hZ1vEbVB4I2YuxSMjelIopzxonNcVav_2sp_JrskEpbemit54CfW-heP4A3gQF-OD0hI_kcdSMFOu7z41vTf8c22')"></div>
                        </div>
                        <button class="flex items-center gap-2 text-primary font-bold text-sm hover:underline">
                            Detail Program
                            <span class="material-symbols-outlined text-base">arrow_forward</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Program Card 3 -->
            <div class="group bg-white dark:bg-white/5 border border-[#f0f5f3] dark:border-white/10 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 relative overflow-hidden flex flex-col">
                <div class="aspect-video w-full overflow-hidden bg-gray-200">
                    <img alt="Workshop Jurnalistik" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 opacity-70 grayscale-[50%]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCbdP5ePpkFv2-WzgbP8p8R5rHjqbvpn1YPBZnOR-vmvQSEpIVbvEAO7VR3BaJcgFODXGt5qpp-icLdrheENDcFnIOUqQoy5YXFwzzEUs28HxjjCN8CKz-KZIDo20u1WE-Tvq0TZk0rpUMTZObh63GflLTvCir_7zlt3A3ZCr9_uJLfj2Zk_WBPHzZW1crToJdTc3WR8OgDLaoZ39_kFAAP7g2a6QYQNguoSUayGpHS6HPiTrhkqLqdD1LVwfLxGEeHM6lsuUhOYp0Q"/>
                </div>
                <div class="p-5 flex-1">
                    <div class="flex justify-between items-start mb-4">
                        <div class="flex flex-col gap-1">
                            <div class="flex items-center gap-2 mb-1">
                                <span class="px-2 py-0.5 rounded-full bg-purple-100 text-purple-700 text-[10px] font-bold uppercase tracking-wider">Pendidikan</span>
                                <span class="px-2 py-0.5 rounded-full bg-orange-100 text-orange-700 text-[10px] font-bold uppercase tracking-wider">Event</span>
                            </div>
                            <h3 class="text-[#111816] dark:text-white font-bold text-lg group-hover:text-primary transition-colors">Workshop Jurnalistik Masjid</h3>
                            <p class="text-[#608a7e] text-sm flex items-center gap-1">
                                <span class="material-symbols-outlined text-sm">event</span>
                                25 Okt 2023 - 09:00 WIB
                            </p>
                        </div>
                        <span class="flex items-center gap-1.5 px-3 py-1 bg-gray-100 dark:bg-white/10 text-gray-600 dark:text-gray-400 rounded-full text-xs font-bold">
                            Draft
                        </span>
                    </div>
                    <div class="mb-6 bg-background-light dark:bg-white/5 p-4 rounded-xl">
                        <div class="flex justify-between text-xs mb-2">
                            <span class="text-[#608a7e] font-medium">Target Peserta</span>
                            <span class="text-primary font-bold">0/50</span>
                        </div>
                        <div class="w-full bg-gray-200 dark:bg-white/10 rounded-full h-2 mb-3">
                            <div class="bg-gray-400 h-2 rounded-full" style="width: 0%"></div>
                        </div>
                        <p class="text-[11px] text-[#608a7e]">Pendaftaran belum dibuka</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <p class="text-xs text-amber-600 font-bold flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm">warning</span>
                            Lengkapi data
                        </p>
                        <button class="flex items-center gap-2 text-primary font-bold text-sm hover:underline">
                            Lanjutkan Edit
                            <span class="material-symbols-outlined text-base">edit</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Panel (Right Sidebar) -->
    <aside class="hidden lg:flex w-[420px] bg-white dark:bg-slate-900 border-l border-[#f0f5f3] dark:border-white/10 flex-col overflow-y-auto">
        <div class="p-6 border-b border-[#f0f5f3] dark:border-white/10 flex items-center justify-between bg-primary/5">
            <div>
                <h2 class="text-[#111816] dark:text-white text-lg font-bold">Edit Program</h2>
                <p class="text-xs text-[#608a7e]">Detail: Santunan Anak Yatim</p>
            </div>
            <button class="p-2 hover:bg-white dark:hover:bg-slate-800 rounded-lg transition-colors">
                <span class="material-symbols-outlined text-gray-400">close</span>
            </button>
        </div>
        <div class="flex border-b border-[#f0f5f3] dark:border-white/10 px-4 overflow-x-auto">
            <button class="px-4 py-3 border-b-2 border-primary text-primary text-xs font-bold whitespace-nowrap">Ringkasan</button>
            <button class="px-4 py-3 text-gray-500 text-xs font-medium whitespace-nowrap hover:text-primary">Keuangan</button>
            <button class="px-4 py-3 text-gray-500 text-xs font-medium whitespace-nowrap hover:text-primary">Dokumentasi</button>
            <button class="px-4 py-3 text-gray-500 text-xs font-medium whitespace-nowrap hover:text-primary">Berita</button>
        </div>
        <div class="flex-1 overflow-y-auto custom-scrollbar p-6 space-y-8">
            <!-- Informasi Dasar -->
            <div class="space-y-4">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary text-lg">info</span>
                    <h3 class="text-sm font-bold uppercase tracking-wider text-gray-400">A. Informasi Dasar</h3>
                </div>
                <div class="space-y-4">
                    <div class="flex flex-col gap-1.5">
                        <label class="text-xs font-bold text-[#111816] dark:text-white">Cover Utama Program</label>
                        <div class="relative group cursor-pointer">
                            <div class="aspect-video w-full rounded-xl overflow-hidden bg-gray-100 dark:bg-slate-800 border-2 border-dashed border-[#f0f5f3] dark:border-white/10">
                                <img alt="Cover Preview" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA6wkEZEgqriaN6mHJFhn5K3PvgaGCwmgBmNnAcg3pz4Qc-mnA0gHQYDPGsFNURBVuf_tdxMKrNdWqFuTAH3GpIp6WeTg1lSW06YdUmE9HNGQaviaDwwwYFEbMH0ja5-G2JwRcbUbSEWiLUmLOFoBeZsVChMadmVVPmr4icKW_rjdlcc4jAPwqIu8EsdrP9GAfhTx1KtV5xuYT5FqWDU_BmP5Dze_aCWw0egyMMwd1d1Ut0K9CyPdo-D3Dg_HL_AvRxCCuUlL8h7pzT"/>
                                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity">
                                    <div class="flex flex-col items-center gap-1 text-white">
                                        <span class="material-symbols-outlined">photo_camera</span>
                                        <span class="text-[10px] font-bold">Ganti Foto</span>
                                    </div>
                                </div>
                            </div>
                            <input class="absolute inset-0 opacity-0 cursor-pointer" type="file"/>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1.5">
                        <label class="text-xs font-bold text-[#111816] dark:text-white">Nama Program</label>
                        <input class="form-input w-full rounded-lg border-[#f0f5f3] dark:border-white/10 dark:bg-white/5 text-sm focus:ring-primary focus:border-primary" type="text" value="Santunan Anak Yatim"/>
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        <div class="flex flex-col gap-1.5">
                            <label class="text-xs font-bold text-[#111816] dark:text-white">Kategori</label>
                            <select class="form-select w-full rounded-lg border-[#f0f5f3] dark:border-white/10 dark:bg-white/5 text-sm focus:ring-primary">
                                <option>Sosial</option>
                                <option>Dakwah</option>
                                <option>Pendidikan</option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label class="text-xs font-bold text-[#111816] dark:text-white">Penanggung Jawab</label>
                            <select class="form-select w-full rounded-lg border-[#f0f5f3] dark:border-white/10 dark:bg-white/5 text-sm focus:ring-primary">
                                <option>Ust. Ahmad Fauzi</option>
                                <option>H. Mulyadi</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Jenis & Waktu -->
            <div class="space-y-4">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary text-lg">event_repeat</span>
                    <h3 class="text-sm font-bold uppercase tracking-wider text-gray-400">B. Jenis & Waktu</h3>
                </div>
                <div class="bg-primary/5 p-4 rounded-xl border border-primary/10">
                    <div class="flex items-center justify-between mb-4">
                        <p class="text-xs font-bold text-primary">Program Rutin</p>
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                    </div>
                    <div class="flex flex-col gap-3">
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-600">Frekuensi</span>
                            <span class="text-xs font-bold">Setiap Selasa</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-600">Jam Mulai</span>
                            <span class="text-xs font-bold">16:00 WIB</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Donasi & Keuangan -->
            <div class="space-y-4">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary text-lg">payments</span>
                    <h3 class="text-sm font-bold uppercase tracking-wider text-gray-400">C. Donasi & Keuangan</h3>
                </div>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-3 rounded-lg border border-primary/20 bg-primary/5">
                        <div class="flex flex-col">
                            <span class="text-sm font-bold text-primary">Menerima Donasi Publik</span>
                            <span class="text-[10px] text-primary/70">Aktifkan form donasi di portal</span>
                        </div>
                        <div class="relative inline-flex items-center cursor-pointer">
                            <input checked="" class="sr-only peer" type="checkbox"/>
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1.5">
                        <label class="text-xs font-bold text-[#111816] dark:text-white">Target Dana (Rp)</label>
                        <input class="form-input w-full rounded-lg border-[#f0f5f3] dark:border-white/10 dark:bg-white/5 text-sm focus:ring-primary" type="number" value="25000000"/>
                    </div>
                </div>
            </div>
        </div>
        <!-- Panel Footer -->
        <div class="p-6 border-t border-[#f0f5f3] dark:border-white/10 bg-white dark:bg-slate-900 grid grid-cols-2 gap-3">
            <button class="px-4 py-2.5 rounded-lg border border-gray-300 dark:border-slate-700 text-gray-700 dark:text-gray-300 font-bold text-sm hover:bg-gray-50 dark:hover:bg-slate-800 transition-colors">Batalkan</button>
            <button class="px-4 py-2.5 rounded-lg bg-primary text-white font-bold text-sm shadow-md shadow-primary/20 hover:bg-emerald-900 transition-colors">Simpan</button>
        </div>
    </aside>
</div>

<!-- Floating Action Button for Mobile -->
<button class="fixed bottom-6 right-6 lg:hidden w-14 h-14 bg-primary text-white rounded-full shadow-2xl flex items-center justify-center z-50">
    <span class="material-symbols-outlined text-3xl">add</span>
</button>
<?= $this->endSection() ?>
