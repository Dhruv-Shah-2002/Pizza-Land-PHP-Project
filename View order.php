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
			<p class="Contentheading">View your Order</p>
			<br>
			<p>
				Kindly enter your Name and Order ID, that you have received after placing the Order.
			</p>
			<br>
			<hr><br>
			<form method="post" action="View.php">
				<table align="center">

					<tr class="form_table">
						<th>Name: </th>
						<td class="form_table"><input name="name" size="20">
						</td>
					</tr>

					<tr class="form_table">
						<th>Order ID: </th>
						<td class="form_table"><input name="order_id" size="20">
						</td>
					</tr>
					<tr align="center">
						<th class="form_table">
							<input type="reset" value="Clear">
						</th>
						<td class="form_table">
							<input type="Submit" value="View Details" name="View Details">
				</table>
			</form>
			<br><br>
			<p class="Contentheading">Update Order</p>
			<br>

			<p>
				Kindly enter the Correct Order ID and all the information that you wish to be Updated.<br><br> Repeat the information that you wish to stay the same.<br><br>
				<u>Note</u>: Kindly update any information, within 15 minutes of your Order time. Any update request for changes in <u>Food items</u> will not be accepted after prescribed time.
			</p><br>
			<hr><br>
			<form method="post" action="Update.php">
				<table align="center">

					<tr class="form_table">
						<th>Name: </th>
						<td class="form_table"><input name="name" size="20">
						</td>
					</tr>

					<tr class="form_table">
						<th>Order ID: </th>
						<td class="form_table"><input name="order_id" size="20">
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
						<td class="form_table"><textarea rows="4" cols="24" maxlength="100" name="extra"> </textarea>
						</td>
					</tr>

					<tr align="center">
						<th class="form_table">
							<input type="reset" value="Clear">
						</th>
						<td class="form_table">
							<input type="Submit" value="Update Order" name="Update order">
			</form>
			</td>
			</tr>
			</table>
			<br>
			<hr>
			<br>
			<p>
				To Place a New order, kindly Click <a href="New Order.php">here</a> or Go to the New Order Page from the Above Menu. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>To Cancel your order click <a href="Delete order.php">here</a> or Go to the Cancel order page from the Above Menu.
			</p>
			<br>
		</div>
	</div>
</body>
</html>