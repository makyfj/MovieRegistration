<?php

require_once('./admin/config.php');

$button = $_GET['searchButton'];
$search = $_GET['search'];

/* $sql = "SELECT * FROM Customers WHERE MATCH(firstName, lastName, city, email) AGAINST ('%" . $search . "%')"; */
$sql = "SELECT * FROM Customers";


$getQuery = mysqli_query($link, $sql);

while ($runRows = mysqli_fetch_array($getQuery)) {

	echo "<h5 class='card-title'>" . $runRows['firstName'] . "</h5>";
	echo "<h5 class='card-title'>" . $runRows['lastName'] . "</h5>";
	echo "<h5 class='card-title'>" . $runRows['city'] . "</h5>";
	echo "<h5 class='card-title'>" . $runRows['emailAddress'] . "</h5>";
	echo "-------------------------------------------------------";
}

$run = mysqli_query($link, $sql);
$foundNum = mysqli_num_rows($run);

if ($foundNum == 0) {
	echo "We were unable to find a customer with a search term of '<b>$search</b>'.";
} else {
	echo "<h1><strong> $foundNum Results Found for \"" . $search . "\" </strong></h1>";

	$sql = "SELECT * FROM Customers WHERE MATCH(firstName, lastName, city, email) AGAINST ('%" . $search . "%')";
	$getQuery = mysqli_query($link, $sql);

	while ($runRows = mysqli_fetch_array($getQuery)) {

		echo "<h5 class='card-title'>" . $runRows['firstName'] . "</h5>";
		echo "<h5 class='card-title'>" . $runRows['lastName'] . "</h5>";
		echo "<h5 class='card-title'>" . $runRows['city'] . "</h5>";
		echo "<h5 class='card-title'>" . $runRows['email'] . "</h5>";
		echo "-------------------------------------------------------";
	}
}

mysqli_close($link);
