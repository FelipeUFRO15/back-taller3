<?php

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
        	'nombre' => 'admin',
        	'email' => 'a.herrera04@ufromail.cl',
        	'password' => bcrypt('1234'),
        ]);
    }
}
