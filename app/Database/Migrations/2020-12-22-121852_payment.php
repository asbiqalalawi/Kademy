<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Payment extends Migration
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
			'no_rekening'       => [
				'type'           => 'INT',
				'constraint'     => '20'
			],
			'nama_rekening'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'time' => [
				'type'           => 'DATE',
			],
			'nominal'      => [
				'type'           => 'INT',
				'constraint'     => 100,
			],
			'course_id'      => [
				'type'           => 'INT',
				'constraint'     => 10,
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel payment
		$this->forge->createTable('payment', TRUE);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('payment');
	}
}
