<?php 
ob_start();

  // code 


session_start();
 if($_SERVER["REQUEST_METHOD"] == "POST"){

   
   
    include './dbconnect.php';
    $licence = $_POST['licence'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $ward = $_POST['ward'];
    $bplace = $_POST['bplace'];
    $tradename = $_POST['tradename'];
    $bdhoron = $_POST['bdhoron'];
    $kor = $_POST['kor'];
    $vid = $_POST['vid'];
    $mnum = $_POST['mnum'];
    $upozela = $_POST['upozela'];
     $zela = $_POST['zela'];
     $date = $_POST['date'];
           
   


     
       $sql = "INSERT INTO  `tadeentry`(`licence_no`, `name`, `father_husband`, `mother_name`, `word`, `bplace`, `tradename`, `babshardhoron`, `kor`, `voterid`, `mobileno`, `upozela`, `zela`, `date`)  VALUES ('$licence','$name','$fname','$mname','$ward','$bplace','$tradename','$bdhoron','$kor','$vid','$mnum','$upozela','$zela','$date')";
       print_r(error_get_last());
  
   if(mysqli_query($con, $sql)){

   
    header("Location:tadeentry.php");
          
   } else{
       echo "ERROR: Hush! Sorry $sql. "
           . mysqli_error($con);
   }

   // Close conection
   mysqli_close($con);
 }
ob_end_flush();
