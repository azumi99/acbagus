<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GpModel;
use App\Models\SalesModel;

class Sales extends BaseController
{
    protected $salesModel;
    protected $groupModel;
    public function __construct()
    {
        $this->salesModel = new SalesModel();
        $this->groupModel = new GpModel();
    }
    public function cuciac()
    {
        session();
        $Teknisi = $this->groupModel->getViewTeknisi()->getResult();
        $Sale = $this->salesModel->getViewCuciac()->getResult();
        $data = [
            'viewTeknisi'   => $Teknisi,
            'viewOrder'     => $Sale,
            'validation'    => \Config\Services::validation(),
        ];
        return view('admin/sales/cuciac', $data);
    }
    public function cucisave($id_transaksi)
    {
        $this->salesModel->save([
            'id_transaksi'  => $id_transaksi,
            'status'        => $this->request->getVar('update_status'),
            'status_pay'    => $this->request->getVar('update_payment'),
            'teknisi'       => $this->request->getVar('update_teknisi'),
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diupdate');
        return redirect()->to('sales/cuciac');
    }
    public function serviceac()
    {
        session();
        $Teknisi = $this->groupModel->getViewTeknisi()->getResult();
        $Sale = $this->salesModel->getViewService()->getResult();
        $data = [
            'viewTeknisi'   => $Teknisi,
            'viewOrder'     => $Sale,
            'validation'    => \Config\Services::validation(),
        ];
        return view('admin/sales/serviceac', $data);
    }
    public function servicesave($id_transaksi)
    {
        $this->salesModel->save([
            'id_transaksi'  => $id_transaksi,
            'status'        => $this->request->getVar('update_status'),
            'status_pay'    => $this->request->getVar('update_payment'),
            'teknisi'       => $this->request->getVar('update_teknisi'),
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diupdate');
        return redirect()->to('sales/serviceac');
    }
    public function bongkarac()
    {
        session();
        $Teknisi = $this->groupModel->getViewTeknisi()->getResult();
        $Sale = $this->salesModel->getViewBongkar()->getResult();
        $data = [
            'viewTeknisi'   => $Teknisi,
            'viewOrder'     => $Sale,
            'validation'    => \Config\Services::validation(),
        ];
        return view('admin/sales/bongkarac', $data);
    }
    public function bongkarsave($id_transaksi)
    {
        $this->salesModel->save([
            'id_transaksi'  => $id_transaksi,
            'status'        => $this->request->getVar('update_status'),
            'status_pay'    => $this->request->getVar('update_payment'),
            'teknisi'       => $this->request->getVar('update_teknisi'),
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diupdate');
        return redirect()->to('sales/bongkarac');
    }
    public function print($id_transaksi)
    {
        $Sale = $this->salesModel->getViewPrintSales($id_transaksi)->getResult();
        $data = [
            'viewOrder'     => $Sale,
            'validation'    => \Config\Services::validation(),
        ];

        return view('admin/sales/print', $data);
    }
}
