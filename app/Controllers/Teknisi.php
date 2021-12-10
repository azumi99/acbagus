<?php

namespace App\Controllers;

use App\Models\TeknisiModel;

use PhpCsFixer\Tokenizer\Analyzer\FunctionsAnalyzer;

class Teknisi extends BaseController
{
    protected $teknisiModel;
    public function __construct()
    {
        $this->teknisiModel = new TeknisiModel();
    }

    public function index()
    {
        session();
        $tekModel = $this->teknisiModel->findAll();
        $data = [
            'teknisi'       => $tekModel,
            'validation'    => \Config\Services::validation(),
        ];
        // dd($data);
        return view('admin/teknisi/index', $data);
    }
    public function simpan()
    {

        if (!$this->validate([
            'no_hp'               => [
                'rules'           => 'required|min_length[9]|max_length[15]',
                'errors'          => [
                    'required'      => 'Nomor handphone tidak boleh kosong',
                    'min_length'    => 'Nomor handphone terlalu pendek',
                    'max_length'    => 'Nomor Handphone terlalu panjang',
                ]
            ],
            'email_tek'           => [
                'rules'           => 'required|is_unique[teknisi.email_tek]',
                'errors'          => [
                    'required'      => 'Email tidak boleh kosong',
                    'is_unique'     => 'Email sudah terdaftar, gunakan email lain',
                ],
            ],

            'foto_tek'            => [
                'rules'           => 'uploaded[foto_tek]|max_size[foto_tek,10240]|is_image[foto_tek]|mime_in[foto_tek,image/jpg,image/jpeg,image/png]',
                'errors'          => [
                    'uploaded'      => 'Upload foto dulu',
                    'max_size'      => 'Ukuran foto terlalu besar',
                    'is_image'      => 'Upload file dengan format gambar',
                    'mimi_in'       => 'Uploud file dengan format gambar',
                ]
            ]
        ])) {
            return redirect()->to('teknisi')->withInput();
        }

        $fotoTeknisi = $this->request->getFile('foto_tek');
        $fotoTeknisi->move('img_teknis');
        $namaFoto = $fotoTeknisi->getName();
        $this->teknisiModel->save([
            'teknisi_name'  => $this->request->getVar('nama_teknisi'),
            'tek_jabatan'   => $this->request->getVar('jabatan'),
            'status_tek'    => $this->request->getVar('status_teknisi'),
            'nomor_hp'      => $this->request->getVar('no_hp'),
            'email_tek'     => $this->request->getVar('email_tek'),
            'foto_teknisi'  => $namaFoto,
            'alamat_tek'    => $this->request->getVar('alamat_teknisi')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil disimpan');
        return redirect()->to('teknisi');
    }

    public function update($id)
    {

        if (!$this->validate([
            'no_hp'               => [
                'rules'           => 'required|min_length[9]|max_length[15]',
                'errors'          => [
                    'required'      => 'Nomor handphone tidak boleh kosong',
                    'min_length'    => 'Nomor handphone terlalu pendek',
                    'max_length'    => 'Nomor Handphone terlalu panjang',
                ]
            ],
            'email_tek'           => [
                'rules'           =>  'required|is_unique[teknisi.email_tek,id,' . $id . ']',
                'errors'          => [
                    'required'      => 'Email tidak boleh kosong',
                    'is_unique'     => 'Email sudah terdaftar, gunakan email lain',
                ],
            ],

            'foto_tek'            => [
                'rules'           => 'max_size[foto_tek,10240]|is_image[foto_tek]|mime_in[foto_tek,image/jpg,image/jpeg,image/png]',
                'errors'          => [

                    'max_size'      => 'Ukuran foto terlalu besar',
                    'is_image'      => 'Upload file dengan format gambar',
                    'mimi_in'       => 'Uploud file dengan format gambar',
                ]
            ]
        ])) {
            return redirect()->to('teknisi')->withInput();
        }

        $teknisi = $this->teknisiModel->find($id);
        $fotoTeknisi = $this->request->getFile('foto_tek');
        $old_image = $teknisi['foto_teknisi'];
        if ($fotoTeknisi->isValid() && !$fotoTeknisi->hasMoved()) {

            if (file_exists("img_teknis/" . $old_image)) {
                unlink("img_teknis/" . $old_image);
            }
            $namaFoto = $fotoTeknisi->getName();
            $fotoTeknisi->move('img_teknis');
        } else {
            $namaFoto = $old_image;
        }

        $this->teknisiModel->save([
            'id'            => $id,
            'teknisi_name'  => $this->request->getVar('nama_teknisi'),
            'tek_jabatan'   => $this->request->getVar('jabatan'),
            'status_tek'    => $this->request->getVar('status_teknisi'),
            'nomor_hp'      => $this->request->getVar('no_hp'),
            'email_tek'     => $this->request->getVar('email_tek'),
            'foto_teknisi'  => $namaFoto,
            'alamat_tek'    => $this->request->getVar('alamat_teknisi')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diupdate');
        return redirect()->to('teknisi');
    }

    public function delete($id)
    {
        $data = $this->teknisiModel->find($id);
        $image = $data['foto_teknisi'];
        if (file_exists("img_teknis/" . $image)) {
            unlink("img_teknis/" . $image);
        }
        $this->teknisiModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('teknisi');
    }
    public function details($id)
    {
        $teknisi = $this->teknisiModel->find($id);
        $data = [
            'value' => $teknisi,
        ];
        return view('admin/teknisi/details', $data);
    }
}
