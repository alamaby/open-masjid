<?= $this->extend('layout/main') ?>

<?= $this->section('extra_head') ?>
<title>Statistik Dampak &amp; Program Kebaikan - Masj.id</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Hero Section -->
<section class="relative pt-20 pb-16 px-6 bg-white dark:bg-background-dark overflow-hidden">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-[1200px] h-full pointer-events-none opacity-5">
        <span class="material-symbols-outlined text-[40rem] absolute -top-20 -right-20">analytics</span>
    </div>
    <div class="max-w-[1200px] mx-auto text-center relative z-10">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-primary/10 border border-primary/20 text-primary text-xs font-bold uppercase tracking-wider mb-6">
            Real-Time Data Transparansi
        </div>
        <h1 class="text-4xl md:text-6xl font-black tracking-tight mb-6">
            Statistik &amp; <span class="text-primary">Dampak Nyata</span>
        </h1>
        <p class="text-lg text-[#3d5a4d] dark:text-gray-400 max-w-[800px] mx-auto mb-16">
            Transparansi adalah kunci amanah. Lihat bagaimana Masj.id membantu ratusan masjid di seluruh Indonesia mengelola dana umat dan memberdayakan masyarakat secara profesional.
        </p>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="stat-card">
                <div class="size-12 bg-primary/10 rounded-full flex items-center justify-center text-primary mb-4 mx-auto">
                    <span class="material-symbols-outlined">apartment</span>
                </div>
                <div class="text-4xl font-black mb-1">842</div>
                <div class="text-sm font-bold text-gray-500 uppercase tracking-widest">Total Masjid Bergabung</div>
            </div>
            <div class="stat-card">
                <div class="size-12 bg-primary/10 rounded-full flex items-center justify-center text-primary mb-4 mx-auto">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <div class="text-4xl font-black mb-1">125,402</div>
                <div class="text-sm font-bold text-gray-500 uppercase tracking-widest">Jamaah Terlayani</div>
            </div>
            <div class="stat-card border-primary/30 bg-primary/5">
                <div class="size-12 bg-primary rounded-full flex items-center justify-center text-white mb-4 mx-auto">
                    <span class="material-symbols-outlined">account_balance_wallet</span>
                </div>
                <div class="text-4xl font-black mb-1">Rp 12.8M+</div>
                <div class="text-sm font-bold text-primary uppercase tracking-widest">Dana Umat Terkelola</div>
            </div>
        </div>
    </div>
</section>

<!-- Geographic Reach Section -->
<section class="py-20 px-6 bg-background-light dark:bg-background-dark/50">
    <div class="max-w-[1200px] mx-auto">
        <div class="flex flex-col md:flex-row items-center gap-12">
            <div class="flex-1">
                <h2 class="text-3xl font-black mb-6">Jangkauan Nasional</h2>
                <p class="text-[#3d5a4d] dark:text-gray-400 mb-8 leading-relaxed">
                    Masj.id kini hadir di seluruh provinsi di Indonesia. Dari Sabang sampai Merauke, kami mendampingi DKM untuk menghadirkan manajemen masjid yang modern, transparan, dan akuntabel.
                </p>
                <div class="space-y-4">
                    <div class="flex items-center gap-4">
                        <div class="w-24 h-2 bg-gray-200 rounded-full overflow-hidden">
                            <div class="bg-primary h-full w-[85%]"></div>
                        </div>
                        <span class="text-sm font-bold">Jawa &amp; Bali (85%)</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-24 h-2 bg-gray-200 rounded-full overflow-hidden">
                            <div class="bg-primary h-full w-[60%]"></div>
                        </div>
                        <span class="text-sm font-bold">Sumatera (60%)</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-24 h-2 bg-gray-200 rounded-full overflow-hidden">
                            <div class="bg-primary h-full w-[45%]"></div>
                        </div>
                        <span class="text-sm font-bold">Sulawesi &amp; Kalimantan (45%)</span>
                    </div>
                </div>
            </div>
            <div class="flex-1 w-full bg-white dark:bg-[#1a2e25] p-4 rounded-3xl border border-[#dce4e1] dark:border-[#1e3a2f] shadow-xl">
                <div class="aspect-video bg-gray-100 dark:bg-gray-800 rounded-2xl flex items-center justify-center overflow-hidden relative">
                    <img alt="Map Indonesia" class="w-full h-full object-cover opacity-50 grayscale hover:grayscale-0 transition-all duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBCnXhpKEkAeS55902AjgxCWRfQFoweQuSlLycpebI02hYi89L97t7yotb8dKVT9sJVhQkuCpXixQgyXmP4jyzlAA7fUqLoboGbXBh-apRZmPnC0V_FmV5ZEmWLdfOoeYWwJ4pNTwzcF9Xg_OllZBF1dMLJdcwJt0wVPZgLqqlalDCpDA1RgGRcQ9Cc_v1UTwBidyxNSgQOEGvYMdmzLNI1dc4p5vDVkncoq6Ck4BmD_HRwpYMk2gI3fK7uRc4ptg0hS_kP2YI4TfZf" />
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="relative">
                            <span class="flex h-4 w-4 absolute -top-10 left-10">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-4 w-4 bg-primary"></span>
                            </span>
                            <span class="flex h-3 w-3 absolute top-5 left-40">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-3 w-3 bg-primary"></span>
                            </span>
                            <span class="flex h-5 w-5 absolute -top-2 left-64">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-5 w-5 bg-primary"></span>
                            </span>
                        </div>
                    </div>
                    <div class="absolute bottom-4 right-4 bg-white/90 dark:bg-gray-900/90 px-3 py-1.5 rounded-lg text-[10px] font-bold uppercase tracking-wider border border-gray-200 dark:border-gray-700">
                        Distribusi Masjid Terdaftar
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Programs & Empowerment Section -->
<section class="py-24 px-6 bg-white dark:bg-background-dark">
    <div class="max-w-[1200px] mx-auto">
        <div class="grid lg:grid-cols-2 gap-16">
            <div class="flex flex-col gap-8">
                <div>
                    <h3 class="text-2xl font-black mb-2 flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary">volunteer_activism</span>
                        Program Kebaikan Masjid
                    </h3>
                    <p class="text-gray-500 dark:text-gray-400">Distribusi kegiatan rutin yang dikelola melalui dashboard Masj.id</p>
                </div>
                <div class="space-y-6">
                    <div class="bg-background-light dark:bg-[#11241d] p-6 rounded-2xl">
                        <div class="flex justify-between items-end mb-6">
                            <div class="text-sm font-bold text-primary uppercase">Volume Kegiatan Bulanan</div>
                            <div class="text-xs text-gray-400">Total 3,420 Kegiatan</div>
                        </div>
                        <div class="flex items-end gap-3 h-40">
                            <div class="flex-1 flex flex-col items-center gap-2">
                                <div class="w-full bg-primary/20 rounded-t-lg h-[60%] relative group">
                                    <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-gray-900 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity">1.2k</div>
                                </div>
                                <span class="text-[10px] font-bold text-gray-400 uppercase">Kajian</span>
                            </div>
                            <div class="flex-1 flex flex-col items-center gap-2">
                                <div class="w-full bg-primary/40 rounded-t-lg h-[85%] relative group">
                                    <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-gray-900 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity">1.8k</div>
                                </div>
                                <span class="text-[10px] font-bold text-gray-400 uppercase">TPA/Quran</span>
                            </div>
                            <div class="flex-1 flex flex-col items-center gap-2">
                                <div class="w-full bg-primary rounded-t-lg h-[45%] relative group">
                                    <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-gray-900 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity">900</div>
                                </div>
                                <span class="text-[10px] font-bold text-gray-400 uppercase">Jumat</span>
                            </div>
                            <div class="flex-1 flex flex-col items-center gap-2">
                                <div class="w-full bg-primary/60 rounded-t-lg h-[30%] relative group">
                                    <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-gray-900 text-white text-[10px] py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity">600</div>
                                </div>
                                <span class="text-[10px] font-bold text-gray-400 uppercase">Fasilitas</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="p-4 border border-[#dbe6e1] dark:border-[#1e3a2f] rounded-xl">
                            <div class="text-2xl font-black text-primary">4,820</div>
                            <div class="text-xs font-bold text-gray-500 uppercase">Sermons (Khotbah)</div>
                        </div>
                        <div class="p-4 border border-[#dbe6e1] dark:border-[#1e3a2f] rounded-xl">
                            <div class="text-2xl font-black text-primary">12k+</div>
                            <div class="text-xs font-bold text-gray-500 uppercase">Santri Quran</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-8">
                <div>
                    <h3 class="text-2xl font-black mb-2 flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary">diversity_3</span>
                        Pemberdayaan Masyarakat
                    </h3>
                    <p class="text-gray-500 dark:text-gray-400">Efektivitas pendayagunaan dana Zakat, Infaq, dan Sedekis (ZIS)</p>
                </div>
                <div class="space-y-6">
                    <div class="bg-background-light dark:bg-[#11241d] p-6 rounded-2xl flex items-center gap-8">
                        <div class="relative size-32 flex-shrink-0">
                            <svg class="size-full" viewBox="0 0 36 36">
                                <path class="text-gray-200 dark:text-gray-700" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-width="3"></path>
                                <path class="text-primary" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-dasharray="45, 100" stroke-linecap="round" stroke-width="3"></path>
                                <path class="text-primary-dark" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-dasharray="30, 100" stroke-dashoffset="-45" stroke-linecap="round" stroke-width="3"></path>
                            </svg>
                            <div class="absolute inset-0 flex flex-col items-center justify-center">
                                <span class="text-lg font-black leading-none">10k+</span>
                                <span class="text-[8px] font-bold text-gray-400 uppercase">Penerima</span>
                            </div>
                        </div>
                        <div class="flex-1 space-y-3">
                            <div class="flex items-center gap-2 text-xs">
                                <div class="size-2 rounded-full bg-primary"></div>
                                <span class="font-bold flex-1">Bantuan Sembako</span>
                                <span class="text-gray-400">45%</span>
                            </div>
                            <div class="flex items-center gap-2 text-xs">
                                <div class="size-2 rounded-full bg-primary-dark"></div>
                                <span class="font-bold flex-1">Modal UMKM</span>
                                <span class="text-gray-400">30%</span>
                            </div>
                            <div class="flex items-center gap-2 text-xs">
                                <div class="size-2 rounded-full bg-gray-300"></div>
                                <span class="font-bold flex-1">Layanan Kesehatan</span>
                                <span class="text-gray-400">25%</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="p-6 bg-primary text-white rounded-2xl">
                            <div class="text-3xl font-black mb-1">850</div>
                            <div class="text-[10px] font-bold uppercase tracking-widest opacity-80">UMKM Didukung</div>
                        </div>
                        <div class="p-6 border border-[#dbe6e1] dark:border-[#1e3a2f] rounded-2xl">
                            <div class="text-3xl font-black text-primary mb-1">25</div>
                            <div class="text-[10px] font-bold text-gray-500 uppercase tracking-widest">Klinik Masjid</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quote Section -->
<section class="py-24 px-6 bg-primary text-white overflow-hidden relative">
    <div class="absolute top-0 right-0 w-96 h-96 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
    <div class="max-w-[800px] mx-auto text-center relative z-10">
        <span class="material-symbols-outlined text-6xl opacity-30 mb-8">format_quote</span>
        <h2 class="text-3xl md:text-4xl font-light italic leading-relaxed mb-12">
            "Digitalisasi manajemen masjid bukan sekadar mengikuti tren, melainkan bentuk pertanggungjawaban tertinggi kita kepada Allah dan para jamaah dalam mengelola amanah."
        </h2>
        <div class="flex flex-col items-center">
            <div class="size-16 rounded-full bg-white/20 mb-4 flex items-center justify-center">
                <span class="material-symbols-outlined text-3xl">person</span>
            </div>
            <div class="font-bold text-xl">Ust. Ahmad Syarifuddin</div>
            <div class="text-white/60 text-sm">Penasehat DKM Masjid Raya Al-Barkah</div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 px-6">
    <div class="max-w-[1000px] mx-auto bg-[#0a1f18] dark:bg-[#11241d] rounded-[2.5rem] p-12 md:p-20 text-center relative overflow-hidden shadow-2xl">
        <div class="relative z-10 flex flex-col items-center gap-8">
            <h2 class="text-4xl md:text-5xl font-black text-white leading-tight">
                Jadilah Bagian dari <br /> Perubahan Baik Ini
            </h2>
            <p class="text-lg text-emerald-100/70 max-w-[600px]">
                Bergabunglah dengan ekosistem masjid modern di Indonesia. Gratis, aman, dan penuh manfaat.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <button class="bg-white text-primary px-10 py-4 rounded-xl text-lg font-bold hover:bg-emerald-50 transition-all shadow-xl">
                    Daftar Sekarang
                </button>
                <button class="bg-white/10 text-white border border-white/20 hover:bg-white/20 px-10 py-4 rounded-xl text-lg font-bold transition-all">
                    Hubungi Tim Support
                </button>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
