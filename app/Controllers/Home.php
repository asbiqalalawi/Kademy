<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['title'] = "Kademy";
		return view('user/homepage', $data);
	}

	//--------------------------------------------------------------------

}
