<?php

namespace App\Controllers;

use App\Models\GpModel;
use App\Models\UserModel;

class Group extends BaseController
{
    protected $gpModel;
    public function __construct()
    {
        $this->gpModel = new GpModel();
    }

    public function index()
    {

        session();
        $groupModel = $this->gpModel->getGroup()->getResult();
        $groupUser = $this->gpModel->getkumpulanuser()->getResult();
        $Usergroup = $this->gpModel->getnamagroup()->getResult();
        $i = $this->gpModel->getI()->getResult();
        $data = [
            'group'         => $groupModel,
            'user'          => $groupUser,
            'name_group'    => $Usergroup,
            'i'             => $i,
            'validation'    => \Config\Services::validation(),
        ];

        return view('admin/user_group/index', $data);
    }
    public function update($id_role)
    {
        if (!$this->validate([
            'users_simpan'               => [
                'rules'           => 'required',
                'errors'          => [
                    'required'      => 'User belum di pilih',
                ]
            ],
            'role_simpan'           => [
                'rules'           => 'required',
                'errors'          => [
                    'required'      => 'Role belum di pilih',
                ],
            ]

        ])) {
            return redirect()->to('group')->withInput();
        }


        $this->gpModel->save([
            'id_role'            => $id_role,
            'user_id'            => $this->request->getVar('users_simpan'),
            'group_id'           => $this->request->getVar('role_simpan'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil disimpan');
        return redirect()->to('group');
    }
}
