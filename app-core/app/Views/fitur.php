<?= $this->extend('layout/main') ?>

<?= $this->section('extra_head') ?>
<title>Fitur Lengkap Platform Masj.id</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?php
// Helper to format numbers compactly (e.g., 1.5k, 1M)
if (!function_exists('formatCompact')) {
    function formatCompact($n) {
        if ($n < 1000) return $n;
        $suffix = '';
        if ($n < 1000000) {
            $n = $n / 1000;
            $suffix = 'rb+'; // Ribu
        } else if ($n < 1000000000) {
            $n = $n / 1000000;
            $suffix = 'Jt+'; // Juta
        } else {
            $n = $n / 1000000000;
            $suffix = 'M+'; // Miliar
        }
        return round($n, 1) . $suffix;
    }
}

// Ensure stats exist
$stats = $stats ?? ['masjid' => 0, 'donasi' => 0, 'jamaah' => 0, 'provinsi' => 0, 'program_aktif' => 0];
?>

<!-- Hero Section -->
<section class="max-w-[1200px] mx-auto px-6 py-16 md:py-24">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div class="flex flex-col gap-6">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-bold uppercase tracking-wider w-fit">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                </span>
                Ecosystem Update 2024
            </div>
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight leading-[1.1] text-gray-900 dark:text-white">
                Fitur Lengkap Platform <span class="text-primary">Masj.id</span>
            </h1>
            <p class="text-lg text-gray-600 dark:text-gray-400 max-w-lg leading-relaxed">
                Solusi manajemen masjid modern dan komprehensif untuk mendukung digitalisasi ekosistem masjid di seluruh Indonesia dengan standar profesional.
            </p>
            <div class="flex flex-wrap gap-4 mt-4">
                <button class="px-8 py-4 rounded-xl bg-primary text-white font-bold text-lg shadow-xl shadow-primary/30 hover:scale-[1.02] transition-transform">
                    Eksplorasi Sekarang
                </button>
                <div class="flex items-center gap-4 px-6 border-l-2 border-gray-200 dark:border-gray-700">
                    <div>
                        <p class="text-2xl font-bold"><?= formatCompact($stats['masjid']) ?></p>
                        <p class="text-xs text-gray-500 uppercase font-semibold">Masjid Aktif</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative">
            <div class="w-full aspect-square bg-gradient-to-br from-primary/20 to-primary/5 rounded-3xl overflow-hidden relative border border-primary/10">
                <div class="absolute inset-0 bg-center bg-no-repeat bg-cover opacity-90 mix-blend-overlay" data-alt="Modern mosque architectural interior with clean lines" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAfzhyf-lOaXv9OMwRtl4gD1s9h6SbdLImPILkFqorTQ5xgM8UbK_fZ9gHyT5ttYmwG9iYeiCBfrL3ocWNLEaLV9rXXweXW3at9dvY27_Dy8Tmg7Brg_InC9g69fJ1MjPnQjxbCxlFF2Yb12nGfqlxAhCRa8kTwKRwy3x5CLIznEbIPwqtQaPK4n3P5WVN0Xf5DPwysccN7qKOAOK3Gr6qqTRLFr6uo8Pts8_p0chM_woCCOUNIGjXdLJw7lubpsTLv2KpjT2h7E2C1");'></div>
                <!-- Floating Stats Card -->
                <div class="absolute bottom-6 left-6 right-6 bg-white/90 dark:bg-gray-900/90 backdrop-blur-xl p-6 rounded-2xl shadow-2xl border border-white/20">
                    <div class="flex justify-between items-center">
                        <div class="flex flex-col">
                            <span class="text-xs font-bold text-gray-500 uppercase mb-1">Total Donasi Terkumpul</span>
                            <span class="text-2xl font-black text-primary">Rp <?= formatCompact($stats['donasi']) ?></span>
                        </div>
                        <div class="h-12 w-12 rounded-full bg-primary/20 flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined">payments</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Feature Grid Section -->
<section class="bg-white dark:bg-[#1a1d21] py-20 border-y border-[#dce4e1] dark:border-gray-800">
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold mb-4">Modul Manajemen Terpadu</h2>
            <p class="text-gray-500 dark:text-gray-400 max-w-2xl mx-auto">
                Dirancang khusus untuk kebutuhan takmir, jamaah, dan pemberdayaan ekonomi umat dalam satu dashboard terintegrasi.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="feature-card bg-background-light dark:bg-background-dark p-8 rounded-2xl border border-[#dce4e1] dark:border-gray-700 flex flex-col gap-5">
                <div class="size-14 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-3xl">language</span>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Portal Berita &amp; Profil</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Web builder instan untuk profil masjid online. Publikasikan kegiatan dan berita masjid dengan subdomain eksklusif.</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="feature-card bg-background-light dark:bg-background-dark p-8 rounded-2xl border border-[#dce4e1] dark:border-gray-700 flex flex-col gap-5">
                <div class="size-14 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-3xl">event_available</span>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Program Kegiatan</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Manajemen jadwal kegiatan dakwah, kajian rutin, dan aksi sosial. Notifikasi otomatis untuk jamaah terdaftar.</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="feature-card bg-background-light dark:bg-background-dark p-8 rounded-2xl border border-[#dce4e1] dark:border-gray-700 flex flex-col gap-5">
                <div class="size-14 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-3xl">qr_code_2</span>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Donasi Program</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Integrasi pembayaran QRIS dan transfer bank. Lacak setiap rupiah donasi dengan transparansi penuh secara real-time.</p>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="feature-card bg-background-light dark:bg-background-dark p-8 rounded-2xl border border-[#dce4e1] dark:border-gray-700 flex flex-col gap-5">
                <div class="size-14 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-3xl">query_stats</span>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Laporan Keuangan</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Otomatisasi laporan keuangan bulanan. Dashboard grafik interaktif yang memudahkan takmir memantau arus kas.</p>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="feature-card bg-background-light dark:bg-background-dark p-8 rounded-2xl border border-[#dce4e1] dark:border-gray-700 flex flex-col gap-5">
                <div class="size-14 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-3xl">groups_3</span>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Manajemen Jamaah</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Sistem CRM khusus untuk database jamaah dan donatur. Kelola database kehadiran dan riwayat kontribusi jamaah.</p>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="feature-card bg-background-light dark:bg-background-dark p-8 rounded-2xl border border-[#dce4e1] dark:border-gray-700 flex flex-col gap-5">
                <div class="size-14 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-3xl">analytics</span>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Data Masyarakat</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Statistik kemiskinan tingkat RW/Kelurahan dan pemetaan penyaluran bantuan sosial agar tepat sasaran.</p>
                </div>
            </div>
            <!-- Card 7 -->
            <div class="feature-card bg-background-light dark:bg-background-dark p-8 rounded-2xl border border-[#dce4e1] dark:border-gray-700 flex flex-col gap-5">
                <div class="size-14 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-3xl">storefront</span>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Ekonomi Masyarakat</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Direktori UMKM warga sekitar masjid. Memberdayakan ekonomi lokal melalui etalase produk digital.</p>
                </div>
            </div>
            <!-- Card 8 -->
            <div class="feature-card bg-background-light dark:bg-background-dark p-8 rounded-2xl border border-[#dce4e1] dark:border-gray-700 flex flex-col gap-5">
                <div class="size-14 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-3xl">hail</span>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Layanan Sewa</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Booking digital untuk ambulans, ruangan pertemuan, dan kendaraan operasional masjid secara teratur.</p>
                </div>
            </div>
            <!-- Card 9 -->
            <div class="feature-card bg-background-light dark:bg-background-dark p-8 rounded-2xl border border-[#dce4e1] dark:border-gray-700 flex flex-col gap-5">
                <div class="size-14 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-3xl">corporate_fare</span>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">BUMM (Badan Usaha)</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Manajemen unit bisnis milik masjid secara profesional. Pantau stok, penjualan, dan profit sharing unit usaha.</p>
                </div>
            </div>
            <!-- Card 10 -->
            <div class="feature-card bg-background-light dark:bg-background-dark p-8 rounded-2xl border border-[#dce4e1] dark:border-gray-700 flex flex-col gap-5">
                <div class="size-14 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-3xl">medical_services</span>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Klinik Kesehatan</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Layanan kesehatan gratis/berbayar dengan integrasi rekam medis sederhana untuk jamaah masjid.</p>
                </div>
            </div>
            <!-- CTA Card -->
            <div class="md:col-span-2 lg:col-span-2 bg-primary p-1 rounded-2xl shadow-xl">
                <div class="h-full w-full bg-primary rounded-2xl p-8 flex flex-col md:flex-row items-center justify-between gap-6 text-white">
                    <div class="max-w-md">
                        <h3 class="text-2xl font-black mb-2">Siap mendigitalisasi Masjid Anda?</h3>
                        <p class="text-white/80 text-sm">Konsultasi gratis dengan tim kami untuk implementasi ekosistem Masj.id di wilayah Anda.</p>
                    </div>
                    <button class="px-8 py-4 bg-white text-primary rounded-xl font-black whitespace-nowrap hover:scale-105 transition-transform shadow-lg shadow-black/10">
                        Hubungi Tim Kami
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Stats Section -->
<section class="py-16 bg-background-light dark:bg-background-dark">
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl border border-[#dce4e1] dark:border-gray-700 shadow-sm text-center">
                <p class="text-primary text-4xl font-black mb-2 tracking-tight"><?= formatCompact($stats['jamaah']) ?></p>
                <p class="text-gray-500 font-semibold text-sm uppercase">Jamaah Aktif</p>
            </div>
            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl border border-[#dce4e1] dark:border-gray-700 shadow-sm text-center">
                <p class="text-primary text-4xl font-black mb-2 tracking-tight"><?= formatCompact($stats['provinsi']) ?></p>
                <p class="text-gray-500 font-semibold text-sm uppercase">Provinsi Terjangkau</p>
            </div>
            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl border border-[#dce4e1] dark:border-gray-700 shadow-sm text-center">
                <p class="text-primary text-4xl font-black mb-2 tracking-tight"><?= formatCompact($stats['program_aktif']) ?></p>
                <p class="text-gray-500 font-semibold text-sm uppercase">Program Aktif</p>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
