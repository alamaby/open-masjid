<?= $this->extend('layout/landing') ?>

<?= $this->section('content') ?>

<style type="text/tailwindcss">
    .section-container {
        @apply max-w-[1000px] mx-auto px-6 py-20;
    }
    .card-stat {
        @apply bg-white border border-[#dbe6e1] dark:border-[#1e3a2f] p-6 rounded-2xl text-center shadow-sm;
    }
</style>

<section class="bg-white dark:bg-background-dark border-b border-[#dbe6e1] dark:border-[#1e3a2f]">
    <div class="section-container text-center">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-primary/5 border border-primary/10 text-primary text-xs font-bold uppercase tracking-widest mb-8">
            Khidmah Untuk Ummat
        </div>
        <h1 class="text-4xl md:text-5xl font-black leading-tight mb-6 text-gray-900 dark:text-white">
            Mendigitalisasi Masjid <br/> <span class="text-primary">Seluruh Indonesia</span> Secara Gratis
        </h1>
        <p class="text-lg text-gray-600 dark:text-gray-400 max-w-[760px] mx-auto leading-relaxed mb-10">
            Yayasan Masjid Digital Indonesia adalah organisasi nirlaba yang berdedikasi untuk memberdayakan masjid melalui teknologi. Sebagai inisiator platform <strong>Masj.id</strong>, kami berkomitmen menyediakan sistem manajemen masjid modern tanpa memungut biaya dari DKM.
        </p>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-12">
            <div class="card-stat dark:bg-[#1a2e25]">
                <span class="block text-3xl font-black text-primary mb-1">100%</span>
                <span class="text-xs font-bold text-gray-500 uppercase">Gratis Selamanya</span>
            </div>
            <div class="card-stat dark:bg-[#1a2e25]">
                <span class="block text-3xl font-black text-primary mb-1">Non-Profit</span>
                <span class="text-xs font-bold text-gray-500 uppercase">Entitas Yayasan</span>
            </div>
            <div class="card-stat dark:bg-[#1a2e25]">
                <span class="block text-3xl font-black text-primary mb-1">Terbuka</span>
                <span class="text-xs font-bold text-gray-500 uppercase">Laporan Publik</span>
            </div>
            <div class="card-stat dark:bg-[#1a2e25]">
                <span class="block text-3xl font-black text-primary mb-1">Amanah</span>
                <span class="text-xs font-bold text-gray-500 uppercase">Berizin Resmi</span>
            </div>
        </div>
    </div>
</section>

<section class="section-container">
    <div class="grid md:grid-cols-2 gap-16 items-center">
        <div>
            <h2 class="text-3xl font-bold mb-6 text-gray-900 dark:text-white">Misi Pemberdayaan Teknologi</h2>
            <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-8 text-base">
                Kami percaya bahwa teknologi seharusnya menjadi jembatan bagi kemajuan dakwah dan transparansi umat. Misi kami bukan hanya membangun software, tapi membangun ekosistem di mana setiap masjid memiliki akses yang sama terhadap alat manajemen yang profesional.
            </p>
            <div class="space-y-6">
                <div class="flex gap-4">
                    <div class="size-11 rounded-xl bg-primary/10 flex-shrink-0 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-2xl">verified</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 dark:text-white">Transparansi Finansial</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">Membantu DKM menyajikan laporan keuangan yang akuntabel kepada jamaah secara real-time.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="size-11 rounded-xl bg-primary/10 flex-shrink-0 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-2xl">auto_graph</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 dark:text-white">Efisiensi Administrasi</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">Mengotomatisasi pencatatan jamaah, aset, dan jadwal kegiatan dalam satu pintu.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative group">
            <div class="aspect-[4/5] rounded-[2.5rem] overflow-hidden bg-gray-100 dark:bg-gray-800 border-4 border-white dark:border-[#1e3a2f] shadow-2xl relative">
                <img alt="Modern Mosque Architecture" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAGipiyg48agSRjm2VZqV0Jz_RgaKsdz8xGwWaWGOvuTQcwyeuF7uYCIA1buc2YkHwDgoitWPFGTHw795Diik7_IE9afPqHFpppJDgjpjuZnP9b8vliWlYm8KYK4GL8MRHRKz7zArIniCG3uyoDSW1tQKAeBOC5aKM5L_QXrQzPspDBeWZePlF5tiXkG2cEbxEq8nizgLHLshGJ-WhK4o7O85iNNkPwC0k7B3lLRGrZu1I_J0YAZ9ZyctT7dOm6b_3xfY3cQxBRPYlD"/>
                <div class="absolute inset-0 bg-gradient-to-t from-primary/40 to-transparent mix-blend-multiply opacity-30"></div>
            </div>
            <div class="absolute -bottom-8 -left-8 bg-white dark:bg-[#1a2e25] p-6 rounded-2xl shadow-xl border border-[#dbe6e1] dark:border-[#1e3a2f] max-w-[260px] z-10">
                <div class="flex items-center gap-2 mb-3">
                    <span class="material-symbols-outlined text-primary text-xl">account_balance</span>
                    <p class="text-[10px] font-bold text-primary uppercase tracking-widest">Infrastruktur Digital</p>
                </div>
                <p class="text-sm font-medium text-gray-700 dark:text-gray-200 leading-relaxed">"Arsitektur teknologi yang kokoh untuk kemaslahatan umat di era modern."</p>
            </div>
            <div class="absolute -top-4 -right-4 size-24 bg-primary/5 rounded-full -z-10 blur-2xl"></div>
        </div>
    </div>
</section>

<section class="bg-primary/5 dark:bg-[#061510]/50 py-24 px-6 border-y border-primary/10">
    <div class="max-w-[1000px] mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-black mb-4 text-gray-900 dark:text-white">Keberlangsungan Platform</h2>
            <p class="text-gray-600 dark:text-gray-400 max-w-[600px] mx-auto">
                Masj.id adalah platform gratis. Untuk membiayai server dan operasional tim IT, kami mengandalkan dukungan dari donatur sukarela.
            </p>
        </div>
        <div class="grid md:grid-cols-2 gap-8 items-start">
            <div class="bg-white dark:bg-[#1a2e25] p-8 rounded-3xl border border-[#dbe6e1] dark:border-[#1e3a2f] shadow-sm">
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-primary text-3xl">info</span>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Kebijakan Donasi</h3>
                </div>
                <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed mb-6">
                    Berbeda dengan platform komersial, kami tidak mengambil persentase dari donasi masjid. Dana operasional kami murni berasal dari donasi ke Yayasan. 
                </p>
                <div class="p-4 bg-amber-50 dark:bg-amber-900/20 rounded-xl border border-amber-100 dark:border-amber-900/30 flex gap-3">
                    <span class="material-symbols-outlined text-amber-600">notification_important</span>
                    <p class="text-xs text-amber-800 dark:text-amber-200 font-medium">Donasi hanya dibuka secara aktif saat dibutuhkan untuk menutupi biaya server & maintenance tahunan.</p>
                </div>
            </div>
            <div class="bg-white dark:bg-[#1a2e25] p-8 rounded-3xl border border-primary/20 shadow-xl relative overflow-hidden">
                <div class="absolute top-0 right-0 p-4 opacity-5">
                    <span class="material-symbols-outlined text-8xl">volunteer_activism</span>
                </div>
                <h3 class="text-xl font-bold mb-6 text-gray-900 dark:text-white">Salurkan Dukungan</h3>
                <div class="space-y-4">
                    <div class="p-4 bg-gray-50 dark:bg-gray-900/50 rounded-xl border border-gray-100 dark:border-gray-800">
                        <p class="text-xs text-gray-500 font-medium uppercase mb-1">Nomor Rekening Yayasan</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xl font-mono font-bold text-gray-800 dark:text-white">7722 0001 234</span>
                            <button class="flex items-center gap-1 text-primary text-xs font-bold hover:underline">
                                <span class="material-symbols-outlined text-sm">content_copy</span> SALIN
                            </button>
                        </div>
                        <p class="text-xs text-gray-500 mt-2 font-medium">Bank Syariah Indonesia (BSI)</p>
                        <p class="text-xs text-gray-400">a.n Yayasan Masjid Digital Indonesia</p>
                    </div>
                    <a class="flex items-center justify-between p-4 bg-primary text-white rounded-xl font-bold hover:bg-emerald-900 transition-colors group" href="<?= base_url('laporan') ?>">
                        <span>Laporan Transparansi Dana</span>
                        <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                    <p class="text-center text-[11px] text-gray-400">Setiap rupiah yang masuk dicatat dan dilaporkan secara publik.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
