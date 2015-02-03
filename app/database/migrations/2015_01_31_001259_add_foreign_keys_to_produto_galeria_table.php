<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProdutoGaleriaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('produto_galeria', function(Blueprint $table)
		{
			$table->foreign('midia_id', 'fk_midia_has_produto_midia1')->references('id')->on('midia')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('produto_id', 'fk_midia_has_produto_produto1')->references('id')->on('produto')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('combinacao_id', 'fk_produto_galeria_produto_combinacao1')->references('id')->on('produto_combinacao')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('produto_galeria', function(Blueprint $table)
		{
			$table->dropForeign('fk_midia_has_produto_midia1');
			$table->dropForeign('fk_midia_has_produto_produto1');
			$table->dropForeign('fk_produto_galeria_produto_combinacao1');
		});
	}

}
