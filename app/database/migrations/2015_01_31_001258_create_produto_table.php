<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProdutoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produto', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('referencia', 15)->nullable();
			$table->string('titulo', 100);
			$table->integer('categoria_id')->index('fk_produto_categoria_idx');
			$table->integer('marca_id')->nullable()->index('fk_produto_marca1_idx');
			$table->string('subtitulo', 50)->nullable();
			$table->text('descricao', 65535)->nullable();
			$table->text('especificacao', 65535)->nullable();
			$table->decimal('preco', 10)->nullable();
			$table->decimal('percent_desconto', 3)->nullable();
			$table->string('meta_title', 70)->nullable();
			$table->string('meta_description', 140)->nullable();
			$table->boolean('bln_ativo')->nullable();
			$table->enum('condicoes', array('novo','usado'))->nullable()->default('novo');
			$table->integer('estoque_minimo')->nullable();
			$table->decimal('altura', 5, 3)->nullable();
			$table->decimal('largura', 5, 3)->nullable();
			$table->decimal('peso', 5, 3)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('produto');
	}

}
