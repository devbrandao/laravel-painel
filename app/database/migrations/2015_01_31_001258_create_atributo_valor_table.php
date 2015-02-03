<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAtributoValorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('atributo_valor', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('chave_id')->index('fk_atributo_valor_atributo_chave1_idx');
			$table->string('nome', 50);
			$table->string('hex', 10)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('atributo_valor');
	}

}
