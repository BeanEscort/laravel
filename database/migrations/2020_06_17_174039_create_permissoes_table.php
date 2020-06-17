<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissoesTable extends Migration {

	public function up()
	{
		Schema::create('permissoes', function(Blueprint $table) {
			$table->id();
			$table->string('nome', 50);
			$table->string('slug', 50)->unique();
		});
	}

	public function down()
	{
		Schema::drop('permissoes');
	}
}