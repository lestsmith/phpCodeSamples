<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
<title>Getting Started with PHP</title>
</head>
<body>
<?php
require ('../connect_db.php');
$q = 'show tables';
$r = mysqli_query($dbc, $q);
if($r)
	{echo '<h1>Result set returned ok';}
else
	{echo '<p>' . mysqli_error($dbc) . '</p>';}
mysqli_close($dbc);
?>
</body>
</html>