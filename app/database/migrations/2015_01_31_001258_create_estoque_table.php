<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstoqueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estoque', function(Blueprint $table)
		{
			$table->integer('produto_id')->primary();
			$table->integer('combinacao_id')->index('fk_estoque_produto_combinacao1_idx');
			$table->string('quantidade', 45)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('estoque');
	}

}
