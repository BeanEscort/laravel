<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Model::unguard();
		$this->truncateTables([
			'roles',
			'permissoes'
		]);	
		$this->call(TableRolSeeder::class);	
		$this->call(TablePermisoesSeeder::class);	
	}

	protected function truncateTables(array $tables) {
		DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
		foreach ($tables as $table) {
			DB::table($table)->truncate();
		}
		DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
	}
}