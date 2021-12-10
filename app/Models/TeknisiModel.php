<?php

namespace App\Models;

use CodeIgniter\Model;

class TeknisiModel extends Model
{
    protected $table            = 'teknisi';
    protected $allowedFields    = ['teknisi_name', 'tek_jabatan', 'status_tek', 'nomor_hp', 'email_tek', 'foto_teknisi', 'alamat_tek'];
}
