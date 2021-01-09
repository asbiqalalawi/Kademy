<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Register extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->form_validation = \Config\Services::validation();
    }

    public function index()
    {
        $data['title'] = "Daftar | Kademy";
        $dataUser = [];
        return view('register', $data, $dataUser);
    }

    public function save()
    {
        $rules = [
            'email'         => 'required|trim|is_unique[user.email]',
            'password'      => 'required|min_length[3]|max_length[20]',
            'confirm_password'  => 'required|matches[password]'
        ];

        if ($this->validate($rules)) {
            $model = new UserModel();
            $dataUser = [
                'email'     => $this->request->getVar('email'),
                'role_id'     => '1',
                'password'  => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($dataUser);
            return redirect()->to('/login');
        } else {
            $dataUser['validation'] = $this->validator;
            echo view('/register', $dataUser);
        }
    }
}
