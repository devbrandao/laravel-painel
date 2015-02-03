<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProdutoCombinacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produto_combinacao', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->boolean('bln_default')->nullable();
			$table->integer('produto_id')->nullable()->index('fk_produto_combinacao_produto1');
			$table->integer('chave_id')->nullable()->index('fk_produto_combinacao_atributo_chave1_idx');
			$table->integer('valor_id')->nullable()->index('fk_produto_combinacao_atributo_valor1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('produto_combinacao');
	}

}
