<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MasterItem extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'		=> [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'code_item'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
			],
			'name_item'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'description' => [
				'type'   => 'TEXT'
		  	],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('master_item');
	
	}

	public function down()
	{
		//
	}
}
