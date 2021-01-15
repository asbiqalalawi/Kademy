<?php namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model {

    protected $table = "cart";
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['name','price','id_user', 'slug'];
    public function getCart($slug = false) {
        if ($slug === false) {
            return $this->table($this->table)
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table($this->table)
                        ->where('slug', $slug)
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