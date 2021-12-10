<?php

namespace App\Models;

use CodeIgniter\Model;

class SalesModel extends Model
{
    protected $table            = 'sales';
    protected $primaryKey       = 'id_transaksi';
    protected $allowedFields    = ['id_transaksi', 'username_user', 'pembeli', 'nomor_telp', 'email_transaksi', 'alamat_pembeli', 'service', 'keluhan_detail', 'nominal', 'status', 'status_pay', 'date_transaksi', 'teknisi', 'nominal_tambahan', 'deskripsi_tambahan', 'metode_bayar', 'total_harga'];
    public function getViewActivity()
    {
        $getView =  $this->db->table('sales')
            ->where('username_user =', user()->username)
            ->get();
        return $getView;
    }
    public function getViewPrint($id_transaksi)
    {
        $getView =  $this->db->table('sales')
            ->where('username_user =', user()->username)
            ->where('id_transaksi =', $id_transaksi)
            ->get();
        return $getView;
    }
    public function getViewCuciac()
    {
        $getView =  $this->db->table('sales')
            ->where('service =', 'Cuci AC')
            ->get();
        return $getView;
    }
    public function getViewPrintSales($id_transaksi)
    {
        $getView =  $this->db->table('sales')
            ->where('id_transaksi =', $id_transaksi)
            ->get();
        return $getView;
    }
    public function getViewService()
    {
        $getView =  $this->db->table('sales')
            ->where('service =', 'Service AC')
            ->get();
        return $getView;
    }
    public function getViewBongkar()
    {
        $getView =  $this->db->table('sales')
            ->where('service =', 'Bongkar Pasang AC')
            ->get();
        return $getView;
    }
    public function getViewDashboard()
    {
        $dateNow = (date("m"));
        $getView =  $this->db->table('sales')
            ->where('status =', 'Complete')
            ->where('MONTH(date_transaksi) =', $dateNow)
            ->get();
        return $getView;
    }
    public function getViewRevenue()
    {
        $dateNow = (date("m"));
        $getView =  $this->db->table('sales')
            ->selectSum('total_harga')
            ->where('status =', 'Complete')
            ->where('MONTH(date_transaksi) =', $dateNow)
            ->get();
        return $getView;
    }
    // public function getChartCuci()
    // {
    //     $dateNow = (date("m"));
    //     $getView =  $this->db->table('sales')
    //         ->selectSum('total_harga')
    //         ->select('date_transaksi')
    //         ->groupBy('date_transaksi')
    //         ->where('status =', 'Complete')
    //         ->where('service =', 'Cuci AC')
    //         ->where('MONTH(date_transaksi) =', $dateNow)
    //         ->get();
    //     return $getView;
    // }
    // public function getChartBongkar()
    // {
    //     $dateNow = (date("m"));
    //     $getView =  $this->db->table('sales')
    //         ->selectSum('total_harga')
    //         ->groupBy('date_transaksi')
    //         ->where('status =', 'Complete')
    //         ->where('service =', 'Bongkar Pasang AC')
    //         ->where('MONTH(date_transaksi) =', $dateNow)
    //         ->get();
    //     return $getView;
    // }
    // public function getChartService()
    // {
    //     $dateNow = (date("m"));
    //     $getView =  $this->db->table('sales')
    //         ->selectSum('total_harga')
    //         ->groupBy('date_transaksi')
    //         ->where('status =', 'Complete')
    //         ->where('service =', 'Service AC')
    //         ->where('MONTH(date_transaksi) =', $dateNow)
    //         ->get();
    //     return $getView;
    // }
}
