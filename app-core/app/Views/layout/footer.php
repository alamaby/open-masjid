<!-- Minimalist Footer -->
<footer class="bg-white dark:bg-background-dark border-t border-[#dce4e1] dark:border-gray-800 py-12">
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-8 mb-12">
            <div class="flex flex-col gap-4">
                <a href="<?= base_url() ?>" class="flex items-center gap-3 hover:opacity-80 transition-opacity">
                    <div class="bg-primary p-1.5 rounded-lg text-white">
                        <span class="material-symbols-outlined block text-xl">mosque</span>
                    </div>
                    <h2 class="text-[#121715] dark:text-white text-lg font-extrabold">Masj.id</h2>
                </a>
                <p class="text-sm text-gray-500 max-w-xs">Solusi ekosistem digital terpadu untuk kemajuan masjid dan ekonomi umat di Indonesia.</p>
            </div>
            <div class="flex gap-12">
                <div class="flex flex-col gap-3">
                    <h4 class="font-bold text-sm uppercase text-gray-400">Tautan</h4>
                    <a class="text-sm font-medium hover:text-primary transition-colors" href="#">Bantuan</a>
                    <a class="text-sm font-medium hover:text-primary transition-colors" href="<?= base_url('kebaikan') ?>">Laporan Donasi</a>
                    <a class="text-sm font-medium hover:text-primary transition-colors" href="<?= base_url('kontak') ?>">Kontak Kami</a>
                </div>
                <div class="flex flex-col gap-3">
                    <h4 class="font-bold text-sm uppercase text-gray-400">Legal</h4>
                    <a class="text-sm font-medium hover:text-primary transition-colors" href="#">Privasi</a>
                    <a class="text-sm font-medium hover:text-primary transition-colors" href="#">Syarat</a>
                </div>
            </div>
        </div>
        <div class="pt-8 border-t border-gray-100 dark:border-gray-800 flex flex-col sm:flex-row justify-between items-center gap-4 text-xs text-gray-400 font-semibold">
            <p>© 2024 Masj.id - Platform Manajemen Masjid Terpadu.</p>
            <div class="flex gap-4">
                <a class="hover:text-primary" href="#">Instagram</a>
                <a class="hover:text-primary" href="#">Twitter</a>
                <a class="hover:text-primary" href="#">LinkedIn</a>
            </div>
        </div>
    </div>
</footer>
