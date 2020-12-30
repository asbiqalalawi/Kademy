<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        $data['title'] = "Masuk | Kademy";
        return view('login', $data);
    }

    public function register()
    {
        $data['title'] = "Daftar | Kademy";
        return view('register', $data);
    }
}
