<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

		<?php

$telefonos = [
    "iPhone 13" => 999,
    "Samsung Galaxy S21" => 799,
    "Google Pixel 6" => 599,
    "OnePlus 9" => 729,
    "Xiaomi Mi 11" => 749,
];

print_r($telefonos);

array_push($telefonos, ["Motorola Edge" => 699, "Sony Xperia 5" => 899]);

asort($telefonos);

print_r($telefonos);

?>

</body>
</html>