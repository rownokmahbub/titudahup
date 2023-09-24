<?php
ob_start();

// code 


session_start();
error_reporting(0);
include '../dbconnect.php';
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {
	
	$title= $_POST['title'];
	

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "../Assets/image/" . $filename;

	// Get all the submitted data from the form
	$sql = "INSERT INTO `video`(`title`, `video`) VALUES ('$title','$filename')";

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