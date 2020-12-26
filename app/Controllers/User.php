<?php

namespace App\Controllers;

class User extends BaseController
{
	public function index()
	{
		$data['title'] = "Kademy";
		return view('user/homepage', $data);
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
	}
}
