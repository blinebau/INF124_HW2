<?php
//UCI Informatics 124/Cs 137 - Assignment 2 Spring 2017
//Students: Mike Duong 69881873 & Bryan Linebaugh 49831189
require_once "pdo.php";

$tax = "0.0";

try {
	$stmt = $pdo->prepare("SELECT combinedrate FROM taxrate WHERE zipcode=:zip");
	$stmt->bindParam(':zip', $zip);	
	$zip = $_REQUEST["q"];
	$stmt->execute();

	//$zip = $_REQUEST["q"];
	//$sql = "SELECT combinedrate FROM taxrate WHERE zipcode=$zip";
	//$stmt = $pdo->query($sql);
	
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	//echo ($row['city']);
	$tax = $row['combinedrate'];
	//echo "city:$city";
	//echo "post query:$city";
	
	// Output "" if no hint was found or output correct values 
	echo $tax === "" ? "0.0" : $tax;
	//echo "End of php";
	}
catch(PDOException $e)
	{
		echo $sql . "<br>" . $e->getMessage();
	} 
	
$pdo = null;
?>