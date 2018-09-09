<?php

require 'conexion.php';

$estudiantes = array(

	'0' => array (
		'id' => '',
		'primer_nombre' => 'Jose',
		'segundo_nombre' => 'Fernando',
		'primer_apellido' => 'Anaya',
		'segundo_apellido' => 'Berna',
		'id_grado' => '4',
		'id_grupo' => '1'
	),

	'1' => array (
		'id' => '',
		'primer_nombre' => 'Juan',
		'segundo_nombre' => 'Camilo',
		'primer_apellido' => 'Anaya',
		'segundo_apellido' => 'Causil',
		'id_grado' => '4',
		'id_grupo' => '1'
	),

	'2' => array (
		'id' => '',
		'primer_nombre' => 'Deikin',
		'segundo_nombre' => 'Jose',
		'primer_apellido' => 'Arroyo',
		'segundo_apellido' => 'Diaz',
		'id_grado' => '4',
		'id_grupo' => '1'
	),

	'3' => array (
		'id' => '',
		'primer_nombre' => 'Adrian',
		'segundo_nombre' => 'Jose',
		'primer_apellido' => 'Avila',
		'segundo_apellido' => 'Diaz',
		'id_grado' => '4',
		'id_grupo' => '1'
	),

	'4' => array (
		'id' => '',
		'primer_nombre' => 'Lilibeth',
		'segundo_nombre' => '',
		'primer_apellido' => 'Ballesteros',
		'segundo_apellido' => 'Majarrez',
		'id_grado' => '4',
		'id_grupo' => '1'
	),

	'5' => array (
		'id' => '',
		'primer_nombre' => 'Maria',
		'segundo_nombre' => 'Paula',
		'primer_apellido' => 'Doria',
		'segundo_apellido' => 'Palacios',
		'id_grado' => '4',
		'id_grupo' => '1'
	),

	'6' => array (
		'id' => '',
		'primer_nombre' => 'Yarlis',
		'segundo_nombre' => '',
		'primer_apellido' => 'Estrada',
		'segundo_apellido' => 'Mendez',
		'id_grado' => '4',
		'id_grupo' => '1'
	),

	'7' => array (
		'id' => '',
		'primer_nombre' => 'Andres',
		'segundo_nombre' => 'Felipe',
		'primer_apellido' => 'Ferrer',
		'segundo_apellido' => 'Villalba',
		'id_grado' => '4',
		'id_grupo' => '1'
	),

	'8' => array (
		'id' => '',
		'primer_nombre' => 'Luis',
		'segundo_nombre' => 'Gerardo',
		'primer_apellido' => 'Galvis',
		'segundo_apellido' => 'Ospino',
		'id_grado' => '4',
		'id_grupo' => '1'
	),

	'9' => array (
		'id' => '',
		'primer_nombre' => 'Mayerlis',
		'segundo_nombre' => '',
		'primer_apellido' => 'Hernandez',
		'segundo_apellido' => 'Gomez',
		'id_grado' => '4',
		'id_grupo' => '1'
	),

	'10' => array (
		'id' => '',
		'primer_nombre' => 'Mauricio',
		'segundo_nombre' => '',
		'primer_apellido' => 'Jimenez',
		'segundo_apellido' => 'Celestino',
		'id_grado' => '4',
		'id_grupo' => '1'
	),

	'11' => array (
		'id' => '',
		'primer_nombre' => 'Evelio',
		'segundo_nombre' => 'Miguel',
		'primer_apellido' => 'Leon',
		'segundo_apellido' => 'Garcia',
		'id_grado' => '4',
		'id_grupo' => '1'
	),

	'12' => array (
		'id' => '',
		'primer_nombre' => 'Yair',
		'segundo_nombre' => 'Miguel',
		'primer_apellido' => 'Majarrez',
		'segundo_apellido' => 'Carvajal',
		'id_grado' => '4',
		'id_grupo' => '1'
	),

	'13' => array (
		'id' => '',
		'primer_nombre' => 'Anderson',
		'segundo_nombre' => '',
		'primer_apellido' => 'Martinez',
		'segundo_apellido' => 'Ceña',
		'id_grado' => '4',
		'id_grupo' => '1'
	),

	'14' => array (
		'id' => '',
		'primer_nombre' => 'Neider',
		'segundo_nombre' => 'Enrique',
		'primer_apellido' => 'Negrete',
		'segundo_apellido' => 'Carrascal',
		'id_grado' => '4',
		'id_grupo' => '1'
	),

	'15' => array (
		'id' => '',
		'primer_nombre' => 'Camilo',
		'segundo_nombre' => 'Andres',
		'primer_apellido' => 'Negrete',
		'segundo_apellido' => 'Mestra',
		'id_grado' => '4',
		'id_grupo' => '1'
	),

	'16' => array (
		'id' => '',
		'primer_nombre' => 'Ana',
		'segundo_nombre' => 'Maria',
		'primer_apellido' => 'Ortega',
		'segundo_apellido' => 'Pedroza',
		'id_grado' => '4',
		'id_grupo' => '1'
	),

	'17' => array (
		'id' => '',
		'primer_nombre' => 'Mario',
		'segundo_nombre' => 'Jose',
		'primer_apellido' => 'Romero',
		'segundo_apellido' => 'Hoyos',
		'id_grado' => '4',
		'id_grupo' => '1'
	),

	'18' => array (
		'id' => '',
		'primer_nombre' => 'Yuranis',
		'segundo_nombre' => 'Paola',
		'primer_apellido' => 'Sanchez',
		'segundo_apellido' => 'Mejia',
		'id_grado' => '4',
		'id_grupo' => '1'
	),

	'19' => array (
		'id' => '',
		'primer_nombre' => 'Daniel',
		'segundo_nombre' => 'Danilo',
		'primer_apellido' => 'Sanchez',
		'segundo_apellido' => 'Macea',
		'id_grado' => '4',
		'id_grupo' => '1'
	),

	'20' => array (
		'id' => '',
		'primer_nombre' => 'Leidys',
		'segundo_nombre' => 'Nelieth',
		'primer_apellido' => 'Seña',
		'segundo_apellido' => 'Carrascal',
		'id_grado' => '4',
		'id_grupo' => '1'
	),

	'21' => array (
		'id' => '',
		'primer_nombre' => 'Juan',
		'segundo_nombre' => 'Camilo',
		'primer_apellido' => 'Sibaja',
		'segundo_apellido' => 'Leon',
		'id_grado' => '4',
		'id_grupo' => '1'
	),

	'22' => array (
		'id' => '',
		'primer_nombre' => 'Keiner',
		'segundo_nombre' => 'De Jesus',
		'primer_apellido' => 'Tordecilla',
		'segundo_apellido' => 'Gonzales',
		'id_grado' => '4',
		'id_grupo' => '1'
	),

	'23' => array (
		'id' => '',
		'primer_nombre' => 'Jose',
		'segundo_nombre' => 'Daniel',
		'primer_apellido' => 'Velasquez',
		'segundo_apellido' => 'Palomo',
		'id_grado' => '4',
		'id_grupo' => '1'
	)

);


?>
