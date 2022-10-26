<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Students extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_student' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'NPM' => [
                'type' => 'CHAR',
                'constraint' => 13,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'jurusan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'jalur_masuk' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'pas_foto' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'id_dosen' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
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
        $this->forge->addKey('id_student', true);
        $this->forge->addForeignKey('id_dosen', 'dosen_pembimbing', 'id_dosen', 'RESTRICT', 'RESTRICT');
        $this->forge->createTable('students');
    }

    public function down()
    {
        //
        $this->forge->dropTable('students');
    }
}
