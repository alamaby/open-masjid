<?= $this->extend('layout/dashboard') ?>

<?= $this->section('content') ?>
<div class="max-w-7xl mx-auto w-full space-y-6">
    <!-- Page Heading -->
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
        <div class="space-y-1">
            <h1 class="text-3xl font-black text-slate-900 dark:text-white tracking-tight">Keuangan Masjid</h1>
            <p class="text-slate-500 dark:text-slate-400 text-base">Ringkasan dana amanah dan penggunaannya per <span class="font-semibold text-primary">Oktober 2023</span></p>
        </div>
        <button class="bg-primary hover:bg-primary/90 text-white px-6 py-2.5 rounded-lg font-bold text-sm shadow-sm transition-all flex items-center gap-2">
            <span class="material-symbols-outlined text-lg">add_circle</span>
            Tambah Catatan Keuangan
        </button>
    </div>

    <!-- Tabs -->
    <div class="border-b border-slate-200 dark:border-slate-800">
        <nav class="flex gap-8">
            <a class="pb-4 border-b-2 border-primary text-primary font-bold text-sm transition-all" href="#">
                Keuangan Umum Masjid
            </a>
            <a class="pb-4 border-b-2 border-transparent text-slate-500 hover:text-slate-700 dark:text-slate-400 font-medium text-sm transition-all" href="#">
                Keuangan Program Donasi
            </a>
        </nav>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col gap-1">
            <div class="flex justify-between items-start mb-2">
                <div class="p-2 bg-green-50 dark:bg-green-500/10 text-green-600 dark:text-green-400 rounded-lg">
                    <span class="material-symbols-outlined">trending_up</span>
                </div>
                <span class="text-green-600 text-xs font-bold bg-green-50 px-2 py-0.5 rounded-full">+12.5%</span>
            </div>
            <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Dana Masuk</p>
            <p class="text-2xl font-black text-slate-900 dark:text-white">Rp 125.500k</p>
        </div>
        <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col gap-1">
            <div class="flex justify-between items-start mb-2">
                <div class="p-2 bg-orange-50 dark:bg-orange-500/10 text-orange-600 dark:text-orange-400 rounded-lg">
                    <span class="material-symbols-outlined">trending_down</span>
                </div>
                <span class="text-orange-600 text-xs font-bold bg-orange-50 px-2 py-0.5 rounded-full">+5.2%</span>
            </div>
            <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Dana Keluar</p>
            <p class="text-2xl font-black text-slate-900 dark:text-white">Rp 84.200k</p>
        </div>
        <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-primary/20 dark:border-primary/30 shadow-sm flex flex-col gap-1 ring-1 ring-primary/5">
            <div class="flex justify-between items-start mb-2">
                <div class="p-2 bg-primary/10 text-primary rounded-lg">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">account_balance</span>
                </div>
                <span class="text-primary text-xs font-bold bg-primary/10 px-2 py-0.5 rounded-full">Stabil</span>
            </div>
            <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Saldo Amanah</p>
            <p class="text-2xl font-black text-primary">Rp 41.300k</p>
        </div>
        <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col gap-1">
            <div class="flex justify-between items-start mb-2">
                <div class="p-2 bg-blue-50 dark:bg-blue-500/10 text-blue-600 dark:text-blue-400 rounded-lg">
                    <span class="material-symbols-outlined">campaign</span>
                </div>
                <span class="text-blue-600 text-xs font-bold bg-blue-50 px-2 py-0.5 rounded-full">+2 Baru</span>
            </div>
            <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Program Aktif</p>
            <p class="text-2xl font-black text-slate-900 dark:text-white">12</p>
        </div>
    </div>

    <!-- Visibility Toggles -->
    <div class="bg-primary/5 dark:bg-primary/10 border border-primary/20 rounded-xl p-4 flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div class="flex items-center gap-3">
            <span class="material-symbols-outlined text-primary text-2xl">visibility</span>
            <div>
                <p class="text-sm font-bold text-primary">Publikasikan Ringkasan Keuangan</p>
                <p class="text-xs text-primary/70 font-medium">Jamaah dapat melihat ringkasan dana masuk dan keluar melalui portal publik.</p>
            </div>
        </div>
        <label class="relative inline-flex items-center cursor-pointer">
            <input checked="" class="sr-only peer" type="checkbox"/>
            <div class="w-11 h-6 bg-slate-300 peer-focus:outline-none rounded-full peer dark:bg-slate-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary"></div>
        </label>
    </div>

    <!-- Section: Ledger Table -->
    <div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-slate-200 dark:border-slate-800 flex justify-between items-center">
            <h3 class="font-bold text-slate-900 dark:text-white">Buku Kas Umum</h3>
            <div class="flex gap-2">
                <button class="px-3 py-1.5 rounded-lg border border-slate-200 dark:border-slate-700 text-xs font-bold flex items-center gap-1">
                    <span class="material-symbols-outlined text-sm">filter_list</span> Filter
                </button>
                <button class="px-3 py-1.5 rounded-lg border border-slate-200 dark:border-slate-700 text-xs font-bold flex items-center gap-1">
                    <span class="material-symbols-outlined text-sm">download</span> Export
                </button>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead>
                    <tr class="bg-slate-50 dark:bg-slate-800/50 text-slate-500 dark:text-slate-400 uppercase text-[10px] font-black tracking-widest">
                        <th class="px-6 py-4">Tanggal</th>
                        <th class="px-6 py-4">Keterangan</th>
                        <th class="px-6 py-4">Jenis</th>
                        <th class="px-6 py-4">Kategori</th>
                        <th class="px-6 py-4 text-right">Jumlah</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                        <td class="px-6 py-4 text-sm font-medium text-slate-500">12 Okt 2023</td>
                        <td class="px-6 py-4 text-sm font-bold text-slate-900 dark:text-white">Kotak Amal Jumat Ke-2</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 rounded bg-green-100 dark:bg-green-500/20 text-green-700 dark:text-green-400 text-[10px] font-black uppercase">Pemasukan</span>
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400 font-medium">Zakat & Infaq</td>
                        <td class="px-6 py-4 text-sm font-black text-right text-green-600">Rp 12.450.000</td>
                    </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                        <td class="px-6 py-4 text-sm font-medium text-slate-500">10 Okt 2023</td>
                        <td class="px-6 py-4 text-sm font-bold text-slate-900 dark:text-white">Tagihan Listrik & Air</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 rounded bg-orange-100 dark:bg-orange-500/20 text-orange-700 dark:text-orange-400 text-[10px] font-black uppercase">Pengeluaran</span>
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400 font-medium">Operasional</td>
                        <td class="px-6 py-4 text-sm font-black text-right text-orange-600">- Rp 3.200.000</td>
                    </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                        <td class="px-6 py-4 text-sm font-medium text-slate-500">08 Okt 2023</td>
                        <td class="px-6 py-4 text-sm font-bold text-slate-900 dark:text-white">Service AC Aula Utama</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 rounded bg-orange-100 dark:bg-orange-500/20 text-orange-700 dark:text-orange-400 text-[10px] font-black uppercase">Pengeluaran</span>
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400 font-medium">Pemeliharaan</td>
                        <td class="px-6 py-4 text-sm font-black text-right text-orange-600">- Rp 1.500.000</td>
                    </tr>
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                        <td class="px-6 py-4 text-sm font-medium text-slate-500">05 Okt 2023</td>
                        <td class="px-6 py-4 text-sm font-bold text-slate-900 dark:text-white">Donasi Hamba Allah (AC)</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 rounded bg-green-100 dark:bg-green-500/20 text-green-700 dark:text-green-400 text-[10px] font-black uppercase">Pemasukan</span>
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400 font-medium">Sedekah Khusus</td>
                        <td class="px-6 py-4 text-sm font-black text-right text-green-600">Rp 5.000.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="p-4 bg-slate-50 dark:bg-slate-800/30 border-t border-slate-100 dark:border-slate-800 text-center">
            <button class="text-primary text-xs font-bold hover:underline">Lihat Semua Riwayat Transaksi</button>
        </div>
    </div>

    <!-- Section: Program Health -->
    <div class="space-y-4 pb-12">
        <div class="flex items-center justify-between">
            <h3 class="font-bold text-slate-900 dark:text-white flex items-center gap-2">
                Kesehatan Keuangan Program
                <span class="material-symbols-outlined text-slate-400 text-lg">info</span>
            </h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Program Card 1 -->
            <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl p-6 shadow-sm flex flex-col gap-4">
                <div class="flex justify-between items-start">
                    <div>
                        <h4 class="font-black text-slate-900 dark:text-white text-lg leading-tight">Pembangunan Menara Masjid</h4>
                        <p class="text-xs text-slate-500 font-medium mt-1">Estimasi Target: Rp 500.000.000</p>
                    </div>
                    <span class="px-2 py-1 rounded-lg bg-primary/10 text-primary text-[10px] font-black uppercase tracking-wide">Publik</span>
                </div>
                <div class="grid grid-cols-3 gap-2">
                    <div class="bg-slate-50 dark:bg-slate-800/50 p-3 rounded-lg">
                        <p class="text-[10px] text-slate-500 font-bold uppercase">Masuk</p>
                        <p class="text-xs font-black text-slate-900 dark:text-white">Rp 245M</p>
                    </div>
                    <div class="bg-slate-50 dark:bg-slate-800/50 p-3 rounded-lg">
                        <p class="text-[10px] text-slate-500 font-bold uppercase">Salur</p>
                        <p class="text-xs font-black text-slate-900 dark:text-white">Rp 120M</p>
                    </div>
                    <div class="bg-primary/5 dark:bg-primary/10 p-3 rounded-lg">
                        <p class="text-[10px] text-primary font-bold uppercase">Sisa</p>
                        <p class="text-xs font-black text-primary">Rp 125M</p>
                    </div>
                </div>
                <div class="space-y-1.5">
                    <div class="flex justify-between text-[10px] font-bold">
                        <span class="text-slate-500 uppercase">Progress Penyaluran</span>
                        <span class="text-primary">49%</span>
                    </div>
                    <div class="w-full bg-slate-100 dark:bg-slate-800 rounded-full h-2">
                        <div class="bg-primary h-2 rounded-full" style="width: 49%"></div>
                    </div>
                </div>
            </div>
            <!-- Program Card 2 -->
            <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl p-6 shadow-sm flex flex-col gap-4">
                <div class="flex justify-between items-start">
                    <div>
                        <h4 class="font-black text-slate-900 dark:text-white text-lg leading-tight">Santunan Anak Yatim Rutin</h4>
                        <p class="text-xs text-slate-500 font-medium mt-1">Target Bulanan: Rp 15.000.000</p>
                    </div>
                    <span class="px-2 py-1 rounded-lg bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-[10px] font-black uppercase tracking-wide">Internal</span>
                </div>
                <div class="grid grid-cols-3 gap-2">
                    <div class="bg-slate-50 dark:bg-slate-800/50 p-3 rounded-lg">
                        <p class="text-[10px] text-slate-500 font-bold uppercase">Masuk</p>
                        <p class="text-xs font-black text-slate-900 dark:text-white">Rp 18M</p>
                    </div>
                    <div class="bg-slate-50 dark:bg-slate-800/50 p-3 rounded-lg">
                        <p class="text-[10px] text-slate-500 font-bold uppercase">Salur</p>
                        <p class="text-xs font-black text-slate-900 dark:text-white">Rp 15M</p>
                    </div>
                    <div class="bg-primary/5 dark:bg-primary/10 p-3 rounded-lg">
                        <p class="text-[10px] text-primary font-bold uppercase">Sisa</p>
                        <p class="text-xs font-black text-primary">Rp 3M</p>
                    </div>
                </div>
                <div class="space-y-1.5">
                    <div class="flex justify-between text-[10px] font-bold">
                        <span class="text-slate-500 uppercase">Progress Penyaluran</span>
                        <span class="text-primary">83%</span>
                    </div>
                    <div class="w-full bg-slate-100 dark:bg-slate-800 rounded-full h-2">
                        <div class="bg-primary h-2 rounded-full" style="width: 83%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
