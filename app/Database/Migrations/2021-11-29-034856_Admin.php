<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
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
            'admin_name'      => [
                'type'          => 'VARCHAR',
                'constraint'    => 100,
            ],
            'admin_jabatan'       => [
                'type'          => 'varchar',
                'constraint'    => 100,
            ],
            'status_admin'        => [
                'type'          => 'varchar',
                'constraint'    => 30,
            ],
            'hp_admin'          => [
                'type'          => 'varchar',
                'constraint'    => 15,
            ],
            'email_admin'         => [
                'type'          => 'varchar',
                'constraint'    => 50,
            ],
            'foto_admin'      => [
                'type'          => 'varchar',
                'constraint'   => 250,
            ],
            'alamat_admin'        => [
                'type'          => 'varchar',
                'constraint'    => 250,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('admin');
    }

    public function down()
    {
        $this->forge->dropTable('admin');
    }
}
