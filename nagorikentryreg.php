<?php
ob_start();

// code


session_start();
 if($_SERVER["REQUEST_METHOD"] == "POST"){

   
   
    include './dbconnect.php';
    $sarok = $_POST['sarok'];
    $name = $_POST['name'];
     $fname = $_POST['fname'];
     $hname = $_POST['hname'];
    $mname = $_POST['mname'];
    $gram = $_POST['gram'];
    $ward = $_POST['ward'];
    $birthno = $_POST['birthno'];
    $voterid = $_POST['voterid'];
    $mnum = $_POST['mnum'];
    $gender = $_POST['gender'];
     $dakghor = $_POST['dakghor'];
     $date = $_POST['date'];
    
           
   


     
       $sql = "INSERT INTO `nagorik`(`sarok`, `name`, `fathername`, `mothername`,`husband`, `gram`, `word`, `birthno`, `voterid`, `mobileno`,`gender`,`dakghor`,`date`) VALUES ('$sarok','$name','$fname','$mname','$hname','$gram','$ward','$birthno','$voterid','$mnum','$gender','$dakghor','$date')";
       print_r(error_get_last());
  
   if(mysqli_query($con, $sql)){

   
    header("Location:nagorikentry.php");
          
   } else{
       echo "ERROR: Hush! Sorry $sql. "
           . mysqli_error($con);
   }

   // Close conection
   mysqli_close($con);
 }
ob_end_flush();
