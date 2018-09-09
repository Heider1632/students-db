<?php

require 'conexion.php';

$estudiantes = array(

	'0' => array (
		'id' => '',
		'primer_nombre' => 'Jose',
		'segundo_nombre' => 'Joaquin',
		'primer_apellido' => 'Arroyo',
		'segundo_apellido' => 'Diaz',
		'id_grado' => '2',
		'id_grupo' => '1'
	),

	'1' => array (
		'id' => '',
		'primer_nombre' => 'Luis',
		'segundo_nombre' => 'Alfredo',
		'primer_apellido' => 'Camacho',
		'segundo_apellido' => 'Garcia',
		'id_grado' => '2',
		'id_grupo' => '1'
	),

	'2' => array (
		'id' => '',
		'primer_nombre' => 'Maria',
		'segundo_nombre' => 'Camila',
		'primer_apellido' => 'Carrascal',
		'segundo_apellido' => 'Rodriguez',
		'id_grado' => '2',
		'id_grupo' => '1'
	),

	'3' => array (
		'id' => '',
		'primer_nombre' => 'Jorge',
		'segundo_nombre' => 'Ivan',
		'primer_apellido' => 'Ceballos',
		'segundo_apellido' => 'Tordecilla',
		'id_grado' => '2',
		'id_grupo' => '1'
	),

	'4' => array (
		'id' => '',
		'primer_nombre' => 'Isa',
		'segundo_nombre' => 'Katerine',
		'primer_apellido' => 'Cogollo',
		'segundo_apellido' => 'Ruiz',
		'id_grado' => '2',
		'id_grupo' => '1'
	),

	'5' => array (
		'id' => '',
		'primer_nombre' => 'Omarys',
		'segundo_nombre' => '',
		'primer_apellido' => 'Doria',
		'segundo_apellido' => 'Palacios',
		'id_grado' => '2',
		'id_grupo' => '1'
	),

	'6' => array (
		'id' => '',
		'primer_nombre' => 'Yerlis',
		'segundo_nombre' => '',
		'primer_apellido' => 'Espitia',
		'segundo_apellido' => 'Soto',
		'id_grado' => '2',
		'id_grupo' => '1'
	),

	'7' => array (
		'id' => '',
		'primer_nombre' => 'Jader',
		'segundo_nombre' => 'Luis',
		'primer_apellido' => 'Esquivel',
		'segundo_apellido' => 'Ospino',
		'id_grado' => '2',
		'id_grupo' => '1'
	),

	'8' => array (
		'id' => '',
		'primer_nombre' => 'Yaidis',
		'segundo_nombre' => '',
		'primer_apellido' => 'Estrada',
		'segundo_apellido' => 'Mendez',
		'id_grado' => '2',
		'id_grupo' => '1'
	),

	'9' => array (
		'id' => '',
		'primer_nombre' => 'Jose',
		'segundo_nombre' => 'Daniel',
		'primer_apellido' => 'Fernandez',
		'segundo_apellido' => 'Reyes',
		'id_grado' => '2',
		'id_grupo' => '1'
	),

	'10' => array (
		'id' => '',
		'primer_nombre' => 'Isabel',
		'segundo_nombre' => '',
		'primer_apellido' => 'Gonzales',
		'segundo_apellido' => 'Camacho',
		'id_grado' => '2',
		'id_grupo' => '1'
	),

	'11' => array (
		'id' => '',
		'primer_nombre' => 'Luisa',
		'segundo_nombre' => 'Fernanda',
		'primer_apellido' => 'Lopez',
		'segundo_apellido' => 'Emeris',
		'id_grado' => '2',
		'id_grupo' => '1'
	),

	'12' => array (
		'id' => '',
		'primer_nombre' => 'Andres',
		'segundo_nombre' => 'Yair',
		'primer_apellido' => 'Madera',
		'segundo_apellido' => 'Romero',
		'id_grado' => '2',
		'id_grupo' => '1'
	),

	'13' => array (
		'id' => '',
		'primer_nombre' => 'Jose',
		'segundo_nombre' => 'Luis',
		'primer_apellido' => 'Manjarrez',
		'segundo_apellido' => 'Gonzales',
		'id_grado' => '2',
		'id_grupo' => '1'
	),

	'14' => array (
		'id' => '',
		'primer_nombre' => 'Julio',
		'segundo_nombre' => 'Alberto',
		'primer_apellido' => 'Martinez',
		'segundo_apellido' => 'Anaya',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'15' => array (
		'id' => '',
		'primer_nombre' => 'Santiago',
		'segundo_nombre' => '',
		'primer_apellido' => 'Negrete',
		'segundo_apellido' => 'Lozano',
		'id_grado' => '2',
		'id_grupo' => '1'
	),

	'16' => array (
		'id' => '',
		'primer_nombre' => 'Sebastian',
		'segundo_nombre' => '',
		'primer_apellido' => 'Negrete',
		'segundo_apellido' => 'Lozano',
		'id_grado' => '2',
		'id_grupo' => '1'
	),

	'17' => array (
		'id' => '',
		'primer_nombre' => 'Yazmin',
		'segundo_nombre' => '',
		'primer_apellido' => 'Negrete',
		'segundo_apellido' => 'Mestra',
		'id_grado' => '2',
		'id_grupo' => '1'
	),

	'18' => array (
		'id' => '',
		'primer_nombre' => 'Dayana',
		'segundo_nombre' => 'Michel',
		'primer_apellido' => 'Ospino',
		'segundo_apellido' => 'Doria',
		'id_grado' => '2',
		'id_grupo' => '1'
	),

	'19' => array (
		'id' => '',
		'primer_nombre' => 'Ricardo',
		'segundo_nombre' => 'Leon',
		'primer_apellido' => 'Ospino',
		'segundo_apellido' => 'Morelo',
		'id_grado' => '2',
		'id_grupo' => '1'
	),

	'20' => array (
		'id' => '',
		'primer_nombre' => 'Carlos',
		'segundo_nombre' => 'Andres',
		'primer_apellido' => 'Ospino',
		'segundo_apellido' => 'Peña',
		'id_grado' => '2',
		'id_grupo' => '1'
	),

	'21' => array (
		'id' => '',
		'primer_nombre' => 'Angel',
		'segundo_nombre' => 'Segundo',
		'primer_apellido' => 'Pastrana',
		'segundo_apellido' => 'Mendoza',
		'id_grado' => '2',
		'id_grupo' => '1'
	),

	'22' => array (
		'id' => '',
		'primer_nombre' => 'Marco',
		'segundo_nombre' => 'Jose',
		'primer_apellido' => 'Ramirez',
		'segundo_apellido' => 'Perez',
		'id_grado' => '2',
		'id_grupo' => '1'
	),

	'23' => array (
		'id' => '',
		'primer_nombre' => 'Milena',
		'segundo_nombre' => 'Isabel',
		'primer_apellido' => 'Reyes',
		'segundo_apellido' => 'Toledo',
		'id_grado' => '2',
		'id_grupo' => '1'
	)

);


?>
