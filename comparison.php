<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
<title>PHP Comparison</title>
</head>
<body>
<?php
$zero = 0 ; $nil = 0 ; $one = 1 ; $upr = 'A' ; $lwr = 'a' ;

$result = ( $zero == $nil ) ? 'True' : 'False' ;
	echo "0==0 is $result <br> " ; 

$result = ( $zero == $one ) ? 'True' : 'False' ;
	echo "0==1 is $result <br> " ;

$result = ( $upr == $lwr ) ? 'True' : 'False' ;
	echo "A==a is $result <br> " ;

$result = ( $upr != $lwr ) ? 'True' : 'False' ;
	echo "A!=a is $result <hr> " ;

$result = ( $one > $nil ) ? 'True' : 'False' ;
	echo "1>0 is $result <br> " ;

$result = ( $zero >= $nil ) ? 'True' : 'False' ;
	echo "0>=0 is $result <br> " ;

$result = ( $one <= $nil ) ? 'True' : 'False' ;
	echo "1<=0 is $result <br> " ;
?>
</body>
</html>