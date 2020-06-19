<?php

use App\Models\Permissao;
use Illuminate\Database\Seeder;

class TablePermisoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Permissao::class, 50)->create();
    }
}
