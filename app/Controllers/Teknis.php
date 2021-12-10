<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GpModel;
use App\Models\SalesModel;

class Teknis extends BaseController
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
        return view('admin/teknis_akses/cuciac', $data);
    }
    public function cucisave($id_transaksi)
    {
        $total = $this->request->getVar('nominal_tambahan');
        $ambil = $this->salesModel->find($id_transaksi);
        $total_keseluruhan = $ambil['nominal'] + $total;
        $this->salesModel->save([
            'id_transaksi'  => $id_transaksi,
            'total_harga'        => $total_keseluruhan,
            'deskripsi_tambahan' => $this->request->getVar('deskripsi_tambahan')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diupdate');
        return redirect()->to('teknis/cuciac');
    }
    public function cucisaveyakin($id_transaksi)
    {
        $this->salesModel->save([
            'id_transaksi'  => $id_transaksi,
            'status'        => $this->request->getVar('update_status'),
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diupdate');
        return redirect()->to('teknis/cuciac');
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
        return view('admin/teknis_akses/serviceac', $data);
    }
    public function servicesave($id_transaksi)
    {
        $total = $this->request->getVar('nominal_tambahan');
        $ambil = $this->salesModel->find($id_transaksi);
        $total_keseluruhan = $ambil['nominal'] + $total;
        $this->salesModel->save([
            'id_transaksi'  => $id_transaksi,
            'total_harga'        => $total_keseluruhan,
            'deskripsi_tambahan' => $this->request->getVar('deskripsi_tambahan')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diupdate');
        return redirect()->to('teknis/serviceac');
    }
    public function servicesaveyakin($id_transaksi)
    {
        $this->salesModel->save([
            'id_transaksi'  => $id_transaksi,
            'status'        => $this->request->getVar('update_status'),
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diupdate');
        return redirect()->to('teknis/serviceac');
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
        return view('admin/teknis_akses/bongkarac', $data);
    }
    public function bongkarsave($id_transaksi)
    {
        $total = $this->request->getVar('nominal_tambahan');
        $ambil = $this->salesModel->find($id_transaksi);
        $total_keseluruhan = $ambil['nominal'] + $total;
        $this->salesModel->save([
            'id_transaksi'  => $id_transaksi,
            'total_harga'        => $total_keseluruhan,
            'deskripsi_tambahan' => $this->request->getVar('deskripsi_tambahan')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diupdate');
        return redirect()->to('teknis/bongkarac');
    }
    public function bongkarsaveyakin($id_transaksi)
    {
        $this->salesModel->save([
            'id_transaksi'  => $id_transaksi,
            'status'        => $this->request->getVar('update_status'),
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diupdate');
        return redirect()->to('teknis/bongkarac');
    }
}
