<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
<title>Getting Started with PHP</title>
</head>
<body>
<?php

	$number = array(10,20,30);
	
	echo '<dt>WhileLoop;';
	$i = 0;
	while($i < 3){
		echo "<dd>Element $i = $number[$i]";
		$i++;
	}

	echo '<dt>Do While Loop: ';
	$i = 0;
	do {
		echo "<dd>Element $i = $number[$i]";
		$i++;
	}
	while ($i < 3) ;

?>
</body>
</html>