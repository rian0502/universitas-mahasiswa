<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StudentsSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        $stdns = new \App\Models\Students();

        for ($i = 0; $i < 30; $i++) {
            $data = [
                'NPM' => $faker->unique()->numberBetween(1000000000, 9999999999),
                'name' => $faker->firstName . ' ' . $faker->firstName,
                'email' => $faker->email,
                'alamat' => $faker->address,
                'jurusan' => $faker->randomElement(['Teknik Informatika', 'Sistem Informasi', 'Teknik Komputer','Ilmu Komputer','Fisika','Matematika','Biologi','Hukum Negara']),
                'jalur_masuk' => $faker->randomElement(['SNMPTN', 'SBMPTN', 'Mandiri']),
                'id_dosen' => $faker->numberBetween(1, 15),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
            $stdns->insert($data);
        }
    }
}
