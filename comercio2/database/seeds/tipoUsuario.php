<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class tipoUsuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipoUsuarios')->insert([
            'tipo' => 'Cliente',
        ]);
        DB::table('tipoUsuarios')->insert([
            'tipo' => 'Administrador',
        ]);
    }
}
