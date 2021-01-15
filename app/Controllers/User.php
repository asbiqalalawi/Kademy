<?php

namespace App\Controllers;

use App\Database\Migrations\Cart;
use App\Models\CartModel;
use App\Models\CourseModel;
use App\Models\CourseModel2;
use App\Models\PaymentModel;
use App\Models\UserModel;
use CodeIgniter\Controllers;
use Wildanfuady\WFcart\WFcart;


class User extends BaseController
{
	public function __construct()
	{
		$session = session();
		$this->user = new UserModel();
        $this->kursus = new CourseModel2();
        $this->cart = new CartModel();
        $this->payment = new PaymentModel();

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
	
    public function beli($id = null)
    {
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
        $cart = new CartModel();
        $cart->deleteCart($id);
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
        $data['userId'] = session()->get('id');
        $data['user'] = $this->user->getUser();
        $data['cart'] = $this->cart->getCart();
        $data['title'] = "Keranjang | Kademy";
		return view('user/keranjang', $data);
	}

	public function kelas()
	{
		$data['title'] = "Nama Kelas | Kademy";
		return view('user/kelas', $data);
	}

	public function bayar($id = null)
	{
		$data['userId'] = session()->get('id');
		$data['cart'] = $this->cart->getOneCart($id);
		$data['title'] = "Pembayaran | Kademy";
		return view('user/bayar', $data);
	}

	public function payment($id = null){

		/* $idCourse = $this->cart->getOneCart */
		$idUser = session()->get('id');
		$data = $this->cart->getCart();

		$test = $data;

		// dd($test);
		// dd($data['id_user']);
		// dd($idUser);
		// foreach($data as $ddata) {
		// 	dd($ddata);
		// 	if ($ddata['id_user'] == $idUser) {
		/* 		$item = [
					'no_rekening'	=> $this->request->getVar('nama'),
					'nama_rekening'	=> $this->request->getVar('nomor'),
					'id_user'		=> $idUser,
					'nominal'		=> $data['price'],
					'course_id'		=> $data['id']
				];
		// }
		dd($item); */
		/* $bayar = $this->payment->insertPayment($item);
		
		if($bayar) {

			$cart = new CartModel();
			   $cart->deleteCart($id);
			   
			// } 
		} */
		return redirect()->to('/keranjang');
	}
}