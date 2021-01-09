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
        $data = [
            'title' => 'Tambah Materi Kademy',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/tambahmateri', $data);
    }
    public function save()
    {
        if (!$this->validate([
            'judul' => 'required',
            'materi' => 'required',

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/tambahmateri')->withInput()->with('validation', $validation);
        }

        $this->pagesModel->save([
            'judul' => $this->request->getVar('judul'),
            'judul' => $this->request->getVar('judul'),


        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/lihatdata');
    }


    public function lihatmateri()
    {
        $data['title'] = "Lihat Materi Kademy";
        return view('admin/lihatmateri', $data);
    }
}
