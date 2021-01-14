<?php

namespace App\Controllers;

use App\Models\CartModel;
use App\Models\CourseModel;
use App\Models\CourseModel2;
use App\Models\UserModel;
use CodeIgniter\Controllers;
use Wildanfuady\WFcart\WFcart;


class User extends BaseController
{
	public function __construct()
	{
		$session = session();
		$this->user = new UserModel();
		$this->course = new CourseModel();
        $this->kursus = new CourseModel2();
        $this->cart = new CartModel();

		// membuat variabel untuk menampung class WFcart
        $this->keranjang = new WFcart();
        // memanggil form helper
        helper('form');

	}
	public function index()
	{
        $session = session('cart');
        $data['total'] = is_array($session)? array_values($session): array();
        $data['items'] = $this->kursus->findAll();
        
        $data['course'] = $this->kursus->viewCourse();		
		$dataUser['user'] = $this->user->getUser();
		$data['title'] = "Kademy";
		return view('user/homepage', $data, $dataUser);
	}

	//fungsi checkout batas atas
	
    public function beli($slug = null)
    {
        return redirect()->to(base_url('/')); 
    }
 
    // function untuk update cart berdasarkan id dan quantity
    public function update()
    {
        // update cart
        $this->keranjang->update();
        return redirect()->to('/keranjang');
    }
 
    // function untuk menghapus cart berdasarkan id
    public function remove($id = null)
    {
         
        // cari product berdasarkan id
        $kursus = $this->kursus->viewCourse($id);
        // cek data product
        if($kursus != null){ // jika product tidak kosong
            // hapus keranjang belanja berdasarkan id
            $this->keranjang->remove($id);
            // success flashdata
            session()->setFlashdata('success', "Berhasil menghapus product dari keranjang belanja");
        } else { // product tidak ditemukan
            // error flashdata
            session()->setFlashdata('error', "Tidak dapat menemukan data product");
        }
        return redirect()->to('/keranjang');
	}
	
	//fungsi checkout batas bawah

	public function detail($slug = null)
	{
		
		$data['kursus'] = $this->kursus->viewCourse($slug);	
		$data['title'] = "Detail Kelas | Kademy"; //Nama kelas
		if(empty($data['kursus'])) {
			die("Kelas tidak ditemukan");
		}
		
		return view('user/classdetail', $data, compact('data'));
	}

	public function dashboard()
	{
		$data['title'] = "Kademy";
		return view('user/dashboard', $data);
	}

	public function keranjang()
	{
        $data['items'] = $this->keranjang->totals();
        $data['total'] = $this->keranjang->count_totals();
		$dataUser['user'] = $this->user->getUser();
		$data['title'] = "Keranjang | Kademy";
		return view('user/keranjang', $data, $dataUser);
	}

	public function kelas()
	{
		$data['title'] = "Nama Kelas | Kademy";
		return view('user/kelas', $data);
	}

	public function bayar()
	{
		$data['title'] = "Pembayaran | Kademy";
		return view('user/bayar', $data);
	}
}