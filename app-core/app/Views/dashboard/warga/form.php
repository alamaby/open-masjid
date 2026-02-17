<?= $this->extend('layout/dashboard') ?>

<?= $this->section('content') ?>
<div class="container mx-auto px-4 py-8 max-w-3xl">
    <div class="flex items-center gap-4 mb-8">
        <a href="<?= base_url('dashboard/warga') ?>" class="size-10 flex items-center justify-center rounded-xl bg-white border border-[#dbe6e1] hover:bg-[#f0f5f3] transition-colors">
            <span class="material-symbols-outlined text-[#608a7e]">arrow_back</span>
        </a>
        <div>
            <h1 class="text-3xl font-black text-[#111816]"><?= $warga ? 'Edit Data Warga' : 'Tambah Warga Baru' ?></h1>
            <p class="text-[#608a7e]">Lengkapi formulir di bawah ini dengan data yang valid.</p>
        </div>
    </div>

    <div class="bg-white rounded-[2rem] shadow-sm border border-[#dbe6e1] p-8">
        <?php if (session()->getFlashdata('error')): ?>
            <div class="bg-red-50 border border-red-100 text-red-600 px-4 py-3 rounded-xl mb-6 flex items-center gap-2">
                <span class="material-symbols-outlined">error</span>
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('dashboard/warga/save') ?>" method="post" class="space-y-6">
            <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?= $warga['id'] ?? '' ?>">

            <div class="grid md:grid-cols-2 gap-6">
                <!-- Nama Lengkap -->
                <div class="col-span-full">
                    <label class="block text-sm font-bold text-[#111816] mb-2">Nama Lengkap <span class="text-red-500">*</span></label>
                    <input type="text" name="name" value="<?= esc($warga['name'] ?? '') ?>" class="w-full px-4 py-3 rounded-xl border border-[#dbe6e1] focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all" required placeholder="Contoh: Ahmad Fauzi">
                </div>

                <!-- NIK & KK -->
                <div>
                    <label class="block text-sm font-bold text-[#111816] mb-2">NIK (KTP)</label>
                    <input type="number" name="nik" value="<?= esc($warga['nik'] ?? '') ?>" class="w-full px-4 py-3 rounded-xl border border-[#dbe6e1] focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all" placeholder="16 digit NIK">
                </div>
                <div>
                    <label class="block text-sm font-bold text-[#111816] mb-2">Nomor KK</label>
                    <input type="number" name="kk" value="<?= esc($warga['kk'] ?? '') ?>" class="w-full px-4 py-3 rounded-xl border border-[#dbe6e1] focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all" placeholder="16 digit No. KK">
                </div>

                <!-- Kontak -->
                <div>
                    <label class="block text-sm font-bold text-[#111816] mb-2">No. WhatsApp / HP</label>
                    <input type="text" name="phone" value="<?= esc($warga['phone'] ?? '') ?>" class="w-full px-4 py-3 rounded-xl border border-[#dbe6e1] focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all" placeholder="0812...">
                </div>

                <!-- Address -->
                <div class="col-span-full">
                    <label class="block text-sm font-bold text-[#111816] mb-2">Alamat Domisili</label>
                    <textarea name="address" rows="3" class="w-full px-4 py-3 rounded-xl border border-[#dbe6e1] focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all" placeholder="Alamat lengkap warga..."><?= esc($warga['address'] ?? '') ?></textarea>
                </div>
            </div>

            <div class="border-t border-dashed border-[#dbe6e1] my-8"></div>

            <div class="grid md:grid-cols-2 gap-6">
                <!-- Status Ekonomi -->
                <div>
                    <label class="block text-sm font-bold text-[#111816] mb-2">Status Ekonomi <span class="text-red-500">*</span></label>
                    <select name="economic_status" class="w-full px-4 py-3 rounded-xl border border-[#dbe6e1] focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all" required>
                        <?php
                        $options = ['mampu' => 'Mampu', 'cukup' => 'Cukup', 'kurang_mampu' => 'Kurang Mampu', 'fakir' => 'Fakir', 'miskin' => 'Miskin', 'yatim' => 'Yatim / Piatu'];
                        foreach ($options as $val => $label):
                        ?>
                            <option value="<?= $val ?>" <?= ($warga['economic_status'] ?? 'cukup') == $val ? 'selected' : '' ?>><?= $label ?></option>
                        <?php endforeach; ?>
                    </select>
                    <p class="text-xs text-[#608a7e] mt-2">Digunakan untuk prioritas penyaluran bantuan.</p>
                </div>

                <!-- Status Keaktifan -->
                <div>
                    <label class="block text-sm font-bold text-[#111816] mb-2">Status Warga <span class="text-red-500">*</span></label>
                    <select name="status" class="w-full px-4 py-3 rounded-xl border border-[#dbe6e1] focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all" required>
                        <option value="active" <?= ($warga['status'] ?? 'active') == 'active' ? 'selected' : '' ?>>Aktif (Tinggal Tetap)</option>
                        <option value="moved" <?= ($warga['status'] ?? '') == 'moved' ? 'selected' : '' ?>>Pindah Domisili</option>
                        <option value="deceased" <?= ($warga['status'] ?? '') == 'deceased' ? 'selected' : '' ?>>Meninggal Dunia</option>
                        <option value="inactive" <?= ($warga['status'] ?? '') == 'inactive' ? 'selected' : '' ?>>Tidak Aktif</option>
                    </select>
                </div>

                <!-- Notes -->
                <div class="col-span-full">
                    <label class="block text-sm font-bold text-[#111816] mb-2">Catatan Tambahan (Opsional)</label>
                    <textarea name="notes" rows="3" class="w-full px-4 py-3 rounded-xl border border-[#dbe6e1] focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all" placeholder="Catatan khusus tentang kondisi warga..."><?= esc($warga['notes'] ?? '') ?></textarea>
                </div>
            </div>

            <div class="flex justify-end gap-3 mt-8">
                <a href="<?= base_url('dashboard/warga') ?>" class="px-6 py-3 rounded-xl font-bold text-[#608a7e] hover:bg-[#f0f5f3] transition-colors">Batal</a>
                <button type="submit" class="bg-primary text-white px-8 py-3 rounded-xl font-bold shadow-lg shadow-primary/30 hover:shadow-xl hover:-translate-y-1 transition-all">
                    Simpan Data
                </button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
