<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
<title>PHP Insert</title>
</head>
<body>
<?php
require ('../connect_db.php');

function show_records( $dbc)
{
	$q = 'select * from prints';
	$r = mysqli_query($dbc, $q);
	if ($r)
	{
		echo '<h1>Records in prints table</h1>';
		while($row = mysqli_fetch_array ($r, MYSQLI_ASSOC))
		{
			echo '<br>' . $row['id'] . '|' . $row['name'] . ' @ ' . $row['price'];
		}
	} 
	else {echo '<p>' . mysqli_error($dbc) . '</p>';}
}

show_records($dbc);

$q = 'insert into prints(name, price)
		values ("One Center TEST", 32.99), ("Yellow Red Blue TEST", 36.99)';

$r = mysqli_query($dbc, $q);

if($r)
{
	show_records($dbc);
} else
{
	echo '<p>' . mysqli_error($dbc) . '</p>' ;
}		

mysqli_close($dbc);
?>
</body>
</html>