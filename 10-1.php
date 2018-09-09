<?php

require 'conexion.php';

$estudiantes = array(

	'0' => array (
		'id' => '',
		'primer_nombre' => 'Leidy',
		'segundo_nombre' => 'Sofia',
		'primer_apellido' => 'Anaya',
		'segundo_apellido' => 'De Hoyos',
		'id_grado' => '5',
		'id_grupo' => '1'
	),

	'1' => array (
		'id' => '',
		'primer_nombre' => 'Felipe',
		'segundo_nombre' => 'Daniel',
		'primer_apellido' => 'Arroyo',
		'segundo_apellido' => 'Camacho',
		'id_grado' => '5',
		'id_grupo' => '1'
	),

	'2' => array (
		'id' => '',
		'primer_nombre' => 'Maria',
		'segundo_nombre' => 'Alejandra',
		'primer_apellido' => 'Cogollo',
		'segundo_apellido' => 'Quintero',
		'id_grado' => '5',
		'id_grupo' => '1'
	),

	'3' => array (
		'id' => '',
		'primer_nombre' => 'Yerlis',
		'segundo_nombre' => '',
		'primer_apellido' => 'Estrada',
		'segundo_apellido' => 'Mendez',
		'id_grado' => '5',
		'id_grupo' => '1'
	),

	'4' => array (
		'id' => '',
		'primer_nombre' => 'Jhoiner',
		'segundo_nombre' => 'David',
		'primer_apellido' => 'Fernandez',
		'segundo_apellido' => 'Arteaga',
		'id_grado' => '5',
		'id_grupo' => '1'
	),

	'5' => array (
		'id' => '',
		'primer_nombre' => 'Maria',
		'segundo_nombre' => 'Andrea',
		'primer_apellido' => 'Galvis',
		'segundo_apellido' => 'llorente',
		'id_grado' => '5',
		'id_grupo' => '1'
	),

	'6' => array (
		'id' => '',
		'primer_nombre' => 'Maria',
		'segundo_nombre' => 'Camila',
		'primer_apellido' => 'Julio',
		'segundo_apellido' => 'Salgado',
		'id_grado' => '5',
		'id_grupo' => '1'
	),

	'7' => array (
		'id' => '',
		'primer_nombre' => 'Luis',
		'segundo_nombre' => 'Manuel',
		'primer_apellido' => 'Mogrovejo',
		'segundo_apellido' => 'Padilla',
		'id_grado' => '5',
		'id_grupo' => '1'
	),

	'8' => array (
		'id' => '',
		'primer_nombre' => 'Duvan',
		'segundo_nombre' => 'Andres',
		'primer_apellido' => 'Negrete',
		'segundo_apellido' => 'Lozano',
		'id_grado' => '5',
		'id_grupo' => '1'
	),

	'9' => array (
		'id' => '',
		'primer_nombre' => 'Meranis',
		'segundo_nombre' => 'Sandrith',
		'primer_apellido' => 'Ospino',
		'segundo_apellido' => 'Castillo',
		'id_grado' => '5',
		'id_grupo' => '1'
	),

	'10' => array (
		'id' => '',
		'primer_nombre' => 'Marisol',
		'segundo_nombre' => '',
		'primer_apellido' => 'Ospino',
		'segundo_apellido' => 'Peña',
		'id_grado' => '5',
		'id_grupo' => '1'
	),

	'11' => array (
		'id' => '',
		'primer_nombre' => 'Yeris',
		'segundo_nombre' => 'Marcela',
		'primer_apellido' => 'Payares',
		'segundo_apellido' => 'Jimenez',
		'id_grado' => '5',
		'id_grupo' => '1'
	),

	'12' => array (
		'id' => '',
		'primer_nombre' => 'Diana',
		'segundo_nombre' => 'Sofia',
		'primer_apellido' => 'Payares',
		'segundo_apellido' => 'Lopez',
		'id_grado' => '5',
		'id_grupo' => '1'
	),

	'13' => array (
		'id' => '',
		'primer_nombre' => 'Juan',
		'segundo_nombre' => 'Pedro',
		'primer_apellido' => 'Perez',
		'segundo_apellido' => 'Payares',
		'id_grado' => '5',
		'id_grupo' => '1'
	),

	'14' => array (
		'id' => '',
		'primer_nombre' => 'Melisa',
		'segundo_nombre' => 'Vanessa',
		'primer_apellido' => 'Plaza',
		'segundo_apellido' => 'Hernandez',
		'id_grado' => '5',
		'id_grupo' => '1'
	),

	'15' => array (
		'id' => '',
		'primer_nombre' => 'Jairo',
		'segundo_nombre' => 'Enrique',
		'primer_apellido' => 'Romero',
		'segundo_apellido' => 'Payares',
		'id_grado' => '1',
		'id_grupo' => '1'
	),

	'16' => array (
		'id' => '',
		'primer_nombre' => 'Delsy',
		'segundo_nombre' => 'Liliana',
		'primer_apellido' => 'Tano',
		'segundo_apellido' => 'Cogollo',
		'id_grado' => '5',
		'id_grupo' => '1'
	),

	'17' => array (
		'id' => '',
		'primer_nombre' => 'Juan',
		'segundo_nombre' => 'David',
		'primer_apellido' => 'Varon',
		'segundo_apellido' => 'Romero',
		'id_grado' => '5',
		'id_grupo' => '1'
	),

	'18' => array (
		'id' => '',
		'primer_nombre' => 'Charlis',
		'segundo_nombre' => '',
		'primer_apellido' => 'Vega',
		'segundo_apellido' => 'Hernandez',
		'id_grado' => '5',
		'id_grupo' => '1'
	),

	'19' => array (
		'id' => '',
		'primer_nombre' => 'Karolina',
		'segundo_nombre' => '',
		'primer_apellido' => 'Vega',
		'segundo_apellido' => 'Hernandez',
		'id_grado' => '5',
		'id_grupo' => '1'
	),

	'20' => array (
		'id' => '',
		'primer_nombre' => 'Victor',
		'segundo_nombre' => 'Miguel',
		'primer_apellido' => 'Velasquez',
		'segundo_apellido' => 'Arteaga',
		'id_grado' => '5',
		'id_grupo' => '1'
	)
	
);


?>
