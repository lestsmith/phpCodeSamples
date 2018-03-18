<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
<meta name="description" content="">
<meta name="keywords" content="">
<title>Getting Started with PHP</title>
</head>
<body>
<?php
	$page_title = "Register";
	include('includes/header.html');

	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		require('../connect_db.php');
		$errors = array();

	if (empty($_POST['first_name']))
	{
		$errors[] = 'Enter your first name.';
	} 
	else
	{
		$fn = mysqli_real_escape_string($dbc, trim($_POST['first_name']));
	}

	if (empty($_POST['last_name']))
	{
		$errors[] = 'Enter your last name.';
	} 
	else
	{
		$ln = mysqli_real_escape_string($dbc, trim($_POST['last_name']));
	}

	if (empty($_POST['email']))
	{
		$errors[] = 'Enter your email address.';
	} 
	else
	{
		$e = mysqli_real_escape_string($dbc, trim($_POST['email']));
	}

	if (!empty($_POST['pass1']))
	{
		if ($_POST['pass1'] != $_POST['pass2'])
		{
			$errors[] = 'Passwords do not match';
		}
		else
		{
			$p = mysqli_real_escape_string($dbc, trim($_POST['pass1']));
		}
	}
	else
	{
		$errors[] = 'Enter your password';
	}

	if(empty($errors))
	{
		$q = "select user_id from users where email = '$e'";
		$r = mysqli_query($dbc, $q);
		if(mysqli_num_rows($r) != 0)
		{
			$errors[] = 'Email address already registered. <a href="login.php">Login</a>';
		}
	}

	if(empty($errors))
	{
		$q = "insert into users
				(first_name, last_name, email, passwd, reg_date)
				values('$fn', '$ln', '$e', sha1('$p'), now())";
		$r = mysqli_query($dbc, $q);

		if ($r)
		{
			echo '<h1>Registered!</hr>
				<p>You are now registered.</p>
				<p><a href="login.php">Login</a></p>';
		}
		else
		{
			echo 'DB Error on insert';
		}

		mysqli_close($dbc);
		include('includes/footer.html');
		exit();
	}
	else
	{
		echo '<h1>Error!</h1>
		<p id="err_msg">The following error(s) occurred:<br>';
		foreach($errors as $msg)
		{
			echo " - $msg<br>";
		}
		echo 'Please try again.</p>';
		mysqli_close($dbc);
	}
}
?>

<h1>Register</h1>
<form action="register.php" method = "POST">
<p>
First Name: <input type="text" name="first_name"
	value="<?PHP if (isset($_POST['first_name']))
			echo $_POST['first_name']; ?>"</p>
<p>
Last Name: <input type="text" name="last_name"
	value="<?PHP if (isset($_POST['last_name']))
			echo $_POST['last_name']; ?>"</p>
<p>
Email Address: <input type="text" name="email"
	value="<?PHP if (isset($_POST['email']))
			echo $_POST['email']; ?>"</p>

<p>
Password: <input type="text" name="pass1"
	value="<?PHP if (isset($_POST['pass1']))
			echo $_POST['pass1']; ?>"</p>

<p>
Confirm Password: <input type="text" name="pass2"
	value="<?PHP if (isset($_POST['pass2']))
			echo $_POST['pass2']; ?>"</p>

<p>
<input type="submit" value="Register"></p>
</form>

<?PHP
include ('includes/footer.html');
?>
</body>
</html>