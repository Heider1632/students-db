<?php

require 'conexion.php';

$estudiantes = array(

	'0' => array (
		'id' => '',
		'primer_nombre' => 'Carlos',
		'segundo_nombre' => 'Alberto',
		'primer_apellido' => 'Acosta',
		'segundo_apellido' => 'Ramirez',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'1' => array (
		'id' => '',
		'primer_nombre' => 'Juan',
		'segundo_nombre' => 'Camilo',
		'primer_apellido' => 'Acosta',
		'segundo_apellido' => 'Ramirez',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'2' => array (
		'id' => '',
		'primer_nombre' => 'Daniela',
		'segundo_nombre' => '',
		'primer_apellido' => 'Ballesteros',
		'segundo_apellido' => 'Manjarrez',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'3' => array (
		'id' => '',
		'primer_nombre' => 'Santiago',
		'segundo_nombre' => '',
		'primer_apellido' => 'Ballesteros',
		'segundo_apellido' => 'Romero',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'4' => array (
		'id' => '',
		'primer_nombre' => 'Luis',
		'segundo_nombre' => 'Mario',
		'primer_apellido' => 'Causil',
		'segundo_apellido' => 'Rivera',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'5' => array (
		'id' => '',
		'primer_nombre' => 'Sebastian',
		'segundo_nombre' => '',
		'primer_apellido' => 'Gomez',
		'segundo_apellido' => 'Solano',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'6' => array (
		'id' => '',
		'primer_nombre' => 'Lina',
		'segundo_nombre' => 'Margarita',
		'primer_apellido' => 'Guerra',
		'segundo_apellido' => 'Jimenez',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'7' => array (
		'id' => '',
		'primer_nombre' => 'Keysi',
		'segundo_nombre' => 'Patricia',
		'primer_apellido' => 'Guzman',
		'segundo_apellido' => 'Velazques',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'8' => array (
		'id' => '',
		'primer_nombre' => 'Luis',
		'segundo_nombre' => 'Alberto',
		'primer_apellido' => 'Hernandez',
		'segundo_apellido' => 'vargas',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'9' => array (
		'id' => '',
		'primer_nombre' => 'Victor',
		'segundo_nombre' => 'Julio',
		'primer_apellido' => 'Lopez',
		'segundo_apellido' => 'Hernandez',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'10' => array (
		'id' => '',
		'primer_nombre' => 'Yarith',
		'segundo_nombre' => 'Julieth',
		'primer_apellido' => 'Lopez',
		'segundo_apellido' => 'Narvaez',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'11' => array (
		'id' => '',
		'primer_nombre' => 'Jorge',
		'segundo_nombre' => 'Alberto',
		'primer_apellido' => 'Martinez',
		'segundo_apellido' => 'Burgos',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'12' => array (
		'id' => '',
		'primer_nombre' => 'Sara',
		'segundo_nombre' => 'Michel',
		'primer_apellido' => 'Martinez',
		'segundo_apellido' => 'Gonzales',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'13' => array (
		'id' => '',
		'primer_nombre' => 'Deiber',
		'segundo_nombre' => 'Jose',
		'primer_apellido' => 'Martinez',
		'segundo_apellido' => 'Padilla',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'14' => array (
		'id' => '',
		'primer_nombre' => 'Juan',
		'segundo_nombre' => 'Pablo',
		'primer_apellido' => 'Martinez',
		'segundo_apellido' => 'Villadiego',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'15' => array (
		'id' => '',
		'primer_nombre' => 'Ana',
		'segundo_nombre' => 'Lucia',
		'primer_apellido' => 'Magrovejo',
		'segundo_apellido' => 'Padilla',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'16' => array (
		'id' => '',
		'primer_nombre' => 'Luis',
		'segundo_nombre' => 'Alfredo',
		'primer_apellido' => 'Novoa',
		'segundo_apellido' => 'Guzman',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'17' => array (
		'id' => '',
		'primer_nombre' => 'Juan',
		'segundo_nombre' => 'David',
		'primer_apellido' => 'Pestana',
		'segundo_apellido' => 'Hoyos',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'18' => array (
		'id' => '',
		'primer_nombre' => 'Alejandro',
		'segundo_nombre' => '',
		'primer_apellido' => 'Ramirez',
		'segundo_apellido' => 'Palacios',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'19' => array (
		'id' => '',
		'primer_nombre' => 'Melissa',
		'segundo_nombre' => '',
		'primer_apellido' => 'Rosado',
		'segundo_apellido' => 'Mogrovejo',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'20' => array (
		'id' => '',
		'primer_nombre' => 'Santiago',
		'segundo_nombre' => '',
		'primer_apellido' => 'Ruiz',
		'segundo_apellido' => 'Madera',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'21' => array (
		'id' => '',
		'primer_nombre' => 'Luis',
		'segundo_nombre' => 'Enrique',
		'primer_apellido' => 'Salas',
		'segundo_apellido' => 'Martinez',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'22' => array (
		'id' => '',
		'primer_nombre' => 'Adis',
		'segundo_nombre' => 'Adriana',
		'primer_apellido' => 'Suarez',
		'segundo_apellido' => 'Vertel',
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
