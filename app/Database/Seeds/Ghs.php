<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Ghs extends Seeder
{
	public function run()
	{
		$faker = \Faker\Factory::create('id_ID');
		for($i = 0; $i<10; $i++) {
			
			$data = [
				'nama' => $faker->company,
				'alamat'=> $faker->address,
				'regristasi'=> Time::now(),
				'macthday'=> Time::now(),
				'jumlah_slot'=>$faker->randomDigit,
				'deskripsi'=>$faker->realText(rand(10,20)),'rules'=>$faker->realText(rand(10,20)),
				'created_at' => Time::createFromTimestamp($faker->unixTime()),
				'updated_at'=> Time::now() 
			];
			$this->db->table('gamehouse')->insert($data);
	}
}
	
}