<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table         = 'kategori';
    protected $allowedFields = ['id', 'kategori_post_artikel'];
}
