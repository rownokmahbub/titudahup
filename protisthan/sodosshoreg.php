<?php
ob_start();

// code 


session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    


    include '../dbconnect.php';
    $slno = $_POST['slno'];
    $name = $_POST['name'];
    $podobi = $_POST['podobi'];
    $joggota = $_POST['joggota'];
    $birthdate = $_POST['birthdate'];
    $mobileno = $_POST['mobileno'];
    $word = $_POST['word'];
    $voterid = $_POST['voterid'];
  




    $sql = "INSERT INTO `sodosshotalika`( `slno`, `name`, `podobi`, `joggota`, `birthdate`, `mobileno`, `word`, `voterid`)  VALUES ('$slno','$name','$podobi','$joggota','$birthdate','$mobileno','$word','$voterid')";
    echo $sql;


    if (mysqli_query($con, $sql)) {


        header("Location:phome.php");
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($con);
    }

    // Close conection
    mysqli_close($con);
}
ob_end_flush();
?>