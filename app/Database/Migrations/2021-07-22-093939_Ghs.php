<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ghs extends Migration {
    public function up() {
        // Membuat kolom/field untuk tabel news
        $this->forge->addField( array(
            'id'          => array(
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ),
            'nama'        => array(
                'type'       => 'VARCHAR',
                'constraint' => '100',

            ),
            'alamat'      => array(
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ),
            'region'      => array(
                'type'       => 'ENUM',
                'constraint' => array( 'ACEH',
                    'SUMATERA UTARA',
                    'SUMATERA BARAT',
                    'RIAU',
                    'JAMBI',
                    'SUMATERA SELATAN',
                    'BENGKULU',
                    'LAMPUNG',
                    'KEPULAUAN BANGKA BELITUN',
                    'KEPULAUAN RIAU',
                    'DKI JAKARTA',
                    'JAWA BARAT',
                    'JAWA TENGAH',
                    'DI YOGYAKARTA',
                    'JAWA TIMUR',
                    'BANTEN',
                    'BALI',
                    'NUSA TENGGARA BARAT',
                    'NUSA TENGGARA TIMUR',
                    'KALIMANTAN BARAT',
                    'KALIMANTAN TENGAH',
                    'KALIMANTAN SELATAN',
                    'KALIMANTAN TIMUR',
                    'KALIMANTAN UTARA',
                    'SULAWESI UTARA',
                    'SULAWESI TENGAH',
                    'SULAWESI SELATAN',
                    'SULAWESI TENGGARA',
                    'GORONTALO',
                    'SULAWESI BARAT',
                    'MALUKU',
                    'MALUKU UTARA',
                    'PAPUA BARAT',
                    'PAPUA' ),
                'default'    => 'ACEH',

            ),
            'regristasi'  => array(
                'type' => 'DATE',
                'null' => true,
            ),
            'macthday'    => array(
                'type' => 'DATE',
                'null' => true,
            ),
            'jumlah_slot' => array(
                'type'       => 'INT',
                'constraint' => 11,
            ),
            'deskripsi'   => array(
                'type' => 'TEXT',
                'null' => true,
            ),
            'rules'       => array(
                'type' => 'TEXT',
                'null' => true,
            ),
            'created_at'  => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),
            'updated_at'  => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

        ) );

        // Membuat primary key
        $this->forge->addKey( 'id', TRUE );

        // Membuat tabel news
        $this->forge->createTable( 'Gamehouse' );
    }

    //---------------------

    public function down() {
        // menghapus tabel news
        $this->forge->dropTable( 'Gamehouse' );
    }
}