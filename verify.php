<?php
session_start();
$code1 = $_SESSION['code'];
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php'; 
        $Code = $_POST['Code'];
}
echo $code1;
echo $Code;
if($code1 == $Code){
    $email = $_SESSION['email'];
    header('location:userhome.php');
}
else{
    header('location:verify-user.php');
}
