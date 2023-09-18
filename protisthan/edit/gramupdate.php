<?php
include '../../dbconnect.php';


if (isset($_POST['submit'])) {
    $id = $_POST['hid'];
    $name = $_POST['name'];
    $word = $_POST['word'];
    $male = $_POST['male'];
    $female = $_POST['female'];
    $total = $_POST['total'];





    $edit="UPDATE `gram` SET `name`='$name',`word`='$word',`male`='$male',`female`='$female',`total`='$total' WHERE id=$id";
    $query=mysqli_query($con,$edit);
    if($query){
        header("location:pedit.php");
    }
}
