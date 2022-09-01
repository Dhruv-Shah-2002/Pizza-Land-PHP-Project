<!doctype html>
<html>
<head>
	<title>Pizza Land</title>
	<link rel="stylesheet" href="stylesheet.css">
</head>

<body>
	<section class="heading">
		<h1>PIZZA LAND</h1>
	</section>
	<div class="menu">
		<ul>
			<li><a href="Home.html">Home</a>
			</li>
			<li><a href="Menu.html">Menu</a>
			</li>
			<li><a href="New Order.php">New Order</a>
			</li>
			<li><a href="View Order.php">View Order</a>
			</li>
			<li><a href="Delete order.php">Cancel Order</a>
			</li>
		</ul>
	</div>
	<br>
	<hr style="border: outset">
	<br>
	<div class="main">
		<div class="centered">
			<p class="Contentheading">Place an Order</p>
			<br>
			<p>
				Kindly input all the information and Click on <u>Calculate total</u>, to know the Total price of your Order.<br><br> Then return back, and Click on <u>Place Order</u> to confirm your Order.
			</p>
			<br>
			<hr><br>
			<form method="post">
				<table align="center">

					<tr class="form_table">
						<th>Name: </th>
						<td class="form_table"><input name="name" size="20">
						</td>
					</tr>

					<tr class="form_table">
						<th>Phone Number: </th>
						<td class="form_table"><input name="phone" size="20">
						</td>
					</tr>

					<tr class="form_table">
						<th style="font-size: 25px"><u>Address</u>:</th>
					</tr>

					<tr class="form_table">
						<th>First Line: </th>
						<td class="form_table"><input name="L1" size="30">
						</td>
					</tr>

					<tr class="form_table">
						<th>Second Line:</th>
						<td class="form_table"><input name="L2" size="30">
						</td>
					</tr>

					<tr class="form_table">
						<th>Landmark: </th>
						<td class="form_table"><input name="Landmark" size="20">
						</td>
					</tr>

					<tr class="form_table">
						<th>Pin Code: </th>
						<td class="form_table"><input name="code" size="12">
						</td>
					</tr>

					<tr class="form_table">
						<th><u>Select a Pizza:</u>
						</th>
						<td class="form_table">
							<select name="Pizza" id="Pizza">
								<option value="">Choose a Pizza</option>
								<option value="Margherita">Margherita | Rs.100</option>
								<option value="Farm House">Farm House | Rs.200</option>
								<option value="Peppy Paneer">Peppy Paneer | Rs.200</option>
								<option value="Mexican Wave">Mexican Wave | Rs.250</option>
								<option value="Deluxe Veggie">Deluxe Veggie | Rs.150</option>
								<option value="Veg Extravaganza">Veg Extravaganza | Rs.200</option>
								<option value="CHEESE N CORN">CHEESE N CORN | Rs.150</option>
								<option value="Veggie Paradise">Veggie Paradise | Rs.300</option>
								<option value="FRESH VEGGIE">FRESH VEGGIE | Rs.250</option>
								<option value="Tandoori Paneer">Tandoori Paneer | Rs.300</option>
							</select>
						</td>
					</tr>

					<tr class="form_table">
						<th><u>Select Size:</u>
						</th>
						<td class="form_table">
							<select name="Size" id="Size">
								<option value="">Choose a Size</option>
								<option value="Small">Small</option>
								<option value="Medium">Medium (Double price)</option>
								<option value="Large">Large (Triple price)</option>
							</select>
						</td>
					</tr>

					<tr class="form_table">
						<th><u>Select any of the Sides:</u>
						</th>
						<td class="form_table">
							<select name="Side" id="Side">
								<option value="">Choose a Side Dish</option>
								<option value="None">None | Rs. 0</option>
								<option value="Garlic Bread Stix">Garlic Bread Stix | Rs. 50</option>
								<option value="Cheesy Momos">Cheesy Momos | Rs. 80</option>
								<option value="Jalapeno Poppers">Jalapeno Poppers | Rs. 70</option>
								<option value="Texas Garlic Dip">Texas Garlic Dip | Rs. 50</option>
								<option value="Choco Lava Cake">Choco Lava Cake | Rs. 80</option>
							</select>
						</td>
					</tr>

					<tr class="form_table">
						<th>Type any of your special requirements in this box :</th>
						<td class="form_table"><textarea rows="4" cols="25" maxlength="100" name="extra"> </textarea>
						</td>
					</tr>

					<tr class="form_table">
						<th>Payment Method:</th>
						<td class="form_table">
							<input type="radio" value="UPI" id="UPI" name="Payment">
							<label for="UPI">UPI</label><br>
							<input type="radio" value="Net Banking" id="Net Banking" name="Payment">
							<label for="Net Banking">Net Banking</label><br>
							<input type="radio" value="Debit/Credit Card" id="Card" name="Payment">
							<label for="Card">Debit/Credit Card</label><br>
							<input type="radio" value="Cash on Delivery" id="COD" name="Payment">
							<label for="COD">Cash on Delivery</label><br>
						</td>
					</tr>

					<tr align="center">
						<th class="form_table">
							<input type="reset" value="Clear">
						</th>
						<td class="form_table">
							<input type="Submit" value="Calculate Total" name="Calculate Total">

							<input type="Submit" value="Place Order" name="Place order" formaction="Order confirmation.php">
						</td>
					</tr>
				</table>
			</form>
			<br><br>
			<p class="Contentheading">Order Summary</p>
			<br>
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
			if ( !empty( $pizza ) && !empty( $size ) && !empty( $side ) ) {
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
				echo( "<p> <strong>Price of Your Pizza is:</strong> <u>" . $price . "</u></p>" );
				echo( "<p> <strong>Price of Your Side is: <u></strong>" . $Side_price . "</u></p><br>" );
				echo( "<p> <strong>Total Price of Your Order is:</strong> <u>" . $total_price . "</u></p>" );

				mysqli_close( $conn );
			} else {
				echo( "<p>Kindly enter all the values for calculating the Total.</p>" );
			}
			?>
			<br>
			<hr>
			<br>
			<p>
				To View or Update your order, kindly Click <a href="View order.php">here</a> or Go to the View Order Page from the Above Menu. &nbsp; &nbsp; &nbsp; &nbsp;<br>To Delete your order click <a href="Delete order.php">here</a> or Go the Delete order page from the Above Menu.
			</p>
			<br>
		</div>
	</div>
</body>
</html>