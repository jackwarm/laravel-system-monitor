<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSystemhttpTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('systemhttp', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('server_id')->default(0);
			$table->string('server_name', 50);
			$table->integer('count')->default(0);
			$table->date('monitor_date');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('systemhttp');
	}

}
