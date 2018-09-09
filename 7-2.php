<?php

require 'conexion.php';

$estudiantes = array(

	'0' => array (
		'id' => '',
		'primer_nombre' => 'Daniel',
		'segundo_nombre' => 'David',
		'primer_apellido' => 'Alvarez',
		'segundo_apellido' => 'Arroyo',
		'id_grado' => '2',
		'id_grupo' => '2'
	),

	'1' => array (
		'id' => '',
		'primer_nombre' => 'Camilo',
		'segundo_nombre' => 'Andres',
		'primer_apellido' => 'Anaya',
		'segundo_apellido' => 'Fernandez',
		'id_grado' => '2',
		'id_grupo' => '2'
	),

	'2' => array (
		'id' => '',
		'primer_nombre' => 'Juan',
		'segundo_nombre' => 'David',
		'primer_apellido' => 'Arrieta',
		'segundo_apellido' => 'Hoyos',
		'id_grado' => '2',
		'id_grupo' => '2'
	),

	'3' => array (
		'id' => '',
		'primer_nombre' => 'Sebastian',
		'segundo_nombre' => 'Jose',
		'primer_apellido' => 'Arroyo',
		'segundo_apellido' => 'Camacho',
		'id_grado' => '2',
		'id_grupo' => '2'
	),

	'4' => array (
		'id' => '',
		'primer_nombre' => 'Brayan',
		'segundo_nombre' => 'Jose',
		'primer_apellido' => 'Ayala',
		'segundo_apellido' => 'Montiel',
		'id_grado' => '2',
		'id_grupo' => '2'
	),

	'5' => array (
		'id' => '',
		'primer_nombre' => 'Luis',
		'segundo_nombre' => 'Mario',
		'primer_apellido' => 'Berna',
		'segundo_apellido' => 'Ortega',
		'id_grado' => '2',
		'id_grupo' => '2'
	),

	'6' => array (
		'id' => '',
		'primer_nombre' => 'Jonathan',
		'segundo_nombre' => '',
		'primer_apellido' => 'Berrocal',
		'segundo_apellido' => 'Oquendo',
		'id_grado' => '2',
		'id_grupo' => '2'
	),

	'7' => array (
		'id' => '',
		'primer_nombre' => 'Luis',
		'segundo_nombre' => 'Felipe',
		'primer_apellido' => 'Contreras',
		'segundo_apellido' => 'Hernandez',
		'id_grado' => '2',
		'id_grupo' => '2'
	),

	'8' => array (
		'id' => '',
		'primer_nombre' => 'Junior',
		'segundo_nombre' => 'Matias',
		'primer_apellido' => 'Correa',
		'segundo_apellido' => 'Negrete',
		'id_grado' => '2',
		'id_grupo' => '2'
	),

	'9' => array (
		'id' => '',
		'primer_nombre' => 'Justo',
		'segundo_nombre' => 'Manuel',
		'primer_apellido' => 'Doria',
		'segundo_apellido' => 'Causil',
		'id_grado' => '2',
		'id_grupo' => '2'
	),

	'10' => array (
		'id' => '',
		'primer_nombre' => 'Luis',
		'segundo_nombre' => 'Miguel',
		'primer_apellido' => 'Gonzales',
		'segundo_apellido' => 'Galvan',
		'id_grado' => '2',
		'id_grupo' => '2'
	),

	'11' => array (
		'id' => '',
		'primer_nombre' => 'Albeiro',
		'segundo_nombre' => 'Jose',
		'primer_apellido' => 'Guzman',
		'segundo_apellido' => 'Ortega',
		'id_grado' => '2',
		'id_grupo' => '2'
	),

	'12' => array (
		'id' => '',
		'primer_nombre' => 'Juan',
		'segundo_nombre' => 'Jose',
		'primer_apellido' => 'Manjarrez',
		'segundo_apellido' => 'Manjarrez',
		'id_grado' => '2',
		'id_grupo' => '2'
	),

	'13' => array (
		'id' => '',
		'primer_nombre' => 'Yerlenis',
		'segundo_nombre' => '',
		'primer_apellido' => 'Martinez',
		'segundo_apellido' => 'Ramirez',
		'id_grado' => '2',
		'id_grupo' => '2'
	),

	'14' => array (
		'id' => '',
		'primer_nombre' => 'Angel',
		'segundo_nombre' => 'Jose',
		'primer_apellido' => 'Narvaez',
		'segundo_apellido' => 'Fuentes',
		'id_grado' => '2',
		'id_grupo' => '2'
	),

	'15' => array (
		'id' => '',
		'primer_nombre' => 'Jesus',
		'segundo_nombre' => 'Manuel',
		'primer_apellido' => 'Narvaez',
		'segundo_apellido' => 'Sanchez',
		'id_grado' => '2',
		'id_grupo' => '2'
	),

	'16' => array (
		'id' => '',
		'primer_nombre' => 'Maron',
		'segundo_nombre' => 'Eliana',
		'primer_apellido' => 'Oquendo',
		'segundo_apellido' => 'Alvarez',
		'id_grado' => '2',
		'id_grupo' => '2'
	),

	'17' => array (
		'id' => '',
		'primer_nombre' => 'Yerlis',
		'segundo_nombre' => 'Yemith',
		'primer_apellido' => 'Payarez',
		'segundo_apellido' => 'Jimenez',
		'id_grado' => '2',
		'id_grupo' => '2'
	),

	'18' => array (
		'id' => '',
		'primer_nombre' => 'Saray',
		'segundo_nombre' => '',
		'primer_apellido' => 'Peralta',
		'segundo_apellido' => 'Arroyo',
		'id_grado' => '2',
		'id_grupo' => '2'
	),

	'19' => array (
		'id' => '',
		'primer_nombre' => 'Juan',
		'segundo_nombre' => 'Diego',
		'primer_apellido' => 'Pestana',
		'segundo_apellido' => 'Hoyos',
		'id_grado' => '2',
		'id_grupo' => '2'
	),

	'20' => array (
		'id' => '',
		'primer_nombre' => 'Heidy',
		'segundo_nombre' => 'Luz',
		'primer_apellido' => 'Portillo',
		'segundo_apellido' => 'Hernandez',
		'id_grado' => '2',
		'id_grupo' => '2'
	),

	'21' => array (
		'id' => '',
		'primer_nombre' => 'Ashly',
		'segundo_nombre' => 'Luz',
		'primer_apellido' => 'Posada',
		'segundo_apellido' => 'Contreras',
		'id_grado' => '2',
		'id_grupo' => '2'
	),

	'22' => array (
		'id' => '',
		'primer_nombre' => 'Andres',
		'segundo_nombre' => 'Felipe',
		'primer_apellido' => 'Sanchez',
		'segundo_apellido' => 'Ospino',
		'id_grado' => '2',
		'id_grupo' => '2'
	),

	'23' => array (
		'id' => '',
		'primer_nombre' => 'Santiago',
		'segundo_nombre' => '',
		'primer_apellido' => 'Vargas',
		'segundo_apellido' => 'Causil',
		'id_grado' => '2',
		'id_grupo' => '2'
	),

	'24' => array (
		'id' => '',
		'primer_nombre' => 'Jesus',
		'segundo_nombre' => 'David',
		'primer_apellido' => 'Vega',
		'segundo_apellido' => 'Diaz',
		'id_grado' => '2',
		'id_grupo' => '2'
	)

);


?>
