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
if ( !empty( $name ) && !empty( $order_id ) ) {
	$name = $_POST[ 'name' ];
	$order_id = $_POST[ 'order_id' ];

	$sql = "SELECT * from new_order where order_id=$order_id AND customer_name='$name'";
	$result = mysqli_query( $conn, $sql );

	if ( mysqli_num_rows( $result ) > 0 ) {
		$sql = "DELETE from new_order where order_id=$order_id AND customer_name='$name'";

		if ( mysqli_query( $conn, $sql ) ) {
			echo "<h1>Order Cancelled successfully, refund has been Initiated (minus 10% Cancellation charges)</h1>";
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
	<title>Order Cancellation</title>
</head>

<body style="background-color: #EDA086; color: brown"></body>
</html>