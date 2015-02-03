<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProdutoCombinacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('produto_combinacao', function(Blueprint $table)
		{
			$table->foreign('chave_id', 'fk_produto_combinacao_atributo_chave1')->references('id')->on('atributo_chave')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('valor_id', 'fk_produto_combinacao_atributo_valor1')->references('id')->on('atributo_valor')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('produto_id', 'fk_produto_combinacao_produto1')->references('id')->on('produto')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('produto_combinacao', function(Blueprint $table)
		{
			$table->dropForeign('fk_produto_combinacao_atributo_chave1');
			$table->dropForeign('fk_produto_combinacao_atributo_valor1');
			$table->dropForeign('fk_produto_combinacao_produto1');
		});
	}

}
