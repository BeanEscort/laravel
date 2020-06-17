<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivrosTable extends Migration {

	public function up()
	{
		Schema::create('livros', function(Blueprint $table) {
			$table->id();
			$table->string('titulo', 100);
			$table->string('isbn', 30);
			$table->string('autor', 100);
			$table->tinyInteger('quantidade');
			$table->string('editorial', 50)->nullable();
			$table->string('foto', 100)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('livros');
	}
}