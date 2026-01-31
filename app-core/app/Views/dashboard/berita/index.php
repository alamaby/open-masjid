<?= $this->extend('layout/dashboard') ?>

<?= $this->section('content') ?>
<div class="px-8 py-8">
    <!-- Header Area -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-black text-[#111816] dark:text-white tracking-tight">Berita & Dokumentasi</h1>
            <p class="text-[#608a7e]">Kelola warta, kegiatan, dan dokumentasi masjid Anda.</p>
        </div>
        <div class="flex items-center gap-3">
            <button onclick="openCategoryModal()" class="flex items-center gap-2 px-5 py-2.5 rounded-xl border border-[#dbe6e3] dark:border-white/10 text-sm font-bold hover:bg-white dark:hover:bg-white/5 transition-all">
                <span class="material-symbols-outlined text-sm">category</span>
                Kelola Kategori
            </button>
            <a href="<?= base_url('dashboard/berita/create') ?>" class="flex items-center gap-2 px-6 py-2.5 bg-primary text-white rounded-xl text-sm font-bold hover:bg-emerald-900 transition-all shadow-lg shadow-primary/20">
                <span class="material-symbols-outlined text-sm">edit_square</span>
                Tulis Berita
            </a>
        </div>
    </div>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="mb-6 p-4 bg-emerald-100 border border-emerald-200 text-emerald-800 rounded-xl flex items-center gap-3">
            <span class="material-symbols-outlined">check_circle</span>
            <p class="font-bold text-sm"><?= session()->getFlashdata('success') ?></p>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="mb-6 p-4 bg-red-100 border border-red-200 text-red-800 rounded-xl flex items-center gap-3">
            <span class="material-symbols-outlined">error</span>
            <p class="font-bold text-sm"><?= session()->getFlashdata('error') ?></p>
        </div>
    <?php endif; ?>

    <div class="grid lg:grid-cols-4 gap-8">
        <!-- Sidebar: Categories & Filters -->
        <div class="lg:col-span-1 space-y-6">
            <div class="bg-white dark:bg-white/5 rounded-2xl border border-[#e5e7eb] dark:border-white/10 p-6">
                <h3 class="font-bold mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary text-sm">filter_list</span>
                    Filter Berita
                </h3>
                <div class="space-y-1">
                    <a href="?" class="flex items-center justify-between p-2 rounded-lg <?= !request()->getGet('category') ? 'bg-primary/10 text-primary font-bold' : 'text-[#608a7e] hover:bg-gray-50' ?>">
                        <span class="text-sm">Semua Berita</span>
                        <span class="text-[10px] px-1.5 py-0.5 bg-gray-100 dark:bg-white/10 rounded font-normal"><?= count($news) ?></span>
                    </a>
                    <?php foreach ($categories as $cat): ?>
                        <a href="?category=<?= $cat['slug'] ?>" class="flex items-center justify-between p-2 rounded-lg text-[#608a7e] hover:bg-gray-50">
                            <span class="text-sm"><?= esc($cat['name']) ?></span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Main Content: News Grid -->
        <div class="lg:col-span-3">
            <?php if (empty($news)): ?>
                <div class="bg-white dark:bg-white/5 rounded-3xl border border-dashed border-[#dbe6e3] dark:border-white/10 p-20 text-center">
                    <div class="size-20 bg-primary/10 rounded-full flex items-center justify-center text-primary mx-auto mb-6">
                        <span class="material-symbols-outlined text-4xl font-light">edit_off</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Belum ada berita</h3>
                    <p class="text-[#608a7e] mb-8 max-w-xs mx-auto text-sm">Mulai informasikan kegiatan masjid Anda kepada jamaah dengan menulis berita pertama.</p>
                    <a href="<?= base_url('dashboard/berita/create') ?>" class="btn-primary inline-flex items-center gap-2">
                        <span class="material-symbols-outlined text-sm">add</span>
                        Tulis Berita Sekarang
                    </a>
                </div>
            <?php else: ?>
                <div class="grid sm:grid-cols-2 gap-6">
                    <?php foreach ($news as $item): ?>
                        <div class="bg-white dark:bg-white/5 rounded-2xl border border-[#e5e7eb] dark:border-white/10 overflow-hidden hover:shadow-xl transition-all group border-b-4 border-b-transparent hover:border-b-primary flex flex-col">
                            <div class="aspect-video relative overflow-hidden bg-gray-100">
                                <?php if (!empty($item['thumbnail'])): ?>
                                    <img src="<?= $storage->url($item['thumbnail']) ?>" class="size-full object-cover transition-transform group-hover:scale-110">
                                <?php else: ?>
                                    <div class="size-full flex items-center justify-center text-gray-300">
                                        <span class="material-symbols-outlined text-5xl">image</span>
                                    </div>
                                <?php endif; ?>
                                <div class="absolute top-4 left-4">
                                    <span class="px-3 py-1 bg-black/60 backdrop-blur-md rounded-full text-[10px] font-bold text-white uppercase tracking-widest border border-white/20">
                                        <?= esc($item['category_name'] ?: 'Umum') ?>
                                    </span>
                                </div>
                                <?php if ($item['status'] == 'draft'): ?>
                                    <div class="absolute top-4 right-4">
                                        <span class="px-3 py-1 bg-yellow-400 rounded-full text-[10px] font-bold text-yellow-900 uppercase tracking-widest">Draft</span>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="p-6 flex-1 flex flex-col">
                                <h3 class="font-bold text-lg leading-snug mb-2 group-hover:text-primary transition-colors line-clamp-2"><?= esc($item['title']) ?></h3>
                                <p class="text-xs text-[#608a7e] mb-6 flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-xs">calendar_month</span>
                                    <?= date('d M Y', strtotime($item['created_at'])) ?>
                                </p>
                                
                                <div class="mt-auto pt-4 border-t border-gray-100 dark:border-white/5 flex items-center justify-between gap-2">
                                    <div class="flex items-center gap-2">
                                        <a href="<?= base_url('dashboard/berita/edit/' . $item['id']) ?>" class="size-9 bg-primary/5 text-primary rounded-lg flex items-center justify-center hover:bg-primary hover:text-white transition-all">
                                            <span class="material-symbols-outlined text-lg">edit</span>
                                        </a>
                                        <button onclick="deleteBerita(<?= $item['id'] ?>)" class="size-9 bg-red-50 text-red-500 rounded-lg flex items-center justify-center hover:bg-red-500 hover:text-white transition-all">
                                            <span class="material-symbols-outlined text-lg">delete</span>
                                        </button>
                                    </div>
                                    <a href="#" class="text-xs font-bold text-primary hover:underline">Pratinjau <span class="material-symbols-outlined text-[10px] align-middle">open_in_new</span></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Category Modal -->
<div id="categoryModal" class="fixed inset-0 z-[60] bg-black/60 backdrop-blur-sm hidden flex items-center justify-center p-6">
    <div class="bg-white dark:bg-[#11241d] w-full max-w-md rounded-[2.5rem] overflow-hidden shadow-2xl animate-in zoom-in duration-300">
        <div class="p-8 border-b border-gray-100 dark:border-white/10 flex items-center justify-between">
            <h3 class="text-xl font-bold">Kelola Kategori</h3>
            <button onclick="closeCategoryModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
        <div class="p-8">
            <!-- Add New -->
            <form action="<?= base_url('dashboard/berita/category/save') ?>" method="POST" class="flex gap-2 mb-8">
                <?= csrf_field() ?>
                <input type="text" name="name" placeholder="Nama kategori baru..." required class="flex-1 bg-[#f0f5f3] dark:bg-white/5 border-none rounded-xl text-sm focus:ring-2 focus:ring-primary h-12">
                <button type="submit" class="size-12 bg-primary text-white rounded-xl flex items-center justify-center hover:bg-emerald-900 transition-all shadow-lg shadow-primary/20">
                    <span class="material-symbols-outlined">add</span>
                </button>
            </form>

            <div class="space-y-4 max-h-[300px] overflow-y-auto pr-2">
                <?php foreach ($categories as $cat): ?>
                    <div class="flex items-center justify-between p-4 bg-[#f0f5f3] dark:bg-white/5 rounded-2xl group">
                        <span class="font-bold text-sm"><?= esc($cat['name']) ?></span>
                        <button onclick="deleteCategory(<?= $cat['id'] ?>)" class="size-8 text-red-400 hover:text-red-500 hover:bg-red-50 rounded-lg flex items-center justify-center transition-all">
                            <span class="material-symbols-outlined text-lg">delete</span>
                        </button>
                    </div>
                <?php endforeach; ?>
                <?php if (empty($categories)): ?>
                    <p class="text-center text-xs text-[#608a7e] py-4 italic">Belum ada kategori kustom.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<script>
    function openCategoryModal() {
        document.getElementById('categoryModal').classList.remove('hidden');
        document.getElementById('categoryModal').classList.add('flex');
    }

    function closeCategoryModal() {
        document.getElementById('categoryModal').classList.add('hidden');
        document.getElementById('categoryModal').classList.remove('flex');
    }

    async function deleteBerita(id) {
        if (!confirm('Apakah Anda yakin ingin menghapus berita ini?')) return;

        try {
            const formData = new FormData();
            formData.append('id', id);
            formData.append('<?= csrf_token() ?>', '<?= csrf_hash() ?>');

            const response = await fetch('<?= base_url('dashboard/berita/delete') ?>', {
                method: 'POST',
                body: formData
            });
            const result = await response.json();

            if (result.status === 'success') {
                location.reload();
            } else {
                alert(result.message);
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Gagal menghapus berita.');
        }
    }

    async function deleteCategory(id) {
        if (!confirm('Menghapus kategori akan membuat berita di dalamnya menjadi tanpa kategori. Lanjutkan?')) return;

        try {
            const formData = new FormData();
            formData.append('id', id);
            formData.append('<?= csrf_token() ?>', '<?= csrf_hash() ?>');

            const response = await fetch('<?= base_url('dashboard/berita/category/delete') ?>', {
                method: 'POST',
                body: formData
            });
            const result = await response.json();

            if (result.status === 'success') {
                location.reload();
            } else {
                alert(result.message);
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Gagal menghapus kategori.');
        }
    }
</script>
<?= $this->endSection() ?>
