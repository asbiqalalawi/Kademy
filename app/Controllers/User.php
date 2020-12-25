<?php

namespace App\Controllers;

class User extends BaseController
{
	public function index()
	{
		$data['title'] = "Kademy";
		return view('user/homepage', $data);
	}

	public function keranjang()
	{
		$data['title'] = "Keranjang | Kademy";
		return view('user/keranjang', $data);
	}
}
