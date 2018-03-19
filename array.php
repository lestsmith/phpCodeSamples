<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
<title>PHP Arrays</title>
</head>
<body>
<?php
$days = array('monday','tuesday','wednesday') ;
foreach ($days as $value) {
	echo "&bull; $value " ; 
}

$months = array('jan' => 'January', 'feb' => 'february', 'mar' => 'march') ;
echo '<dl>' ;
foreach($months as $key => $value ) { 
	echo "<dt>$key<dd>$value" ;
}
echo '</dl>' ;


$test = $months['jan'];

echo "<p>here > $test</p>";

?>
</body>
</html>