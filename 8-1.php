<?php

require 'conexion.php';

$estudiantes = array(

	'0' => array (
		'id' => '',
		'primer_nombre' => 'Juan',
		'segundo_nombre' => 'Carlos',
		'primer_apellido' => 'Almanza',
		'segundo_apellido' => 'Lozano',
		'id_grado' => '3',
		'id_grupo' => '1'
	),

	'1' => array (
		'id' => '',
		'primer_nombre' => 'Yandri',
		'segundo_nombre' => 'Marcela',
		'primer_apellido' => 'Alvarez',
		'segundo_apellido' => 'Hernandez',
		'id_grado' => '3',
		'id_grupo' => '1'
	),

	'2' => array (
		'id' => '',
		'primer_nombre' => 'Maria',
		'segundo_nombre' => 'Alejandra',
		'primer_apellido' => 'Burgos',
		'segundo_apellido' => 'Contreras',
		'id_grado' => '3',
		'id_grupo' => '1'
	),

	'3' => array (
		'id' => '',
		'primer_nombre' => 'Mauricio',
		'segundo_nombre' => 'Manuel',
		'primer_apellido' => 'Causil',
		'segundo_apellido' => 'Vargas',
		'id_grado' => '3',
		'id_grupo' => '1'
	),

	'4' => array (
		'id' => '',
		'primer_nombre' => 'Karina',
		'segundo_nombre' => 'Andrea',
		'primer_apellido' => 'Diaz',
		'segundo_apellido' => 'Velasquez',
		'id_grado' => '3',
		'id_grupo' => '1'
	),

	'5' => array (
		'id' => '',
		'primer_nombre' => 'Melanie',
		'segundo_nombre' => 'Johana',
		'primer_apellido' => 'Dominguez',
		'segundo_apellido' => 'Martinez',
		'id_grado' => '3',
		'id_grupo' => '1'
	),

	'6' => array (
		'id' => '',
		'primer_nombre' => 'Euris',
		'segundo_nombre' => 'Durango',
		'primer_apellido' => 'Emeuris',
		'segundo_apellido' => '',
		'id_grado' => '3',
		'id_grupo' => '1'
	),

	'7' => array (
		'id' => '',
		'primer_nombre' => 'Nicol',
		'segundo_nombre' => 'Dayana',
		'primer_apellido' => 'Espitia',
		'segundo_apellido' => 'Vargas',
		'id_grado' => '3',
		'id_grupo' => '1'
	),

	'8' => array (
		'id' => '',
		'primer_nombre' => 'Daniel',
		'segundo_nombre' => 'Enrique',
		'primer_apellido' => 'Gonzales',
		'segundo_apellido' => 'Camacho',
		'id_grado' => '3',
		'id_grupo' => '1'
	),

	'9' => array (
		'id' => '',
		'primer_nombre' => 'Yerleis',
		'segundo_nombre' => 'Del Carmen',
		'primer_apellido' => 'Gonzales',
		'segundo_apellido' => 'Galvan',
		'id_grado' => '3',
		'id_grupo' => '1'
	),

	'10' => array (
		'id' => '',
		'primer_nombre' => 'Katherine',
		'segundo_nombre' => '',
		'primer_apellido' => 'Guerra',
		'segundo_apellido' => 'Manjarrez',
		'id_grado' => '3',
		'id_grupo' => '1'
	),

	'11' => array (
		'id' => '',
		'primer_nombre' => 'Katherine',
		'segundo_nombre' => 'Isabel',
		'primer_apellido' => 'Guzman',
		'segundo_apellido' => 'Ortiz',
		'id_grado' => '3',
		'id_grupo' => '1'
	),

	'12' => array (
		'id' => '',
		'primer_nombre' => 'Kendri',
		'segundo_nombre' => 'Julieth',
		'primer_apellido' => 'Guzman',
		'segundo_apellido' => 'Velasquez',
		'id_grado' => '3',
		'id_grupo' => '1'
	),

	'13' => array (
		'id' => '',
		'primer_nombre' => 'Rosa',
		'segundo_nombre' => 'Maria',
		'primer_apellido' => 'Hernandez',
		'segundo_apellido' => 'Vidal',
		'id_grado' => '3',
		'id_grupo' => '1'
	),

	'14' => array (
		'id' => '',
		'primer_nombre' => 'Luis',
		'segundo_nombre' => 'Fidel',
		'primer_apellido' => 'Hernandez',
		'segundo_apellido' => 'Arrieta',
		'id_grado' => '3',
		'id_grupo' => '1'
	),

	'15' => array (
		'id' => '',
		'primer_nombre' => 'Victor',
		'segundo_nombre' => 'Javier',
		'primer_apellido' => 'Hernandez',
		'segundo_apellido' => 'Hernandez',
		'id_grado' => '3',
		'id_grupo' => '1'
	),

	'16' => array (
		'id' => '',
		'primer_nombre' => 'Sara',
		'segundo_nombre' => 'Maria',
		'primer_apellido' => 'Hernandez',
		'segundo_apellido' => 'Mestra',
		'id_grado' => '3',
		'id_grupo' => '1'
	),

	'17' => array (
		'id' => '',
		'primer_nombre' => 'Ani',
		'segundo_nombre' => 'Ruth',
		'primer_apellido' => 'Hernandez',
		'segundo_apellido' => 'Payares',
		'id_grado' => '3',
		'id_grupo' => '1'
	),

	'18' => array (
		'id' => '',
		'primer_nombre' => 'Marcelo',
		'segundo_nombre' => '',
		'primer_apellido' => 'Marzola',
		'segundo_apellido' => 'Mejia',
		'id_grado' => '3',
		'id_grupo' => '1'
	),

	'19' => array (
		'id' => '',
		'primer_nombre' => 'Julio',
		'segundo_nombre' => 'Andres',
		'primer_apellido' => 'Paez',
		'segundo_apellido' => 'Herrera',
		'id_grado' => '3',
		'id_grupo' => '1'
	),

	'20' => array (
		'id' => '',
		'primer_nombre' => 'Maira',
		'segundo_nombre' => 'Heleina',
		'primer_apellido' => 'Romero',
		'segundo_apellido' => 'Payares',
		'id_grado' => '3',
		'id_grupo' => '1'
	),

	'21' => array (
		'id' => '',
		'primer_nombre' => 'Maria',
		'segundo_nombre' => 'Jose',
		'primer_apellido' => 'Tordecilla',
		'segundo_apellido' => 'Causil',
		'id_grado' => '3',
		'id_grupo' => '1'
	),

	'22' => array (
		'id' => '',
		'primer_nombre' => 'Lina',
		'segundo_nombre' => 'Maria',
		'primer_apellido' => 'Tordecilla',
		'segundo_apellido' => 'De Alba',
		'id_grado' => '3',
		'id_grupo' => '1'
	),

	'23' => array (
		'id' => '',
		'primer_nombre' => 'Yeferson',
		'segundo_nombre' => '',
		'primer_apellido' => 'Vega',
		'segundo_apellido' => 'Hernandez',
		'id_grado' => '3',
		'id_grupo' => '1'
	)

);


?>
