<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
<title>PHP Securing Input</title>
</head>
<body>
<form action="secure.php" method="POST">
<p>New Name: <input type="text" name="name">
	<input type="submit"></p></form>
<?php
require("../connect_db.php");
$q = 'select  * from towels where id = 1';
$r = mysqli_query($dbc, $q);

while($row = mysqli_fetch_array($r, MYSQLI_NUM))
{
	echo "<p>Name:  $row[1] </p>";
}

if(!empty($_POST['name']) && !is_numeric($_POST['name']))
{
	$name = $_POST['name'];


	$name = mysqli_real_escape_string($dbc, $name);
	$name = strip_tags($name);

	$q = 'update towels set name = "' .$name. '" where id = 1' ;
	mysqli_query($dbc, $q);
}
else
{
	echo 'no valid new name submitted';
}

mysqli_close($dbc);
?>
</body>
</html>