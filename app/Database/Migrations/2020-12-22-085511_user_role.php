<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserRole extends Migration
{
	public function up()
	{
		$this->forge->addField([
				'id'          => [
						'type'           => 'INT',
						'constraint'     => 10,
						'unsigned'       => TRUE,
						'auto_increment' => TRUE
				],
				'role'       => [
						'type'           => 'INT',
						'constraint'     => '10',
				],
			]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel user_role
		$this->forge->createTable('user_role', TRUE);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('user_role');
	}
}
