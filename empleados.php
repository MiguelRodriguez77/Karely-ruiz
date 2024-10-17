<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$empleados = [
    ["nombre" => "Jose", "sueldo" => 1600],
    ["nombre" => "Alejandro", "sueldo" => 3000],
    ["nombre" => "Luis", "sueldo" => 1900],
    ["nombre" => "Maria", "sueldo" => 2100],
    ["nombre" => "Pancho", "sueldo" => 1700],
];

usort($empleados, function($a, $b) {
    return $a['sueldo'] <=> $b['sueldo'];
});

echo "Empleados ordenados por sueldo:\n";
foreach ($empleados as $empleado) {
    echo $empleado['nombre'] . ": $" . $empleado['sueldo'] . "\n";
}

array_push($empleados, ["nombre" => "Laura", "sueldo" => 2200]);
array_push($empleados, ["nombre" => "Carlos", "sueldo" => 1800]);

echo "\nEmpleados después de agregar a dos nuevos:\n";
foreach ($empleados as $empleado) {
    echo $empleado['nombre'] . ": $" . $empleado['sueldo'] . "\n";
}
?>

</body>
</html>