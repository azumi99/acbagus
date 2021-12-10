<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Users extends BaseController
{
    protected $usersModel;
    public function __construct()
    {
        $this->usersModel = new UsersModel();
    }

    public function index()
    {
        session();
        $userModel = $this->usersModel->findAll();
        $data = [
            'users'       => $userModel,
            'validation'    => \Config\Services::validation(),
        ];
        return view('admin/users/index', $data);
    }
    public function delete($id)
    {
        $data = $this->usersModel->find($id);
        $image = $data['image'];
        if (file_exists("img_users/" . $image)) {
            if ($image == 'default.png') {
            } else {
                unlink("img_users/" . $image);
            }
        }
        $this->usersModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('users');
    }
}
