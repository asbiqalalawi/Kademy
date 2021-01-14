<?php namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model {

    protected $table = "cart";

    public function insertCart($data) {
        return $this->db->table($this->table)->insert($data);
    }    
}
?>