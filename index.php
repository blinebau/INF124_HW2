
<?php
//UCI Informatics 124/Cs 137 - Assignment 2 Spring 2017
//Students: Mike Duong 69881873 & Bryan Linebaugh 49831189
require_once "pdo.php";

?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Fauna+One|Playfair+Display" rel="stylesheet">
		<script src="https://use.fontawesome.com/18b81bd185.js"></script>
	</head>
	
	<body>
		<header>
			<?php include 'header.php'; ?>
		</header>
		<main>
			<div class="wrap">
				<div class="content-top">
					<div class="content-top-text">
						<h2>
							The Definitive One Stop Shop For All Your Fashion Needs
						</h2>
						<p>
							By collaborating with artisanal weavers from all around the world, we bring the best designer clothing here at Weaves & Crafts.
							Find all the latest styles that stay in style regardless of the season. Shop for some of the most sought after designer clothing
							and give your wardrobe a makeover. Pick something striking from our large catalog below, you are bound to find something stylish
							for your next outing.
						</p>
					</div>
				<div class="bar"></div>
				<br>
				</div>
				<div class="item-box">
					<div class="item-row1">
						<div class="item-individual">
							<h4>Printed T-Shirt</h4>
							<div class="item-image-container">
								<a href="product.php#product1">
									<img class ="item-pic" src="images/shirt1-1.jpg">
								</a>
							</div>
							<p>
								Price: $750
							</p>
						</div>
						<div class="item-individual">
							<h4>Stressed Denim Shirt</h4>
							<div class="item-image-container">
								<a href="product.php#product2">
									<img class ="item-pic" src="images/shirt2-1.jpg">
								</a>
							</div>
							<p>
								Price: $900
							</p>
						</div>
						<div class="item-individual">
							<h4>Plaid Shirt</h4>
							<div class="item-image-container">
								<a href="product.php#product3">
									<img class ="item-pic" src="images/shirt3-1.jpg">
								</a>
							</div>
							<p>
								Price: $850
							</p>
						</div>
						<div class="item-individual">
							<h4>Hooded Pullover</h4>
							<div class="item-image-container">
								<a href="product.php#product4">
									<img class ="item-pic" src="images/shirt4-1.jpg">
								</a>
							</div>
							<p>
								Price: $1200
							</p>
						</div>
					</div>
					<div class="item-row2">
						<div class="item-individual">
							<h4>Stressed Denim Jacket</h4>
							<div class="item-image-container">
								<a href="product.php#product5">
									<img class ="item-pic" src="images/shirt5-1.jpg">
								</a>
							</div>
							<p>
								Price: $800
							</p>
						</div>
						<div class="item-individual">
							<h4>Designer T-Shirt</h4>
							<div class="item-image-container">
								<a href="product.php#product6">
									<img class ="item-pic" src="images/shirt6-1.jpg">
								</a>
							</div>
							<p>
								Price: $750
							</p>
						</div>
						<div class="item-individual">
							<h4>Chinos</h4>
							<div class="item-image-container">
								<a href="product.php#product7">
									<img class ="item-pic" src="images/pant1-1.jpg">
								</a>
							</div>
							<p>
								Price: $1100
							</p>
						</div>
						<div class="item-individual">
							<h4>Stressed Denim Pants</h4>
							<div class="item-image-container">
								<a href="product.php#product8">
									<img class ="item-pic" src="images/pant2-1.jpg">
								</a>
							</div>
							<p>
								Price: $1300
							</p>
						</div>
					</div>
					<div class="item-row3">
						<div class="item-individual">
							<h4>Skinny Jean Pants</h4>
							<div class="item-image-container">
								<a href="product.php#product9">
									<img class ="item-pic" src="images/pant3-1.jpg">
								</a>
							</div>
							<p>
								Price: $1200
							</p>
						</div>
						<div class="item-individual">
							<h4>Designer Denim Pants</h4>
							<div class="item-image-container">
								<a href="product.php#product10">
									<img class ="item-pic" src="images/pant4-1.jpg">
								</a>
							</div>
							<p>
								Price: $1300
							</p>
						</div>
						<div class="item-individual">
							<h4>Denim Cutoff Pants</h4>
							<div class="item-image-container">
								<a href="product.php#product11">
									<img class ="item-pic" src="images/pant5-1.jpg">
								</a>
							</div>
							<p>
								Price: $1000
							</p>
						</div>
						<div class="item-individual">
							<h4>Skinny Trouser Pants</h4>
							<div class="item-image-container">
								<a href="product.php#product12">
									<img class ="item-pic" src="images/pant6-1.jpg">
								</a>
							</div>
							<p>
								Price: $1150
							</p>
						</div>
					</div>
				</div>
			</div>
		</main>
		<footer>
			<?php include 'footer.php'; ?>
		</footer>
	</body>
</html>
<?php
//$pdo = null;
?>
	