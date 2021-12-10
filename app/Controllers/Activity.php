<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SalesModel;

class Activity extends BaseController
{
    protected $salesModel;
    public function __construct()
    {
        $this->salesModel = new SalesModel();
    }
    public function index()
    {
        session();
        $Sale = $this->salesModel->getViewActivity()->getResult();
        $data = [
            'viewOrder'     => $Sale,
            'validation'    => \Config\Services::validation(),
        ];
        return view('user/activity', $data);
    }
    public function print($id_transaksi)
    {
        $Sale = $this->salesModel->getViewPrint($id_transaksi)->getResult();
        $data = [
            'viewOrder'     => $Sale,
            'validation'    => \Config\Services::validation(),
        ];

        return view('user/print', $data);
    }
    public function upstatus($id_transaksi)
    {
        $this->salesModel->save([
            'id_transaksi'  => $id_transaksi,
            'status'        => $this->request->getVar('update_status')
        ]);
        session()->setFlashdata('pesan', 'Transaksi berhasil dicancel');
        return redirect()->to('activity');
    }
}
