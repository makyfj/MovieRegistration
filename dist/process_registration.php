<?php
// Include config file
require_once "./admin/config.php";

$target_dir = "./uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$fileName = "";

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if ($check !== false) {
		echo "File is an image - " . $check["mime"] . ".";
		$uploadOk = 1;
	} else {
		echo "File is not an image.";
		$uploadOk = 0;
	}
}

// Check if file already exists
if (file_exists($target_file)) {
	echo "Sorry, file already exists.";
	$uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
	echo "Sorry, your file is too large.";
	$uploadOk = 0;
}

// Allow certain file formats
if (
	$imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif"
) {
	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	$uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
} else {
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

		$fileName  = $_FILES["fileToUpload"]["name"];
	} else {
		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
		$fileName  = $_FILES["fileToUpload"]["name"];
	}
}

// Check email address
if (!empty($_POST["emailAddress"])) {

	$sql = "SELECT * FROM Customers WHERE emailAddress='" . $_POST["emailAddress"] . "'";


	if ($result = mysqli_query($link, $sql)) {

		// Return the number of rows in result set
		$rowcount = mysqli_num_rows($result);

		// Free result set
		mysqli_free_result($result);
	}
}

?>


<?php
// Prepare an insert statement
$sql = "INSERT INTO Customers (`firstName`, `lastName`, `address`, `city`, `state`, `zip`, `phoneNumber`, `emailAddress`, `password`, `over18`, `pictureName`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

if ($stmt = mysqli_prepare($link, $sql)) {
	// Bind variables to the prepared statement as parameters

	mysqli_stmt_bind_param($stmt, "sssssssssss", $firstName, $lastName, $address, $cityTown, $state, $zip, $phoneNumber, $emailAddress, $password, $over18, $pictureName);

	// Set parameters
	$firstName = $_REQUEST['firstName'];
	$lastName = $_REQUEST['lastName'];
	$address = $_REQUEST['address'];
	$cityTown = $_POST['cityTown'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$phoneNumber = $_POST['phoneNumber'];
	$emailAddress = $_POST['emailAddress'];
	$password = $_POST['password'];
	$over18 = $_POST['over18'];
	$pictureName = $_POST['pictureName'];


	// Attempt to execute the prepared statement
	if (mysqli_stmt_execute($stmt)) {
		echo "Records inserted successfully.";
	} else {
		echo "ERROR: Could not execute query: $sql. " . mysqli_error($link);
	}
} else {
	echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
}

// Close statement
mysqli_stmt_close($stmt);

// Close connection
mysqli_close($link);


header("Location: http://localhost/customersWebsite/dist/all_customers.php");

?>
