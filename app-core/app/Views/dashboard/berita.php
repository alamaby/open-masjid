<?= $this->extend('layout/dashboard') ?>

<?= $this->section('content') ?>
<!-- Main Content -->
<div class="space-y-8">
    <!-- Page Heading -->
    <div class="flex flex-wrap justify-between items-center gap-4">
        <div class="flex flex-col gap-1">
            <h1 class="text-3xl font-black text-gray-900 dark:text-white tracking-tight">Berita & Dokumentasi</h1>
            <p class="text-gray-500 dark:text-gray-400">Catatan kegiatan dan dampak pelayanan masjid untuk transparansi jamaah</p>
        </div>
        <button class="flex items-center gap-2 bg-primary hover:bg-primary/90 text-white px-5 py-2.5 rounded-lg font-bold transition-all shadow-sm">
            <span class="material-symbols-outlined">add</span>
            <span>Buat Berita / Dokumentasi</span>
        </button>
    </div>

    <!-- Filters & Search -->
    <div class="flex flex-col gap-4">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div class="flex gap-3 flex-wrap">
                <button class="flex items-center gap-2 px-4 py-2 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg text-sm font-medium">
                    <span>Semua Status</span>
                    <span class="material-symbols-outlined text-lg">expand_more</span>
                </button>
                <button class="flex items-center gap-2 px-4 py-2 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg text-sm font-medium text-primary border-primary/30 bg-primary/5">
                    <span>Kategori: Semua</span>
                    <span class="material-symbols-outlined text-lg">expand_more</span>
                </button>
                <button class="flex items-center gap-2 px-4 py-2 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg text-sm font-medium">
                    <span>Sumber Media</span>
                    <span class="material-symbols-outlined text-lg">expand_more</span>
                </button>
            </div>
            <div class="w-full md:w-80">
                <div class="relative group">
                    <span class="material-symbols-outlined absolute left-3 top-2.5 text-gray-400 group-focus-within:text-primary">search</span>
                    <input class="w-full pl-10 pr-4 py-2 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none" placeholder="Cari judul berita atau kegiatan..." type="text"/>
                </div>
            </div>
        </div>

        <!-- Content Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-4">
            <!-- Card 1 -->
            <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-xl overflow-hidden hover:shadow-lg transition-all flex flex-col group">
                <div class="aspect-video relative overflow-hidden">
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCZ2W9JIi8nQ87n0NfIttwrrLGpASopzfp3s23EMb6fdJ1369sGephZ0YsCViBVi7hEPU7JGUu1zx4EN9bVXwGd7ntjpEDeJ3IEe2LGxoeDsTtnRgtx1hPQw_6MVpPvcOdAheScNliJUiCtnFYA-vyV725cJGZmn-vpIO3-gcywrlE4O4mEy4ghMtJIHAtTJvvfJHqtzX9Po5_XmRpCMb5r12vzuEhEX1c54ftNGmVXW-i9RPGIugR66fViumobbgTr_gfa_OVFyk38"/>
                    <div class="absolute top-3 left-3 flex gap-2">
                        <span class="px-2 py-1 bg-primary text-white text-[10px] font-bold rounded uppercase">Dakwah</span>
                        <span class="px-2 py-1 bg-black/50 text-white text-[10px] font-bold rounded flex items-center gap-1">
                            <span class="material-symbols-outlined text-xs">public</span> Publik
                        </span>
                    </div>
                </div>
                <div class="p-5 flex flex-col flex-1">
                    <div class="flex items-center gap-2 text-xs text-gray-500 dark:text-gray-400 mb-2">
                        <span class="material-symbols-outlined text-sm">calendar_today</span>
                        12 Okt 2023
                        <span class="mx-1">•</span>
                        <span class="material-symbols-outlined text-sm text-red-600">movie</span>
                        YouTube
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white leading-tight mb-3 line-clamp-2">Kajian Rutin Malam Jumat: Membangun Karakter Islami di Era Digital</h3>
                    <div class="mt-auto flex items-center justify-between">
                        <div class="flex -space-x-2">
                            <div class="size-6 rounded-full border-2 border-white bg-gray-200 overflow-hidden"><img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDF1uYYuYqAWSKimVl3ifgN4TY0EzDp9PKFyQoDP7JmLi9WCBSsmA3Xov8YRdEPCag4Fn6GVcn_56E1QwVJxyh7CXh4ISkg16I4bJLqmTjO67P2-8sm2rULgB_I0dzkZsVOOVUdKz_gYJqFg58vrN8oYAHdFd2s6-1AlQZLb9nJw-yltbL9KLTEHtSGroqp8lY2w-hfdx26ElHDnMu531A0sAWmj_C-SnMcSgy_wsrHzdUzLkpYtfgubYIq1LXvgc1E95K0b9VsLA9e"/></div>
                        </div>
                        <div class="flex gap-2">
                            <button class="p-2 text-gray-400 hover:text-primary transition-colors"><span class="material-symbols-outlined">edit</span></button>
                            <button class="p-2 text-gray-400 hover:text-red-500 transition-colors"><span class="material-symbols-outlined">delete</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-xl overflow-hidden hover:shadow-lg transition-all flex flex-col group">
                <div class="aspect-video relative overflow-hidden">
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBbgcsQmJwmlXv40XZLliaiClUOrTpU_W_J2BS8leCC4sHUmD0-P_o--J6irw7qik-2AL3kdhciCzjEqnGZmIsEkUkKP6F8q2X2UnwAoplirMdx3YGl9aoPYcfFIZ9y88EvPB1jiG8oEcDHhs6X_QtjdegY32ePziMYEZP_hMa1OFLPJ9FdlCxsk5XV7KgrTevzItIUjAsxEIjAlU1QZF0DCrY-K99JbjDuGd4Wk3PS840hyVn4K0Fq-eARjgU2R4184J5xJaw9xawU"/>
                    <div class="absolute top-3 left-3 flex gap-2">
                        <span class="px-2 py-1 bg-amber-600 text-white text-[10px] font-bold rounded uppercase">Sosial</span>
                        <span class="px-2 py-1 bg-black/50 text-white text-[10px] font-bold rounded flex items-center gap-1">
                            <span class="material-symbols-outlined text-xs">lock</span> Internal
                        </span>
                    </div>
                    <div class="absolute bottom-3 right-3">
                        <span class="px-2 py-1 bg-amber-100 text-amber-700 text-[10px] font-bold rounded-full">Draft</span>
                    </div>
                </div>
                <div class="p-5 flex flex-col flex-1">
                    <div class="flex items-center gap-2 text-xs text-gray-500 dark:text-gray-400 mb-2">
                        <span class="material-symbols-outlined text-sm">calendar_today</span>
                        10 Okt 2023
                        <span class="mx-1">•</span>
                        <span class="material-symbols-outlined text-sm">photo_library</span>
                        Galeri
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white leading-tight mb-3 line-clamp-2">Penyaluran 500 Paket Sembako untuk Warga Sekitar Masjid</h3>
                    <div class="mt-auto flex items-center justify-between">
                        <span class="text-xs italic text-gray-400">Terakhir diubah: 2 jam yang lalu</span>
                        <div class="flex gap-2">
                            <button class="p-2 text-gray-400 hover:text-primary transition-colors"><span class="material-symbols-outlined">edit</span></button>
                            <button class="p-2 text-gray-400 hover:text-red-500 transition-colors"><span class="material-symbols-outlined">delete</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-xl overflow-hidden hover:shadow-lg transition-all flex flex-col group">
                <div class="aspect-video relative overflow-hidden">
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBTrSZyLIhB_mQYZ5Mn2cFBu403QuePMh-cBk1SW23WHoOKhmyb5NXbDOi5qQhpNoIfjBwPu-TnjVrg7N63Q65tmkozyK0Pgp7TPeiWGwA9U_1ZhKUk4pASTkjgoh4fA9wvixOBNJ5uXYgno6Qq-9bjV1yNw7lLWR6tWxGxUsS0WWuxaZtZPhcYQDrahUjLwoOUBAqTN0Q9qzvRk4yZGFUjqsRkqcJF3bfPwH_Q5jcSQ7ASdwblWGc9P0VepzRw3mCMgRKNRqLT3p1x"/>
                    <div class="absolute top-3 left-3 flex gap-2">
                        <span class="px-2 py-1 bg-blue-600 text-white text-[10px] font-bold rounded uppercase">Pendidikan</span>
                        <span class="px-2 py-1 bg-black/50 text-white text-[10px] font-bold rounded flex items-center gap-1">
                            <span class="material-symbols-outlined text-xs">public</span> Publik
                        </span>
                    </div>
                </div>
                <div class="p-5 flex flex-col flex-1">
                    <div class="flex items-center gap-2 text-xs text-gray-500 dark:text-gray-400 mb-2">
                        <span class="material-symbols-outlined text-sm">calendar_today</span>
                        08 Okt 2023
                        <span class="mx-1">•</span>
                        <span class="material-symbols-outlined text-sm text-pink-600">share</span>
                        Instagram
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white leading-tight mb-3 line-clamp-2">Pendaftaran Kelas Tahfidz dan Kaligrafi Semester Ganjil Telah Dibuka</h3>
                    <div class="mt-auto flex items-center justify-between">
                        <span class="text-xs text-primary font-medium">Tampil di Beranda</span>
                        <div class="flex gap-2">
                            <button class="p-2 text-gray-400 hover:text-primary transition-colors"><span class="material-symbols-outlined">edit</span></button>
                            <button class="p-2 text-gray-400 hover:text-red-500 transition-colors"><span class="material-symbols-outlined">delete</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Create/Edit Sidebar Drawer (Simulated open) -->
<aside id="drawer" class="fixed inset-y-0 right-0 w-[480px] bg-white dark:bg-gray-900 shadow-2xl z-[100] border-l border-gray-200 dark:border-gray-800 flex flex-col transform translate-x-full transition-transform duration-300">
    <div class="p-6 border-b border-gray-100 dark:border-gray-800 flex items-center justify-between sticky top-0 bg-white dark:bg-gray-900 z-10">
        <div>
            <h2 class="text-xl font-bold text-gray-900 dark:text-white">Buat Dokumentasi Baru</h2>
            <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Lengkapi detail konten di bawah ini</p>
        </div>
        <button onclick="toggleDrawer()" class="size-10 flex items-center justify-center rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
            <span class="material-symbols-outlined">close</span>
        </button>
    </div>
    <div class="flex-1 overflow-y-auto p-6 space-y-8">
        <!-- Section A: Informasi Dasar -->
        <section class="space-y-4">
            <h3 class="flex items-center gap-2 text-sm font-bold text-primary">
                <span class="material-symbols-outlined text-lg">info</span> Informasi Dasar
            </h3>
            <div class="space-y-3">
                <label class="block">
                    <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Judul Berita/Kegiatan</span>
                    <input class="mt-1 block w-full rounded-lg border-gray-200 dark:border-gray-700 dark:bg-gray-800 focus:border-primary focus:ring-primary/20" placeholder="Masukkan judul yang informatif..." type="text"/>
                </label>
                <div class="grid grid-cols-2 gap-3">
                    <label class="block">
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Kategori</span>
                        <select class="mt-1 block w-full rounded-lg border-gray-200 dark:border-gray-700 dark:bg-gray-800 focus:border-primary focus:ring-primary/20">
                            <option>Dakwah</option>
                            <option>Pendidikan</option>
                            <option>Sosial</option>
                            <option>Ziswaf</option>
                        </select>
                    </label>
                    <label class="block">
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Hubungkan Program</span>
                        <select class="mt-1 block w-full rounded-lg border-gray-200 dark:border-gray-700 dark:bg-gray-800 focus:border-primary focus:ring-primary/20">
                            <option>Pilih Program...</option>
                            <option>Sembako Murah</option>
                            <option>Tahfidz Cilik</option>
                        </select>
                    </label>
                </div>
            </div>
        </section>
        <!-- Section B: Jenis Konten -->
        <section class="space-y-4">
            <h3 class="flex items-center gap-2 text-sm font-bold text-primary">
                <span class="material-symbols-outlined text-lg">auto_stories</span> Jenis Konten
            </h3>
            <div class="grid grid-cols-2 gap-3">
                <label class="relative flex flex-col items-center p-3 border-2 border-primary bg-primary/5 rounded-xl cursor-pointer">
                    <input checked="" class="absolute right-2 top-2 text-primary focus:ring-primary" name="content_type" type="radio"/>
                    <span class="material-symbols-outlined text-primary mb-1">article</span>
                    <span class="text-xs font-bold text-gray-900 dark:text-white">Artikel</span>
                </label>
                <label class="relative flex flex-col items-center p-3 border-2 border-gray-100 dark:border-gray-800 rounded-xl cursor-pointer hover:border-primary/50 transition-all">
                    <input class="absolute right-2 top-2 text-primary focus:ring-primary" name="content_type" type="radio"/>
                    <span class="material-symbols-outlined text-gray-400 mb-1">movie</span>
                    <span class="text-xs font-bold text-gray-900 dark:text-white">YouTube</span>
                </label>
                <label class="relative flex flex-col items-center p-3 border-2 border-gray-100 dark:border-gray-800 rounded-xl cursor-pointer hover:border-primary/50 transition-all">
                    <input class="absolute right-2 top-2 text-primary focus:ring-primary" name="content_type" type="radio"/>
                    <span class="material-symbols-outlined text-gray-400 mb-1">photo_library</span>
                    <span class="text-xs font-bold text-gray-900 dark:text-white">Foto Galeri</span>
                </label>
                <label class="relative flex flex-col items-center p-3 border-2 border-gray-100 dark:border-gray-800 rounded-xl cursor-pointer hover:border-primary/50 transition-all">
                    <input class="absolute right-2 top-2 text-primary focus:ring-primary" name="content_type" type="radio"/>
                    <span class="material-symbols-outlined text-gray-400 mb-1">share</span>
                    <span class="text-xs font-bold text-gray-900 dark:text-white">Social Media</span>
                </label>
            </div>
        </section>
        <!-- Dynamic Field: Content Area -->
        <section class="space-y-4">
            <div class="flex items-center justify-between">
                <h3 class="text-sm font-bold text-gray-900 dark:text-white">Isi Konten</h3>
                <button class="text-primary text-xs font-bold hover:underline">Rich Text Editor</button>
            </div>
            <textarea class="w-full rounded-lg border-gray-200 dark:border-gray-700 dark:bg-gray-800 focus:border-primary focus:ring-primary/20" placeholder="Tuliskan detail kegiatan di sini..." rows="5"></textarea>
            <!-- File Upload Placeholder -->
            <div class="border-2 border-dashed border-gray-200 dark:border-gray-700 rounded-xl p-8 flex flex-col items-center justify-center gap-2 bg-gray-50 dark:bg-gray-800/50">
                <span class="material-symbols-outlined text-gray-400 text-3xl">cloud_upload</span>
                <div class="text-center">
                    <p class="text-sm font-medium text-gray-900 dark:text-white">Unggah Thumbnail/Foto</p>
                    <p class="text-xs text-gray-500">PNG, JPG up to 5MB</p>
                </div>
                <button class="mt-2 text-xs font-bold text-primary">Pilih File</button>
            </div>
        </section>
        <!-- Visibility & Publication -->
        <section class="space-y-4 pb-6">
            <h3 class="text-sm font-bold text-gray-900 dark:text-white">Pengaturan Publikasi</h3>
            <div class="space-y-4 bg-gray-50 dark:bg-gray-800/50 p-4 rounded-xl">
                <div class="flex items-center justify-between">
                    <div class="flex flex-col">
                        <span class="text-sm font-bold text-gray-900 dark:text-white">Tampilkan di Beranda</span>
                        <span class="text-xs text-gray-500">Muncul di halaman utama website</span>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input checked="" class="sr-only peer" type="checkbox"/>
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary"></div>
                    </label>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex flex-col">
                        <span class="text-sm font-bold text-gray-900 dark:text-white">Akses Publik</span>
                        <span class="text-xs text-gray-500">Dapat dilihat oleh semua orang</span>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input checked="" class="sr-only peer" type="checkbox"/>
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary"></div>
                    </label>
                </div>
            </div>
        </section>
    </div>
    <!-- Drawer Actions -->
    <div class="p-6 border-t border-gray-100 dark:border-gray-800 bg-white dark:bg-gray-900 flex gap-3 sticky bottom-0">
        <button class="flex-1 px-4 py-2.5 rounded-lg border border-gray-200 dark:border-gray-700 font-bold text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 transition-all">Simpan Draft</button>
        <button class="flex-1 px-4 py-2.5 rounded-lg bg-primary text-white font-bold hover:bg-primary/90 transition-all shadow-md">Publikasikan</button>
    </div>
</aside>

<script>
    function toggleDrawer() {
        const drawer = document.getElementById('drawer');
        drawer.classList.toggle('translate-x-full');
    }

    // Connect the "Buat Berita" button to the drawer
    document.querySelector('button.bg-primary').onclick = toggleDrawer;

    // Connect edit buttons to the drawer
    document.querySelectorAll('button.text-gray-400.hover\\:text-primary').forEach(btn => {
        btn.onclick = toggleDrawer;
    });
</script>
<?= $this->endSection() ?>
