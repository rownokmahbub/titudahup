
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {



    include '../dbconnect.php';
    $khobor = $_POST['khobor'];





    $sql = "INSERT INTO `khobor`(`khobor`) VALUES ('$khobor')";
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