<?php
ob_start();

// code 


session_start();
include './dbconnect.php';


if (isset($_POST['submit'])) {
    $id = $_POST['hid'];
    $slno= $_POST['slno'];
    $name= $_POST['name'];
    $fatherhusband= $_POST['fatherhusband'];
    $gram= $_POST['gram'];
    $word= $_POST['word'];
    $voterid= $_POST['voterid'];
    $cokro= $_POST['cokro'];





    $edit="UPDATE `vwb` SET `slno`='$slno', `name`='$name',`fatherhusband`='$fatherhusband',`gram`='$gram',`word`='$word',`voterid`='$voterid',`cokro`='$cokro' WHERE id=$id";
    $query=mysqli_query($con,$edit);
    if($query){
        header("location:vwbtable.php");
    }
}
ob_end_flush();
?>