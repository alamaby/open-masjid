<?php

namespace App\Controllers;

use App\Models\MasjidModel;
use App\Libraries\Storage;

class Admin extends BaseController
{
    public function index(): string
    {
        $name = session()->get('masjid_name') ?? session()->get('user_name') ?? 'User';
        $data = [
            'title' => 'Dashboard Utama - ' . $name
        ];
        return view('dashboard/index', $data);
    }
    public function profil(): string
    {
        $masjidModel = new \App\Models\MasjidModel();
        $masjidId = session()->get('masjid_id');
        
        $masjid = $masjidModel->find($masjidId);
        $storage = new \App\Libraries\Storage();

        // Fetch Pengurus
        $db = \Config\Database::connect();
        $pengurus = $db->table('masjid_pengurus')
            ->select('masjid_pengurus.*, users.name as user_name, users.phone as user_phone, users.email as user_email')
            ->join('users', 'users.id = masjid_pengurus.user_id')
            ->where('masjid_id', $masjidId)
            ->get()->getResultArray();

        return view('dashboard/profil', [
            'title'    => 'Profil Masjid - Masj.id',
            'masjid'   => $masjid,
            'pengurus' => $pengurus,
            'storage'  => $storage
        ]);
    }

    public function updateProfile()
    {
        $masjidModel = new \App\Models\MasjidModel();
        $masjidId = session()->get('masjid_id');

        $data = $this->request->getPost();
        
        // Handle Photo Upload
        $file = $this->request->getFile('foto_utama');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $storage = new Storage();
            
            // Delete old photo if exists
            $oldMasjid = $masjidModel->find($masjidId);
            if (!empty($oldMasjid['foto_utama'])) {
                $storage->delete($oldMasjid['foto_utama']);
            }

            // Upload new photo
            $uploadPath = $storage->upload($file, 'images/masjid');
            if ($uploadPath) {
                $data['foto_utama'] = $uploadPath;
            }
        }

        // Remove ID if present to prevent primary key issues
        unset($data['id']);

        if ($masjidModel->update($masjidId, $data)) {
            // Update session if name changed
            if (isset($data['name'])) {
                session()->set('masjid_name', $data['name']);
            }
            return redirect()->to('/dashboard/profil')->with('success', 'Profil masjid berhasil diperbarui.');
        }

        return redirect()->back()->withInput()->with('error', 'Gagal memperbarui profil.');
    }

    public function program(): string
    {
        return view('dashboard/program', ['title' => 'Manajemen Program & Kegiatan - Masj.id']);
    }

    public function berita(): string
    {
        return view('dashboard/berita', ['title' => 'Berita & Dokumentasi - Masj.id']);
    }

    public function keuangan(): string
    {
        return view('dashboard/keuangan', ['title' => 'Manajemen Keuangan - Masj.id']);
    }
}
