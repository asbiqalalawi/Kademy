<?php

namespace App\Controllers;

use App\Models\MateriModel;
use App\Models\UserModel;

class Admin extends BaseController
{

    public function index()
    {
        $data['title'] = "Kademy Admin";
        return view('admin/index', $data);
    }
    public function lihatmateri()
    {
        $model = new MateriModel();

        $data['title'] = 'Lihat Materi Kademy';
        $data['getMateri'] = $model->getMateri();

        return view('admin/lihatmateri', $data);
    }

    public function tambahmateri()
    {
        $data = [
            'title' => 'Tambah Materi Kademy',

        ];
        return view('admin/tambahmateri', $data);
    }
    public function add()
    {
        $model = new MateriModel();
        $data = array(
            'name' => $this->request->getPost('judul'),
            'course_id'         => $this->request->getPost('course'),
            'content'  => $this->request->getPost('materi'),
        );
        $model->saveMateri($data);
        echo '<script>
                alert("Sukses Tambah Data Materi");
                window.location="' . base_url('/lihatmateri') . '"
            </script>';
    }

    public function editmateri($id)
    {
        $model = new MateriModel;
        $getMateri = $model->getMateri($id)->getRow();
        if (isset($getMateri)) {
            $data['materi'] = $getMateri;
            $data['title']  = 'Edit Materi Kademy' . $getMateri->name;;

            return view('admin/editmateri', $data);
        } else {

            echo '<script>
                    alert("ID materi ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('/lihatmateri') . '"
                </script>';
        }
    }

    public function update()
    {
        $model = new MateriModel();
        $id = $this->request->getPost('id');
        $data = array(
            'name' => $this->request->getPost('judul'),
            'course_id' => $this->request->getPost('course'),
            'content'  => $this->request->getPost('materi')

        );
        $model->editMateri($data, $id);
        echo '<script>
                alert("Sukses Edit Data materi");
                window.location="' . base_url('/lihatmateri') . '"
            </script>';
    }

    public function hapus($id)
    {
        $model = new MateriModel();
        $getMateri = $model->getMateri($id)->getRow();
        if (isset($getMateri)) {
            $model->hapusMateri($id);
            echo '<script>
                    alert("Hapus Data Materi Sukses");
                    window.location="' . base_url('/lihatmateri') . '"
                </script>';
        } else {

            echo '<script>
                    alert("Hapus Gagal !, ID materi ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('/lihatmateri') . '"
                </script>';
        }
    }
    /*----------------------------------user-------------------------------------*/
    public function lihatuser()
    {
        $model = new UserModel();

        $data['title'] = 'Lihat User Kademy';
        $data['getUser'] = $model->getUser();

        return view('admin/lihatuser', $data);
    }

    public function tambahuser()
    {
        $data = [
            'title' => 'Tambah User Kademy',

        ];
        return view('admin/tambahuser', $data);
    }
    public function addus()
    {
        $model = new UserModel();
        $data = array(
            'nama' => $this->request->getPost('nama'),
            'email'         => $this->request->getPost('email'),
            'role_id'  => $this->request->getPost('roleid'),
            'password'  => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        );
        $model->saveUser($data);
        echo '<script>
                alert("Sukses Tambah Data User");
                window.location="' . base_url('/lihatuser') . '"
            </script>';
    }

    public function edituser($id)
    {
        $model = new UserModel();
        $getUser = $model->getUser($id)->getRow();
        if (isset($getUser)) {
            $data['user'] = $getUser;
            $data['title']  = 'Edit User Kademy' . $getUser->nama;;

            return view('admin/edituser', $data);
        } else {

            echo '<script>
                    alert("ID materi ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('/lihatuser') . '"
                </script>';
        }
    }

    public function updateus()
    {
        $model = new UserModel();
        $id = $this->request->getPost('id');
        $data = array(
            'nama' => $this->request->getPost('nama'),
            'password'  => $this->request->getPost('password'),
            'email'         => $this->request->getPost('email'),
            'role_id'  => $this->request->getPost('roleid'),

        );
        //dd($id);
        $model->editUser($data, $id);
        echo '<script>
                alert("Sukses Edit Data materi");
                window.location="' . base_url('/lihatuser') . '"
            </script>';
    }

    public function hapusus($id)
    {
        $model = new UserModel();
        $getUser = $model->getUser($id)->getRow();
        if (isset($getUser)) {
            $model->hapusUser($id);
            echo '<script>
                    alert("Hapus Data User Sukses");
                    window.location="' . base_url('/lihatuser') . '"
                </script>';
        } else {

            echo '<script>
                    alert("Hapus Gagal !, ID user ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('/lihatuser') . '"
                </script>';
        }
    }
}