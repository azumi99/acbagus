<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table         = 'post';
    protected $allowedFields = ['id', 'judul_artikel', 'slug', 'isi_artikel', 'tubnail_artikel', 'kategori_artikel', 'meta_description', 'author', 'id_user_author'];
    public function getbyid($id)
    {
        $getid =  $this->db->table('post')
            ->where('post.id =', $id)
            ->get();
        return $getid;
    }
    public function getPostJoin($id)
    {
        $query =  $this->db->table('post')
            ->join('kategori', 'post.kategori_artikel = kategori.id')
            ->join('users', 'post.id_user_author = users.id')
            ->where('post.id =', $id)
            ->get();
        return $query;
    }
    public function getPostBlog()
    {
        $query =  $this->db->table('post')
            ->join('kategori', 'post.kategori_artikel = kategori.id')
            ->join('users', 'post.id_user_author = users.id')
            ->get();
        return $query;
    }
    public function getPostView($slug)
    {
        $query =  $this->db->table('post')
            ->join('kategori', 'post.kategori_artikel = kategori.id')
            ->join('users', 'post.id_user_author = users.id')
            ->where('post.slug =', $slug)
            ->get();
        return $query;
    }
    public function getPostDashboard()
    {
        $query =  $this->db->table('post')
            ->join('kategori', 'post.kategori_artikel = kategori.id')
            ->join('users', 'post.id_user_author = users.id')
            ->orderBy('created_artikel', 'desc')
            ->limit(5)
            ->get();
        return $query;
    }
}
