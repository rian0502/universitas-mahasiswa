<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DosenPembimbing extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_dosen' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'NIP' => [
                'type' => 'CHAR',
                'constraint' => 20,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_dosen', true);
        $this->forge->createTable('dosen_pembimbing');
    }

    public function down()
    {
        //
        $this->forge->dropTable('dosen_pembimbing');
    }
}
