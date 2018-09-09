<?php

require 'conexion.php';

$estudiantes = array(

	'0' => array (
		'id' => '',
		'primer_nombre' => 'Lina',
		'segundo_nombre' => 'Marcela',
		'primer_apellido' => 'Arrieta',
		'segundo_apellido' => 'Arteaga',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'1' => array (
		'id' => '',
		'primer_nombre' => 'Juan',
		'segundo_nombre' => 'Sebastian',
		'primer_apellido' => 'Camacho',
		'segundo_apellido' => 'Camacho',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'2' => array (
		'id' => '',
		'primer_nombre' => 'Ana',
		'segundo_nombre' => 'Karina',
		'primer_apellido' => 'Cogollo',
		'segundo_apellido' => 'Hernandez',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'3' => array (
		'id' => '',
		'primer_nombre' => 'Andres',
		'segundo_nombre' => 'Toribio',
		'primer_apellido' => 'Cogollo',
		'segundo_apellido' => 'Hernandez',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'4' => array (
		'id' => '',
		'primer_nombre' => 'Claudia',
		'segundo_nombre' => 'Patricia',
		'primer_apellido' => 'Cogollo',
		'segundo_apellido' => 'Hernandez',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'5' => array (
		'id' => '',
		'primer_nombre' => 'Ruben',
		'segundo_nombre' => 'Patricio',
		'primer_apellido' => 'Cogollo',
		'segundo_apellido' => 'Hernandez',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'6' => array (
		'id' => '',
		'primer_nombre' => 'Luisa',
		'segundo_nombre' => 'Fernanda',
		'primer_apellido' => 'Cogollo',
		'segundo_apellido' => 'Villadiego',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'7' => array (
		'id' => '',
		'primer_nombre' => 'Jeison',
		'segundo_nombre' => 'Javier',
		'primer_apellido' => 'Cogollo',
		'segundo_apellido' => 'Villadiego',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'8' => array (
		'id' => '',
		'primer_nombre' => 'Sofia',
		'segundo_nombre' => 'Del Carmen',
		'primer_apellido' => 'Fuentes',
		'segundo_apellido' => 'Galeano',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'9' => array (
		'id' => '',
		'primer_nombre' => 'Eime',
		'segundo_nombre' => 'Carolina',
		'primer_apellido' => 'Gonzales',
		'segundo_apellido' => 'Camacho',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'10' => array (
		'id' => '',
		'primer_nombre' => 'Sebastian',
		'segundo_nombre' => 'Andres',
		'primer_apellido' => 'Guerra',
		'segundo_apellido' => 'Lopez',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'11' => array (
		'id' => '',
		'primer_nombre' => 'Dairis',
		'segundo_nombre' => '',
		'primer_apellido' => 'Hernandez',
		'segundo_apellido' => 'Cogollo',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'12' => array (
		'id' => '',
		'primer_nombre' => 'Alvaro',
		'segundo_nombre' => 'Jose',
		'primer_apellido' => 'Lopez',
		'segundo_apellido' => 'Hoyos',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'13' => array (
		'id' => '',
		'primer_nombre' => 'Carlos',
		'segundo_nombre' => 'Eduardo',
		'primer_apellido' => 'Lozano',
		'segundo_apellido' => 'Nuñez',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'14' => array (
		'id' => '',
		'primer_nombre' => 'Jeimer',
		'segundo_nombre' => 'Andres',
		'primer_apellido' => 'Manjarrez',
		'segundo_apellido' => 'Peña',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'15' => array (
		'id' => '',
		'primer_nombre' => 'Jose',
		'segundo_nombre' => 'David',
		'primer_apellido' => 'Martinez',
		'segundo_apellido' => 'Suarez',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'16' => array (
		'id' => '',
		'primer_nombre' => 'Luis',
		'segundo_nombre' => 'Felipe',
		'primer_apellido' => 'Mogrovejo',
		'segundo_apellido' => 'Tordecilla',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'17' => array (
		'id' => '',
		'primer_nombre' => 'Juan',
		'segundo_nombre' => 'Felipe',
		'primer_apellido' => 'Romero',
		'segundo_apellido' => 'Tordecilla',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'18' => array (
		'id' => '',
		'primer_nombre' => 'Juan',
		'segundo_nombre' => 'Sebastian',
		'primer_apellido' => 'Romero',
		'segundo_apellido' => 'Tordecilla',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'19' => array (
		'id' => '',
		'primer_nombre' => 'Faiber',
		'segundo_nombre' => 'Miguel',
		'primer_apellido' => 'Salas',
		'segundo_apellido' => 'Hernandez',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'20' => array (
		'id' => '',
		'primer_nombre' => 'German',
		'segundo_nombre' => 'David',
		'primer_apellido' => 'Salas',
		'segundo_apellido' => 'Hernandez',
		'id_grado' => '1',
		'id_grupo' => '1'
	)

);

/*foreach ($estudiantes as $e) {

$consulta = 'INSERT INTO estudiantes (primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, id_grado, id_grupo)
			VALUES ("'.$e['primer_nombre'].'", "'.$e['segundo_nombre'].'", "'.$e['primer_apellido'].'", "'.$e['segundo_apellido'].'", "'.$e['id_grado'].'", "'.$e['id_grupo'].'")';


$registro = mysqli_query($conexion, $consulta);

}

echo 'exito!';*/


?>
