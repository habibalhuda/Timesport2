<?php

namespace App\Models;

use CodeIgniter\Model;

class GhsModel extends Model {
    protected $table = 'gamehouse';
    protected $useTimestamps = true;
    protected $primaryKey = 'id';
    protected $allowedFields = array( 'id', 'nama', 'profile', 'alamat', 'region', 'regristasi', 'macthday', 'jumlah_slot', 'deskripsi', 'rules', 'created_at', 'updated_at', 'game', 'prize_pool', '1st', '2nd', '3rd' );

    public function getGhs( $id = false ) {
        if ( $id == false ) {
            return $this->findAll();
        };

        return $this->where( array( 'id' => $id ) )->first();
    }

    public function search( $keyword ) {
        return $this->table( 'gamehouse' )->like( 'nama', $keyword )->orLike( 'alamat', $keyword );
    }


}