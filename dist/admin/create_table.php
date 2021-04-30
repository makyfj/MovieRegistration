<?php
//Include config file
require_once "config.php";

//sql to create table
$sql = "CREATE TABLE Users ( 
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
 `user` varchar(20) NOT NULL,
 `email` varchar(50) NOT NULL,
 `password` varchar(50) NOT NULL
 );";
if ($link->query($sql) === TRUE) {
	echo "Table Movies created successfully";
} else {
	echo "Error creating table: " . $link->error;
}
$link->close();
