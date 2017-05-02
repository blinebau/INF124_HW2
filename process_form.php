<?php
//UCI Informatics 124/Cs 137 - Assignment 2 Spring 2017
//Students: Mike Duong 69881873 & Bryan Linebaugh 49831189
require_once "pdo.php";

try {
	//$sql = "INSERT INTO orders (FirstName, LastName, Address, ZipCode, City, State, PhoneNumber, Email, CreditCard, Quantity, ShippingMethod)
	//		VALUES ('$_POST[firstName]', '$_POST[lastName]', '$_POST[address]', '$_POST[zip]', '$_POST[city]', '$_POST[state]', '$_POST[phone]', '$_POST[email]', '$_POST[card]', '$_POST[quantity]', '$_POST[shipping]')";
	$stmt = $pdo->prepare("INSERT INTO orders (ID, FirstName, LastName, Address, ZipCode, City, State, PhoneNumber, Email, CreditCard, Quantity, ShippingMethod)
			VALUES (UUID_SHORT(), :firstName, :lastName, :address, :zip, :city, :state, :phone, :email, :creditCard, :quantity, :shippingMethod)");
	
	$stmt->bindParam(':firstName', $firstName);
	$stmt->bindParam(':lastName', $lastName);
	$stmt->bindParam(':address', $address);
	$stmt->bindParam(':zip', $zip);
	$stmt->bindParam(':city', $city);
	$stmt->bindParam(':state', $state);
	$stmt->bindParam(':phone', $phone);
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':creditCard', $creditCard);
	$stmt->bindParam(':quantity', $quantity);
	$stmt->bindParam(':shippingMethod', $shippingMethod);
	
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$address = $_POST['address'];
	$zip = $_POST['zip'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$creditCard = $_POST['card'];
	$quantity = $_POST['quantity'];
	$shippingMethod = $_POST['shipping'];
	
	$stmt->execute();
	//$pdo->exec($sql);
	
	//echo "New record created successfully";
	}
catch(PDOException $e)
	{
		echo $sql . "<br>" . $e->getMessage();
	} 
	
$pdo = null;
?>

<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Fauna+One|Playfair+Display" rel="stylesheet">
		<script src="https://use.fontawesome.com/18b81bd185.js"></script>
	</head>
	
	<body>
		<header>
			<h1>Weaves & Crafts</h1>
			<nav id="nav-bar">
				<ul id="nav-links">
					<li><a href="index.php">Home</a></li>
					<li><a href="product.php">Products</a></li>
					<li><a href="company.html">Company</a></li>
					<li><a href="about.html">About Us</a></li>
				</ul>
			</nav>
		</header>
		<main>
			<div class="wrap">
				<div class="content-top">
					<div class="content-top-text">
						<h3>
							Thank You
						</h3>
							<p>
								Thank you for shopping at Weaves & Crafts. We hope to see you again soon!
							</p>
						<h3>
							Order Details
						</h3>
						<div class="orderDetails">
							<p>
								<label>First Name:</label><label style="text-align:right"><?php echo "$firstName"; ?></label>
							</p>
							<p>
								<label>Last Name:</label> <label style="text-align:right"><?php echo "$lastName"; ?></label>
							</p>
							<p>
								<label>Address:</label> <label style="text-align:right"><?php echo "$address"; ?></label>
							</p>
							<p>
								<label>Zip Code:</label> <label style="text-align:right"><?php echo "$zip"; ?></label>
							</p>
							<p>
								<label>City:</label> <label style="text-align:right"><?php echo "$city"; ?></label>
							</p>
							<p>
								<label>State:</label> <label style="text-align:right"><?php echo "$state"; ?></label>
							</p>
							<p>
								<label>Phone Number:</label> <label style="text-align:right"><?php echo "$phone"; ?></label>
							</p>
							<p>
								<label>Email:</label> <label style="text-align:right"><?php echo "$email"; ?></label>
							</p>
							<p>
								<label>Credit Card:</label> <label style="text-align:right"><?php echo "$creditCard"; ?></label>
							</p>
							<p>
								<label>Quantity:</label> <label style="text-align:right"><?php echo "$quantity"; ?></label>
							</p>
							<p>
								<label>Shipping Method:</label> <label style="text-align:right"><?php echo "$shippingMethod"; ?></label>
							</p>
						</div>
					</div>
				</div>
			</div>
		</main>
		<footer>
			<div id="copyright">© 2017 Weaves & Crafts, INC. Some rights reserved.</div>
			<div id="social-info">
				Connect with us: 
				<i class="fa fa-facebook-square" aria-hidden="true"></i>
				<i class="fa fa-twitter-square" aria-hidden="true"></i>
				<i class="fa fa-instagram" aria-hidden="true"></i>
			</div>
		</footer>
	</body>
</html>