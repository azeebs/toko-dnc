<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'id_barang' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
            ],
            'id_pembeli' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
            ],

            'jumlah' => [
                'type' => 'TEXT',
                'Constraint' => 11,
            ],
            'total_harga' => [
                'type' => 'INT',
                'Constraint' => 11,
            ],
            'created_by' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'created_date' => [
                'type' => 'DATETIME',
            ],
            'updated_by' => [
                'type' => 'INT',
                'constraint' => 6,
                'type' => 'DATETIME',

            ],
            'updated_date' => [
                'type' => 'DATETIME',
                'null' => TRUE,
            ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->addForeignkey('id_pembeli', 'user', 'id');
        $this->forge->addForeignkey('id_barang', 'barang', 'id');
        $this->forge->createTable('transaksi');
    }

    public function down()
    {
        $this->forge->dropTable('transaksi');
    }
}
