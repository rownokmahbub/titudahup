<?php
ob_start();

// code 


session_start();
error_reporting(0);
include '../dbconnect.php';
$msg = "";


if (isset($_POST['upload'])) {
	$slno= $_POST['slno'];
	$name= $_POST['name'];
	$podobi= $_POST['podobi'];
	$mobileno= $_POST['mobileno'];

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "../Assets/image/" . $filename;

	// Get all the submitted data from the form
	$sql = "INSERT INTO `kormokortaborgo`(`name`, `podobi`, `mobileno`, `filename`) VALUES ('$name','$podobi','$mobileno','$filename')";

	// Execute query
	mysqli_query($con, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
		header("Location:ghome.php");
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
ob_end_flush();
?>