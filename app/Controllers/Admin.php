<?php

namespace App\Controllers;

use App\Models\AdminModel;

use PhpCsFixer\Tokenizer\Analyzer\FunctionsAnalyzer;

class Admin extends BaseController
{
    protected $adminModel;
    public function __construct()
    {
        $this->adminModel = new AdminModel();
    }

    public function index()
    {
        session();
        $admModel = $this->adminModel->findAll();
        $data = [
            'admin'       => $admModel,
            'validation'    => \Config\Services::validation(),
        ];
        // dd($data);
        return view('admin/admin_user/index', $data);
    }
    public function simpan()
    {

        if (!$this->validate([
            'nomor_admin'               => [
                'rules'           => 'required|min_length[9]|max_length[15]',
                'errors'          => [
                    'required'      => 'Nomor handphone tidak boleh kosong',
                    'min_length'    => 'Nomor handphone terlalu pendek',
                    'max_length'    => 'Nomor Handphone terlalu panjang',
                ]
            ],
            'email_admin'           => [
                'rules'           => 'required|is_unique[admin.email_admin]',
                'errors'          => [
                    'required'      => 'Email tidak boleh kosong',
                    'is_unique'     => 'Email sudah terdaftar, gunakan email lain',
                ],
            ],

            'foto_admin'            => [
                'rules'           => 'uploaded[foto_admin]|max_size[foto_admin,10240]|is_image[foto_admin]|mime_in[foto_admin,image/jpg,image/jpeg,image/png]',
                'errors'          => [
                    'uploaded'      => 'Upload foto dulu',
                    'max_size'      => 'Ukuran foto terlalu besar',
                    'is_image'      => 'Upload file dengan format gambar',
                    'mimi_in'       => 'Uploud file dengan format gambar',
                ]
            ]
        ])) {
            return redirect()->to('admin')->withInput();
        }

        $fotoAdmin = $this->request->getFile('foto_admin');
        $fotoAdmin->move('img_admin');
        $namaFoto = $fotoAdmin->getName();
        $this->adminModel->save([
            'admin_name'      => $this->request->getVar('nama_admin'),
            'admin_jabatan'   => $this->request->getVar('jabatan_admin'),
            'status_admin'    => $this->request->getVar('status_admin'),
            'hp_admin'     => $this->request->getVar('nomor_admin'),
            'email_admin'     => $this->request->getVar('email_admin'),
            'foto_admin'      => $namaFoto,
            'alamat_admin'    => $this->request->getVar('alamat_admin')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil disimpan');
        return redirect()->to('admin');
    }

    public function update($id)
    {

        if (!$this->validate([
            'nomor_admin'               => [
                'rules'           => 'required|min_length[9]|max_length[15]',
                'errors'          => [
                    'required'      => 'Nomor handphone tidak boleh kosong',
                    'min_length'    => 'Nomor handphone terlalu pendek',
                    'max_length'    => 'Nomor Handphone terlalu panjang',
                ]
            ],
            'email_admin'           => [
                'rules'           =>  'required|is_unique[admin.email_admin,id,' . $id . ']',
                'errors'          => [
                    'required'      => 'Email tidak boleh kosong',
                    'is_unique'     => 'Email sudah terdaftar, gunakan email lain',
                ],
            ],

            'foto_admin'            => [
                'rules'           => 'max_size[foto_admin,10240]|is_image[foto_admin]|mime_in[foto_admin,image/jpg,image/jpeg,image/png]',
                'errors'          => [

                    'max_size'      => 'Ukuran foto terlalu besar',
                    'is_image'      => 'Upload file dengan format gambar',
                    'mimi_in'       => 'Uploud file dengan format gambar',
                ]
            ]
        ])) {
            return redirect()->to('admin')->withInput();
        }

        $admin = $this->adminModel->find($id);
        $fotoAdmin = $this->request->getFile('foto_admin');
        $old_image = $admin['foto_admin'];
        if ($fotoAdmin->isValid() && !$fotoAdmin->hasMoved()) {

            if (file_exists("img_admin/" . $old_image)) {
                unlink("img_admin/" . $old_image);
            }
            $namaFoto = $fotoAdmin->getName();
            $fotoAdmin->move('img_admin');
        } else {
            $namaFoto = $old_image;
        }

        $this->adminModel->save([
            'id'              => $id,
            'admin_name'      => $this->request->getVar('nama_admin'),
            'admin_jabatan'   => $this->request->getVar('jabatan_admin'),
            'status_admin'    => $this->request->getVar('status_admin'),
            'hp_admin'     => $this->request->getVar('nomor_admin'),
            'email_admin'     => $this->request->getVar('email_admin'),
            'foto_admin'      => $namaFoto,
            'alamat_admin'    => $this->request->getVar('alamat_admin')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diupdate');
        return redirect()->to('admin');
    }

    public function delete($id)
    {
        $data = $this->adminModel->find($id);
        $image = $data['foto_admin'];
        if (file_exists("img_admin/" . $image)) {
            unlink("img_admin/" . $image);
        }
        $this->adminModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('admin');
    }
    public function details($id)
    {
        $admin = $this->adminModel->find($id);
        $data = [
            'value' => $admin,
        ];
        return view('admin/admin_user/details', $data);
    }
}
