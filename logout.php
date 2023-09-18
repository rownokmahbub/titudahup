<?php
   ob_start();

  // code 


session_start();
    include 'dbconnect.php';
    $email = $_SESSION['email'];

    $sql = "INSERT INTO `log` (`id`, `email`, `activity`, `time`) VALUES (NULL, '$email', 'Log Out', current_timestamp());";
    $result = mysqli_query($con,$sql);
    
    session_destroy();
    header('location:login2.php');
     ob_end_flush();
