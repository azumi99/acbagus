<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table            = 'admin';
    protected $allowedFields    = ['admin_name', 'admin_jabatan', 'status_admin', 'hp_admin', 'email_admin', 'foto_admin', 'alamat_admin'];
}
