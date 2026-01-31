<?= $this->extend('layout/dashboard') ?>

<?= $this->section('content') ?>
<div class="px-8 py-8">
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-10">
        <div>
            <h1 class="text-3xl font-black text-[#111816] dark:text-white tracking-tight">Program & Kegiatan</h1>
            <p class="text-[#608a7e]">Manajemen jadwal, lokasi, dan pendaftaran kegiatan masjid.</p>
        </div>
        <a href="<?= base_url('dashboard/program/create') ?>" class="inline-flex items-center gap-2 bg-primary text-white px-6 py-4 rounded-2xl font-black shadow-lg shadow-primary/20 hover:bg-emerald-900 transition-all">
            <span class="material-symbols-outlined">add</span>
            Buat Program Baru
        </a>
    </div>

    <!-- Programs Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach ($programs as $item): ?>
            <div class="bg-white dark:bg-white/5 rounded-[2.5rem] border border-[#e5e7eb] dark:border-white/10 overflow-hidden group hover:shadow-2xl transition-all duration-500 flex flex-col">
                <div class="aspect-video overflow-hidden relative">
                    <?php if (!empty($item['thumbnail'])): ?>
                        <img src="<?= $storage->url($item['thumbnail']) ?>" class="size-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <?php else: ?>
                        <div class="size-full bg-slate-50 dark:bg-white/5 flex items-center justify-center text-slate-300">
                            <span class="material-symbols-outlined text-5xl">event_available</span>
                        </div>
                    <?php endif; ?>
                    <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 rounded-lg text-[10px] font-bold uppercase tracking-widest <?= $item['status'] == 'published' ? 'bg-primary text-white' : 'bg-yellow-400 text-yellow-900' ?>">
                            <?= $item['status'] == 'published' ? 'Terbit' : 'Draft' ?>
                        </span>
                    </div>
                </div>
                
                <div class="p-6 flex-1 flex flex-col">
                    <h3 class="text-lg font-bold mb-4 line-clamp-2"><?= esc($item['title']) ?></h3>
                    
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center gap-2 text-xs text-[#608a7e]">
                            <span class="material-symbols-outlined text-sm">calendar_month</span>
                            <?= date('d M Y, H:i', strtotime($item['date_start'])) ?>
                        </div>
                        <div class="flex items-center gap-2 text-xs text-[#608a7e]">
                            <span class="material-symbols-outlined text-sm">location_on</span>
                            <?= esc($item['location']) ?>
                        </div>
                    </div>

                    <div class="mt-auto flex items-center justify-between pt-6 border-t border-gray-100 dark:border-white/5">
                        <div class="flex items-center gap-2">
                            <a href="<?= base_url('dashboard/program/edit/' . $item['id']) ?>" class="size-10 bg-primary/5 text-primary rounded-xl flex items-center justify-center hover:bg-primary hover:text-white transition-all">
                                <span class="material-symbols-outlined">edit</span>
                            </a>
                            <button onclick="confirmDelete(<?= $item['id'] ?>)" class="size-10 bg-red-50 text-red-500 rounded-xl flex items-center justify-center hover:bg-red-500 hover:text-white transition-all">
                                <span class="material-symbols-outlined">delete</span>
                            </button>
                        </div>
                        <a href="<?= base_url(session()->get('masjid_username') . '/program/' . $item['slug']) ?>" target="_blank" class="text-xs font-bold text-primary hover:underline flex items-center gap-1">
                            Pratinjau
                            <span class="material-symbols-outlined text-xs">open_in_new</span>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <?php if (empty($programs)): ?>
            <div class="md:col-span-2 lg:col-span-3 py-20 bg-white dark:bg-white/5 rounded-[3rem] border border-dashed border-[#dbe6e1] dark:border-white/10 text-center">
                <span class="material-symbols-outlined text-6xl text-primary/20 mb-4">calendar_add_on</span>
                <p class="text-[#608a7e] font-medium">Belum ada program atau kegiatan yang dibuat.</p>
                <a href="<?= base_url('dashboard/program/create') ?>" class="inline-block mt-4 text-primary font-bold hover:underline">Buat program pertama Anda</a>
            </div>
        <?php endif; ?>
    </div>
</div>

<script>
    function confirmDelete(id) {
        if (confirm('Apakah Anda yakin ingin menghapus program ini?')) {
            window.location.href = '<?= base_url('dashboard/program/delete/') ?>' + id;
        }
    }
</script>
<?= $this->endSection() ?>
