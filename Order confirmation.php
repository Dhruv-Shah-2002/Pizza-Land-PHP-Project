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
	$payment = $_POST[ 'Payment' ];

	if (!empty($pizza) && !empty($size)  && !empty($side)  && !empty($name) && !empty($phone) && !empty($L1) && !empty($L2) && !empty($Landmark) && !empty($code) && !empty($extra) && !empty($payment)) {
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
	$sql = "INSERT INTO new_order (customer_name, phone_number, address_l1, address_l2, landmark, pin_code, pizza, size, side, extra, price)
VALUES ('$name', '$phone', '$L1', '$L2', '$Landmark', '$code', '$pizza', '$size', '$side', '$extra', $total_price)";
	if ( mysqli_query( $conn, $sql ) ) {
		echo "<h1>Your Order is placed Successfully using, ". $payment ."</h1>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error( $conn );
	}
	$sql = "SELECT order_id from new_order where customer_name='$name'";
	$result = mysqli_query( $conn, $sql );

	if ( mysqli_num_rows( $result ) > 0 ) {
		while ( $row = mysqli_fetch_assoc( $result ) ) {
			$Order_id = $row[ "order_id" ];
		}
	}
	echo "<h1>Your Order id is : " . $Order_id . "</h1><br>
	<h1>Kindly note this carefully for future Reference.</h1>";


	} else {
		echo "<h1>Kindly enter valid values</h1>";
	}
	mysqli_close( $conn );
?>
<html>
	<head>
		<title>Order Confirmation</title>
	</head>
	<body style="background-color: #EDA086; color: brown"></body>
</html>