<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Lesson extends Migration
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
			'course_id'      => [
				'type'           => 'INT',
				'constraint'     => 10,
			],
			'name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'content' => [
				'type'           => 'TEXT',
				'null'           => true,
			],
		]);
		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel lesson
		$this->forge->createTable('lesson', TRUE);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('lesson');
	}
}
