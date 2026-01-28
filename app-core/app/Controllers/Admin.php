<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Dashboard Utama - Masjid Amanah'
        ];
        return view('dashboard/index', $data);
    }
    public function profil(): string
    {
        return view('dashboard/profil', ['title' => 'Profil Masjid - Masj.id']);
    }
}
