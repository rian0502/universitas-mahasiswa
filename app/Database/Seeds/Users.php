<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
    public function run()
    {
        //universitasmahasiswa123
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 5; $i++) {
            $data = [
                'email' => $faker->email,
                'username'=> $faker->userName,
                'password_hash' => password_hash('admin', PASSWORD_DEFAULT),
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
            $this->db->table('users')->insert($data);
        }
    }
}
