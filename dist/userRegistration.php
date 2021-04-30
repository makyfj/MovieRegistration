<?php

require_once("./admin/config.php");

// prepare an insert statement
$sql = "INSERT INTO Users (`user`, `email`, `password`) VALUES (?, ?, ?)";

if ($stmt = mysqli_query($link, $sql)) {

	// bind variables to the prepared statement as parameters
	mysqli_stmt_bind_param($stmt, "sss", $user, $email, $password);

	// Set parameters
	$user = $_POST['user'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Attempt to execute the prepared statement
	if (mysqli_stmt_execute($stmt)) {
		echo "Records inserted successfully";
	} else {
		echo "Error: Could not execute query: $sql " . mysqli_error($link);
	}
} else {
	echo "ERROR: Could not prepare query: $sql " . mysqli_error($link);
}

// Close statement
mysqli_stmt_close($stmt);

// Close connection
mysqli_close($link);


header("Location: http://localhost/customersWebsite/dist/#!");
