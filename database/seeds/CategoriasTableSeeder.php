<?php

use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
        	[
        		'descripcion' => 'fútbol',
        	],
        	[
        		'descripcion' => 'básquetbol',
        	],
        	[
        		'descripcion' => 'voleibol',
        	],
        	[
        		'descripcion' => 'tenis',
        	],
        	[
        		'descripcion' => 'automovilismo',
        	],
        ]);
    }
}
