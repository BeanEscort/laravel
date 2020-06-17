<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosRolesTable extends Migration {

	public function up()
	{
		Schema::create('usuarios_roles', function(Blueprint $table) {
			$table->id();
			$table->bigInteger('role_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('usuarios_roles');
	}
}