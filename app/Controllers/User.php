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

	public function detail()
	{
		$data['title'] = "Detail Kelas | Kademy"; //Nama kelas
		return view('user/classdetail', $data);
	}

	public function dashboard()
	{
		$data['title'] = "Kademy";
		return view('user/dashboard', $data);
	}

	public function keranjang()
	{
		$dataUser['user'] = $this->user->getUser();
		$data['title'] = "Keranjang | Kademy";
		return view('user/keranjang', $data, $dataUser);
	}
<<<<<<< HEAD
}
=======

	public function kelas()
	{
		$data['title'] = "Nama Kelas | Kademy";
		return view('user/kelas', $data);
	}
}
>>>>>>> 5d9fb972a0e99ef36954a1dcfef38413348dc839
