<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TableRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'administrador',
            'editor',
            'supervisor',
        ];
        foreach($roles as $key => $value){
            DB::table('roles')->insert([
                'nome' => $value,  
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),              
            ]);
        }

        
    }
}
