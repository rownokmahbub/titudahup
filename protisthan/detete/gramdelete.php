<?php
include '../../dbconnect.php';



$id = $_REQUEST['id'];


$delete="DELETE FROM `gram` WHERE `id`='$id'";
$query=mysqli_query($con,$delete);
if($query){
    header("location:../edit/pedit.php");
}
