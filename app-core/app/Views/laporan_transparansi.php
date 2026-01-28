<?= $this->extend('layout/landing') ?>

<?= $this->section('content') ?>

<style type="text/tailwindcss">
    .stat-card {
        @apply bg-white border border-[#e5e7eb] p-6 rounded-2xl shadow-sm hover:shadow-md transition-all;
    }
    .table-header {
        @apply px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider border-b border-gray-100;
    }
    .table-cell {
        @apply px-6 py-4 whitespace-nowrap text-sm text-gray-700 border-b border-gray-50;
    }
</style>

<div class="max-w-[1200px] mx-auto px-6 py-12">
    <div class="mb-12">
        <h1 class="text-3xl md:text-4xl font-black tracking-tight mb-4">Laporan Donasi & Transparansi</h1>
        <p class="text-gray-500 max-w-2xl">
            Sebagai wujud amanah, kami menyajikan data real-time donasi masuk dan penggunaan dana operasional Masj.id untuk menjaga keberlanjutan platform dakwah digital.
        </p>
    </div>

    <div class="space-y-8">
        <div class="bg-white dark:bg-gray-800 p-4 rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm flex flex-wrap items-center gap-4">
            <div class="flex items-center gap-2 text-sm font-bold text-gray-600 dark:text-gray-300 mr-2">
                <span class="material-symbols-outlined text-gray-400">filter_list</span>
                Filter Laporan:
            </div>
            <select class="rounded-lg border-gray-200 dark:bg-gray-700 dark:border-gray-600 text-sm focus:ring-primary focus:border-primary min-w-[140px]">
                <option>Semua Bulan</option>
                <option selected="">Januari <?= date('Y') ?></option>
                <option>Desember <?= date('Y')-1 ?></option>
                <option>November <?= date('Y')-1 ?></option>
            </select>
            <select class="rounded-lg border-gray-200 dark:bg-gray-700 dark:border-gray-600 text-sm focus:ring-primary focus:border-primary min-w-[120px]">
                <option selected=""><?= date('Y') ?></option>
                <option><?= date('Y')-1 ?></option>
            </select>
            <button class="ml-auto text-primary text-sm font-bold flex items-center gap-1 hover:underline">
                <span class="material-symbols-outlined text-sm">download</span>
                Unduh Laporan (PDF)
            </button>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="stat-card dark:bg-gray-800 dark:border-gray-700">
                <div class="flex items-center justify-between mb-4">
                    <div class="size-10 bg-emerald-50 dark:bg-emerald-900/20 rounded-lg flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined">payments</span>
                    </div>
                    <span class="text-[10px] font-bold text-emerald-600 bg-emerald-50 dark:bg-emerald-900/30 px-2 py-0.5 rounded">Bulan Ini</span>
                </div>
                <div class="text-sm font-semibold text-gray-500 dark:text-gray-400 mb-1">Total Donasi Masuk</div>
                <div class="text-2xl font-black text-gray-900 dark:text-white">Rp 45.280.000</div>
            </div>
            <div class="stat-card dark:bg-gray-800 dark:border-gray-700">
                <div class="flex items-center justify-between mb-4">
                    <div class="size-10 bg-orange-50 dark:bg-orange-900/20 rounded-lg flex items-center justify-center text-orange-600">
                        <span class="material-symbols-outlined">settings_suggest</span>
                    </div>
                    <span class="text-[10px] font-bold text-orange-600 bg-orange-50 dark:bg-orange-900/30 px-2 py-0.5 rounded">Operasional</span>
                </div>
                <div class="text-sm font-semibold text-gray-500 dark:text-gray-400 mb-1">Total Dana Digunakan</div>
                <div class="text-2xl font-black text-gray-900 dark:text-white">Rp 12.450.000</div>
            </div>
            <div class="stat-card bg-primary dark:bg-primary border-none">
                <div class="flex items-center justify-between mb-4">
                    <div class="size-10 bg-white/20 rounded-lg flex items-center justify-center text-white">
                        <span class="material-symbols-outlined">account_balance</span>
                    </div>
                </div>
                <div class="text-sm font-semibold text-white/80 mb-1">Saldo Saat Ini</div>
                <div class="text-2xl font-black text-white">Rp 32.830.000</div>
            </div>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            <div class="lg:col-span-1 bg-white dark:bg-gray-800 p-8 rounded-3xl border border-gray-100 dark:border-gray-700 shadow-sm">
                <h3 class="font-bold text-lg mb-6 dark:text-white">Distribusi Pengeluaran</h3>
                <div class="relative size-48 mx-auto mb-8">
                    <svg class="size-full -rotate-90" viewBox="0 0 36 36">
                        <circle cx="18" cy="18" fill="none" r="16" stroke="#f3f4f6" stroke-width="4" class="dark:stroke-gray-700"></circle>
                        <circle cx="18" cy="18" fill="none" r="16" stroke="#065F46" stroke-dasharray="50 100" stroke-width="4"></circle>
                        <circle cx="18" cy="18" fill="none" r="16" stroke="#0ea5e9" stroke-dasharray="20 100" stroke-dashoffset="-50" stroke-width="4"></circle>
                        <circle cx="18" cy="18" fill="none" r="16" stroke="#f59e0b" stroke-dasharray="30 100" stroke-dashoffset="-70" stroke-width="4"></circle>
                    </svg>
                    <div class="absolute inset-0 flex flex-col items-center justify-center">
                        <span class="text-xs font-bold text-gray-400">TOTAL</span>
                        <span class="text-lg font-black leading-none dark:text-white">100%</span>
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="size-3 rounded-full bg-primary"></div>
                        <span class="text-sm font-medium flex-1 dark:text-gray-300">Server Hosting</span>
                        <span class="text-sm font-bold dark:text-white">50%</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="size-3 rounded-full bg-sky-500"></div>
                        <span class="text-sm font-medium flex-1 dark:text-gray-300">Security & Maintenance</span>
                        <span class="text-sm font-bold dark:text-white">20%</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="size-3 rounded-full bg-amber-500"></div>
                        <span class="text-sm font-medium flex-1 dark:text-gray-300">Admin & Support</span>
                        <span class="text-sm font-bold dark:text-white">30%</span>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-2 space-y-8">
                <div class="bg-white dark:bg-gray-800 rounded-3xl border border-gray-100 dark:border-gray-700 shadow-sm overflow-hidden">
                    <div class="px-6 py-5 border-b border-gray-100 dark:border-gray-700 flex justify-between items-center">
                        <h3 class="font-bold text-lg dark:text-white">Donasi Masuk Terakhir</h3>
                        <a class="text-xs font-bold text-primary" href="#">Lihat Semua</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50/50 dark:bg-gray-900/50">
                                <tr>
                                    <th class="table-header dark:text-gray-400">Tanggal</th>
                                    <th class="table-header dark:text-gray-400">Jumlah</th>
                                    <th class="table-header text-right dark:text-gray-400">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="table-cell dark:text-gray-300 dark:border-gray-700">15 Jan <?= date('Y') ?>, 14:20</td>
                                    <td class="table-cell font-bold dark:text-white dark:border-gray-700">Rp 250.000</td>
                                    <td class="table-cell text-right dark:border-gray-700">
                                        <span class="px-2 py-1 rounded-full bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-400 text-[10px] font-bold uppercase">Berhasil</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-cell dark:text-gray-300 dark:border-gray-700">15 Jan <?= date('Y') ?>, 10:05</td>
                                    <td class="table-cell font-bold dark:text-white dark:border-gray-700">Rp 1.000.000</td>
                                    <td class="table-cell text-right dark:border-gray-700">
                                        <span class="px-2 py-1 rounded-full bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-400 text-[10px] font-bold uppercase">Berhasil</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-cell dark:text-gray-300 dark:border-gray-700">14 Jan <?= date('Y') ?>, 21:45</td>
                                    <td class="table-cell font-bold dark:text-white dark:border-gray-700">Rp 50.000</td>
                                    <td class="table-cell text-right dark:border-gray-700">
                                        <span class="px-2 py-1 rounded-full bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-400 text-[10px] font-bold uppercase">Berhasil</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-cell dark:text-gray-300 dark:border-gray-700">14 Jan <?= date('Y') ?>, 15:30</td>
                                    <td class="table-cell font-bold dark:text-white dark:border-gray-700">Rp 500.000</td>
                                    <td class="table-cell text-right dark:border-gray-700">
                                        <span class="px-2 py-1 rounded-full bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-400 text-[10px] font-bold uppercase">Berhasil</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-3xl border border-gray-100 dark:border-gray-700 shadow-sm overflow-hidden">
                    <div class="px-6 py-5 border-b border-gray-100 dark:border-gray-700 flex justify-between items-center">
                        <h3 class="font-bold text-lg dark:text-white">Detail Pengeluaran</h3>
                        <a class="text-xs font-bold text-primary" href="#">Lihat Semua</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50/50 dark:bg-gray-900/50">
                                <tr>
                                    <th class="table-header dark:text-gray-400">Tanggal</th>
                                    <th class="table-header dark:text-gray-400">Kategori</th>
                                    <th class="table-header dark:text-gray-400">Keperluan</th>
                                    <th class="table-header text-right dark:text-gray-400">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="table-cell dark:text-gray-300 dark:border-gray-700">10 Jan <?= date('Y') ?></td>
                                    <td class="table-cell dark:border-gray-700">
                                        <span class="px-2 py-1 rounded-md bg-gray-100 dark:bg-gray-900 text-gray-600 dark:text-gray-400 text-[10px] font-bold">Hosting</span>
                                    </td>
                                    <td class="table-cell text-gray-500 dark:text-gray-400 dark:border-gray-700">Pembayaran Server Cloud (AWS)</td>
                                    <td class="table-cell text-right font-bold dark:text-white dark:border-gray-700">Rp 6.200.000</td>
                                </tr>
                                <tr>
                                    <td class="table-cell dark:text-gray-300 dark:border-gray-700">05 Jan <?= date('Y') ?></td>
                                    <td class="table-cell dark:border-gray-700">
                                        <span class="px-2 py-1 rounded-md bg-gray-100 dark:bg-gray-900 text-gray-600 dark:text-gray-400 text-[10px] font-bold">Domain</span>
                                    </td>
                                    <td class="table-cell text-gray-500 dark:text-gray-400 dark:border-gray-700">Perpanjangan Domain masj.id</td>
                                    <td class="table-cell text-right font-bold dark:text-white dark:border-gray-700">Rp 250.000</td>
                                </tr>
                                <tr>
                                    <td class="table-cell dark:text-gray-300 dark:border-gray-700">02 Jan <?= date('Y') ?></td>
                                    <td class="table-cell dark:border-gray-700">
                                        <span class="px-2 py-1 rounded-md bg-gray-100 dark:bg-gray-900 text-gray-600 dark:text-gray-400 text-[10px] font-bold">Security</span>
                                    </td>
                                    <td class="table-cell text-gray-500 dark:text-gray-400 dark:border-gray-700">SSL Certificate & WAF Protection</td>
                                    <td class="table-cell text-right font-bold dark:text-white dark:border-gray-700">Rp 1.500.000</td>
                                </tr>
                                <tr>
                                    <td class="table-cell dark:text-gray-300 dark:border-gray-700">01 Jan <?= date('Y') ?></td>
                                    <td class="table-cell dark:border-gray-700">
                                        <span class="px-2 py-1 rounded-md bg-gray-100 dark:bg-gray-900 text-gray-600 dark:text-gray-400 text-[10px] font-bold">Admin</span>
                                    </td>
                                    <td class="table-cell text-gray-500 dark:text-gray-400 dark:border-gray-700">Gaji Staf Support & Moderator</td>
                                    <td class="table-cell text-right font-bold dark:text-white dark:border-gray-700">Rp 4.500.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
