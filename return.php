<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
<title>PHP Returning Parameters From Functions</title>
</head>
<body>
<?php
	date_default_timezone_set('UTC');
	$user = ' Les';

	function display_date(){
		return date('l, jS F');
	}

	function welcome($user){
		$hour = date('H');
		switch ($hour)
		{
			case 1: case 2: case 3: case 4: case 5: case 6: case 7: case 8: case 9: case 10: case 11: case 12: $greeting = ' Good Morning '; break;
			
			case 13: case 14: case 15: case 16: case 17: $greeting = ' Good Afternoon '; break;

			case 18: case 19: case 20: case 21: case 22: case 23: $greeting = ' Good Evening '; break;

			default: $greeting = ' Hello ';
		}

		# $greeting = ($hour < 12) ? '<br> Good Morning' : '<br>Good Afternoon';

		$greeting .= $user;
		return $greeting;	
	}

	echo display_date();
	echo welcome($user);
?>
</body>
</html>