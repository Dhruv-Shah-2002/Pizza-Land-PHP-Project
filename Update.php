<?php

$servername = "localhost";
$username = "root";
$password = "DHRUV_2002";
$dbname = "pizza_land";


$conn = mysqli_connect( $servername, $username, $password, $dbname );

if ( !$conn ) {
	die( "Connection failed: " . mysqli_connect_error() );
}

$pizza = $_POST[ 'Pizza' ];
$size = $_POST[ 'Size' ];
$side = $_POST[ 'Side' ];
$name = $_POST[ 'name' ];
$phone = $_POST[ 'phone' ];
$L1 = $_POST[ 'L1' ];
$L2 = $_POST[ 'L2' ];
$Landmark = $_POST[ 'Landmark' ];
$code = $_POST[ 'code' ];
$extra = $_POST[ 'extra' ];
$order_id = $_POST[ 'order_id' ];

if ( !empty( $pizza ) && !empty( $size ) && !empty( $side ) && !empty( $name ) && !empty( $phone ) && !empty( $L1 ) && !empty( $L2 ) && !empty( $Landmark ) && !empty( $code ) && !empty( $extra ) ) {
	$sql = "SELECT price from pizzas where pizza='$pizza'";
	$result = mysqli_query( $conn, $sql );

	if ( mysqli_query( $conn, $sql ) ) {} else {
		echo "Error: " . $sql . "<br>" . mysqli_error( $conn );
	}

	if ( mysqli_num_rows( $result ) > 0 ) {
		while ( $row = mysqli_fetch_assoc( $result ) ) {
			if ( $size == "Medium" ) {
				$price = 2 * $row[ "price" ];
			} elseif ( $size == "Large" ) {
				$price = 3 * $row[ "price" ];
			} else {
				$price = $row[ "price" ];
			}
		}
	} else {
		echo "0 results";
	}

	$sql = "SELECT price from sides where side='$side'";
	$result = mysqli_query( $conn, $sql );

	if ( mysqli_num_rows( $result ) > 0 ) {
		while ( $row = mysqli_fetch_assoc( $result ) ) {
			$Side_price = $row[ "price" ];
		}
	} else {
		echo "0 results";
	}

	$total_price = $price + $Side_price;

	$sql = "SELECT * from new_order where order_id=$order_id AND customer_name='$name'";
	$result = mysqli_query( $conn, $sql );

	if ( mysqli_num_rows( $result ) > 0 ) {

		$sql = "UPDATE new_order SET customer_name = '$name', phone_number = '$phone', address_l1 = '$L1', address_l2 = '$L2', landmark = '$Landmark', pin_code = '$code', pizza = '$pizza', size = '$size', side = '$side', extra = '$extra', price = $total_price WHERE order_id = $order_id AND customer_name='$name'";
		if ( mysqli_query( $conn, $sql ) ) {
			echo "<h1>Your Order is updated</h1>";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error( $conn );
		}
	} else {
		echo "<h1>No Such Order found</h1>";
	}
} else {
	echo "<h1>Kindly enter valid values</h1>";
}
mysqli_close( $conn );
?>
<html>
<head>
	<title>Order Updation</title>
</head>

<body style="background-color: #EDA086; color: brown"></body>
</html>