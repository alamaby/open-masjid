<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title><?= $title ?? env('seo.title') ?></title>
    <link rel="icon" type="image/png" href="<?= base_url('public/ico_masjid.png') ?>">
    <meta name="description" content="<?= env('seo.description') ?>">
    <meta name="keywords" content="<?= env('seo.keywords') ?>">
    <meta name="author" content="<?= env('seo.author') ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= current_url() ?>">
    <meta property="og:title" content="<?= $title ?? env('seo.title') ?>">
    <meta property="og:description" content="<?= env('seo.description') ?>">
    <meta property="og:image" content="<?= env('seo.ogImage') ?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?= current_url() ?>">
    <meta property="twitter:title" content="<?= $title ?? env('seo.title') ?>">
    <meta property="twitter:description" content="<?= env('seo.description') ?>">
    <meta property="twitter:image" content="<?= env('seo.ogImage') ?>">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#065F46",
                        "primary-light": "#059669",
                        "background-light": "#f6f8f7",
                        "background-dark": "#061510",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style type="text/tailwindcss">
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(8px);
        }.btn-primary {
            @apply bg-primary text-white px-5 py-2 rounded-lg text-sm font-bold hover:bg-emerald-900 transition-all shadow-sm;
        }
        .btn-primary-lg {
            @apply bg-primary text-white px-8 py-4 rounded-xl text-base font-bold hover:scale-[1.02] transition-transform shadow-lg shadow-primary/20;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-[#111815] dark:text-white transition-colors duration-300">
    
    <?= $this->include('layout/navbar') ?>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="bg-white dark:bg-background-dark border-t border-[#dbe6e1] dark:border-[#1e3a2f] py-16 px-6">
        <div class="max-w-[1200px] mx-auto grid md:grid-cols-4 gap-12">
            <div class="col-span-1 md:col-span-2 flex flex-col gap-6">
                <a href="<?= base_url() ?>" class="flex items-center gap-2">
                    <img src="<?= base_url('public/logo.png') ?>" alt="Logo Masj.id" class="h-6">
                    <h2 class="text-lg font-bold tracking-tight text-primary">Masj.id</h2>
                </a>
                <p class="text-[#3d5a4d] dark:text-gray-400 max-w-[320px]">
                    Platform manajemen masjid berbasis cloud untuk transparansi keuangan dan pemberdayaan umat di era digital.
                </p>
            </div>
            <div class="flex flex-col gap-4">
                <h4 class="font-bold">Informasi</h4>
                <a class="text-[#3d5a4d] dark:text-gray-400 hover:text-primary transition-colors" href="<?= base_url('bantuan') ?>">Bantuan</a>
                <a class="text-[#3d5a4d] dark:text-gray-400 hover:text-primary transition-colors" href="<?= base_url('laporan') ?>">Laporan</a>
                <a class="text-[#3d5a4d] dark:text-gray-400 hover:text-primary transition-colors" href="<?= base_url('kontak') ?>">Kontak Kami</a>
            </div>
            <div class="flex flex-col gap-4">
                <h4 class="font-bold">Legal</h4>
                <a class="text-[#3d5a4d] dark:text-gray-400 hover:text-primary transition-colors" href="<?= base_url('privacy-policy') ?>">Privacy</a>
                <a class="text-[#3d5a4d] dark:text-gray-400 hover:text-primary transition-colors" href="<?= base_url('term') ?>">Term & Condition</a>
            </div>
        </div>
        <div class="max-w-[1200px] mx-auto mt-16 pt-8 border-t border-[#dbe6e1] dark:border-[#1e3a2f] flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-[#3d5a4d]">
            <p>© <?= date('Y') ?> Masj.id - Dikelola secara amanah untuk kemajuan ummat.</p>
            <div class="flex gap-6">
                <a class="hover:text-primary transition-colors" href="#">Instagram</a>
                <a class="hover:text-primary transition-colors" href="#">Twitter</a>
                <a class="hover:text-primary transition-colors" href="#">LinkedIn</a>
            </div>
        </div>
    </footer>

</body>
</html>
