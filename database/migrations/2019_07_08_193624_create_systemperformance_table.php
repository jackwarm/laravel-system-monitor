<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSystemperformanceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('systemperformance', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('server_id')->default(0);
			$table->dateTime('created_at');
			$table->float('cpu_user', 10, 0)->default(0);
			$table->float('cpu_system', 10, 0)->default(0);
			$table->float('cpu_ni', 10, 0)->default(0);
			$table->float('cpu_id', 10, 0)->default(0);
			$table->float('cpu_wa', 10, 0)->default(0);
			$table->float('cpu_hi', 10, 0)->default(0);
			$table->float('cpu_si', 10, 0)->default(0);
			$table->float('cpu_st', 10, 0)->default(0);
			$table->float('load_1', 10, 0)->default(0);
			$table->float('load_5', 10, 0)->default(0);
			$table->float('load_15', 10, 0)->default(0);
			$table->integer('memory_total')->default(0);
			$table->integer('memory_used')->default(0);
			$table->integer('memory_free')->default(0);
			$table->integer('memory_cache')->default(0);
			$table->integer('swap_total')->default(0);
			$table->integer('swap_used')->default(0);
			$table->integer('swap_free')->default(0);
			$table->integer('swap_available')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('systemperformance');
	}

}
