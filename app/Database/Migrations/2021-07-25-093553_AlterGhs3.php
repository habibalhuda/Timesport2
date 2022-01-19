<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterGhs3 extends Migration {
    public function up() {
        $this->forge->addColumn( 'Gamehouse', array(

			'reward' => ['type'=>'ENUM','constraint'=>['UANG','ITEM VIRTUAL'],'default'=>'UANG']
        ) );

    }

    public function down() {
        $this->forge->addColumn( 'Gamehouse', 'reward' );
    }
}