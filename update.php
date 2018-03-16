<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
<title>Getting Started with PHP</title>
</head>
<body>
<?php
require('../connect_db.php');
function show_records($dbc)
{
	$q = 'select * from towels';
	$r = mysqli_query($dbc, $q);

	$num = mysqli_num_rows($r);

	if($num > 0)
	{
		echo '<h1>Records in towels table</h1>';

		while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
		{
			echo '<br>' . $row['name'] . "|" . $row['colour'] . ' @ ' . $row['price'] ; 
		}
		echo "<br> $num Records"; 
	}
	else
	{
		echo '<p>' . mysqli_error($dbc) . '</p>' ;
	}
}

show_records($dbc);

$q = 'update towels set name = "Tuna" where id = 1' ;
$r = mysqli_query($dbc, $q);

echo '<hr>' . 'Records updated ...' . mysqli_affected_rows($dbc) ;

if ($r)
{
	show_records($dbc);
}
else
{
	echo '<p>' . mysqli_error($dbc) . '</p>' ;
}

mysqli_close($dbc);

?>
</body>
</html>