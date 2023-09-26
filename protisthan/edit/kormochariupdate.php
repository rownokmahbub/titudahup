<?php
ob_start();

// code 


session_start();
include '../../dbconnect.php';


if (isset($_POST['submit'])) {
    $id = $_POST['hid'];
    $slno = $_POST['slno'];
    $name = $_POST['name'];
    $podobi = $_POST['podobi'];
    $joggota = $_POST['joggota'];
    $birthdate = $_POST['birthdate'];
    $mobileno = $_POST['mobileno'];
    $word = $_POST['word'];
    $voterid = $_POST['voterid'];



    $edit="UPDATE `kormocharitalika` SET `slno`='$slno',`name`='$name',`podobi`='$podobi',`joggota`='$joggota',`birthdate`='$birthdate',`mobileno`='$mobileno',`word`='$word',`voterid`='$voterid' WHERE id=$id";
    $query=mysqli_query($con,$edit);
    if($query){
        header("location:pedit.php");
    }
}
ob_end_flush();
?>