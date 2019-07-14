<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSystemmysqlTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('systemmysql', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('server_id')->default(0);
			$table->bigInteger('queries')->default(0);
			$table->integer('slow_queries')->default(0);
			$table->bigInteger('opens')->default(0);
			$table->integer('flush_tables')->default(0);
			$table->integer('open_tables')->default(0);
			$table->float('qps_avg', 10, 0)->default(0);
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
		Schema::drop('systemmysql');
	}

}
