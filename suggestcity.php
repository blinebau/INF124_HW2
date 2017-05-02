<?php
//UCI Informatics 124/Cs 137 - Assignment 2 Spring 2017
//Students: Mike Duong 69881873 & Bryan Linebaugh 49831189
require_once "pdo.php";

//$city = "asdf";

try {
	//$stmt = $pdo->prepare("SELECT * FROM zipcode WHERE zip=:zip");
	//$stmt->bindParam(':zip', $zip);	
	//$zip = $_REQUEST["q"];
	//$stmt->execute();
	//$city = $stmt;
	$zip = $_REQUEST["q"];
	//echo "post request:$zip";
	$sql = "SELECT city FROM zipcode WHERE zip=$zip";
	//echo "sql query:$sql";
	$stmt = $pdo->query($sql);
	
	//$city = $stmt;
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	//echo ($row['city']);
	$city = $row['city'];
	//echo "city:$city";
	//echo "post query:$city";
	
	// Output "" if no hint was found or output correct values 
	echo $city === "" ? "" : $city;
	//echo "End of php";
	}
catch(PDOException $e)
	{
		echo $sql . "<br>" . $e->getMessage();
	} 
	
$pdo = null;
?>