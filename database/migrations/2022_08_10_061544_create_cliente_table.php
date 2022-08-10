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
		Schema::create('cliente', function (Blueprint $table)
		{
			$table->id('idCliente');
			$table->string('nome');
			$table->integer('telefone');
			$table->string('email');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('cliente');
	}
};