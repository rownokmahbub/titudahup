<?php
ob_start();

// code


session_start();
 if($_SERVER["REQUEST_METHOD"] == "POST"){

   
   
    include './dbconnect.php';
     $id = $_POST['hid'];
     $sarok = $_POST['sarok'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
     $mname = $_POST['mname'];
     $hname = $_POST['hname'];
    $gram = $_POST['gram'];
    $ward = $_POST['ward'];
    $birthno = $_POST['birthno'];
    $voterid = $_POST['voterid'];
    $mnum = $_POST['mnum'];
    $gender = $_POST['gender'];
     $dakghor = $_POST['dakghor'];
     $date = $_POST['date'];

   


     
       $sql = "UPDATE `nagorik` SET `sarok`='$sarok',`name`='$name',`fathername`='$fname',`mothername`='$mname',`husband`='$hname',`gram`='$gram',`word`='$ward',`birthno`='$birthno',`voterid`='$voterid',`mobileno`='$mnum',`gender`='$gender',`dakghor`='$dakghor',`date`='$date' WHERE `id`=$id";;
       print_r(error_get_last());
  
   if(mysqli_query($con, $sql)){

   
    header("Location:nagoriktable.php");
          
   } else{
       echo "ERROR: Hush! Sorry $sql. "
           . mysqli_error($con);
   }

   // Close conection
   mysqli_close($con);
 }
ob_end_flush();
