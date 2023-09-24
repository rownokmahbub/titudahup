<?php
ob_start();

// code 


session_start();
error_reporting(0);
include '../../dbconnect.php';
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {
	$id= $_POST['id'];
	$name= $_POST['name'];
	$podobi= $_POST['podobi'];
	$mobileno= $_POST['mobileno'];

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "../../Assets/image/" . $filename;
    if($tempname != "")
    {
        move_uploaded_file($tempname , "$folder");
        $sql = "UPDATE `porishodborgo` SET `name`='$name',`podobi`='$podobi',`mobileno`='$mobileno',`filename`='$filename' WHERE `id`=$id";  
        
    }else
    {
        $sql = "UPDATE `porishodborgo` SET `name`='$name',`podobi`='$podobi',`mobileno`='$mobileno' WHERE `id`=$id";  
    }
    
    $run_update=mysqli_query($con, $sql);
	header("Location:../edit/porishodtable.php");
	// $sql = "UPDATE `porishodborgo` SET `name`='$name',`podobi`='$podobi',`mobileno`='$mobileno',`filename`='$filename' WHERE `id`=$id";

	
	// mysqli_query($con, $sql);

	
	// if (move_uploaded_file($tempname, $folder)) {
	// 	echo "<h3> Image uploaded successfully!</h3>";
	// 	header("Location:../porishodtable.php");
	// } else {
	// 	echo "<h3> Failed to upload image!</h3>";
	// }
}
ob_end_flush();?>