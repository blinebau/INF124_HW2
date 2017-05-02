
<?php
//UCI Informatics 124/Cs 137 - Assignment 2 Spring 2017
//Students: Mike Duong 69881873 & Bryan Linebaugh 49831189
require_once "pdo.php";

?>

<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Fauna+One|Playfair+Display" rel="stylesheet">
		<script src="https://use.fontawesome.com/18b81bd185.js"></script>
		<script>
			function validateForm() {
				var regex = /[a-zA-Z]{2,30}$/;
				var firstName = document.forms["billingForm"]["firstName"].value;
				if (!regex.test(firstName)) {
					alert("Valid First name must be filled out");
					return false;
				}
				
				var lastName = document.forms["billingForm"]["lastName"].value;
				if (!regex.test(lastName)) {
					alert("Valid Last name must be filled out");
					return false;
				}
				
				//No regex for addresses since street format varies widely
				var address = document.forms["billingForm"]["address"].value;
				if (address == "") {
					alert("Valid Address must be filled out");
					return false;
				}
				
				regex = /^\d{5}$/;
				var zip = document.forms["billingForm"]["zip"].value;
				if (!regex.test(zip)) {
					alert("Valid Zip code must be filled out. 5 digits only.");
					return false;
				}
				
				var city = document.forms["billingForm"]["city"].value;
				if (city == "") {
					alert("Valid Address must be filled out");
					return false;
				}
				
				regex = /^\d{10}$/;
				var phone = document.forms["billingForm"]["phone"].value;
				if (!regex.test(phone)) {
					alert("Valid Phone must be filled out. 10 digits only.");
					return false;
				}
				
				regex = /\w+@\w+[.][a-z]{3}$/;
				var email = document.forms["billingForm"]["email"].value;
				if (!regex.test(email)) {
					alert("Valid Email must be filled out");
					return false;
				}
				
				regex = /^\d{16}$/;
				var card = document.forms["billingForm"]["card"].value;
				if (!regex.test(card)) {
					alert("Valid Credit card must be filled out. 16 digits only.");
					return false;
				}
				
				regex = /^[1-9][0-9]*$/;
				var quantity = document.forms["billingForm"]["quantity"].value;
				if (!regex.test(quantity)) {
					alert("Quantity must be filled out");
					return false;
				}
			}
			
			function billingOrder() {
				var modal = document.getElementById('billModal');

				var span = document.getElementsByClassName("close")[0];

				modal.style.display = "block";

				span.onclick = function() {
					modal.style.display = "none";
				}

				window.onclick = function(event) {
					if (event.target == modal) {
						modal.style.display = "none";
					}
				}
			}
			
			function findCity(str) {
				//if (str.length == 0) {
				//	document.getElementById("suggestCity").innerHTML = "";
				//	return;
				//}
				//else {
					var xmlhttp = new XMLHttpRequest();
					xmlhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
							//document.getElementById("suggestCity").innerHTML = this.responseText;
							document.getElementById("suggestCity").value = this.responseText;
						}
					};
					xmlhttp.open("GET", "suggestcity.php?q=" + str, true);
					xmlhttp.send();
				//}
			}
		</script>
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
				<div class="content-top-text">
					<h3>
						DESIGNER CLOTHING
					</h3>
					<p>
						These luxurious wardrobe staples are of the highest quality. Our collection of designer shirts and pants are only available online at Weaves & Crafts.
						You will surely find our glamorous and ground-breaking designs to be both breath-taking and en vogue. Revamp your dull look with some of the most industry
						leading labels around. Our design clothing are intimately woven by artisinal weavers using techniques dating back thousands of years. With skills passed
						down from generation to generation, these fine craftsmen have perfected the art of sewing.
					</p>
				</div>
				<div id="product1" class="detail-box">
					<h3>
						Printed T-Shirt
					</h3>
					<div class="big-pic-container">
						<img id="bigImage" class ="item-pic" src="images/shirt1-1.jpg">
					</div>
					<div class="item-description">
						<p>
							Red cotton blend using a special combination of polyester and wool. Printed text on the front that is inspired by randomly
							throwing words together.
							<br>
							<br>
							<b>Price</b>: $750
							<br>
							<br>
							<b>Product ID</b>: a1234
							<br>
							<b>Size</b>: One size fits all
							<br>
							<b>Composition</b>: Cotton 100%
							<br>
							<b>Washing Instructions</b>: Machine Wash
						</p>
					</div>
						<button onclick="billingOrder()">Order</button>
					<div class="preview-row">
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage').src='images/shirt1-1.jpg'" src="images/shirt1-1.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage').src='images/shirt1-2.jpg'" src="images/shirt1-2.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage').src='images/shirt1-3.jpg'" src="images/shirt1-3.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage').src='images/shirt1-4.jpg'" src="images/shirt1-4.jpg">
						</div>
					</div>
				</div>
				<br>
				<div id="product2" class="detail-box">
					<h3>
						Stressed Denim Shirt
					</h3>
					<div class="big-pic-container">
						<img id="bigImage2" class ="item-pic" src="images/shirt2-1.jpg">
					</div>
					<div class="item-description">
						<p>
							Blue cotton heavy threaded shirt with various distressed features. Other features include one pocket, torn cuffs, and
							a missing shoulder piece.
							<br>
							<br>
							<b>Price</b>: $900
							<br>
							<br>
							<b>Product ID</b>: b5678
							<br>
							<b>Size</b>: One size fits all
							<br>
							<b>Composition</b>: Cotton 100%
							<br>
							<b>Washing Instructions</b>: Machine Wash
						</p>
					</div>
						<button onclick="billingOrder()">Order</button>
					<div class="preview-row">
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage2').src='images/shirt2-1.jpg'" src="images/shirt2-1.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage2').src='images/shirt2-2.jpg'" src="images/shirt2-2.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage2').src='images/shirt2-3.jpg'" src="images/shirt2-3.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage2').src='images/shirt2-4.jpg'" src="images/shirt2-4.jpg">
						</div>
					</div>
				</div>
				<br>
				<div id="product3" class="detail-box">
					<h3>
						Plaid Shirt
					</h3>
					<div class="big-pic-container">
						<img id="bigImage3" class ="item-pic" src="images/shirt3-1.jpg">
					</div>
					<div class="item-description">
						<p>
							Hip-hop inspired plaid shirt made from 100% cotton blend. Buttons are made of ivory and fabrics are sewn together using
							special double thread technique.
							<br>
							<br>
							<b>Price</b>: $850
							<br>
							<br>
							<b>Product ID</b>: c9012
							<br>
							<b>Size</b>: One size fits all
							<br>
							<b>Composition</b>: Cotton 100%
							<br>
							<b>Washing Instructions</b>: Machine Wash
						</p>
					</div>
						<button onclick="billingOrder()">Order</button>
					<div class="preview-row">
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage3').src='images/shirt3-1.jpg'" src="images/shirt3-1.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage3').src='images/shirt3-2.jpg'" src="images/shirt3-2.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage3').src='images/shirt3-3.jpg'" src="images/shirt3-3.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage3').src='images/shirt3-4.jpg'" src="images/shirt3-4.jpg">
						</div>
					</div>
				</div>
				<br>
				<div id="product4" class="detail-box">
					<h3>
						Hooded Pullover
					</h3>
					<div class="big-pic-container">
						<img id="bigImage4" class ="item-pic" src="images/shirt4-1.jpg">
					</div>
					<div class="item-description">
						<p>
							Black cotton heavy fabric pullover sweater, which features a large hood with industrial grade ring tassels, blue stripe
							sleeve designs, and one pocket.
							<br>
							<br>
							<b>Price</b>: $1200
							<br>
							<br>
							<b>Product ID</b>: d3456
							<br>
							<b>Size</b>: One size fits all
							<br>
							<b>Composition</b>: Cotton 100%
							<br>
							<b>Washing Instructions</b>: Machine Wash
						</p>
					</div>
						<button onclick="billingOrder()">Order</button>
					<div class="preview-row">
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage4').src='images/shirt4-1.jpg'" src="images/shirt4-1.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage4').src='images/shirt4-2.jpg'" src="images/shirt4-2.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage4').src='images/shirt4-3.jpg'" src="images/shirt4-3.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage4').src='images/shirt4-4.jpg'" src="images/shirt4-4.jpg">
						</div>
					</div>
				</div>
				<br>
				<div id="product5" class="detail-box">
					<h3>
						Stressed Denim Jacket
					</h3>
					<div class="big-pic-container">
						<img id="bigImage5" class ="item-pic" src="images/shirt5-1.jpg">
					</div>
					<div class="item-description">
						<p>
							Dark denim distressed jacket made from various denim sewn together. Features industrial grade buttons and torn at the
							shoulders to reveal inner cotton fabrics.
							<br>
							<br>
							<b>Price</b>: $800
							<br>
							<br>
							<b>Product ID</b>: e7890
							<br>
							<b>Size</b>: One size fits all
							<br>
							<b>Composition</b>: Cotton 100%
							<br>
							<b>Washing Instructions</b>: Machine Wash
						</p>
					</div>
						<button onclick="billingOrder()">Order</button>
					<div class="preview-row">
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage5').src='images/shirt5-1.jpg'" src="images/shirt5-1.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage5').src='images/shirt5-2.jpg'" src="images/shirt5-2.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage5').src='images/shirt5-3.jpg'" src="images/shirt5-3.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage5').src='images/shirt5-4.jpg'" src="images/shirt5-4.jpg">
						</div>
					</div>
				</div>
				<br>
				<div id="product6" class="detail-box">
					<h3>
						Designer T-Shirt
					</h3>
					<div class="big-pic-container">
						<img id="bigImage6" class ="item-pic" src="images/shirt6-1.jpg">
					</div>
					<div class="item-description">
						<p>
							White cotton designer T-Shirt made from artisanal fabricaters. 100% organic with a unique blend of polyester and wool.
							<br>
							<br>
							<b>Price</b>: $750
							<br>
							<br>
							<b>Product ID</b>: f1234
							<br>
							<b>Size</b>: One size fits all
							<br>
							<b>Composition</b>: Cotton 100%
							<br>
							<b>Washing Instructions</b>: Machine Wash
						</p>
					</div>
						<button onclick="billingOrder()">Order</button>
					<div class="preview-row">
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage6').src='images/shirt6-1.jpg'" src="images/shirt6-1.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage6').src='images/shirt6-2.jpg'" src="images/shirt6-2.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage6').src='images/shirt6-3.jpg'" src="images/shirt6-3.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage6').src='images/shirt6-4.jpg'" src="images/shirt6-4.jpg">
						</div>
					</div>
				</div>
				<br>
				<div id="product7" class="detail-box">
					<h3>
						Chinos
					</h3>
					<div class="big-pic-container">
						<img id="bigImage7" class ="item-pic" src="images/pant1-1.jpg">
					</div>
					<div class="item-description">
						<p>
							White cotton blend slim fit chinos featuring a low waist, waistband with belt loops, two side pockets, and hem at the
							bottom.
							<br>
							<br>
							<b>Price</b>: $1100
							<br>
							<br>
							<b>Product ID</b>: g5678
							<br>
							<b>Size</b>: One size fits all
							<br>
							<b>Composition</b>: Cotton 100%
							<br>
							<b>Washing Instructions</b>: Machine Wash
						</p>
					</div>
						<button onclick="billingOrder()">Order</button>
					<div class="preview-row">
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage7').src='images/pant1-1.jpg'" src="images/pant1-1.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage7').src='images/pant1-2.jpg'" src="images/pant1-2.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage7').src='images/pant1-3.jpg'" src="images/pant1-3.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage7').src='images/pant1-4.jpg'" src="images/pant1-4.jpg">
						</div>
					</div>
				</div>
				<br>
				<div id="product8" class="detail-box">
					<h3>
						Stressed Denim Pants
					</h3>
					<div class="big-pic-container">
						<img id="bigImage8" class ="item-pic" src="images/pant2-1.jpg">
					</div>
					<div class="item-description">
						<p>
							Blue cotton distressed slim-fit jeans featuring stretchable fabrics, screen prints on the knees, a waistband with belt
							loops, a button & zipper combo, and rolled cutoffs.
							<br>
							<br>
							<b>Price</b>: $1300
							<br>
							<br>
							<b>Product ID</b>: h7890
							<br>
							<b>Size</b>: One size fits all
							<br>
							<b>Composition</b>: Cotton 100%
							<br>
							<b>Washing Instructions</b>: Machine Wash
						</p>
					</div>
						<button onclick="billingOrder()">Order</button>
					<div class="preview-row">
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage8').src='images/pant2-1.jpg'" src="images/pant2-1.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage8').src='images/pant2-2.jpg'" src="images/pant2-2.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage8').src='images/pant2-3.jpg'" src="images/pant2-3.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage8').src='images/pant2-4.jpg'" src="images/pant2-4.jpg">
						</div>
					</div>
				</div>
				<br>
				<div id="product9" class="detail-box">
					<h3>
						Skinny Jean Pants
					</h3>
					<div class="big-pic-container">
						<img id="bigImage9" class ="item-pic" src="images/pant3-1.jpg">
					</div>
					<div class="item-description">
						<p>
							Black cotton denim skinny leg jeans featuring stretchable fabrics, a waistband with belt loops, a button & zipper combo,
							a four pocket design, and rolled cutoffs.
							<br>
							<br>
							<b>Price</b>: $1200
							<br>
							<br>
							<b>Product ID</b>: h1234
							<br>
							<b>Size</b>: One size fits all
							<br>
							<b>Composition</b>: Cotton 100%
							<br>
							<b>Washing Instructions</b>: Machine Wash
						</p>
					</div>
						<button onclick="billingOrder()">Order</button>
					<div class="preview-row">
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage9').src='images/pant3-1.jpg'" src="images/pant3-1.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage9').src='images/pant3-2.jpg'" src="images/pant3-2.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage9').src='images/pant3-3.jpg'" src="images/pant3-3.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage9').src='images/pant3-4.jpg'" src="images/pant3-4.jpg">
						</div>
					</div>
				</div>
				<br>
				<div id="product10" class="detail-box">
					<h3>
						Designer Denim Pants
					</h3>
					<div class="big-pic-container">
						<img id="bigImage10" class ="item-pic" src="images/pant4-1.jpg">
					</div>
					<div class="item-description">
						<p>
							Blue cotton denim skinny leg jeans featuring stretchable fabrics, distressed design at the knees, yellow fabrics
							underneath, and rolled cutoffs.
							<br>
							<br>
							<b>Price</b>: $1300
							<br>
							<br>
							<b>Product ID</b>: i2345
							<br>
							<b>Size</b>: One size fits all
							<br>
							<b>Composition</b>: Cotton 100%
							<br>
							<b>Washing Instructions</b>: Machine Wash
						</p>
					</div>
						<button onclick="billingOrder()">Order</button>
					<div class="preview-row">
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage10').src='images/pant4-1.jpg'" src="images/pant4-1.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage10').src='images/pant4-2.jpg'" src="images/pant4-2.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage10').src='images/pant4-3.jpg'" src="images/pant4-3.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage10').src='images/pant4-4.jpg'" src="images/pant4-4.jpg">
						</div>
					</div>
				</div>
				<br>
				<div id="product11" class="detail-box">
					<h3>
						Denim Cutoff Pants
					</h3>
					<div class="big-pic-container">
						<img id="bigImage11" class ="item-pic" src="images/pant5-1.jpg">
					</div>
					<div class="item-description">
						<p>
							Blue cotton denim straight leg jeans featuring stretchable fabrics, yellow design pattern sewn down the side of the pants,
							a waistband with belt loops, and ripped cutoffs.
							<br>
							<br>
							<b>Price</b>: $1000
							<br>
							<br>
							<b>Product ID</b>: j4567
							<br>
							<b>Size</b>: One size fits all
							<br>
							<b>Composition</b>: Cotton 100%
							<br>
							<b>Washing Instructions</b>: Machine Wash
						</p>
					</div>
						<button onclick="billingOrder()">Order</button>
					<div class="preview-row">
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage11').src='images/pant5-1.jpg'" src="images/pant5-1.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage11').src='images/pant5-2.jpg'" src="images/pant5-2.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage11').src='images/pant5-3.jpg'" src="images/pant5-3.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage11').src='images/pant5-4.jpg'" src="images/pant5-4.jpg">
						</div>
					</div>
				</div>
				<br>
				<div id="product12" class="detail-box">
					<h3>
						Skinny Trouser Pants
					</h3>
					<div class="big-pic-container">
						<img id="bigImage12" class ="item-pic" src="images/pant6-1.jpg">
					</div>
					<div class="item-description">
						<p>
							Grey cotton straight leg pants. Made with a unique polyester and wool blend, which offers a comfortable and durable relax
							look. High ankle cutoff design.
							<br>
							<br>
							<b>Price</b>: $1150
							<br>
							<br>
							<b>Product ID</b>: k5678
							<br>
							<b>Size</b>: One size fits all
							<br>
							<b>Composition</b>: Cotton 100%
							<br>
							<b>Washing Instructions</b>: Machine Wash
						</p>
					</div>
						<button onclick="billingOrder()">Order</button>
					<div class="preview-row">
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage12').src='images/pant6-1.jpg'" src="images/pant6-1.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage12').src='images/pant6-2.jpg'" src="images/pant6-2.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage12').src='images/pant6-3.jpg'" src="images/pant6-3.jpg">
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage12').src='images/pant6-4.jpg'" src="images/pant6-4.jpg">
						</div>
					</div>
				</div>
				<br>
			</div>
		</main>
		<footer>
			<div id="copyright">� 2017 Weaves & Crafts, INC. Some rights reserved.</div>
			<div id="social-info">
				Connect with us: 
				<i class="fa fa-facebook-square" aria-hidden="true"></i>
				<i class="fa fa-twitter-square" aria-hidden="true"></i>
				<i class="fa fa-instagram" aria-hidden="true"></i>
			</div>
		</footer>

		<div id="billModal" class="modal">
			<div class="modal-content">
				<span class="close">&times;</span>
				<p>
					Order Form
				</p>
				<br>
				<div class="form-content">
					<form name="billingForm" action="process_form.php" onsubmit="return validateForm(this)" method="post">
						<p>
							<label>First Name:</label> <input type="text" name="firstName">
						</p>
						<br>
						<p>
							<label>Last Name:</label> <input type="text" name="lastName">
						</p>
						<br>
						<p>
							<label>Address:</label> <input type="text" name="address">
						</p>
						<br>
						<p>
							<label>Zip Code:</label> <input type="text" name="zip" onkeyup="findCity(this.value)">
						</p>
						<br>
						<p>
							<label>City:</label> <input type="text" name="city" id="suggestCity">
						</p>
						<br>
						<p>
							<label>State: </label>
							<select name="state">
								<option value="AL">Alabama</option>
								<option value="AK">Alaska</option>
								<option value="AZ">Arizona</option>
								<option value="AR">Arkansas</option>
								<option value="CA">California</option>
								<option value="CO">Colorado</option>
								<option value="CT">Connecticut</option>
								<option value="DE">Delaware</option>
								<option value="DC">District Of Columbia</option>
								<option value="FL">Florida</option>
								<option value="GA">Georgia</option>
								<option value="HI">Hawaii</option>
								<option value="ID">Idaho</option>
								<option value="IL">Illinois</option>
								<option value="IN">Indiana</option>
								<option value="IA">Iowa</option>
								<option value="KS">Kansas</option>
								<option value="KY">Kentucky</option>
								<option value="LA">Louisiana</option>
								<option value="ME">Maine</option>
								<option value="MD">Maryland</option>
								<option value="MA">Massachusetts</option>
								<option value="MI">Michigan</option>
								<option value="MN">Minnesota</option>
								<option value="MS">Mississippi</option>
								<option value="MO">Missouri</option>
								<option value="MT">Montana</option>
								<option value="NE">Nebraska</option>
								<option value="NV">Nevada</option>
								<option value="NH">New Hampshire</option>
								<option value="NJ">New Jersey</option>
								<option value="NM">New Mexico</option>
								<option value="NY">New York</option>
								<option value="NC">North Carolina</option>
								<option value="ND">North Dakota</option>
								<option value="OH">Ohio</option>
								<option value="OK">Oklahoma</option>
								<option value="OR">Oregon</option>
								<option value="PA">Pennsylvania</option>
								<option value="RI">Rhode Island</option>
								<option value="SC">South Carolina</option>
								<option value="SD">South Dakota</option>
								<option value="TN">Tennessee</option>
								<option value="TX">Texas</option>
								<option value="UT">Utah</option>
								<option value="VT">Vermont</option>
								<option value="VA">Virginia</option>
								<option value="WA">Washington</option>
								<option value="WV">West Virginia</option>
								<option value="WI">Wisconsin</option>
								<option value="WY">Wyoming</option>
							</select>				
						</p>
						<br>
						<p>
							<label>Phone Number:</label> <input type="text" name="phone">
						</p>
						<br>
						<p>
							<label>Email:</label> <input type="text" name="email">
						</p>
						<br>
						<p>
							<label>Credit Card:</label> <input type="text" name="card">
						</p>
						<br>
						<p>
							<label>Quantity:</label> <input type="text" name="quantity">
						</p>
						<br>
						<p>
							<label>Shipping Method:</label> 
							<select name="shipping">
								<option value="2 Day">2 Day</option>
								<option value="Overnight">Overnight</option>
								<option value="6 Day Ground">6 Day Ground</option>
							</select>
						</p>
						<br>
						<br>
						<div class="formButton">
							<input type="submit" value="Submit">
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>