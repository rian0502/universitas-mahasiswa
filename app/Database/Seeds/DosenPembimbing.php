<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DosenPembimbing extends Seeder
{
    public function run()
    {
        //
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 15; $i++) {
            $data = [
                'NIP' => $faker->unique()->nik(),
                'nama' => $faker->name,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
            $this->db->table('dosen_pembimbing')->insert($data);
        }
    }
}
