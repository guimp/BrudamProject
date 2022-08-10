<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pedido', function (Blueprint $table)
		{
			$table->id('idPedido');
			$table->date('dataEntrega');
			$table->float('valorFrete', 8, 2);
			$table->text('descricao');
			$table->foreignId('idCliente')->references('idCliente')->on('cliente');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('pedido');
	}
};