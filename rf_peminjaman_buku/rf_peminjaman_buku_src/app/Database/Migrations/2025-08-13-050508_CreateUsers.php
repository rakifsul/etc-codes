<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsers extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id'         => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'username'   => ['type' => 'VARCHAR', 'constraint' => 50, 'unique' => true],
            'password'   => ['type' => 'VARCHAR', 'constraint' => 255],
            'fullname'   => ['type' => 'VARCHAR', 'constraint' => 100],
            'role'       => ['type' => 'ENUM', 'constraint' => ['admin', 'petugas', 'anggota'], 'default' => 'anggota'],
            'created_at' => ['type' => 'DATETIME', 'null' => true]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        //
        $this->forge->dropTable('users');
    }
}
