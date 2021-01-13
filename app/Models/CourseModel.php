<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class CourseModel extends Model{
 
    protected $table = "course";
    protected $primaryKey = "id";
 
    public function getCourse($id)
    {
        return $this->db->table($this->table)->where('id', $id)->get()->getRowArray();
    }
 
}