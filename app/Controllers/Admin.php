<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data['title'] = "Kademy Admin";
        return view('admin/index', $data);
    }

    //--------------------------------------------------------------------

}
