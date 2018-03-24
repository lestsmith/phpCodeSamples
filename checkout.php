<?PHP

	session_start();

	if(!isset($_SESSION['user_id']))
		{ require('loging_tools.php'); load();}

	$page_title = 'Checkout';
	include('includes/header.html');

	if(isset($_GET['total']) && ($_GET['total'] > 0) && (!empty($_SESSION['cart'])))
	{
		require('../connect_db.php');
		$q = "insert into orders(user_id, total, order_date)
				values(" . $_SESSION['user_id'] . "," . $_GET['total'] . ", now() )";
		$r = mysqli_query($dbc, $q);

		$order_id = mysqli_insert_id($dbc);

		$q = "select * from shop where item_id in (";
			foreach($_SESSION['cart'] as $id => $value)
				{$q .= $id . ',';}
		$q = substr($q, 0, -1) . ') order by item_id asc';
		$r = mysqli_query($dbc, $q);

		while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
		{
			$query = "insert into order_contents
				(order_id, item_id, quantity, price)
				values($order_id, " . $row['item_id'] . "," .
				$_SESSION['cart'][$row['item_id']]['quantity'] . "," .
				$_SESSION['cart'][$row['item_id']]['price'] . ")";
			$result = mysqli_query($dbc, $query);
		}

		mysqli_close($dbc);
		echo "<p>Thanks for your order. Your order number is #" . $order_id . "</p>";
		$_SESSION['cart'] = NULL;
	}
	else
		{echo '<p>There are no items in your cart</p>';}

	echo '<p><a href="shop.php">Shop</a> |
		<a href="forum.php">Forum</a> |
		<a href="home.php>"Home</a> |
		<a href="goodbye.php">Logout</a></p>';

	include('includes/footer.html');

?>