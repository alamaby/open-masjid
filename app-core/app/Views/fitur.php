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
                Pusat Keadilan & Kebaikan
            </div>
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight leading-[1.1] text-gray-900 dark:text-white">
                Fitur yang Menguatkan Peran <span class="text-primary">Masjid</span> sebagai Pusat Kebaikan
            </h1>
            <p class="text-lg text-gray-600 dark:text-gray-400 max-w-lg leading-relaxed">
                Setiap fitur di Masj.id dirancang bukan sekadar untuk digitalisasi, melainkan untuk membantu masjid menghadirkan dampak nyata bagi jamaah dan masyarakat sekitar.
            </p>
            <div class="flex flex-wrap gap-4 mt-4">
                <a href="#intro" class="px-8 py-4 rounded-xl bg-primary text-white font-bold text-lg shadow-xl shadow-primary/30 hover:scale-[1.02] transition-transform">
                    Bangun Dampak Bersama
                </a>
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
                <div class="absolute inset-0 bg-center bg-no-repeat bg-cover opacity-90 mix-blend-overlay" data-alt="Community gathering at a mosque" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAfzhyf-lOaXv9OMwRtl4gD1s9h6SbdLImPILkFqorTQ5xgM8UbK_fZ9gHyT5ttYmwG9iYeiCBfrL3ocWNLEaLV9rXXweXW3at9dvY27_Dy8Tmg7Brg_InC9g69fJ1MjPnQjxbCxlFF2Yb12nGfqlxAhCRa8kTwKRwy3x5CLIznEbIPwqtQaPK4n3P5WVN0Xf5DPwysccN7qKOAOK3Gr6qqTRLFr6uo8Pts8_p0chM_woCCOUNIGjXdLJw7lubpsTLv2KpjT2h7E2C1");'></div>
                <!-- Floating Stats Card -->
                <div class="absolute bottom-6 left-6 right-6 bg-white/90 dark:bg-gray-900/90 backdrop-blur-xl p-6 rounded-2xl shadow-2xl border border-white/20">
                    <div class="flex justify-between items-center">
                        <div class="flex flex-col">
                            <span class="text-xs font-bold text-gray-500 uppercase mb-1">Total Dana Maslahat</span>
                            <span class="text-2xl font-black text-primary">Rp <?= formatCompact($stats['donasi']) ?></span>
                        </div>
                        <div class="h-12 w-12 rounded-full bg-primary/20 flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined">volunteer_activism</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Intro Section -->
<section class="py-16 px-6 bg-background-light dark:bg-background-dark/30" id="intro">
    <div class="max-w-[800px] mx-auto text-center">
        <p class="text-xl md:text-2xl text-gray-700 dark:text-gray-300 leading-relaxed italic">
            "Masjid bukan hanya tempat ibadah. Masjid adalah pusat kepedulian sosial, pendidikan, ekonomi umat, dan solidaritas warga. Masj.id hadir untuk membantu semua itu berjalan lebih tertata dan berdampak luas."
        </p>
    </div>
</section>

<!-- Feature Grid Section -->
<section class="bg-white dark:bg-[#1a1d21] py-20 border-y border-[#dce4e1] dark:border-gray-800">
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-primary font-bold uppercase tracking-widest text-sm mb-4">Modul Pemberdayaan Terpadu</h2>
            <h3 class="text-3xl md:text-4xl font-black text-[#111815] dark:text-white leading-tight">
                Teknologi Hanya Sarana, Dampak Bagi Umat Adalah Tujuan
            </h3>
            <p class="text-gray-500 dark:text-gray-400 max-w-2xl mx-auto mt-4">
                Kami merancang setiap fitur untuk memudahkan masjid menjalankan peran sosialnya dengan lebih tertata, transparan, dan amanah.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="feature-card bg-background-light dark:bg-background-dark p-8 rounded-2xl border border-[#dce4e1] dark:border-gray-700 flex flex-col gap-5">
                <div class="size-14 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-3xl">language</span>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Penyebar Cahaya Kebaikan</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Publikasikan profil dan kegiatan masjid agar warga lebih mengenal program kebaikan Anda, menanamkan rasa memiliki, dan mengundang partisipasi luas.</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="feature-card bg-background-light dark:bg-background-dark p-8 rounded-2xl border border-[#dce4e1] dark:border-gray-700 flex flex-col gap-5">
                <div class="size-14 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-3xl">event_available</span>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Merajut Silaturahmi & Ilmu</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Penataan agenda dakwah dan sosial yang rapi. Ilmu tersampaikan lebih rutin, silaturahmi terjaga, dan masjid selalu hidup dengan manfaat.</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="feature-card bg-background-light dark:bg-background-dark p-8 rounded-2xl border border-[#dce4e1] dark:border-gray-700 flex flex-col gap-5">
                <div class="size-14 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-3xl">volunteer_activism</span>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Menyalurkan Amanah Responsif</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Integrasi donasi digital mudahkan jamaah berinfak. Bantuan mengalir cepat di saat warga paling membutuhkan (darurat & sosial).</p>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="feature-card bg-background-light dark:bg-background-dark p-8 rounded-2xl border border-[#dce4e1] dark:border-gray-700 flex flex-col gap-5">
                <div class="size-14 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-3xl">verified_user</span>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Merawat Kepercayaan Umat</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Laporan keuangan terbuka dan jujur. Kepercayaan jamaah meningkat, donasi mengalir lebih deras untuk membiayai program sosial.</p>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="feature-card bg-background-light dark:bg-background-dark p-8 rounded-2xl border border-[#dce4e1] dark:border-gray-700 flex flex-col gap-5">
                <div class="size-14 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-3xl">groups_3</span>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Merangkul Setiap Hati</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Akrabi jamaah melalui data yang personal. Perkuat ikatan batin dan pastikan tidak ada jamaah yang terasing di rumah Allah.</p>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="feature-card bg-background-light dark:bg-background-dark p-8 rounded-2xl border border-[#dce4e1] dark:border-gray-700 flex flex-col gap-5">
                <div class="size-14 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-3xl">analytics</span>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Keadilan Tepat Sasaran</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Pemetaan kebutuhan ekonomi warga untuk pemerataan keadilan sosial. Pastikan bantuan jatuh ke tangan yang paling tepat.</p>
                </div>
            </div>
            <!-- Card 7 -->
            <div class="feature-card bg-background-light dark:bg-background-dark p-8 rounded-2xl border border-[#dce4e1] dark:border-gray-700 flex flex-col gap-5">
                <div class="size-14 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-3xl">storefront</span>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Memandirikan Usaha Umat</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Dukung usaha kecil jamaah sekitar. Berdayakan ekonomi lokal melalui etalase produk digital berbasis komunitas masjid.</p>
                </div>
            </div>
            <!-- Card 8 -->
            <div class="feature-card bg-background-light dark:bg-background-dark p-8 rounded-2xl border border-[#dce4e1] dark:border-gray-700 flex flex-col gap-5">
                <div class="size-14 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-3xl">hail</span>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Fasilitas Masjid untuk Semua</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Mudahkan warga akses ambulans atau ruang pertemuan di saat darurat atau hajatan. Masjid hadir menjawab masalah sosial.</p>
                </div>
            </div>
            <!-- Card 9 -->
            <div class="feature-card bg-background-light dark:bg-background-dark p-8 rounded-2xl border border-[#dce4e1] dark:border-gray-700 flex flex-col gap-5">
                <div class="size-14 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-3xl">corporate_fare</span>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Kemandirian untuk Kebaikan</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Kelola unit bisnis masjid secara profesional. Keuntungan kembali jadi dana abadi untuk menolong umat tanpa henti.</p>
                </div>
            </div>
            <!-- Card 10 -->
            <div class="feature-card bg-background-light dark:bg-background-dark p-8 rounded-2xl border border-[#dce4e1] dark:border-gray-700 flex flex-col gap-5">
                <div class="size-14 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-3xl">medical_services</span>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Masjid yang Menyembuhkan</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Layanan kesehatan terjangkau bagi dhuafa. Warga dapati pertolongan cepat, masjid jadi bernaung lahir dan batin.</p>
                </div>
            </div>
</section>

<!-- Impact Summary Section -->
<section class="py-24 px-6 bg-background-light dark:bg-background-dark">
    <div class="max-w-[1200px] mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-black mb-4 text-[#111815] dark:text-white">Ketika Masjid Lebih Tertata, Masyarakat Lebih Sejahtera</h2>
            <p class="text-gray-500 dark:text-gray-400 max-w-2xl mx-auto">
                Setiap ikhtiar manajemen yang kita lakukan bermuara pada satu tujuan: kemaslahatan umat.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
            <div class="p-6 bg-white dark:bg-gray-800 rounded-2xl border border-primary/10 text-center flex flex-col items-center gap-3">
                <span class="text-primary font-bold">Transparansi</span>
                <span class="text-xs text-gray-500">Membangun Kejujuran</span>
            </div>
            <div class="hidden md:flex items-center justify-center text-primary/30">
                <span class="material-symbols-outlined">arrow_forward</span>
            </div>
            <div class="p-6 bg-white dark:bg-gray-800 rounded-2xl border border-primary/10 text-center flex flex-col items-center gap-3">
                <span class="text-primary font-bold">Kepercayaan</span>
                <span class="text-xs text-gray-500">Mengundang Simpati</span>
            </div>
            <div class="hidden md:flex items-center justify-center text-primary/30">
                <span class="material-symbols-outlined">arrow_forward</span>
            </div>
            <div class="p-6 bg-white dark:bg-gray-800 rounded-2xl border border-primary/10 text-center flex flex-col items-center gap-3">
                <span class="text-primary font-bold">Partisipasi</span>
                <span class="text-xs text-gray-500">Jamaah Bergerak</span>
            </div>
            <div class="hidden md:flex items-center justify-center text-primary/30 md:col-start-2">
                <span class="material-symbols-outlined">arrow_forward</span>
            </div>
            <div class="p-6 bg-white dark:bg-gray-800 rounded-2xl border border-primary/10 text-center flex flex-col items-center gap-3 md:col-start-3">
                <span class="text-primary font-bold">Program Sosial</span>
                <span class="text-xs text-gray-500">Aksi Nyata Umat</span>
            </div>
            <div class="hidden md:flex items-center justify-center text-primary/30">
                <span class="material-symbols-outlined">arrow_forward</span>
            </div>
            <div class="p-6 bg-white dark:bg-gray-800 rounded-2xl border border-primary/10 text-center flex flex-col items-center gap-3 md:col-start-5">
                <span class="text-primary font-bold">Dampak Nyata</span>
                <span class="text-xs text-gray-500">Umat Sejahtera</span>
            </div>
        </div>
    </div>
</section>

<!-- Short Story Section -->
<section class="py-24 px-6 bg-white dark:bg-background-dark/30">
    <div class="max-w-[1000px] mx-auto bg-primary/5 rounded-[3rem] p-12 md:p-20 border border-primary/10 text-center">
        <h3 class="text-2xl md:text-3xl font-black text-[#111815] dark:text-white italic leading-tight mb-8">
            "Masjid kini bukan lagi sekadar bangunan megah, melainkan telaga kebaikan yang airnya membasahi dahaga kesulitan setiap warga di sekitarnya."
        </h3>
        <p class="text-lg text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
            Di sebuah masjid pemukiman padat, dulu kotak amal hanya untuk listrik. Setelah dikelola terbuka, masjid mulai mendata warga dhuafa dan berdayakan warung sekitar. Sekarang, keuntungan unit usaha masjid dibagikan dalam paket nutrisi anak panti setiap bulan. Warga merasakan kehadiran rumah Allah dalam hidup mereka.
        </p>
        <p class="text-sm font-bold text-primary uppercase tracking-widest mt-4">Cerita dari Sudut Lingkungan Padat</p>
    </div>
</section>

<!-- Final CTA Section -->
<section class="py-24 px-6 bg-white dark:bg-[#1a1d21]">
    <div class="max-w-[1000px] mx-auto text-center">
        <h2 class="text-3xl md:text-5xl font-black mb-8 text-[#111815] dark:text-white leading-tight">
            Masjid yang kuat bukan hanya bangunannya. <br/> Tetapi dampaknya bagi masyarakat.
        </h2>
        <div class="flex flex-wrap justify-center gap-4 mb-8">
            <a href="<?= base_url('register') ?>" class="px-8 py-4 bg-primary text-white rounded-xl font-black hover:scale-105 transition-all shadow-xl shadow-primary/20">
                Daftarkan Masjid Kami
            </a>
            <a href="#" class="px-8 py-4 bg-background-light dark:bg-gray-800 text-gray-700 dark:text-white rounded-xl font-black border border-[#dce4e1] dark:border-gray-700">
                Lihat Jejak Kebaikan
            </a>
            <a href="#" class="px-8 py-4 bg-primary/10 text-primary rounded-xl font-black hover:bg-primary/20 transition-all">
                Jadi Relawan Kebaikan
            </a>
        </div>
        <p class="text-sm text-gray-500 italic">"Gratis, amanah, dan untuk kebaikan bersama."</p>
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
