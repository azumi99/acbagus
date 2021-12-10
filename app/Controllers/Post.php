<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\PostModel;

class Post extends BaseController
{

    protected $postModel;
    protected $kategoriModel;
    public function __construct()
    {
        $this->postModel = new PostModel();
        $this->kategoriModel = new KategoriModel();
    }
    public function index()
    {
        session();
        $Post = $this->postModel->findAll();
        $data = [
            'post'          => $Post,
            'validation'    => \Config\Services::validation(),
        ];
        return view('admin/post/index', $data);
    }
    public function create()
    {
        $Kategori = $this->kategoriModel->findAll();
        $data = [
            'kategori'      => $Kategori,
        ];
        return view('admin/post/create', $data);
    }
    public function simpan()
    {
        if (!$this->validate([
            'judul_artikel'       => [
                'rules'           => 'required',
                'errors'          => [
                    'required'      => 'Judul artikel tidak boleh kosong',
                ]
            ],
            'isi_artikel'         => [
                'rules'           => 'required',
                'errors'          => [
                    'required'      => 'Isi artikel tidak boleh kosong',
                ],
            ],

            'tubnail_artikel'            => [
                'rules'           => 'uploaded[tubnail_artikel]|max_size[tubnail_artikel,10240]|is_image[tubnail_artikel]|mime_in[tubnail_artikel,image/jpg,image/jpeg,image/png]',
                'errors'          => [
                    'uploaded'      => 'Upload tubnail dulu',
                    'max_size'      => 'Ukuran foto terlalu besar',
                    'is_image'      => 'Upload file dengan format gambar',
                    'mimi_in'       => 'Uploud file dengan format gambar',
                ]
            ],
            'kategori_artikel'    => [
                'rules'           => 'required',
                'errors'          => [
                    'required'      => 'Kategori tidak boleh kosong',
                ],
            ],

        ])) {
            return redirect()->to('post')->withInput();
        }

        $slug = url_title($this->request->getVar('judul_artikel'), '-', true);

        $tubnail = $this->request->getFile('tubnail_artikel');
        $tubnail->move('img_post');
        $namaTubnail = $tubnail->getName();
        $this->postModel->save([
            'judul_artikel'     => $this->request->getVar('judul_artikel'),
            'slug'              => $slug,
            'isi_artikel'       => $this->request->getVar('isi_artikel'),
            'kategori_artikel'  => $this->request->getVar('kategori_artikel'),
            'meta_description'  => $this->request->getVar('meta_description'),
            'author'            => $this->request->getVar('author'),
            'tubnail_artikel'   => $namaTubnail,
            'id_user_author'    => $this->request->getVar('id_user_author'),
        ]);
        session()->setFlashdata('pesan', 'Artikel berhasil di posting');
        return redirect()->to('post');
    }
    public function savekate()
    {
        $this->kategoriModel->save([
            'kategori_post_artikel'     => $this->request->getVar('add_kategori'),
        ]);
        session()->setFlashdata('pesan', 'Kategori berhasil ditambahkan');
        return redirect()->to('post/create');
    }
    public function delete($id)
    {
        $data = $this->postModel->find($id);
        $image = $data['tubnail_artikel'];
        if (file_exists("img_post/" . $image)) {
            unlink("img_post/" . $image);
        }
        $this->postModel->delete($id);
        session()->setFlashdata('pesan', 'Artikel berhasil dihapus');
        return redirect()->to('post');
    }
    public function artikel($slug)
    {
        $postShow = $this->postModel->getPostView($slug)->getResult();
        $recentShow = $this->postModel->getPostBlog()->getResult();
        $kategoriShow = $this->kategoriModel->findAll();
        $data = [
            'showPost'      => $postShow,
            'recentShow'    => $recentShow,
            'kategoriShow'  => $kategoriShow,
        ];
        return view('user/artikel', $data);
    }
    public function edit($id)
    {
        $postShow = $this->postModel->getPostJoin($id)->getResult();
        $for_id = $this->postModel->getbyid($id)->getResult();
        $Kategori = $this->kategoriModel->findAll();
        $data = [
            'id_for'        => $for_id,
            'showPost'      => $postShow,
            'KategoriShow'  => $Kategori,
        ];

        return view('admin/post/edit', $data);
    }
    public function update($id)
    {
        if (!$this->validate([
            'judul_artikel'       => [
                'rules'           => 'required',
                'errors'          => [
                    'required'      => 'Judul artikel tidak boleh kosong',
                ]
            ],
            'isi_artikel'         => [
                'rules'           => 'required',
                'errors'          => [
                    'required'      => 'Isi artikel tidak boleh kosong',
                ],
            ],

            'tubnail_artikel'            => [
                'rules'           => 'max_size[tubnail_artikel,10240]|is_image[tubnail_artikel]|mime_in[tubnail_artikel,image/jpg,image/jpeg,image/png]',
                'errors'          => [
                    'uploaded'      => 'Upload tubnail dulu',
                    'max_size'      => 'Ukuran foto terlalu besar',
                    'is_image'      => 'Upload file dengan format gambar',
                    'mimi_in'       => 'Uploud file dengan format gambar',
                ]
            ],
            'kategori_artikel'    => [
                'rules'           => 'required',
                'errors'          => [
                    'required'      => 'Kategori tidak boleh kosong',
                ],
            ],

        ])) {
            return redirect()->to('post')->withInput();
        }

        $slug = url_title($this->request->getVar('judul_artikel'), '-', true);

        $post = $this->postModel->find($id);
        $tubnail = $this->request->getFile('tubnail_artikel');
        $old_image = $post['tubnail_artikel'];
        if ($tubnail->isValid() && !$tubnail->hasMoved()) {

            if (file_exists("img_post/" . $old_image)) {
                unlink("img_post/" . $old_image);
            }
            $namaTubnail = $tubnail->getName();
            $tubnail->move('img_post');
        } else {
            $namaTubnail = $old_image;
        }
        $this->postModel->save([
            'id'                => $id,
            'judul_artikel'     => $this->request->getVar('judul_artikel'),
            'slug'              => $slug,
            'isi_artikel'       => $this->request->getVar('isi_artikel'),
            'kategori_artikel'  => $this->request->getVar('kategori_artikel'),
            'meta_description'  => $this->request->getVar('meta_description'),
            'author'            => $this->request->getVar('author'),
            'tubnail_artikel'   => $namaTubnail,
            'id_user_author'    => $this->request->getVar('id_user_author'),
        ]);
        session()->setFlashdata('pesan', 'Artikel berhasil di posting');
        return redirect()->to('post');
    }
}
