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
			<p class="Contentheading">Cancel your Order</p>
			<br>
			<p>
				Kindly enter your Name and Order ID, that you have received after placing the Order.<br><br> A 10% cancellation fee will be deducted from the paid Amount.<br> Rest of the Amount will be Refunded.
			</p>
			<br>
			<hr><br>
			<form method="post" action="Delete.php">
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
							<input type="Submit" value="Cancel Order" name="Cancel Order">
				</table>
			</form>
			<br>
			<br>
			<hr>
			<br>
			<p>
				To Place a New order, kindly Click <a href="New Order.php">here</a> or Go to the New Order Page from the Above Menu. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>To View or Update your order Click <a href="View order.php">here</a> or Go the View order page from the Above Menu.
			</p>
			<br>
		</div>
	</div>
</body>
</html>