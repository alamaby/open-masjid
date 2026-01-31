<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddVideoUrlToMasjidNews extends Migration
{
    public function up()
    {
        $this->forge->addColumn('masjid_news', [
            'video_url' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
                'after'      => 'thumbnail'
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('masjid_news', 'video_url');
    }
}
