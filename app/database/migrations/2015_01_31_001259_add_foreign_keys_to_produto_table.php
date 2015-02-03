<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProdutoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('produto', function(Blueprint $table)
		{
			$table->foreign('categoria_id', 'fk_produto_categoria')->references('id')->on('categoria')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('marca_id', 'fk_produto_marca1')->references('id')->on('marca')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('produto', function(Blueprint $table)
		{
			$table->dropForeign('fk_produto_categoria');
			$table->dropForeign('fk_produto_marca1');
		});
	}

}
