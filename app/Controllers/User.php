<?php

namespace App\Controllers;

use App\Database\Migrations\Cart;
use App\Models\CartModel;
use App\Models\CourseModel;
use App\Models\CourseModel2;
use App\Models\PaymentModel;
use App\Models\UserModel;
use CodeIgniter\Controllers;


class User extends BaseController
{
	public function __construct()
	{
		$session = session();
		
		$this->user = new UserModel();
        $this->kursus = new CourseModel2();
        $this->cart = new CartModel();
        $this->payment = new PaymentModel();

	}
	public function index()
	{
		$data['nama'] = session()->get('nama');
        $session = session('cart');
		$data['total'] = is_array($session)? array_values($session): array();
        $data['items'] = $this->kursus->findAll();
		
		
        $data['course'] = $this->kursus->viewCourse();		
		$dataUser['user'] = $this->user->getUser();
		$data['title'] = "Kademy";
		return view('user/homepage', $data, $dataUser);
	}

	//fungsi checkout batas atas
	
    public function beli($id = null)
    {
		$data['nama'] = session()->get('nama');
		// $dataUser = $this->user->getOneUser($id);

		$idUser = session()->get('id');

		$kursus = $this->kursus->getCourse($id);

        if($kursus != null){ // jika product tidak kosong
 
			
            // buat variabel array untuk menampung data product
            $item = [
                'name'      => $kursus['name'],
				'price'     => $kursus['price'],
				'id_user'	=> $idUser
            ];

            $this->cart->insertCart($item);

            $kursus = $item['name'];
            // success flashdata
            session()->setFlashdata('success', "Berhasil memasukan {$kursus} ke karanjang belanja");
        } else {
            // error flashdata
            session()->setFlashdata('error', "Tidak dapat menemukan data product");
        }
        return redirect()->to(base_url('/')); 
    }
 
    // function untuk menghapus cart berdasarkan id
    public function remove($id = null)
    {
		$data['nama'] = session()->get('nama');
        $cart = new CartModel();
        $cart->deleteCart($id);
        return redirect()->to('/keranjang');
	}
	
	//fungsi checkout batas bawah

	public function detail($slug = null)
	{
		$data['nama'] = session()->get('nama');
		$data['kursus'] = $this->kursus->viewCourse($slug);	
		$data['title'] = "Detail Kelas | Kademy"; //Nama kelas
		if(empty($data['kursus'])) {
			die("Kelas tidak ditemukan");
		}
		
		return view('user/classdetail', $data, compact('data'));
	}

	public function dashboard()
	{
		$data['nama'] = session()->get('nama');
		$data['title'] = "Kademy";
		return view('user/dashboard', $data);
	}

	public function keranjang()
	{
		$data['nama'] = session()->get('nama');
        $data['userId'] = session()->get('id');
        $data['user'] = $this->user->getUser();
        $data['cart'] = $this->cart->getCart();
        $data['title'] = "Keranjang | Kademy";
		return view('user/keranjang', $data);
	}

	public function kelas()
	{
		$data['nama'] = session()->get('nama');
		$data['title'] = "Nama Kelas | Kademy";
		return view('user/kelas', $data);
	}

	public function bayar($slug = null)
	{
		$data['nama'] = session()->get('nama');
		$data['userId'] = session()->get('id');
		$data['cart'] = $this->cart->getCart($slug);
		$data['title'] = "Pembayaran | Kademy";
		return view('user/bayar', $data);
	}

	public function payment(){
		$data['nama'] = session()->get('nama');
		$nama = $this->request->getPost('nama');
		$nomor = $this->request->getPost('nomor');
		$idUser = session()->get('id');

		
		// Membuat array collection yang disiapkan untuk insert ke table
		$data = [
			'no_rekening' 	=> $nomor,
			'nama_rekening' => $nama,
			'id_user'		=> $idUser,
			/* 'nominal'		=> $getCart['price'],
			'judul'			=> $getCart['name'] */
		];
	 
		/* 
		Membuat variabel simpan yang isinya merupakan memanggil function 
		insert_product dan membawa parameter data 
		*/
		$simpan = $this->payment->insertPayment($data);
	 
		// Jika simpan berhasil, maka ...
		if($simpan)
		{
			// Deklarasikan session flashdata dengan tipe success
			session()->setFlashdata('success', 'Created product successfully');
			// Redirect halaman ke product
			return redirect()->to('/keranjang');
		}
		
	}
}