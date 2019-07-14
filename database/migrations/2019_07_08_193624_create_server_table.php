<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('server', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('description');
			$table->string('ip_address', 15);
			$table->string('url', 100);
			$table->dateTime('last_accessed')->nullable();
			$table->string('uptime', 30);
			$table->string('mysql_version', 100)->nullable();
			$table->string('mysql_uptime', 30)->nullable();
			$table->boolean('mysql_protocol')->nullable();
			$table->boolean('offline')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('server');
	}

}
