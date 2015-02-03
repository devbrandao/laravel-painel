<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEstoqueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('estoque', function(Blueprint $table)
		{
			$table->foreign('produto_id', 'fk_estoque_produto1')->references('id')->on('produto')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('combinacao_id', 'fk_estoque_produto_combinacao1')->references('id')->on('produto_combinacao')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('estoque', function(Blueprint $table)
		{
			$table->dropForeign('fk_estoque_produto1');
			$table->dropForeign('fk_estoque_produto_combinacao1');
		});
	}

}
