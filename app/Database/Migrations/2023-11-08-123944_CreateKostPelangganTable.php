<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKostPelangganTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'KostPelanggan_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'KostPelanggan_Nama' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'KostPelanggan_Alamat' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'KostPelanggan_Tgl' => [
                'type' => 'DATE',
            ],
        ]);

        $this->forge->addKey('KostPelanggan_id', true);
        $this->forge->createTable('Kost_Pelanggan');
    }

    public function down()
    {
        $this->forge->dropTable('Kost_Pelanggan');
    }
}
