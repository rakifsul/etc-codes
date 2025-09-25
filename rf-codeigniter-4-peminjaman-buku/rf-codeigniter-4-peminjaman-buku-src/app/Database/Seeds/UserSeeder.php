<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $userCount = $this->db->table('users')->countAll();

        if ($userCount == 0) {
            $data = [
                'username' => 'admin',
                'password' => password_hash('admin', PASSWORD_DEFAULT),
                'fullname' => 'Administrator',
                'role' => 'admin',
                'created_at' => date('Y-m-d H:i:s'),
            ];

            $this->db->table('users')->insert($data);

            echo "User admin berhasil dibuat.";
        } else {
            echo "Tabel users sudah punya data, seeder dilewati.";
        }
    }
}
