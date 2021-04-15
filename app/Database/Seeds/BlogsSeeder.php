<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class BlogsSeeder extends Seeder
{

	public function run()
	{
		// for ( $i)
		$data = [
			'title' => static::faker()->word,
			'desc' => static::faker()->text,
			'slug' => static::faker()->word,
			'author' => static::faker()->name,
			'cover' => static::faker()->image,
			'created_at'    => Time::now(),
			'updated_at'    => Time::now()
		];
		$this->db->table('blogs')->insert($data);
	}
}
