
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {



    include '../dbconnect.php';
    $name = $_POST['name'];
    $udhoron = $_POST['udhoron'];





    $sql = "INSERT INTO `upprotisthan`(`name`, `pdhoron`)  VALUES ('$name','$udhoron')";
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

?>