<?php

namespace App\Controllers;

use App\Models\PostModel;
use App\Models\SalesModel;
use App\Models\UsersModel;
use PhpCsFixer\Tokenizer\Analyzer\FunctionsAnalyzer;

class Dashboard extends BaseController
{
    protected $salesModel;
    protected $postModel;
    protected $userModel;
    public function __construct()
    {
        $this->salesModel = new SalesModel();
        $this->postModel = new PostModel();
        $this->userModel = new UsersModel();
    }
    public function index()
    {
        $Post = $this->postModel->getPostDashboard()->getResult();
        $Sales = $this->salesModel->getViewDashboard()->getResultArray();
        $Revenue = $this->salesModel->getViewRevenue()->getRow();
        $Users = $this->userModel->getViewDashboard()->getRow();
        $count = count($Sales);

        $data = [
            'countUsers'    => $Users,
            'countRevenue'  => $Revenue,
            'countSales'    => $count,
            'postView'      => $Post,
        ];

        return view('admin/dashboard/index', $data);
    }
}
