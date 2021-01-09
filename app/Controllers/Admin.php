<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data['title'] = "Kademy Admin";
        return view('admin/index', $data);
    }

    public function tambahmateri()
    {
        $data['title'] = "Tambah Materi Kademy";
        return view('admin/tambahmateri', $data);
    }

    public function lihatmateri()
    {
        $data['title'] = "Lihat Materi Kademy";
        return view('admin/lihatmateri', $data);
    }
}
