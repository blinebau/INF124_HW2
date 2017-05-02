<?php
//UCI Informatics 124/Cs 137 - Assignment 2 Spring 2017
//Students: Mike Duong 69881873 & Bryan Linebaugh 49831189
//$servername = "localhost";
//$dbname = "myDB";
//$username = "root";
//$password = "mikeduong1";

$servername = "sylvester-mccoy-v3.ics.uci.edu";
$dbname = "inf124-db-016";
$username = "inf124-db-016";
$password = "TEXQdM!47.Z.";

//$servername = "sylvester-mccoy-v3.ics.uci.edu";
//$dbname = "inf124-db-022";
//$username = "inf124-db-022";
//$password = "CKphZTiqS34X";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>