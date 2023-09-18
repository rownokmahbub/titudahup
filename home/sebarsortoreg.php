
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {



    include '../dbconnect.php';

    $seba = $_POST['seba'];






    $sql = "INSERT INTO `sebarsorto`( `sorto`) VALUES ('$seba')";

    print_r(error_get_last());

    if (mysqli_query($con, $sql)) {


        header("Location:home.php");
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($con);
    }

    // Close conection
    mysqli_close($con);
}

?>