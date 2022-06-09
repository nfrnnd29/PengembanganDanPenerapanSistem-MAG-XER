<?php
					
$DB_HOST = "localhost";
$DB_NAME = "bookstore"; 
$DB_USER = "mysql"; 
$DB_PASSWORD = "your_password";

try{
    $conn = new PDO("mysql:host=$DB_HOST;port=3306;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // To turn on error mode for debugging errors
	$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);  // To get maximum sql injection protection
   // echo "Connected successfully";
} 
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}