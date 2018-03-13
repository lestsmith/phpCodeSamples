<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
<title>PHP Logic</title>
</head>
<body>
<?php
$yes = true ; $no = false ;
$result = ( $no && $no ) ? 'True' : 'False' ;
	echo "No AND No returns $result <br> " ;

$result = ( $yes && $no ) ? 'True' : 'False' ;
	echo "Yes AND No returns $result <br> " ;

$result = ( $yes && $yes ) ? 'True' : 'False' ;
	echo "Yes AND Yes returns $result <hr> " ;

$result = ( $no || $no ) ? 'True' : 'False' ;
	echo "No OR No returns $result <br> " ;

$result = ( $yes || $no ) ? 'True' : 'False' ;
	echo "Yes OR No returns $result <br> " ;

$result = ( $yes || $yes ) ? 'True' : 'False' ;
	echo "Yes OR YES returns $result <br> " ;

$result = ( ! $yes ) ? 'True' : 'False' ;
	echo "Not Yes returns $result <br> " ;

echo "! $yes" ;
?>
</body>
</html>