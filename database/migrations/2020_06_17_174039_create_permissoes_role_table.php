<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissoesRoleTable extends Migration {

	public function up()
	{
		Schema::create('permissoes_role', function(Blueprint $table) {
			$table->id();
			$table->bigInteger('role_id')->unsigned();
			$table->bigInteger('permissoes_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('permissoes_role');
	}
}