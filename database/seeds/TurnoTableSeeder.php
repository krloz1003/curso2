<?php

use Illuminate\Database\Seeder;
use App\Turno;

class TurnoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $turnos = array(
        	['descripcion' => 'MATUTINO'],
        	['descripcion' => 'VESPERTINO'],
        	['descripcion' => 'NOCTURNO'],
        	['descripcion' => 'JORNADA ACUMULADA'],
        	['descripcion' => 'ESPECIALES'],
        	['descripcion' => 'SABADO'],
        	['descripcion' => 'DOMINGO'],
        	['descripcion' => '24 X 24'],
        );

        foreach ($turnos as $turno) {
        	Turno::create($turno);
        }

    }
}
