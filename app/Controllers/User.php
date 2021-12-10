<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\PostModel;
use App\Models\SalesModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class User extends BaseController
{
    protected $postModel;
    protected $KategoriModel;
    protected $salesModel;
    public function __construct()
    {
        $this->postModel = new PostModel();
        $this->KategoriModel = new KategoriModel();
        $this->salesModel = new SalesModel();
    }
    public function index()
    {
        return view('user/index');
    }

    public function about()
    {
        return view('user/about');
    }

    public function contact()
    {
        return view('user/contact');
    }

    public function blog()
    {
        $postShow = $this->postModel->getPostBlog()->getResult();
        $Kategori = $this->KategoriModel->findAll();
        $data = [
            'blogShow'      => $postShow,
            'kategoriShow'  => $Kategori,
        ];
        return view('user/blog', $data);
    }
    public function booking()
    {
        session();
        $data = [
            'validation'    => \Config\Services::validation(),
        ];
        return view('user/booking', $data);
    }
    public function savebooking()
    {
        if (!$this->validate([
            'metode_bayar'               => [
                'rules'           => 'required',
                'errors'          => [
                    'required'      => 'Metode bayar tidak boleh kosong',
                ]
            ],
            'service'           => [
                'rules'           => 'required',
                'errors'          => [
                    'required'      => 'Service tidak boleh kosong',
                ],
            ],
        ])) {
            return redirect()->to('booking')->withInput();
        }

        $this->salesModel->save([
            'date_transaksi'    => $this->request->getVar('date_transaksi'),
            'username_user'     => $this->request->getVar('username'),
            'pembeli'           => $this->request->getVar('pembeli'),
            'nomor_telp'        => $this->request->getVar('nomor_telp'),
            'email_transaksi'   => $this->request->getVar('email_transaksi'),
            'alamat_pembeli'    => $this->request->getVar('alamat_pembeli'),
            'keluhan_detail'    => $this->request->getVar('keluhan_detail'),
            'metode_bayar'      => $this->request->getVar('metode_bayar'),
            'service'           => $this->request->getVar('service'),
            'nominal'           => $this->request->getVar('nominal'),
            'total_harga'       => $this->request->getVar('nominal'),
            'keluhan_detail'    => $this->request->getVar('keluhan_detail'),
        ]);
        session()->setFlashdata('pesan', 'Booking berhasil dibuat');
        return redirect()->to('activity');
    }
    public function cuciac()
    {
        return view('user/service/cuciac');
    }
    public function bongkarac()
    {
        return view('user/service/bongkarac');
    }
    public function serviceac()
    {
        return view('user/service/serviceac');
    }
}
