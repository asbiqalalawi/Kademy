<?php namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model {

    protected $table = "cart";
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['name','price','id_user'];
    public function getCart($id = false) {
        if ($id === false) {
            return $this->table('cart')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('cart')
                        ->where('cart', $id)
                        ->get()
                        ->getRowArray();
        }
    }

    public function getOneCart($id = false){
        if ($id === false) {
            return $this->table('cart')
                        ->get()
                        ->getRowArray();
        }
    }
    public function insertCart($data) {
        return $this->db->table($this->table)->insert($data);
    }  

    public function deleteCart($id) {
        return $this->db->table('cart')->delete(array('id' => $id));
    }    
}
?>