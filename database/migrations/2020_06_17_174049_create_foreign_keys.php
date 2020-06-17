<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('livros_emprestados', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('livros_emprestados', function(Blueprint $table) {
			$table->foreign('livro_id')->references('id')->on('livros')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('permissoes_role', function(Blueprint $table) {
			$table->foreign('role_id')->references('id')->on('roles')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('permissoes_role', function(Blueprint $table) {
			$table->foreign('permissoes_id')->references('id')->on('permissoes')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('usuarios_roles', function(Blueprint $table) {
			$table->foreign('role_id')->references('id')->on('roles')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('livros_emprestados', function(Blueprint $table) {
			$table->dropForeign('livros_emprestados_user_id_foreign');
		});
		Schema::table('livros_emprestados', function(Blueprint $table) {
			$table->dropForeign('livros_emprestados_livro_id_foreign');
		});
		Schema::table('permissoes_role', function(Blueprint $table) {
			$table->dropForeign('permissoes_role_role_id_foreign');
		});
		Schema::table('permissoes_role', function(Blueprint $table) {
			$table->dropForeign('permissoes_role_permissoes_id_foreign');
		});
		Schema::table('usuarios_roles', function(Blueprint $table) {
			$table->dropForeign('usuarios_roles_role_id_foreign');
		});
	}
}