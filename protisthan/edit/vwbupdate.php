<?php
ob_start();

// code 


session_start();
include '../../dbconnect.php';


if (isset($_POST['submit'])) {
    $id = $_POST['hid'];
    $name= $_POST['name'];
    $fatherhusband= $_POST['fatherhusband'];
    $gram= $_POST['gram'];
    $word= $_POST['word'];
    $voterid= $_POST['voterid'];
    $cokro= $_POST['cokro'];





    $edit="UPDATE `vwb` SET `name`='$name',`fatherhusband`='$fatherhusband',`gram`='$gram',`word`='$word',`voterid`='$voterid',`cokro`='$cokro' WHERE id=$id";
    $query=mysqli_query($con,$edit);
    if($query){
        header("location:pedit.php");
    }
}
ob_end_flush();
?>