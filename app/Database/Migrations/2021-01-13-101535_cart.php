<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cart extends Migration
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
			'name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'price'				=> [
				'type'			 => 'INT',
				'constraint'	 => '255'
			],
			'id_user'       => [
				'type'           => 'INT',
				'constraint'     => '10'
			],
			'slug'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);
		// Membuat tabel course
		$this->forge->createTable('cart', TRUE);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('cart');
	}
}