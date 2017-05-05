
<?php
//UCI Informatics 124/Cs 137 - Assignment 2 Spring 2017
//Students: Mike Duong 69881873 & Bryan Linebaugh 49831189
require_once "pdo.php";

try {
	$stmt = $pdo->prepare("SELECT name, pdesc, price, pid, size, comp, wash_instr, img1, img2, img3, img4 FROM PRODUCT");
	$stmt->execute();
	
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	}
catch(PDOException $e)
	{
		echo $sql . "<br>" . $e->getMessage();
	} 
	
$pdo = null;
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Fauna+One|Playfair+Display" rel="stylesheet">
		<script src="https://use.fontawesome.com/18b81bd185.js"></script>
		<script src="js/scripts.js"></script>
	</head>
	
	<body>
		<header>
			<?php include 'header.php'; ?>
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
						<?php echo ($row['name']) ?>
					</h3>
					<div class="big-pic-container">
						<img id="bigImage1" class ="item-pic" src=<?php echo ($row['img1']) ?>>
					</div>
					<div class="item-description">
						<p>
							<?php echo ($row['pdesc']) ?>
							<br>
							<br>
							<b>Price</b>: $<?php echo ($row['price']) ?>
							<br>
							<br>
							<b>Product ID</b>: <?php echo ($row['pid']) ?>
							<br>
							<b>Size</b>: <?php echo ($row['size']) ?>
							<br>
							<b>Composition</b>: <?php echo ($row['comp']) ?>
							<br>
							<b>Washing Instructions</b>: <?php echo ($row['wash_instr']) ?>
						</p>
					</div>
					<button name="<?php echo ($row['name']) ?>" value=<?php echo ($row['price']) ?> onclick="billingOrder(this.name, this.value)">Order</button>
					<div class="preview-row">
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage1').src='<?php echo ($row['img1']) ?>'" src=<?php echo ($row['img1']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage1').src='<?php echo ($row['img2']) ?>'" src=<?php echo ($row['img2']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage1').src='<?php echo ($row['img3']) ?>'" src=<?php echo ($row['img3']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage1').src='<?php echo ($row['img4']) ?>'" src=<?php echo ($row['img1']); $row = $stmt->fetch(PDO::FETCH_ASSOC); ?>>
						</div>
					</div>
				</div>
				<br>
				<div id="product2" class="detail-box">
					<h3>
						<?php echo ($row['name']) ?>
					</h3>
					<div class="big-pic-container">
						<img id="bigImage2" class ="item-pic" src=<?php echo ($row['img1']) ?>>
					</div>
					<div class="item-description">
						<p>
							<?php echo ($row['pdesc']) ?>
							<br>
							<br>
							<b>Price</b>: $<?php echo ($row['price']) ?>
							<br>
							<br>
							<b>Product ID</b>: <?php echo ($row['pid']) ?>
							<br>
							<b>Size</b>: <?php echo ($row['size']) ?>
							<br>
							<b>Composition</b>: <?php echo ($row['comp']) ?>
							<br>
							<b>Washing Instructions</b>: <?php echo ($row['wash_instr']) ?>
						</p>
					</div>
					<button name="<?php echo ($row['name']) ?>" value=<?php echo ($row['price']) ?> onclick="billingOrder(this.name, this.value)">Order</button>
					<div class="preview-row">
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage2').src='<?php echo ($row['img1']) ?>'" src=<?php echo ($row['img1']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage2').src='<?php echo ($row['img2']) ?>'" src=<?php echo ($row['img2']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage2').src='<?php echo ($row['img3']) ?>'" src=<?php echo ($row['img3']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage2').src='<?php echo ($row['img4']) ?>'" src=<?php echo ($row['img4']); $row = $stmt->fetch(PDO::FETCH_ASSOC); ?>>
						</div>
					</div>
				</div>
				<br>
				<div id="product3" class="detail-box">
					<h3>
						<?php echo ($row['name']) ?>
					</h3>
					<div class="big-pic-container">
						<img id="bigImage3" class ="item-pic" src=<?php echo ($row['img1']) ?>>
					</div>
					<div class="item-description">
						<p>
							<?php echo ($row['pdesc']) ?>
							<br>
							<br>
							<b>Price</b>: $<?php echo ($row['price']) ?>
							<br>
							<br>
							<b>Product ID</b>: <?php echo ($row['pid']) ?>
							<br>
							<b>Size</b>: <?php echo ($row['size']) ?>
							<br>
							<b>Composition</b>: <?php echo ($row['comp']) ?>
							<br>
							<b>Washing Instructions</b>: <?php echo ($row['wash_instr']) ?>
						</p>
					</div>
					<button name="<?php echo ($row['name']) ?>" value=<?php echo ($row['price']) ?> onclick="billingOrder(this.name, this.value)">Order</button>
					<div class="preview-row">
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage3').src='<?php echo ($row['img1']) ?>'" src=<?php echo ($row['img1']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage3').src='<?php echo ($row['img2']) ?>'" src=<?php echo ($row['img2']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage3').src='<?php echo ($row['img3']) ?>'" src=<?php echo ($row['img3']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage3').src='<?php echo ($row['img4']) ?>'" src=<?php echo ($row['img4']); $row = $stmt->fetch(PDO::FETCH_ASSOC); ?>>
						</div>
					</div>
				</div>
				<br>
				<div id="product4" class="detail-box">
					<h3>
						<?php echo ($row['name']) ?>
					</h3>
					<div class="big-pic-container">
						<img id="bigImage4" class ="item-pic" src=<?php echo ($row['img1']) ?>>
					</div>
					<div class="item-description">
						<p>
							<?php echo ($row['pdesc']) ?>
							<br>
							<br>
							<b>Price</b>: $<?php echo ($row['price']) ?>
							<br>
							<br>
							<b>Product ID</b>: <?php echo ($row['pid']) ?>
							<br>
							<b>Size</b>: <?php echo ($row['size']) ?>
							<br>
							<b>Composition</b>: <?php echo ($row['comp']) ?>
							<br>
							<b>Washing Instructions</b>: <?php echo ($row['wash_instr']) ?>
						</p>
					</div>
					<button name="<?php echo ($row['name']) ?>" value=<?php echo ($row['price']) ?> onclick="billingOrder(this.name, this.value)">Order</button>
					<div class="preview-row">
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage4').src='<?php echo ($row['img1']) ?>'" src=<?php echo ($row['img1']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage4').src='<?php echo ($row['img2']) ?>'" src=<?php echo ($row['img2']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage4').src='<?php echo ($row['img3']) ?>'" src=<?php echo ($row['img3']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage4').src='<?php echo ($row['img4']) ?>'" src=<?php echo ($row['img4']); $row = $stmt->fetch(PDO::FETCH_ASSOC); ?>>
						</div>
					</div>
				</div>
				<br>
				<div id="product5" class="detail-box">
					<h3>
						<?php echo ($row['name']) ?>
					</h3>
					<div class="big-pic-container">
						<img id="bigImage5" class ="item-pic" src=<?php echo ($row['img1']) ?>>
					</div>
					<div class="item-description">
						<p>
							<?php echo ($row['pdesc']) ?>
							<br>
							<br>
							<b>Price</b>: $<?php echo ($row['price']) ?>
							<br>
							<br>
							<b>Product ID</b>: <?php echo ($row['pid']) ?>
							<br>
							<b>Size</b>: <?php echo ($row['size']) ?>
							<br>
							<b>Composition</b>: <?php echo ($row['comp']) ?>
							<br>
							<b>Washing Instructions</b>: <?php echo ($row['wash_instr']) ?>
						</p>
					</div>
					<button name="<?php echo ($row['name']) ?>" value=<?php echo ($row['price']) ?> onclick="billingOrder(this.name, this.value)">Order</button>
					<div class="preview-row">
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage5').src='<?php echo ($row['img1']) ?>'" src=<?php echo ($row['img1']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage5').src='<?php echo ($row['img2']) ?>'" src=<?php echo ($row['img2']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage5').src='<?php echo ($row['img3']) ?>'" src=<?php echo ($row['img3']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage5').src='<?php echo ($row['img4']) ?>'" src=<?php echo ($row['img4']); $row = $stmt->fetch(PDO::FETCH_ASSOC); ?>>
						</div>
					</div>
				</div>
				<br>
				<div id="product6" class="detail-box">
					<h3>
						<?php echo ($row['name']) ?>
					</h3>
					<div class="big-pic-container">
						<img id="bigImage6" class ="item-pic" src=<?php echo ($row['img1']) ?>>
					</div>
					<div class="item-description">
						<p>
							<?php echo ($row['pdesc']) ?>
							<br>
							<br>
							<b>Price</b>: $<?php echo ($row['price']) ?>
							<br>
							<br>
							<b>Product ID</b>: <?php echo ($row['pid']) ?>
							<br>
							<b>Size</b>: <?php echo ($row['size']) ?>
							<br>
							<b>Composition</b>: <?php echo ($row['comp']) ?>
							<br>
							<b>Washing Instructions</b>: <?php echo ($row['wash_instr']) ?>
						</p>
					</div>
					<button name="<?php echo ($row['name']) ?>" value=<?php echo ($row['price']) ?> onclick="billingOrder(this.name, this.value)">Order</button>
					<div class="preview-row">
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage6').src='<?php echo ($row['img1']) ?>'" src=<?php echo ($row['img1']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage6').src='<?php echo ($row['img2']) ?>'" src=<?php echo ($row['img2']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage6').src='<?php echo ($row['img3']) ?>'" src=<?php echo ($row['img3']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage6').src='<?php echo ($row['img4']) ?>'" src=<?php echo ($row['img4']); $row = $stmt->fetch(PDO::FETCH_ASSOC); ?>>
						</div>
					</div>
				</div>
				<br>
				<div id="product7" class="detail-box">
					<h3>
						<?php echo ($row['name']) ?>
					</h3>
					<div class="big-pic-container">
						<img id="bigImage7" class ="item-pic" src=<?php echo ($row['img1']) ?>>
					</div>
					<div class="item-description">
						<p>
							<?php echo ($row['pdesc']) ?>
							<br>
							<br>
							<b>Price</b>: $<?php echo ($row['price']) ?>
							<br>
							<br>
							<b>Product ID</b>: <?php echo ($row['pid']) ?>
							<br>
							<b>Size</b>: <?php echo ($row['size']) ?>
							<br>
							<b>Composition</b>: <?php echo ($row['comp']) ?>
							<br>
							<b>Washing Instructions</b>: <?php echo ($row['wash_instr']) ?>
						</p>
					</div>
					<button name="<?php echo ($row['name']) ?>" value=<?php echo ($row['price']) ?> onclick="billingOrder(this.name, this.value)">Order</button>
					<div class="preview-row">
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage7').src='<?php echo ($row['img1']) ?>'" src=<?php echo ($row['img1']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage7').src='<?php echo ($row['img2']) ?>'" src=<?php echo ($row['img2']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage7').src='<?php echo ($row['img3']) ?>'" src=<?php echo ($row['img3']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage7').src='<?php echo ($row['img4']) ?>'" src=<?php echo ($row['img4']); $row = $stmt->fetch(PDO::FETCH_ASSOC); ?>>
						</div>
					</div>
				</div>
				<br>
				<div id="product8" class="detail-box">
					<h3>
						<?php echo ($row['name']) ?>
					</h3>
					<div class="big-pic-container">
						<img id="bigImage8" class ="item-pic" src=<?php echo ($row['img1']) ?>>
					</div>
					<div class="item-description">
						<p>
							<?php echo ($row['pdesc']) ?>
							<br>
							<br>
							<b>Price</b>: $<?php echo ($row['price']) ?>
							<br>
							<br>
							<b>Product ID</b>: <?php echo ($row['pid']) ?>
							<br>
							<b>Size</b>: <?php echo ($row['size']) ?>
							<br>
							<b>Composition</b>: <?php echo ($row['comp']) ?>
							<br>
							<b>Washing Instructions</b>: <?php echo ($row['wash_instr']) ?>
						</p>
					</div>
					<button name="<?php echo ($row['name']) ?>" value=<?php echo ($row['price']) ?> onclick="billingOrder(this.name, this.value)">Order</button>
					<div class="preview-row">
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage8').src='<?php echo ($row['img1']) ?>'" src=<?php echo ($row['img1']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage8').src='<?php echo ($row['img2']) ?>'" src=<?php echo ($row['img2']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage8').src='<?php echo ($row['img3']) ?>'" src=<?php echo ($row['img3']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage8').src='<?php echo ($row['img4']) ?>'" src=<?php echo ($row['img4']); $row = $stmt->fetch(PDO::FETCH_ASSOC); ?>>
						</div>
					</div>
				</div>
				<br>
				<div id="product9" class="detail-box">
					<h3>
						<?php echo ($row['name']) ?>
					</h3>
					<div class="big-pic-container">
						<img id="bigImage9" class ="item-pic" src=<?php echo ($row['img1']) ?>>
					</div>
					<div class="item-description">
						<p>
							<?php echo ($row['pdesc']) ?>
							<br>
							<br>
							<b>Price</b>: $<?php echo ($row['price']) ?>
							<br>
							<br>
							<b>Product ID</b>: <?php echo ($row['pid']) ?>
							<br>
							<b>Size</b>: <?php echo ($row['size']) ?>
							<br>
							<b>Composition</b>: <?php echo ($row['comp']) ?>
							<br>
							<b>Washing Instructions</b>: <?php echo ($row['wash_instr']) ?>
						</p>
					</div>
					<button name="<?php echo ($row['name']) ?>" value=<?php echo ($row['price']) ?> onclick="billingOrder(this.name, this.value)">Order</button>
					<div class="preview-row">
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage9').src='<?php echo ($row['img1']) ?>'" src=<?php echo ($row['img1']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage9').src='<?php echo ($row['img2']) ?>'" src=<?php echo ($row['img2']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage9').src='<?php echo ($row['img3']) ?>'" src=<?php echo ($row['img3']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage9').src='<?php echo ($row['img4']) ?>'" src=<?php echo ($row['img4']); $row = $stmt->fetch(PDO::FETCH_ASSOC); ?>>
						</div>
					</div>
				</div>
				<br>
				<div id="product10" class="detail-box">
					<h3>
						<?php echo ($row['name']) ?>
					</h3>
					<div class="big-pic-container">
						<img id="bigImage10" class ="item-pic" src=<?php echo ($row['img1']) ?>>
					</div>
					<div class="item-description">
						<p>
							<?php echo ($row['pdesc']) ?>
							<br>
							<br>
							<b>Price</b>: $<?php echo ($row['price']) ?>
							<br>
							<br>
							<b>Product ID</b>: <?php echo ($row['pid']) ?>
							<br>
							<b>Size</b>: <?php echo ($row['size']) ?>
							<br>
							<b>Composition</b>: <?php echo ($row['comp']) ?>
							<br>
							<b>Washing Instructions</b>: <?php echo ($row['wash_instr']) ?>
						</p>
					</div>
					<button name="<?php echo ($row['name']) ?>" value=<?php echo ($row['price']) ?> onclick="billingOrder(this.name, this.value)">Order</button>
					<div class="preview-row">
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage10').src='<?php echo ($row['img1']) ?>'" src=<?php echo ($row['img1']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage10').src='<?php echo ($row['img2']) ?>'" src=<?php echo ($row['img2']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage10').src='<?php echo ($row['img3']) ?>'" src=<?php echo ($row['img3']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage10').src='<?php echo ($row['img4']) ?>'" src=<?php echo ($row['img4']); $row = $stmt->fetch(PDO::FETCH_ASSOC); ?>>
						</div>
					</div>
				</div>
				<br>
				<div id="product11" class="detail-box">
					<h3>
						<?php echo ($row['name']) ?>
					</h3>
					<div class="big-pic-container">
						<img id="bigImage11" class ="item-pic" src=<?php echo ($row['img1']) ?>>
					</div>
					<div class="item-description">
						<p>
							<?php echo ($row['pdesc']) ?>
							<br>
							<br>
							<b>Price</b>: $<?php echo ($row['price']) ?>
							<br>
							<br>
							<b>Product ID</b>: <?php echo ($row['pid']) ?>
							<br>
							<b>Size</b>: <?php echo ($row['size']) ?>
							<br>
							<b>Composition</b>: <?php echo ($row['comp']) ?>
							<br>
							<b>Washing Instructions</b>: <?php echo ($row['wash_instr']) ?>
						</p>
					</div>
					<button name="<?php echo ($row['name']) ?>" value=<?php echo ($row['price']) ?> onclick="billingOrder(this.name, this.value)">Order</button>
					<div class="preview-row">
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage11').src='<?php echo ($row['img1']) ?>'" src=<?php echo ($row['img1']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage11').src='<?php echo ($row['img2']) ?>'" src=<?php echo ($row['img2']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage11').src='<?php echo ($row['img3']) ?>'" src=<?php echo ($row['img3']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage11').src='<?php echo ($row['img4']) ?>'" src=<?php echo ($row['img1']); $row = $stmt->fetch(PDO::FETCH_ASSOC); ?>>
						</div>
					</div>
				</div>
				<br>
				<div id="product12" class="detail-box">
					<h3>
						<?php echo ($row['name']) ?>
					</h3>
					<div class="big-pic-container">
						<img id="bigImage12" class ="item-pic" src=<?php echo ($row['img1']) ?>>
					</div>
					<div class="item-description">
						<p>
							<?php echo ($row['pdesc']) ?>
							<br>
							<br>
							<b>Price</b>: $<?php echo ($row['price']) ?>
							<br>
							<br>
							<b>Product ID</b>: <?php echo ($row['pid']) ?>
							<br>
							<b>Size</b>: <?php echo ($row['size']) ?>
							<br>
							<b>Composition</b>: <?php echo ($row['comp']) ?>
							<br>
							<b>Washing Instructions</b>: <?php echo ($row['wash_instr']) ?>
						</p>
					</div>
					<button name="<?php echo ($row['name']) ?>" value=<?php echo ($row['price']) ?> onclick="billingOrder(this.name, this.value)">Order</button>
					<div class="preview-row">
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage12').src='<?php echo ($row['img1']) ?>'" src=<?php echo ($row['img1']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage12').src='<?php echo ($row['img2']) ?>'" src=<?php echo ($row['img2']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage12').src='<?php echo ($row['img3']) ?>'" src=<?php echo ($row['img3']) ?>>
						</div>
						<div class="preview-box">
							<img class="small-pic" onmouseover="document.getElementById('bigImage12').src='<?php echo ($row['img4']) ?>'" src=<?php echo ($row['img4']); $row = $stmt->fetch(PDO::FETCH_ASSOC); ?>>
						</div>
					</div>
				</div>
				<br>
			</div>
		</main>
		<footer>
			<?php include 'footer.php'; ?>
		</footer>

		<div id="billModal" class="modal">
			<div class="modal-content">
				<span class="close">&times;</span>
				<p>
					Order Form
				</p>
				<br>
				<p>
					<span id="productname"></span>
				</p>
				<div class="form-content">
					<form name="billingForm" action="process_form.php" onsubmit="return validateForm(this)" method="post">
						<br>
						<p>
							<label>First Name:</label> <input type="text" name="firstName"> <label>Last Name:</label> <input type="text" name="lastName">
						</p>
						<br>
						<p>
							<label>Address:</label> <input type="text" name="address"> <label>Zip Code:</label> <input type="text" name="zip" onkeyup="findCity(this.value); findTax(this.value);">
						</p>
						<br>
						<p>
							<label>City:</label> <input type="text" name="city" id="suggestCity">

							<label>State: </label>
							<select name="state" id="selectstate">
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
							<label>Phone Number:</label> <input type="text" name="phone"> <label>Email:</label> <input type="text" name="email">
						</p>
						<br>
						<p>
							<label>Quantity:</label> <input type="text" name="quantity" value="1" onblur="calcSubtotal(this.value)">
						
							<label>&emsp;Shipping Method:</label> 
							<select name="shipping">
								<option value="2 Day">2 Day</option>
								<option value="Overnight">Overnight</option>
								<option value="6 Day Ground">6 Day Ground</option>
							</select>
						</p>
						<br>
						<p>
							<label>Credit Card:</label> <input type="text" name="card">
						</p>
						<br>
						<br>
						<p>
							<label></label><label style="text-align: right">Subtotal:</label> <span>$</span><span id="price"></span>
						</p>
						<p>
							<label></label><label style="text-align: right">Tax:</label> <span>%</span><span id="suggestTax">0</span>
						</p>
						<p>
							<label></label><label style="text-align: right">Grand Total:</label> <span>$</span><span id="gtotal"></span>
						</p>
						<br>
						<p>
						<label></label>
							<div style="display: table-cell" class="formButton">
								<input type="submit" value="Submit">
							</div>
						</p>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>