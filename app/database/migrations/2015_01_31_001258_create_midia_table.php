<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMidiaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('midia', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('arquivo', 150)->nullable();
			$table->string('title', 70)->nullable();
			$table->string('rel', 70)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('midia');
	}

}
