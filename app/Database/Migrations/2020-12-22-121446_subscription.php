<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Subscription extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'course_id'      => [
				'type'           => 'INT',
				'constraint'     => 10,
			],
			'user_id'      => [
				'type'           => 'INT',
				'constraint'     => 10,
			],
			'payment_id'      => [
				'type'           => 'INT',
				'constraint'     => 10,
			],
		]);

		// Membuat tabel subscription
		$this->forge->createTable('subscription', TRUE);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('subscription');
	}
}
