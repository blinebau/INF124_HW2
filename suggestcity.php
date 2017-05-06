<?php
//UCI Informatics 124/Cs 137 - Assignment 2 Spring 2017
//Students: Mike Duong 69881873 & Bryan Linebaugh 49831189
require_once "pdo.php";

$city = "";

try {
	$stmt = $pdo->prepare("SELECT city FROM zipcode WHERE zip=:zip");
	$stmt->bindParam(':zip', $zip);	
	$zip = $_REQUEST["q"];
	$stmt->execute();
	
	//$zip = $_REQUEST["q"];
	//$sql = "SELECT city FROM zipcode WHERE zip=$zip";
	//$stmt = $pdo->query($sql);
	
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	$city = $row['city'];
	
	// Output "" if no hint was found or output correct values 
	echo $city === "" ? "" : $city;
	}
catch(PDOException $e)
	{
		echo $sql . "<br>" . $e->getMessage();
	} 
	
$pdo = null;
?>