<?php

require 'conexion.php';

$estudiantes = array(

	'0' => array (
		'id' => '',
		'primer_nombre' => 'Maria',
		'segundo_nombre' => 'Lorena',
		'primer_apellido' => 'Acosta',
		'segundo_apellido' => 'Ramirez',
		'id_grado' => '3',
		'id_grupo' => '2'
	),

	'1' => array (
		'id' => '',
		'primer_nombre' => 'Andres',
		'segundo_nombre' => 'David',
		'primer_apellido' => 'Avila',
		'segundo_apellido' => 'Diaz',
		'id_grado' => '3',
		'id_grupo' => '2'
	),

	'2' => array (
		'id' => '',
		'primer_nombre' => 'Juan',
		'segundo_nombre' => 'Ernesto',
		'primer_apellido' => 'Baltazar',
		'segundo_apellido' => 'Hernandez',
		'id_grado' => '3',
		'id_grupo' => '2'
	),

	'3' => array (
		'id' => '',
		'primer_nombre' => 'Camila',
		'segundo_nombre' => 'Andrea',
		'primer_apellido' => 'Bravo',
		'segundo_apellido' => 'Torres',
		'id_grado' => '3',
		'id_grupo' => '2'
	),

	'4' => array (
		'id' => '',
		'primer_nombre' => 'Mario',
		'segundo_nombre' => 'Andres',
		'primer_apellido' => 'Cogollo',
		'segundo_apellido' => 'Hernandez',
		'id_grado' => '3',
		'id_grupo' => '2'
	),

	'5' => array (
		'id' => '',
		'primer_nombre' => 'Luis',
		'segundo_nombre' => 'Fernando',
		'primer_apellido' => 'Lozano',
		'segundo_apellido' => 'Nuñez',
		'id_grado' => '3',
		'id_grupo' => '2'
	),

	'6' => array (
		'id' => '',
		'primer_nombre' => 'Pedro',
		'segundo_nombre' => 'Antonio',
		'primer_apellido' => 'Marquez',
		'segundo_apellido' => 'Ruiz',
		'id_grado' => '3',
		'id_grupo' => '2'
	),

	'7' => array (
		'id' => '',
		'primer_nombre' => 'Esteban',
		'segundo_nombre' => 'Alejandro',
		'primer_apellido' => 'Martinez',
		'segundo_apellido' => 'Gonzales',
		'id_grado' => '3',
		'id_grupo' => '2'
	),

	'8' => array (
		'id' => '',
		'primer_nombre' => 'Carolina',
		'segundo_nombre' => 'Andrea',
		'primer_apellido' => 'Martinez',
		'segundo_apellido' => 'Villadiego',
		'id_grado' => '3',
		'id_grupo' => '2'
	),

	'9' => array (
		'id' => '',
		'primer_nombre' => 'Sebastian',
		'segundo_nombre' => 'Andres',
		'primer_apellido' => 'Medina',
		'segundo_apellido' => 'Sarmiento',
		'id_grado' => '3',
		'id_grupo' => '2'
	),

	'10' => array (
		'id' => '',
		'primer_nombre' => 'Jesus',
		'segundo_nombre' => 'David',
		'primer_apellido' => 'Mendez',
		'segundo_apellido' => 'Hernandez',
		'id_grado' => '3',
		'id_grupo' => '2'
	),

	'11' => array (
		'id' => '',
		'primer_nombre' => 'Yireth',
		'segundo_nombre' => '',
		'primer_apellido' => 'Mendoza',
		'segundo_apellido' => 'Lambertino',
		'id_grado' => '3',
		'id_grupo' => '2'
	),

	'12' => array (
		'id' => '',
		'primer_nombre' => 'Daniela',
		'segundo_nombre' => '',
		'primer_apellido' => 'Mogrovejo',
		'segundo_apellido' => 'Burgos',
		'id_grado' => '3',
		'id_grupo' => '2'
	),

	'13' => array (
		'id' => '',
		'primer_nombre' => 'Yajeidys',
		'segundo_nombre' => '',
		'primer_apellido' => 'Montes',
		'segundo_apellido' => 'Morales',
		'id_grado' => '3',
		'id_grupo' => '2'
	),

	'14' => array (
		'id' => '',
		'primer_nombre' => 'Eimer',
		'segundo_nombre' => 'David',
		'primer_apellido' => 'Moreno',
		'segundo_apellido' => 'Villalba',
		'id_grado' => '3',
		'id_grupo' => '2'
	),

	'15' => array (
		'id' => '',
		'primer_nombre' => 'Estefania',
		'segundo_nombre' => '',
		'primer_apellido' => 'Negrete',
		'segundo_apellido' => 'Mestra',
		'id_grado' => '3',
		'id_grupo' => '2'
	),

	'16' => array (
		'id' => '',
		'primer_nombre' => 'Alexander',
		'segundo_nombre' => '',
		'primer_apellido' => 'Nuñez',
		'segundo_apellido' => 'Baltazar',
		'id_grado' => '3',
		'id_grupo' => '2'
	),

	'17' => array (
		'id' => '',
		'primer_nombre' => 'Luis',
		'segundo_nombre' => 'Angel',
		'primer_apellido' => 'Pacheco',
		'segundo_apellido' => '',
		'id_grado' => '3',
		'id_grupo' => '2'
	),

	'18' => array (
		'id' => '',
		'primer_nombre' => 'Ana',
		'segundo_nombre' => 'Maria',
		'primer_apellido' => 'Payarez',
		'segundo_apellido' => 'Jimenez',
		'id_grado' => '3',
		'id_grupo' => '2'
	),

	'19' => array (
		'id' => '',
		'primer_nombre' => 'Zharick',
		'segundo_nombre' => 'Paola',
		'primer_apellido' => 'Posada',
		'segundo_apellido' => 'Contreras',
		'id_grado' => '3',
		'id_grupo' => '2'
	),

	'20' => array (
		'id' => '',
		'primer_nombre' => 'Estefania',
		'segundo_nombre' => 'Esther',
		'primer_apellido' => 'Romero',
		'segundo_apellido' => 'Hoyos',
		'id_grado' => '3',
		'id_grupo' => '2'
	),

	'21' => array (
		'id' => '',
		'primer_nombre' => 'Luis',
		'segundo_nombre' => 'Mario',
		'primer_apellido' => 'Solano',
		'segundo_apellido' => 'Ramirez',
		'id_grado' => '3',
		'id_grupo' => '2'
	),

	'22' => array (
		'id' => '',
		'primer_nombre' => 'Eva',
		'segundo_nombre' => 'Sandrith',
		'primer_apellido' => 'Tordecilla',
		'segundo_apellido' => 'Palomo',
		'id_grado' => '3',
		'id_grupo' => '2'
	),

	'23' => array (
		'id' => '',
		'primer_nombre' => 'Dayana',
		'segundo_nombre' => 'Rosa',
		'primer_apellido' => 'Zarante',
		'segundo_apellido' => 'Gonzales',
		'id_grado' => '3',
		'id_grupo' => '2'
	)

);


?>
