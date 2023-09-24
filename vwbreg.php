<?php
ob_start();

// code 


session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {



    include './dbconnect.php';
    $slno = $_POST['slno'];
    $name = $_POST['name'];
    $fhname = $_POST['fname'];
    $gram = $_POST['gram'];
    $ward = $_POST['ward'];
    $voterid = $_POST['voterid'];
    $cokro = $_POST['cokro'];






    $sql = "INSERT INTO `vwb`(`slno`,`name`, `fatherhusband`, `gram`, `word`, `voterid`, `cokro`) VALUES ('$slno','$name','$fhname','$gram','$ward','$voterid','$cokro')";
    print_r(error_get_last());

    if (mysqli_query($con, $sql)) {


        header("Location:vwbentry.php");
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($con);
    }

    // Close conection
    mysqli_close($con);
    
}
ob_end_flush();
?>