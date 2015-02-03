<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProdutoGaleriaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produto_galeria', function(Blueprint $table)
		{
			$table->integer('midia_id')->index('fk_midia_has_produto_midia1_idx');
			$table->integer('produto_id')->index('fk_midia_has_produto_produto1_idx');
			$table->string('tipo', 45)->nullable()->default('imagem');
			$table->integer('combinacao_id')->nullable()->index('fk_produto_galeria_produto_combinacao1_idx');
			$table->integer('ordem')->nullable();
			$table->boolean('bln_default')->nullable();
			$table->primary(['midia_id','produto_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('produto_galeria');
	}

}
