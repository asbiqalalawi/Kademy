<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Course extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'description'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel course
		$this->forge->createTable('course', TRUE);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('course');
	}
}
