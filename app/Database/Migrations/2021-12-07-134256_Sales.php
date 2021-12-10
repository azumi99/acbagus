<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sales extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_transaksi'       => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username_user'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'pembeli'            => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'nomor_telp'         => [
                'type'           => 'VARCHAR',
                'constraint'     => 15,
            ],
            'email_transaksi'    => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'alamat_pembeli'     => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'service'            => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'keluhan_detail'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'nominal'            => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'status'             => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
                'default'        => 'Waiting',
            ],
            'status_pay'         => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
                'default'        => 'Belum',
            ],
            'date_transaksi'     => [
                'type'           => 'DATE',
            ],
            'teknisi'            => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'nominal_tambahan'   => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'deskripsi_tambahan' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'metode_bayar' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'total_harga'        => [
                'type'           => 'INT',
                'constraint'     => 11,
            ]
        ]);
        $this->forge->addKey('id_transaksi', true);
        $this->forge->createTable('sales');
    }

    public function down()
    {
        $this->forge->dropTable('sales');
    }
}
