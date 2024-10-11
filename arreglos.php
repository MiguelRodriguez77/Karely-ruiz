<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

	$alumnos = [
    "Jose" => 8,
    "Maria" => 9,
    "Antonio" => 7,
    "Alejandro" => 10,
    "Luis" => 6,
];

foreach ($alumnos as $alumno => $calificacion) {
	echo "la calificacion de " . $alumno . " es " . $calificacion . "<br>";
}

asort($alumnos);

echo "<br>" . "Despues de ordenar: " . "<br>" . "<br>";


foreach ($alumnos as $alumno => $calificacion) {
	echo "la calificacion de " . $alumno . " es " . $calificacion . "<br>";
}

?>
</body>
</html>