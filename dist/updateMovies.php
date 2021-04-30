<?php

require_once("./admin/config.php");

$id = $_POST['id'];
$title = $_POST['title'];
$genre = $_POST['genre'];
$director = $_POST['director'];
$language = $_POST['language'];


if (!empty($title)) {

	$sql = "UPDATE Movies SET title='$title' WHERE id='$id'";

	if (mysqli_query($link, $sql)) {
		echo "Record update successfully";
	} else {
		echo "Error updating record " . mysqli_error($link);
	}
}


if (!empty($genre)) {

	$sql = "UPDATE Movies SET genre='$genre' WHERE id='$id'";

	if (mysqli_query($link, $sql)) {
		echo "Record update successfully";
	} else {
		echo "Error updating record " . mysqli_error($link);
	}
}

if (!empty($director)) {

	$sql = "UPDATE Movies SET director='$director' WHERE id='$id'";

	if (mysqli_query($link, $sql)) {
		echo "Record update successfully";
	} else {
		echo "Error updating record " . mysqli_error($link);
	}
}


if (!empty($language)) {

	$sql = "UPDATE Movies SET language='$language' WHERE id='$id'";

	if (mysqli_query($link, $sql)) {
		echo "Record update successfully";
	} else {
		echo "Error updating record " . mysqli_error($link);
	}
}

mysqli_close($link);

header("Location: http://localhost/customersWebsite/dist/all_movies.php");
/* function updateData($field, $id, $link) */ /* { */
/* 	$stmt = mysqli_prepare($link, "UPDATE Movies SET `$field`=`$field` WHERE id=`$id`"); */
/* 	if (mysqli_stmt_execute($stmt)) { */
/* 		echo "Records Updated"; */
/* 	} else { */
/* 		echo "ERror"; */
/* 	} */
/* } */

/* if (!empty($title)) { */
/* 	updateData($title, $id, $link); */
/* } */

/* if (!empty($genre)) { */
/* 	updateData($title, $id, $link); */
/* } */

/* if (!empty($director)) { */
/* 	updateData($title, $id, $link); */
/* } */

/* if (!empty($language)) { */
/* 	updateData($title, $id, $link); */
/* } */

/* mysqli_close($link); */
