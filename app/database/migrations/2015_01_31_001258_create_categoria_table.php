<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categoria', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('categoria_pai')->nullable()->index('fk_categoria_categoria1_idx');
			$table->string('titulo', 100);
			$table->string('capa', 150)->nullable();
			$table->text('observacao', 65535)->nullable();
			$table->string('meta_title', 70)->nullable();
			$table->string('meta_description', 140)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('categoria');
	}

}
