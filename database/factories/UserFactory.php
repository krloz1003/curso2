<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Departamento::class, function (Faker $faker) {
    return [
	'codigo' => $faker->bothify('?###'),
    'descripcion' => $faker->sentence(10)
    ];
 });


$factory->define(App\Empleado::class, function(Faker $faker) {	

	$departamentos = App\Departamento::all()->pluck('id')->toArray();
	$turnos = App\Turno::all()->pluck('id')->toArray();

	
	return [
		'matricula' => $faker->unique()->numberBetween($min = 7, $max = 6000),
		'paterno' => $faker->lastName,
		'materno' => $faker->lastName,
		'nombre' => $faker->firstNameMale,
		'fecha_nacimiento' => $faker->date($format = 'Y/m/d', $max = ''),
		'sexo' => $faker->randomElement(['HOMBRE' ,'MUJER']),
		'id_departamento' => $faker->randomElement($departamentos),
		'id_turno' => $faker->randomElement($turnos),
	];

});

