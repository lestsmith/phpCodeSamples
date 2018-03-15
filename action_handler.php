<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
<title>PHP Actions</title>
</head>
<body>
<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$comments = $_POST['comments'];
echo "<p>Thanks for this comment $name ... </p>";
echo "<p><i>$comments</i></p>";
echo "<p>We will reply to $mail</p>";
?>
</body>
</html>