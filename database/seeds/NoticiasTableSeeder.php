<?php

use Illuminate\Database\Seeder;

class NoticiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('noticias')->insert([
        	[
        		'titular' => 'Nuevo increíble record de Lionel Messi',
        		'entrada' => 'El astro argentino vuelve a sorprender al mundo con esta increíble y totalmente no rebuscada estadística.',
        		'cuerpo' => 'No hay quién lo pare. Lionel Messi, no contento con ser el goleador histórico del Barcelona, de La Liga, y estar acostumbrado a anotar cerca del centenar de goles por año ha vuelto a romper todos los records. Hoy, el diario Barcelona al día reveló una nueva e increíble estadística: Lionel Messi es el único jugador argentino de la historia que, jugando en España, anota un gol al minuto 59 del partido, a las 13 horas de un día domingo, mientras, exactamente al mismo tiempo, los rayos del sol bañan las alas de una paloma en la plaza italia de Santiago mientras esta defeca sobre un transeúnte vestido con un polar rojo. Verdaderamente impresionante. Un monstruo.',
        		'imagen' => 'https://ep01.epimg.net/deportes/imagenes/2017/04/23/actualidad/1492963504_697478_1492982042_noticia_normal.jpg',
        		'fecha' => date('Y-m-d'),
        		'usuario_id' => 1,
        		'categoria_id' => 1,
        	],
        	[
        		'titular' => 'El chino Ríos dispara de nuevo',
        		'entrada' => '"Me cago en los periodistas", la nueva indirecta de Marcelo Ríos contra el mundo del periodismo.',
        		'cuerpo' => 'Durante un contacto telefónico de una radio de Santiago con la leyenda del tenis chileno, este insinuó una posible molestia con los periodistas. "Si me hubieran dado un punto en el ranking por cada vez que un periodista me andaba incriminando por mis supuestos problemas de conducta, hubiera sido el número 1 del mundo" dijo la mañana del día jueves. Más detalles en el video compartido por la radio.',
        		'imagen' => 'https://4.bp.blogspot.com/-OgeaIGnRanQ/VzP0lZzzm5I/AAAAAAAAADA/x6RqLI0bQjMNeJQpD2-XZy0klTbO8UmRgCLcB/s1600/TF4Hw.jpg',
        		'fecha' => date('Y-m-d'),
        		'usuario_id' => 1,
        		'categoria_id' => 4,
        	],
        ]);
    }
}
