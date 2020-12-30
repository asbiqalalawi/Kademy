<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Register extends BaseController{
    
    public function index()
    {
        helper(['form']);
        $data['title'] = "Daftar | Kademy";
        $dataUser = [];
        return view('register', $data, $dataUser);
    }

    public function save() {
        helper(['form']);
        $rules = [
            'email'         => ['required|trim|is_unique[user.email]'],
            'password'      => 'required',
            'confirm_password'  => 'required|matches[password]'
        ];

        if($this->validate($rules)) {
            $model = new UserModel();
            $dataUser = [
                'email'     => $this->request->getVar('email'),
                'level'     => '1',
                'password'  => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($dataUser);
            return redirect()->to('/');
        }
        
        else {
            $dataUser['validation'] = $this->validator;
            echo view('register', $dataUser);
        }

    }
}