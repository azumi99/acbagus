<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Profile extends BaseController
{
    protected $usersModel;
    public function __construct()
    {
        $this->usersModel = new UsersModel();
    }
    public function index()
    {
        session();
        $data = [
            'validation'    => \Config\Services::validation(),
        ];
        return view('admin/profile/index', $data);
    }
    public function update($id)
    {
        if (!$this->validate([
            'username'               => [
                'rules'           => 'required|is_unique[users.username,id,' . $id . ']',
                'errors'          => [
                    'required'      => 'Username tidak boleh kosong',
                    'is_unique'     => 'Username sudah terdaftar, gunakan username lain',
                ]
            ],
            'fullname'               => [
                'rules'           => 'required',
                'errors'          => [
                    'required'      => 'Nama tidak boleh kosong',
                ]
            ],
            'email'           => [
                'rules'           =>  'required|is_unique[users.email,id,' . $id . ']',
                'errors'          => [
                    'required'      => 'Email tidak boleh kosong',
                    'is_unique'     => 'Email sudah terdaftar, gunakan email lain',
                ],
            ],
        ])) {
            return redirect()->to('profile')->withInput();
        }

        $this->usersModel->save([
            'id'            => $id,
            'username'      => $this->request->getVar('username'),
            'fullname'      => $this->request->getVar('fullname'),
            'email'         => $this->request->getVar('email'),
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diupdate');
        return redirect()->to('profile');
    }
    public function imgsave($id)
    {
        if (!$this->validate([
            'uploudImage'            => [
                'rules'           => 'max_size[uploudImage,10240]|is_image[uploudImage]|mime_in[uploudImage,image/jpg,image/jpeg,image/png]',
                'errors'          => [

                    'max_size'      => 'Ukuran foto terlalu besar',
                    'is_image'      => 'Upload file dengan format gambar',
                    'mimi_in'       => 'Uploud file dengan format gambar',
                ]
            ]
        ])) {
            return redirect()->to('profile')->withInput();
        }

        $user = $this->usersModel->find($id);
        $fotoProfile = $this->request->getFile('uploudImage');
        $old_image = $user['image'];
        if ($fotoProfile->isValid() && !$fotoProfile->hasMoved()) {

            if (file_exists("img_users/" . $old_image)) {
                if ($old_image == 'default.png') {
                } else {
                    unlink("img_users/" . $old_image);
                }
            }
            $namaFoto = $fotoProfile->getName();
            $fotoProfile->move('img_users');
        } else {
            $namaFoto = $old_image;
        }

        $this->usersModel->save([
            'id'            => $id,
            'image'         => $namaFoto,
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diupdate');
        return redirect()->to('profile');
    }
}
