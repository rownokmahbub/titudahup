<?php
ob_start();

// code 


session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {



    include '../dbconnect.php';
    $up = $_POST['poriciti'];





    $sql = "INSERT INTO `unionporiciti`(`poriciti`) VALUES ('$up')";


    if (mysqli_query($con, $sql)) {
        print_r(error_get_last());

        header("Location:home.php");
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($con);
    }

    // Close conection
    mysqli_close($con);
}
ob_end_flush();
?>