<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

use function PHPSTORM_META\type;

class Teknisi extends Migration
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
            'teknisi_name'      => [
                'type'          => 'VARCHAR',
                'constraint'    => 100,
            ],
            'tek_jabatan'       => [
                'type'          => 'varchar',
                'constraint'    => 100,
            ],
            'status_tek'        => [
                'type'          => 'varchar',
                'constraint'    => 30,
            ],
            'nomor_hp'          => [
                'type'          => 'varchar',
                'constraint'    => 15,
            ],
            'email_tek'         => [
                'type'          => 'varchar',
                'constraint'    => 50,
            ],
            'foto_teknisi'      => [
                'type'          => 'varchar',
                'constraint'   => 250,
            ],
            'alamat_tek'        => [
                'type'          => 'varchar',
                'constraint'    => 250,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('teknisi');
    }

    public function down()
    {
        $this->forge->dropTable('teknisi');
    }
}
