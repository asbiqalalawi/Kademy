<?php namespace App\Models;

use CodeIgniter\Model;

class CourseModel2 extends Model {

    protected $table = "course";

    public function viewCourse($slug = false) {
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

    public function insertCourse($data) {
        return $this->db->table($this->table)->insert($data);
    }
}
?>