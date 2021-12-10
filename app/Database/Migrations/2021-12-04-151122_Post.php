<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Post extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                 => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul_artikel'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'slug'               => [
                'type'           => 'varchar',
                'constraint'     => 255,
            ],
            'isi_artikel'        => [
                'type'           => 'text',
            ],
            'tubnail_artikel'    => [
                'type'           => 'varchar',
                'constraint'     => 255,
            ],
            'kategori_artikel'   => [
                'type'           => 'varchar',
                'constraint'     => 100,
            ],
            'meta_description'   => [
                'type'           => 'varchar',
                'constraint'     => 50,
            ],
            'author'             => [
                'type'           => 'varchar',
                'constraint'     => 255,
            ],
            'created_artikel'    => [
                'type'           => 'TIMESTAMP',
            ],
            'id_user_author'     => [
                'type'           => 'INT',
                'constraint'     => 11,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('post');
    }

    public function down()
    {
        $this->forge->dropTable('post');
    }
}
