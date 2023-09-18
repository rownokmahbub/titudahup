<?php
include '../../dbconnect.php';


if (isset($_POST['submit'])) {
    $id = $_POST['hid'];
    $name = $_POST['name'];
    $word = $_POST['word'];
    $moujano = $_POST['moujano'];






    $edit="UPDATE `mouja` SET `name`='$name',`word`='$word',`moujano`='$moujano' WHERE id=$id";
    $query=mysqli_query($con,$edit);
    if($query){
        header("location:pedit.php");
    }
}
