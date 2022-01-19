<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterGhs2 extends Migration {
    public function up() {
        $this->forge->addColumn( 'Gamehouse', array(
			'game VARCHAR(100)',
			'reward ENUM(Uang,Item virtual)',
            'prize_pool INT(11)',
            '1st INT(11)',
            '2nd INT(11)',
			'3rd INT(11)',
			
        ) );

    }

    public function down() {
        $this->forge->addColumn( 'Gamehouse', 'game','reward', 'prize_pool', '1st', '2nd', '3rd' );
    }
}