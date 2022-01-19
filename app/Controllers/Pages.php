<?php

namespace App\Controllers;

class Pages extends BaseController {
    public function index() {
        $data = array(
            'title' => 'Home',
            'angka' => array(
                'satu', 'dua', 'tiga',
            ),
        );

        return view( '/pages/home', $data );
    }

    public function about() {
        $data = array(
            'title' => 'Tentang Kami',
        );

        return view( '/pages/about', $data );

    }

    public function contact() {
        $data = array(
            'title' => 'Kontak Saya',
            'bio'   => array(
                array(
                    'nama'   => 'habib',
                    'alamat' => 'jl.abc',
                    'kota'   => 'singkawang',

                ),
                array(
                    'nama'   => 'adam',
                    'alamat' => 'jl.abc',
                    'kota'   => 'singkawang',

                ),
            ),
        );

        return view( '/pages/contact', $data );

    }

}