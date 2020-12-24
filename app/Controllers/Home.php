<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['title'] = "Kademy";
		return view('user/homepage', $data);
	}

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
