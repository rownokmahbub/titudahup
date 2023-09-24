<?php
ob_start();

// code 


session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {



    include '../dbconnect.php';
    $name = $_POST['name'];
    $pname = $_POST['pname'];
    $mname = $_POST['mname'];
    $total = $_POST['total'];
    $ward = $_POST['ward'];






    $sql = "INSERT INTO `gram`(`name`, `word`, `male`, `female`, `total`) VALUES ('$name','$ward','$pname','$mname','$total')";
    print_r(error_get_last());

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