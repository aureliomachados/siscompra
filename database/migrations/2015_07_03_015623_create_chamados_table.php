<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChamadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chamados', function(Blueprint $table)
		{
			$table->increments('id');
            $table->text('descricao');
            $table->boolean('status');
            $table->dateTime('dataAbertura');
            $table->dateTime('dataFechamento');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('chamados');
	}

}
