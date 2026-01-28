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
}
