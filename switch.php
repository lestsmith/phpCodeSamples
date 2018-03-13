<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
<title>PHP Switch</title>
</head>
<body>
<?php
$number = 2 ; $letter = "B" ;

switch($number)
{
	case 1: echo 'Number is One<br>' ; break ;
	case 2: echo 'Number is Two<br>' ; break ;
	case 2: echo 'Number is Three<br>' ; break ;
	default : echo 'Number is unrecognised<br>' ; break ;
}

switch ( $letter )
{
	case 'A' : echo 'Letter is A<br>' ; break ;
	case 'B' : echo 'Letter is B<br>' ; break ;
	case "C" : echo 'Letter is C<br>' ; break ;
	default : echo 'Letter is unrecognised<br>' ;
}

switch ($number) {
	case 0: case 1: case 2: echo 'Less than 3<br>' ; break ;
	
	default:
		echo '3 or more or less than zero' ;
		break;
}

?>
</body>
</html>