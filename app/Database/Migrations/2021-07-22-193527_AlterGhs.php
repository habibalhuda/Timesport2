<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterGhs extends Migration {
    public function up() {
        $this->forge->addColumn( 'Gamehouse', array(
            'profile VARCHAR(100)',
            'game ' => ['type'=> 'ENUM','constraint'=>['']],
            'prize_pool'=>['type'=>'INT','constraint'=>11],
            '1st'=>['type'=>'INT','constraint'=>11],
            '2nd'=>['type'=>'INT','constraint'=>11],
            '3rd'=>['type'=>'INT','constraint'=>11],
            
            
            
        ) );

    }

    public function down() {
        $this->forge->addColumn('Gamehouse','profile','game','prize_pool','1st','2nd','3rd');
    }
}