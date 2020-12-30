<?php

namespace App\Controllers;
use App\Models\UserModel2;
use CodeIgniter\Controllers;


class User extends BaseController
{
	public function __construct() 
    {
        $session = session();
        $this->user = new UserModel2();
    }
	public function index()
	{
		$dataUser['user'] = $this->user->getUser();
		$data['title'] = "Kademy";
		return view('user/homepage', $data, $dataUser);
	}

	public function keranjang()
	{
		$dataUser['user'] = $this->user->getUser();
		$data['title'] = "Keranjang | Kademy";
		return view('user/keranjang', $data, $dataUser);
	}
}