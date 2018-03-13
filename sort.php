<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
<title>PHP Sorting Arrays</title>
</head>
<body>
<?php
$cars = array( 'Dodge' => 'Viper', 'Chevrolet' => 'Camero', 'Ford' => 'Mustang');

echo '<dl><dt>Original Element Order: <dd>' ;
foreach( $cars as $key => $value)
	{echo ' &bull; ', $key . ' ' . $value ;}

asort ($cars) ;

echo '<dt>Sorted into Element Order: <dd>' ;
foreach( $cars as $key => $value)
	{echo ' &bull; ', $key . ' ' . $value ;}

ksort($cars);

echo '<dt>Sorted into Key Order: <dd>' ;
foreach( $cars as $key => $value)
	{echo ' &bull; ', $key . ' ' . $value ;}

echo '</dl>' ;
?>
</body>
</html>