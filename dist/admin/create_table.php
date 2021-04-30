<?php
//Include config file
require_once "config.php";

//sql to create table
$sql = "CREATE TABLE Movies ( 
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
 `title` varchar(20) NOT NULL,
 `genre` varchar(50) NOT NULL,
 `director` varchar(50) NOT NULL,
 `status` varchar(50) NOT NULL,
 `language` varchar(50) NOT NULL,
 `budget` varchar(20) NOT NULL,  
 `revenue` varchar(20) NOT NULL,
 `pictureName` varchar(50) NOT NULL, 
 `createdAt` DATETIME DEFAULT CURRENT_TIMESTAMP 
 );";
if ($link->query($sql) === TRUE) {
	echo "Table Movies created successfully";
} else {
	echo "Error creating table: " . $link->error;
}
$link->close();
