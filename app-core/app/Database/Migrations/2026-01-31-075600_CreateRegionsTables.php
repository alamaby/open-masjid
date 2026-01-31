<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRegionsTables extends Migration
{
    public function up()
    {
        // Provinces
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('provinces');

        // Regencies
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'province_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('province_id', 'provinces', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('regencies');
    }

    public function down()
    {
        $this->forge->dropTable('regencies');
        $this->forge->dropTable('provinces');
    }
}
