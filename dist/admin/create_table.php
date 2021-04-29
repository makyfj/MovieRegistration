<?php
//Include config file
require_once "config.php";

//sql to create table
$sql = "CREATE TABLE Customers ( 
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
 `firstName` varchar(15) NOT NULL,
 `lastName` varchar(15) NOT NULL,
 `address` varchar(50) NOT NULL,
 `city` varchar(50) NOT NULL,
 `state` varchar(50) NOT NULL,
 `zip` varchar(15) NOT NULL,  
 `phoneNumber` varchar(20) NOT NULL,
 `emailAddress` varchar(100) NOT NULL,
 `password` varchar(20) NOT NULL,
 `over18` varchar(10) NOT NULL,
 `pictureName` varchar(50) NOT NULL, 
 `createdAt` DATETIME DEFAULT CURRENT_TIMESTAMP 
 );";
if ($link->query($sql) === TRUE) {
	echo "Table Customers created successfully";
} else {
	echo "Error creating table: " . $link->error;
}
$link->close();
