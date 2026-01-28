<?= $this->extend('layout/dashboard') ?>

<?= $this->section('content') ?>
<div class="max-w-5xl mx-auto">
    <!-- Page Heading & Progress -->
    <div class="mb-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-6">
            <div>
                <h1 class="text-4xl font-black tracking-tight text-[#111816] dark:text-white mb-2">Profil Masjid</h1>
                <p class="text-[#608a7e] text-base">Kelola informasi dasar dan identitas masjid Anda di platform Masj.id.</p>
            </div>
            <div class="bg-white dark:bg-white/5 p-4 rounded-xl border border-[#e5e7eb] dark:border-white/10 min-w-[320px]">
                <div class="flex justify-between items-center mb-2">
                    <p class="text-[#111816] dark:text-white text-sm font-semibold">Kelengkapan Profil</p>
                    <p class="text-primary text-sm font-bold">70%</p>
                </div>
                <div class="h-2 w-full bg-[#dbe6e3] dark:bg-white/10 rounded-full overflow-hidden">
                    <div class="h-full bg-primary" style="width: 70%;"></div>
                </div>
                <p class="text-[#608a7e] text-xs mt-2 italic">Semakin lengkap profil, semakin mudah transparansi & koordinasi.</p>
            </div>
        </div>
    </div>

    <!-- Section 1: Data Utama -->
    <div class="bg-white dark:bg-white/5 rounded-xl border border-[#e5e7eb] dark:border-white/10 overflow-hidden mb-8">
        <div class="p-6 border-b border-[#e5e7eb] dark:border-white/10">
            <h2 class="text-xl font-bold text-[#111816] dark:text-white">Data Utama</h2>
        </div>
        <div class="p-8 grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-semibold text-[#111816] dark:text-white mb-1.5">Nama Masjid <span class="text-red-500">*</span></label>
                    <input class="w-full rounded-lg border-[#dbe6e3] dark:bg-white/5 dark:border-white/10 focus:border-primary focus:ring-primary" type="text" value="Masjid Agung Al-Azhar"/>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-[#111816] dark:text-white mb-1.5">Nama Resmi (Sesuai SK)</label>
                    <input class="w-full rounded-lg border-[#dbe6e3] dark:bg-white/5 dark:border-white/10 focus:border-primary focus:ring-primary" placeholder="Masukkan nama resmi..." type="text"/>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-semibold text-[#111816] dark:text-white mb-1.5">Tahun Berdiri</label>
                        <div class="relative">
                            <input class="w-full rounded-lg border-[#dbe6e3] dark:bg-white/5 dark:border-white/10 focus:border-primary focus:ring-primary" type="text" value="1953"/>
                            <span class="material-symbols-outlined absolute right-3 top-2 text-[#608a7e] text-xl">calendar_month</span>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-[#111816] dark:text-white mb-1.5">Jenis Masjid</label>
                        <select class="w-full rounded-lg border-[#dbe6e3] dark:bg-white/5 dark:border-white/10 focus:border-primary focus:ring-primary">
                            <option>Masjid Agung</option>
                            <option>Masjid Raya</option>
                            <option>Masjid Besar</option>
                            <option>Masjid Jami</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-[#111816] dark:text-white mb-1.5">Nomor SK/Legalitas</label>
                    <input class="w-full rounded-lg border-[#dbe6e3] dark:bg-white/5 dark:border-white/10 focus:border-primary focus:ring-primary" type="text" value="SK-001/KM-AZ/1953"/>
                </div>
            </div>
            <div class="space-y-4">
                <label class="block text-sm font-semibold text-[#111816] dark:text-white">Foto Utama Masjid</label>
                <div class="relative group cursor-pointer border-2 border-dashed border-[#dbe6e3] dark:border-white/10 rounded-xl overflow-hidden aspect-video flex items-center justify-center bg-[#f0f5f3] dark:bg-white/5">
                    <div class="absolute inset-0 bg-center bg-no-repeat bg-cover opacity-80" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBKQ3FmqPs0CbptJvTMnfhRmjaJJFWQbAB3Qn7YkG66aN09AnoFqjjLLUS_oW9WRi_P8dB5VKTiZqURZhuNvixP6MX76GaHzWsx-1X7nnpx8A9pngnNbp0HkC3KG3GfvTFF5jWp73vZ9EHRzKGprJyvfccC2SfmvbATrUBQeTEboGqhe-GB_eJfRihGtOsGdf6QGyTMObW2r_M1msOLkCfLMz1tfVcMvHxfe0xhXwxNPKpBdB8SfGKdag5ucGZsmU2fXiqwFB3lBqMi");'></div>
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/50 transition-all flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100">
                        <span class="material-symbols-outlined text-4xl mb-2">upload</span>
                        <p class="font-bold">Ubah Foto</p>
                        <p class="text-xs opacity-80">Rasio disarankan 16:9</p>
                    </div>
                    <div class="z-[1] flex flex-col items-center group-hover:hidden">
                        <span class="material-symbols-outlined text-[#608a7e] text-3xl">add_a_photo</span>
                    </div>
                </div>
                <p class="text-xs text-[#608a7e]">Maksimal 5MB (JPG, PNG). Gunakan foto terbaik masjid Anda tampak depan.</p>
            </div>
        </div>
    </div>

    <!-- Section 2: Lokasi & Wilayah -->
    <div class="bg-white dark:bg-white/5 rounded-xl border border-[#e5e7eb] dark:border-white/10 overflow-hidden mb-8">
        <div class="p-6 border-b border-[#e5e7eb] dark:border-white/10">
            <h2 class="text-xl font-bold text-[#111816] dark:text-white">Lokasi & Wilayah</h2>
        </div>
        <div class="p-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <div class="lg:col-span-7 space-y-6">
                    <div>
                        <label class="block text-sm font-semibold text-[#111816] dark:text-white mb-1.5">Alamat Lengkap</label>
                        <textarea class="w-full rounded-lg border-[#dbe6e3] dark:bg-white/5 dark:border-white/10 focus:border-primary focus:ring-primary" rows="3">Jl. Sisingamangaraja No.1, RT.2/RW.1, Selong, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12110</textarea>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold text-[#111816] dark:text-white mb-1.5">Provinsi</label>
                            <select class="w-full rounded-lg border-[#dbe6e3] dark:bg-white/5 dark:border-white/10 focus:border-primary focus:ring-primary">
                                <option>DKI Jakarta</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-[#111816] dark:text-white mb-1.5">Kota/Kabupaten</label>
                            <select class="w-full rounded-lg border-[#dbe6e3] dark:bg-white/5 dark:border-white/10 focus:border-primary focus:ring-primary">
                                <option>Jakarta Selatan</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-[#111816] dark:text-white mb-1.5">Kecamatan</label>
                            <select class="w-full rounded-lg border-[#dbe6e3] dark:bg-white/5 dark:border-white/10 focus:border-primary focus:ring-primary">
                                <option>Kebayoran Baru</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-[#111816] dark:text-white mb-1.5">Kelurahan</label>
                            <select class="w-full rounded-lg border-[#dbe6e3] dark:bg-white/5 dark:border-white/10 focus:border-primary focus:ring-primary">
                                <option>Selong</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-5 space-y-6">
                    <label class="block text-sm font-semibold text-[#111816] dark:text-white mb-1.5">Titik Lokasi (Pin Map)</label>
                    <div class="relative rounded-xl overflow-hidden h-[240px] bg-[#f0f5f3] dark:bg-white/5 border border-[#e5e7eb] dark:border-white/10">
                        <div class="absolute inset-0 bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA-45eMSdAdWCBSbz6yjVW5B_SDjNn7WlOsPX8hxQdJ12yckej5gyjBMKCrfM1Dfs7WIjIqd_9DJmxDlX7irioiFbsyoOCl46FGXt2BKwtPAiEzBNyHT-Gkish3xZsllpHB6WYKGaalviOkTCfvv2yMQbuVipfTxnx1CKaRIl4RQ-Wve9NN71XpWLNxCVvU0dn1wdTuXaW-xE7B5REA_zHqxCeV_5gF7cJuGqUjUJHCYhp5NDzX6_1ogo20rEmH5ELsazR7j2YF7n0H");'></div>
                        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                            <span class="material-symbols-outlined text-red-600 text-4xl" style="font-variation-settings: 'FILL' 1">location_on</span>
                        </div>
                        <button class="absolute bottom-4 right-4 bg-white dark:bg-[#1a2e28] px-3 py-1.5 rounded-lg shadow-lg text-xs font-bold flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-sm">my_location</span>
                            Presisikan Pin
                        </button>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-[#e5e7eb] dark:border-white/10">
                <h3 class="text-sm font-bold text-[#111816] dark:text-white mb-4">Wilayah Layanan</h3>
                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="px-4 py-1.5 bg-primary/10 text-primary border border-primary/20 rounded-full text-sm font-medium flex items-center gap-2">
                        RW 01 Selong <span class="material-symbols-outlined text-sm cursor-pointer">close</span>
                    </span>
                    <span class="px-4 py-1.5 bg-primary/10 text-primary border border-primary/20 rounded-full text-sm font-medium flex items-center gap-2">
                        RW 02 Selong <span class="material-symbols-outlined text-sm cursor-pointer">close</span>
                    </span>
                    <span class="px-4 py-1.5 bg-primary/10 text-primary border border-primary/20 rounded-full text-sm font-medium flex items-center gap-2">
                        RW 03 Selong <span class="material-symbols-outlined text-sm cursor-pointer">close</span>
                    </span>
                    <button class="px-4 py-1.5 border border-dashed border-[#dbe6e3] rounded-full text-sm font-medium text-[#608a7e] hover:bg-[#f0f5f3] flex items-center gap-1 transition-colors">
                        <span class="material-symbols-outlined text-sm">add</span> Tambah Wilayah
                    </button>
                </div>
                <div class="flex items-center justify-between p-4 bg-background-light dark:bg-white/5 rounded-lg">
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary">public</span>
                        <div>
                            <p class="text-sm font-bold text-[#111816] dark:text-white">Melayani warga di luar lingkungan</p>
                            <p class="text-xs text-[#608a7e]">Izinkan pendaftar/pemohon layanan dari luar wilayah RW utama.</p>
                        </div>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input checked="" class="sr-only peer" type="checkbox"/>
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 3: Pengurus Masjid -->
    <div class="bg-white dark:bg-white/5 rounded-xl border border-[#e5e7eb] dark:border-white/10 overflow-hidden mb-8">
        <div class="p-6 border-b border-[#e5e7eb] dark:border-white/10 flex justify-between items-center">
            <h2 class="text-xl font-bold text-[#111816] dark:text-white">Pengurus Masjid</h2>
            <button class="bg-primary hover:bg-primary/90 text-white px-4 py-2 rounded-lg text-sm font-bold flex items-center gap-2 transition-all">
                <span class="material-symbols-outlined text-lg">person_add</span>
                Tambah Pengurus
            </button>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-[#f0f5f3] dark:bg-white/5 text-[#608a7e] text-xs font-bold uppercase tracking-wider">
                    <tr>
                        <th class="px-6 py-4">Nama Lengkap</th>
                        <th class="px-6 py-4">Jabatan</th>
                        <th class="px-6 py-4">WhatsApp</th>
                        <th class="px-6 py-4 text-center">Status</th>
                        <th class="px-6 py-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#e5e7eb] dark:divide-white/10">
                    <tr class="hover:bg-[#f0f5f3]/50 dark:hover:bg-white/5 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="bg-center bg-no-repeat bg-cover rounded-full size-8" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCTGfNQTJFuZjz58RhEmlcGP3CN-0flU7Zz_vkQ5V8OjqP1qfOOGvzphiHQrvYU8bM7eqV4hnJePMICbvIldrEj49BhI4kRv36fvKb2l5iGu4gdvWOvtZUgNYrQckmyGvAeDscxWwOIgcw16IXRViVjqYGLclZg3xc9Dq90ZJNyqgxkCoTPD1aVOu3QREJDmMBZjlbyo56AucKYCxnVeRlQsXdEotdcxJr8Mz4NC4J5jhK-N6oWgWJP2LiMhLEy5Zr-vPYCkqmyk9Yb");'></div>
                                <span class="text-sm font-semibold text-[#111816] dark:text-white">H. Ahmad Fauzi</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-[#608a7e]">Ketua Takmir</td>
                        <td class="px-6 py-4 text-sm text-[#111816] dark:text-white">0812-3456-7890</td>
                        <td class="px-6 py-4">
                            <div class="flex justify-center">
                                <span class="px-2.5 py-1 bg-green-100 dark:bg-green-500/20 text-green-700 dark:text-green-400 text-xs font-bold rounded-full">Aktif</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-[#608a7e] hover:text-primary transition-colors">
                                <span class="material-symbols-outlined">edit</span>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-[#f0f5f3]/50 dark:hover:bg-white/5 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="bg-center bg-no-repeat bg-cover rounded-full size-8" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBa9dW8YioxF7Oq1ibVt7PEr0wSevxWK8RypRbwhSN8imUO01yoVNoZXk9v8ObJm62_L07H9sz54xgC4GhCxZHByMFDSwIMf31aw9Zbhle3Nhro8S76YRCPCVQHaY2GZxEp62Xfvgx11gEjYR-BoZ_Wib4Gs1Ph7OGJUyY7JXVNIuZRN79YZ-bmcZaeFUWGUjU0eLyr2tobID1vhLWHS_Kc8LtaCIUupyHfsjzt_l1XRScCDDxvVPOwqJtjjqC5BnZQ1ZdjMSixEN1B");'></div>
                                <span class="text-sm font-semibold text-[#111816] dark:text-white">Drs. H. Bambang S.</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-[#608a7e]">Bendahara</td>
                        <td class="px-6 py-4 text-sm text-[#111816] dark:text-white">0812-9988-7766</td>
                        <td class="px-6 py-4">
                            <div class="flex justify-center">
                                <span class="px-2.5 py-1 bg-green-100 dark:bg-green-500/20 text-green-700 dark:text-green-400 text-xs font-bold rounded-full">Aktif</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-[#608a7e] hover:text-primary transition-colors">
                                <span class="material-symbols-outlined">edit</span>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Section 4: Informasi Pendukung -->
    <div class="space-y-6 pb-24">
        <!-- Vision & Mission -->
        <div class="bg-white dark:bg-white/5 rounded-xl border border-[#e5e7eb] dark:border-white/10 overflow-hidden">
            <div class="p-6 border-b border-[#e5e7eb] dark:border-white/10 flex items-center justify-between cursor-pointer">
                <h2 class="text-xl font-bold text-[#111816] dark:text-white flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">visibility</span>
                    Visi & Misi
                </h2>
                <span class="material-symbols-outlined text-[#608a7e]">expand_more</span>
            </div>
            <div class="p-8 space-y-6">
                <div>
                    <label class="block text-sm font-semibold text-[#111816] dark:text-white mb-2">Visi Masjid</label>
                    <textarea class="w-full rounded-lg border-[#dbe6e3] dark:bg-white/5 dark:border-white/10 focus:border-primary focus:ring-primary" placeholder="Tuliskan visi utama masjid..." rows="3"></textarea>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-[#111816] dark:text-white mb-2">Misi Masjid</label>
                    <textarea class="w-full rounded-lg border-[#dbe6e3] dark:bg-white/5 dark:border-white/10 focus:border-primary focus:ring-primary" placeholder="Tuliskan misi-misi masjid (pisahkan dengan baris baru)..." rows="4"></textarea>
                </div>
            </div>
        </div>

        <!-- Facilities & Gallery -->
        <div class="bg-white dark:bg-white/5 rounded-xl border border-[#e5e7eb] dark:border-white/10 overflow-hidden">
            <div class="p-6 border-b border-[#e5e7eb] dark:border-white/10">
                <h2 class="text-xl font-bold text-[#111816] dark:text-white">Galeri Foto & Fasilitas</h2>
            </div>
            <div class="p-8">
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 mb-8">
                    <div class="aspect-square bg-center bg-cover rounded-lg border border-[#e5e7eb] dark:border-white/10 relative group" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAp0qv3finh4CU-nKuk34pn-F4T751xNGsz0FrDr755NHqu0We8JUI8dhUAPIpqyx3NKQ_dvWpNOMDVNHPzkEse09iknxQXohnFd01vCkSWTywISbGkKEqmXtJBlz0fbycZjHvFDn7ipnN3ZbkG7oY3plwjJ5Brb3UvumFr6mZI1n-JN0fmV602TXRvleZNA1I7JDVOxzu97hF8GYa3PFP4qXNO2CWBpr9490ApxZKhWz-2Rfi8fWoZiNGAv2AK9odDeTbFljjLNNSP");'>
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center rounded-lg">
                            <span class="material-symbols-outlined text-white">delete</span>
                        </div>
                    </div>
                    <button class="aspect-square border-2 border-dashed border-[#dbe6e3] dark:border-white/10 rounded-lg flex flex-col items-center justify-center text-[#608a7e] hover:bg-[#f0f5f3] dark:hover:bg-white/5 transition-colors">
                        <span class="material-symbols-outlined text-2xl mb-1">add_photo_alternate</span>
                        <span class="text-[10px] font-bold">TAMBAH</span>
                    </button>
                </div>
                <div class="space-y-4">
                    <label class="block text-sm font-semibold text-[#111816] dark:text-white">Area Fokus & Fasilitas Utama</label>
                    <div class="flex flex-wrap gap-3">
                        <label class="flex items-center gap-2 px-4 py-2 bg-[#f0f5f3] dark:bg-white/5 rounded-lg cursor-pointer hover:bg-primary/5 transition-colors">
                            <input checked="" class="rounded text-primary focus:ring-primary border-[#dbe6e3]" type="checkbox"/>
                            <span class="text-sm font-medium">Pendidikan</span>
                        </label>
                        <label class="flex items-center gap-2 px-4 py-2 bg-[#f0f5f3] dark:bg-white/5 rounded-lg cursor-pointer hover:bg-primary/5 transition-colors">
                            <input checked="" class="rounded text-primary focus:ring-primary border-[#dbe6e3]" type="checkbox"/>
                            <span class="text-sm font-medium">Sosial/Santunan</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sticky Bottom Bar -->
<footer class="fixed bottom-0 left-72 right-0 bg-white dark:bg-[#0f172a] border-t border-[#e5e7eb] dark:border-white/10 px-8 py-4 z-20 shadow-[0_-4px_12px_rgba(0,0,0,0.05)]">
    <div class="max-w-5xl mx-auto flex items-center justify-between">
        <div class="flex items-center gap-6">
            <div class="hidden sm:flex items-center gap-3">
                <div class="w-24 h-2 bg-[#dbe6e3] dark:bg-white/10 rounded-full overflow-hidden">
                    <div class="h-full bg-primary" style="width: 70%;"></div>
                </div>
                <span class="text-sm font-bold text-primary">70% Lengkap</span>
            </div>
            <a class="text-sm font-bold text-primary hover:underline flex items-center gap-1.5" href="<?= base_url('/') ?>">
                <span class="material-symbols-outlined text-lg">visibility</span>
                Lihat Halaman Publik
            </a>
        </div>
        <div class="flex items-center gap-4">
            <button class="px-6 py-2.5 text-[#608a7e] font-bold text-sm hover:bg-[#f0f5f3] dark:hover:bg-white/5 rounded-lg transition-colors">
                Batalkan
            </button>
            <button class="px-8 py-2.5 bg-primary hover:bg-primary/90 text-white font-bold text-sm rounded-lg shadow-lg shadow-primary/20 transition-all">
                Simpan Perubahan
            </button>
        </div>
    </div>
</footer>
<?= $this->endSection() ?>
