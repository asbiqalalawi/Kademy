<?php namespace App\Models;

use CodeIgniter\Model;

class PaymentModel extends Model {

    protected $table = "payment";
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['no_rekening','nama_rekening','id_user', 'nominal', 'course_id'];
    
    public function getPayment($id = false) {
        if ($id === false) {
            return $this->table('payment')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('payment')
                        ->where('payment', $id)
                        ->get()
                        ->getRowArray();
        }
    }

    public function getOnePayment($id = false){
        if ($id === false) {
            return $this->table('payment')
                        ->get()
                        ->getRowArray();
        }
    }

    public function insertPayment($data) {
        return $this->db->table($this->table)->insert($data);
    }  
}
?>