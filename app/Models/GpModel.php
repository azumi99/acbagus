<?php

namespace App\Models;

use CodeIgniter\Model;

class GpModel extends Model
{
    protected $table            = 'auth_groups_users';
    protected $allowedFields    = ['id_role', 'group_id', 'user_id'];
    protected $primaryKey = 'id_role';
    public function getGroup()
    {
        $query =  $this->db->table('auth_groups_users')
            ->join('users', 'auth_groups_users.user_id = users.id')
            ->join('auth_groups', 'auth_groups_users.group_id = auth_groups.id')
            ->get();
        return $query;
    }
    public function getkumpulanuser()
    {
        $kumpulanUser = $this->db->table('users')->get();
        return $kumpulanUser;
    }
    public function getnamagroup()
    {
        $Usergroup = $this->db->table('auth_groups')->get();
        return $Usergroup;
    }
    public function getI()
    {
        $i = $this->db->table('auth_groups_users')
            ->where('auth_groups_users.group_id = 1')
            ->get();

        return $i;
    }
    public function getViewTeknisi()
    {
        $query =  $this->db->table('auth_groups_users')
            ->join('users', 'auth_groups_users.user_id = users.id')
            ->join('auth_groups', 'auth_groups_users.group_id = auth_groups.id')
            ->where('auth_groups_users.group_id=', '3')
            ->get();
        return $query;
    }
}
