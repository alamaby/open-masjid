<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUsernameUpdatedAtToMasjid extends Migration
{
    public function up()
    {
        $this->forge->addColumn('masjid', [
            'username_updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
                'after' => 'username'
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('masjid', 'username_updated_at');
    }
}
