<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSystemdisksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('systemdisks', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('server_id', 50);
			$table->string('filesystem', 50)->default('0');
			$table->integer('total_space')->default(0);
			$table->integer('used_space')->default(0);
			$table->integer('free_space')->default(0);
			$table->string('mount_point', 50);
			$table->dateTime('created_at');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('systemdisks');
	}

}
