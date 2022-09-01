<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "DHRUV_2002";
	$dbname = "pizza_land";

	$name = $_POST[ 'name' ];
	$order_id = $_POST[ 'order_id' ];
	$conn = mysqli_connect( $servername, $username, $password, $dbname );

	if ( !$conn ) {
		die( "Connection failed: " . mysqli_connect_error() );
	}
	if (!empty($name) && !empty($order_id)) {
	$name = $_POST[ 'name' ];
	$order_id = $_POST[ 'order_id' ];
	$sql = "SELECT customer_name, phone_number, address_l1, address_l2, landmark, pin_code, pizza, size, side, extra, price from new_order where order_id=$order_id AND customer_name='$name'";
	$result = mysqli_query( $conn, $sql );

	if ( mysqli_query( $conn, $sql ) ) {} else {
		echo "Error: " . $sql . "<br>" . mysqli_error( $conn );
	}

	if ( mysqli_num_rows( $result ) > 0 ) {
		while ( $row = mysqli_fetch_assoc( $result ) ) {
			echo "<h1>This is your order.</h1>";

	echo "<table border=\"1\" cellpadding=\"5\">";
		echo "<tr>";
			echo "<th>Customer Name</th>";
			echo "<th>Phone Number</th>";
			echo "<th>Address Line 1</th>";
			echo "<th>Address Line 2</th>";
			echo "<th>Landmark</th>";
			echo "<th>Pin Code</th>";
			echo "<th>Pizza</th>";
			echo "<th>Size</th>";
			echo "<th>Side</th>";
			echo "<th>Instructions</th>";
			echo "<th>Price Amount</th>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>" . $row[ "customer_name" ] . "</td>";
			echo "<td>" . $row[ "phone_number" ] . "</td>";
			echo "<td>" . $row[ "address_l1" ] . "</td>";
			echo "<td>" . $row[ "address_l2" ] . "</td>";
			echo "<td>" . $row[ "landmark" ] . "</td>";
			echo "<td>" . $row[ "pin_code" ] . "</td>";
			echo "<td>" . $row[ "pizza" ] . "</td>";
			echo "<td>" . $row[ "size" ] . "</td>";
			echo "<td>" . $row[ "side" ] . "</td>";
			echo "<td>" . $row[ "extra" ] . "</td>";
			echo "<td>" . $row[ "price" ] . "</td>";
		echo "</tr>";
	echo "</table>";
		}
	} else {
		echo "<h1>No order found</h1>";
	}

	} else {
		echo "<h1>Kindly enter valid values</h1>";
	}
	mysqli_close( $conn );
?>
<html>
	<head>
		<title>Order Details</title>
	</head>
	<body style="background-color: #EDA086; color: brown"></body>
</html>