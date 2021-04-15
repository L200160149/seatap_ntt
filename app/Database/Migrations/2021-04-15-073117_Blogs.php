<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Blogs extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'title'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'desc' => [
				'type' => 'TEXT',
				'null' => true,
			],
			'slug' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'author' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'cover' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'created_at' => [
				'type'	=> 'DATETIME',
				'null'	=> true
			],
			'updated_at' => [
				'type'	=> 'DATETIME',
				'null'	=> true
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('blogs');
	}

	public function down()
	{
		$this->forge->dropTable('blogs');
	}
}
