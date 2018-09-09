<?php

require 'conexion.php';

$estudiantes = array(

	'0' => array (
		'id' => '',
		'primer_nombre' => 'Luis',
		'segundo_nombre' => 'Javier',
		'primer_apellido' => 'Arrieta',
		'segundo_apellido' => 'Hoyos',
		'id_grado' => '1',
		'id_grupo' => '2'
	),

	'1' => array (
		'id' => '',
		'primer_nombre' => 'Esther',
		'segundo_nombre' => 'Maria',
		'primer_apellido' => 'Avila',
		'segundo_apellido' => 'Diaz',
		'id_grado' => '1',
		'id_grupo' => '2'
	),

	'2' => array (
		'id' => '',
		'primer_nombre' => 'Jesus',
		'segundo_nombre' => 'Alberto',
		'primer_apellido' => 'Baltazar',
		'segundo_apellido' => 'Hernandez',
		'id_grado' => '1',
		'id_grupo' => '2'
	),

	'3' => array (
		'id' => '',
		'primer_nombre' => 'Andres',
		'segundo_nombre' => 'Felipe',
		'primer_apellido' => 'Camacho',
		'segundo_apellido' => 'De Miranda',
		'id_grado' => '1',
		'id_grupo' => '2'
	),

	'4' => array (
		'id' => '',
		'primer_nombre' => 'Isaura',
		'segundo_nombre' => '',
		'primer_apellido' => 'Camacho',
		'segundo_apellido' => 'Zabaleta',
		'id_grado' => '1',
		'id_grupo' => '2'
	),

	'5' => array (
		'id' => '',
		'primer_nombre' => 'Valeria',
		'segundo_nombre' => '',
		'primer_apellido' => 'Causil',
		'segundo_apellido' => 'Vargas',
		'id_grado' => '1',
		'id_grupo' => '2'
	),

	'6' => array (
		'id' => '',
		'primer_nombre' => 'Fiorella',
		'segundo_nombre' => '',
		'primer_apellido' => 'Cogollo',
		'segundo_apellido' => 'Madera',
		'id_grado' => '1',
		'id_grupo' => '2'
	),

	'7' => array (
		'id' => '',
		'primer_nombre' => 'Dulce',
		'segundo_nombre' => 'Maria',
		'primer_apellido' => 'Cogollo',
		'segundo_apellido' => 'Serrano',
		'id_grado' => '1',
		'id_grupo' => '2'
	),

	'8' => array (
		'id' => '',
		'primer_nombre' => 'Carlos',
		'segundo_nombre' => 'Andres',
		'primer_apellido' => 'Cohen',
		'segundo_apellido' => 'Arrieta',
		'id_grado' => '1',
		'id_grupo' => '2'
	),

	'9' => array (
		'id' => '',
		'primer_nombre' => 'Georgina',
		'segundo_nombre' => '',
		'primer_apellido' => 'Contreras',
		'segundo_apellido' => 'Hernandez',
		'id_grado' => '1',
		'id_grupo' => '2'
	),

	'10' => array (
		'id' => '',
		'primer_nombre' => 'Keyla',
		'segundo_nombre' => '',
		'primer_apellido' => 'Cordoba',
		'segundo_apellido' => 'Lopez',
		'id_grado' => '1',
		'id_grupo' => '2'
	),

	'11' => array (
		'id' => '',
		'primer_nombre' => 'Ana',
		'segundo_nombre' => 'Melissa',
		'primer_apellido' => 'Fuentes',
		'segundo_apellido' => 'Galeano',
		'id_grado' => '1',
		'id_grupo' => '2'
	),

	'12' => array (
		'id' => '',
		'primer_nombre' => 'Juan',
		'segundo_nombre' => 'Sebastian',
		'primer_apellido' => 'Garcia',
		'segundo_apellido' => 'Argel',
		'id_grado' => '1',
		'id_grupo' => '2'
	),

	'13' => array (
		'id' => '',
		'primer_nombre' => 'Juan',
		'segundo_nombre' => 'Sebastian',
		'primer_apellido' => 'Gonzales',
		'segundo_apellido' => 'Hoyos',
		'id_grado' => '1',
		'id_grupo' => '2'
	),

	'14' => array (
		'id' => '',
		'primer_nombre' => 'Yordi',
		'segundo_nombre' => '',
		'primer_apellido' => 'Guerra',
		'segundo_apellido' => 'Madera',
		'id_grado' => '1',
		'id_grupo' => '2'
	),

	'15' => array (
		'id' => '',
		'primer_nombre' => 'Manuel',
		'segundo_nombre' => 'Ramon',
		'primer_apellido' => 'Lozano',
		'segundo_apellido' => 'Perez',
		'id_grado' => '1',
		'id_grupo' => '2'
	),

	'16' => array (
		'id' => '',
		'primer_nombre' => 'Omar',
		'segundo_nombre' => 'Dario',
		'primer_apellido' => 'Mendez',
		'segundo_apellido' => 'Hernandez',
		'id_grado' => '1',
		'id_grupo' => '2'
	),

	'17' => array (
		'id' => '',
		'primer_nombre' => 'Daniela',
		'segundo_nombre' => 'De Jesus',
		'primer_apellido' => 'Mendoza',
		'segundo_apellido' => 'lambertino',
		'id_grado' => '1',
		'id_grupo' => '2'
	),

	'18' => array (
		'id' => '',
		'primer_nombre' => 'Samuel',
		'segundo_nombre' => '',
		'primer_apellido' => 'Mendoza',
		'segundo_apellido' => 'lambertino',
		'id_grado' => '1',
		'id_grupo' => '2'
	),

	'19' => array (
		'id' => '',
		'primer_nombre' => 'Vanessa',
		'segundo_nombre' => '',
		'primer_apellido' => 'Mora',
		'segundo_apellido' => 'Camacho',
		'id_grado' => '1',
		'id_grupo' => '2'
	),

	'20' => array (
		'id' => '',
		'primer_nombre' => 'Carlos',
		'segundo_nombre' => 'Andres',
		'primer_apellido' => 'Payarez',
		'segundo_apellido' => 'Padilla',
		'id_grado' => '1',
		'id_grupo' => '2'
	),

	'21' => array (
		'id' => '',
		'primer_nombre' => 'Eliseth',
		'segundo_nombre' => 'Paola',
		'primer_apellido' => 'Romero',
		'segundo_apellido' => 'Hoyos',
		'id_grado' => '1',
		'id_grupo' => '2'
	),

	'22' => array (
		'id' => '',
		'primer_nombre' => 'Isa',
		'segundo_nombre' => 'Katerine',
		'primer_apellido' => 'Suarez',
		'segundo_apellido' => 'Arrieta',
		'id_grado' => '1',
		'id_grupo' => '2'
	),

	'23' => array (
		'id' => '',
		'primer_nombre' => 'Andrea',
		'segundo_nombre' => 'Carolina',
		'primer_apellido' => 'Tordecilla',
		'segundo_apellido' => 'Sibaja',
		'id_grado' => '1',
		'id_grupo' => '2'
	)

);

		/*foreach ($estudiantes as $e) {

		$consulta = 'INSERT INTO estudiantes (primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, id_grado, id_grupo)
					VALUES ("'.$e['primer_nombre'].'", "'.$e['segundo_nombre'].'", "'.$e['primer_apellido'].'", "'.$e['segundo_apellido'].'", "'.$e['id_grado'].'", "'.$e['id_grupo'].'")';


		$registro = mysqli_query($conexion, $consulta);

		}

		echo 'exito!';*/


?>
