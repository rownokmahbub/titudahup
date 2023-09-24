<?php
ob_start();

// code 


session_start();
include './dbconnect.php';



$id = $_REQUEST['id'];


$delete="DELETE FROM `vwb` WHERE `id`='$id'";
$query=mysqli_query($con,$delete);
if($query){
    header("location:./vwbtable.php");
}
ob_end_flush();
?>