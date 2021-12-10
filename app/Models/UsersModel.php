<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table            = 'users';
    protected $allowedFields    = ['id', 'username', 'fullname', 'image', 'password_hash', 'active', 'created_at'];
    public function getViewDashboard()
    {
        $query = $this->db->table('users')
            ->selectSum('active')
            ->where('active =', 1)
            ->get();
        return $query;
    }
}
