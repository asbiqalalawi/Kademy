<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Register extends BaseController
{

    public function __construct()
    {       
        $data['title'] = "Daftar | Kademy";
        helper('form');
        $this->form_validation = \Config\Services::validation();
    }

    public function index()
    {
        $data['title'] = "Daftar | Kademy";
        return view('register', $data);
    }

    public function save()
    {
        $data['title'] = "Daftar | Kademy";
        $rules = [
            'nama'         => 'required|trim',
            'email'         => 'required|trim|is_unique[user.email]',
            'password'      => 'required|min_length[3]|max_length[20]',
            'confirm_password'  => 'required|matches[password]'
        ];

        if ($this->validate($rules)) {
            $model = new UserModel();
            $data = [
                'nama'     => $this->request->getVar('nama'),
                'email'     => $this->request->getVar('email'),
                'role_id'     => '1',
                'password'  => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('/login');
        } else {
            $dataUser['validation'] = $this->validator;
            echo view('/register', $dataUser);
        }
    }
}