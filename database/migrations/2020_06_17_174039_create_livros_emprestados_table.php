<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivrosEmprestadosTable extends Migration {

	public function up()
	{
		Schema::create('livros_emprestados', function(Blueprint $table) {
			$table->id();
			$table->bigInteger('user_id')->unsigned();
			$table->bigInteger('livro_id')->unsigned();
			$table->date('data_emprestimo');
			$table->date('data_devolucao');
			$table->tinyInteger('estado');
		});
	}

	public function down()
	{
		Schema::drop('livros_emprestados');
	}
}