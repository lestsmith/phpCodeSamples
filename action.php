<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
<title>PHP forms</title>
</head>
<body>

	<form action="action_handler.php" method="POST">
		<dl>
			<dt>Name:
				<dd><input type="text" name="name">
			<dt>Email Address:
				<dd><input type="text" name="mail">
			<dt>Comments:
				<dd><textarea rows="5" cols="20" name="comments">
				</textarea>
			</dl>
			<p><input type="submit"> </p>
		</form>

</body>
</html>