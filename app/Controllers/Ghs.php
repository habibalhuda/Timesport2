<?php

namespace App\Controllers;

use App\Models\GhsModel;

class Ghs extends BaseController {
    protected $ghsModel;
    public function __construct() {
        $this->ghsModel = new GhsModel();
    }

    public function index() {
        $currentPage = $this->request->getVar('page_gamehouse') ? $this->request->getVar('page_gamehouse') : 1;
        $keyword  = $this->request->getVar('keyword');
        if($keyword) {
           $ghs = $this->ghsModel->search($keyword);
            
        } else 
        {
            $ghs = $this->ghsModel;
          
        }

        
        
        
        $data = array(
            'title' => 'Daftar GameHouse',
            'ghs'  => $ghs->paginate( 6, 'gamehouse' ),
            'pager' => $this->ghsModel->pager,
            'currentPage' => $currentPage,
            

        );

        return view( 'ghs/index', $data );
    }

    public function detail( $id ) {
        $data = array(
            'title' => 'Detail GameHouse',
            'ghs'   => $this->ghsModel->getGhs( $id ),
        );

        if ( empty( $data['ghs'] ) ) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException(
                'Nama GHS' . $id . 'tidak ditemukan'
            );
        }

        return view( 'ghs/detail', $data );
    }

    public function create() {
        $data = array(
            'title'      => 'Form Tambah GameHouse',
            'validation' => \Config\Services::validation(),

        );
        return view( 'ghs/create', $data );
    }

    public function save() {


        if (!$this->validate([
            'nama' =>[

               'rules' => 'required|is_unique[gamehouse.nama]',
               'errors' => [
                   'required' => '{field} gamehouse harus diisi',
                   'is_unique' => '{field} gamehouse sudah terdaftar',

               ],
            ],
            'profile' => [
                'rules' => 'uploaded[profile]|max_size[profile,2048]|is_image[profile]|mime_in[profile,image/jpg,image/jpeg,image/png]',

                'errors' => [
                    'uploaded' => 'Pilih profile gamehouse terlebih dahulu',
                    'max_size' => 'Ukuran profile terlalu besar',
                    'is_image' => 'Yang anda pilih bukan profile',
                    'mime_in'  => 'Yang anda pilih bukan profile',
                ],
            ],

        ]
        )
        )
        {
            return redirect()->to( '/ghs/create' )->withInput(); 
        }

        // ambil profile
        $fileGhs = $this->request->getFile( 'profile' );
        var_dump( $fileGhs );
        // apakah tidak ada profile yang diupload
        if ( $fileGhs->getError() == 4 ) {
            $namaProfile = 'default.png';
        } else {

            // ambil nama file profile
            // $namaProfile = $fileGhs->getName();
            // generate nama file random
            $namaProfile = $fileGhs->getRandomName();
            // pindahkan file ke folder img
            $fileGhs->move( 'img', $namaProfile );
        }


        $this->ghsModel->save( array(
            'id'          => $this->request->getVar( 'id' ),
            'nama'        => $this->request->getVar( 'nama' ),
            'profile'     => $namaProfile,
            'alamat'      => $this->request->getVar( 'alamat' ),
            'region'      => $this->request->getVar( 'region' ),
            'regristasi'  => $this->request->getVar( 'regristasi' ),
            'macthday'    => $this->request->getVar( 'macthday' ),
            'jumlah_slot' => $this->request->getVar( 'jumlah_slot' ),
            'deskripsi'   => $this->request->getVar( 'deskripsi' ),
            'rules'       => $this->request->getVar( 'rules' ),
            'game'        => $this->request->getVar( 'game' ),
            'prize_pool'  => $this->request->getvar( 'prize_pool' ),
            '1st'         => $this->request->getVar( '1st' ),
            '2nd'         => $this->request->getVar( '2nd' ),
            '3rd'         => $this->request->getVar( '3rd' ),

        ) );

        
        session()->setFlashdata( 'pesan', 'Data berhasil ditambahkan.' );

        return redirect()->to( '/ghs' );

    }


    public function delete( $id ) {
        // cari profile berdasarkan id
        $ghs = $this->ghsModel->find( $id );
        // cek fika file profilenya default.png
        if ( $ghs['profile'] != 'default.png' ) {
            unlink( 'img/' . $ghs['profile'] );
        }

        $this->ghsModel->delete( $id );

        session()->setFlashdata( 'pesan', 'Data berhasil dihapus.' );

        return redirect()->to( '/ghs' );
    }


    public function edit( $id ) {
        $data = array(
            'title'      => 'Form Ubah Data Gamehouse',
            'validation' => \Config\Services::validation(),
            'ghs'     => $this->ghsModel->getGhs( $id ),

        );
        return view( 'ghs/edit', $data );
    }



    public function update ($id) {
        $ghsLama = $this->ghsModel->getGhs($this->request->getVar('id'));
        if ($ghsLama['nama'] == $this->request->getVar('nama')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[gamehouse.nama]';
        }
        //validasi input
        if ( !$this->validate( array(
            'nama'   => array(
                'rules'  => $rule_judul,
                'errors' => array(
                    'required'  => '{field} gamehouse harus diisi',
                    'is_unique' => '{field} gamehouse sudah terdaftar',
                ),
            ),
            'profile' => array(
                'rules'  => 'max_size[profile,2048]|is_image[profile]|mime_in[profile,image/jpg,image/jpeg,image/png]',
                'errors' => array(

                    'max_size' => 'Ukuran profile terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in'  => 'Yang anda pilih bukan gambar',

           
                ),
            ),

        ) ) ) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/gamehouse/create')->withInput()->with('validation', $validation);
            return redirect()->to( '/ghs/edit/' . $this->request->getVar( 'id' ) )->withInput();
        }
        $fileGambar = $this->request->getFile( 'profile' );
        // cek profile apakah tetap profile lama
        if ( $fileGambar->getError() == 4 ) {
            $namaProfile = $this->request->getVar( 'profileLama' );
        } else {
            // ambil nama file profile
            // $namaProfile = $fileGambar->getName();
            // generate nama file random
            $namaProfile = $fileGambar->getRandomName();
            // pindahkan profile
            // pindahkan file profile ke folder img
            $fileGambar->move( 'img', $namaProfile );
            // hapus file yg lama
            unlink( 'img/' . $this->request->getVar( 'profileLama' ) );
        }

     
        $this->ghsModel->save( array(
            'id'                => $id,
            'nama'        => $this->request->getVar( 'nama' ),
            'profile'     => $namaProfile,
            'alamat'      => $this->request->getVar( 'alamat' ),
            'region'      => $this->request->getVar( 'region' ),
            'regristasi'  => $this->request->getVar( 'regristasi' ),
            'macthday'    => $this->request->getVar( 'macthday' ),
            'jumlah_slot' => $this->request->getVar( 'jumlah_slot' ),
            'deskripsi'   => $this->request->getVar( 'deskripsi' ),
            'rules'       => $this->request->getVar( 'rules' ),
            'game'        => $this->request->getVar( 'game' ),
            'prize_pool'  => $this->request->getvar( 'prize_pool' ),
            '1st'         => $this->request->getVar( '1st' ),
            '2nd'         => $this->request->getVar( '2nd' ),
            '3rd'         => $this->request->getVar( '3rd' ),


        ) );

        session()->setFlashdata( 'pesan', 'Data berhasil diubah.' );

        return redirect()->to( '/ghs' );
    }
    
}