<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAtributoValorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('atributo_valor', function(Blueprint $table)
		{
			$table->foreign('chave_id', 'fk_atributo_valor_atributo_chave1')->references('id')->on('atributo_chave')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('atributo_valor', function(Blueprint $table)
		{
			$table->dropForeign('fk_atributo_valor_atributo_chave1');
		});
	}

}
