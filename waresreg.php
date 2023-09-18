
<?php
ob_start();

// code


session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {



    include './dbconnect.php';
    $sarok = $_POST['sarok'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $husband = $_POST['husband'];
    $gram = $_POST['gram'];
    $ward = $_POST['ward'];
    $birthno = $_POST['birthno'];
    $voterid = $_POST['voterid'];
    $mnum = $_POST['mnum'];
    $aname = $_POST['aname'];
    $date = $_POST['date'];
    $w1 = $_POST['w1'];
    $w2 = $_POST['w2'];
    $w3 = $_POST['w3'];
    $w4 = $_POST['w4'];
    $w5 = $_POST['w5'];
    $w6 = $_POST['w6'];
    $w7 = $_POST['w7'];
    $w8 = $_POST['w8'];
    $w9 = $_POST['w9'];
    $w10 = $_POST['w10'];
    $w11 = $_POST['w11'];
    $w12 = $_POST['w12'];
    $w13 = $_POST['w13'];
    $w14 = $_POST['w14'];
    $w15 = $_POST['w15'];
    $r1 = $_POST['r1'];
    $r2 = $_POST['r2'];
    $r3 = $_POST['r3'];
    $r4 = $_POST['r4'];
    $r5 = $_POST['r5'];
    $r6 = $_POST['r6'];
    $r7 = $_POST['r7'];
    $r8 = $_POST['r8'];
    $r9 = $_POST['r9'];
    $r10 = $_POST['r10'];
    $r11 = $_POST['r11'];
    $r12 = $_POST['r12'];
    $r13 = $_POST['r13'];
    $r14 = $_POST['r14'];
    $r15 = $_POST['r15'];






    $sql = "INSERT INTO `wares`(`sarok`, `name`, `fathername`, `mothername`,`husband`, `gram`, `word`, `deathno`, `voterid`, `mobileno`, `aname`,  `date`,`w1`, `w2`, `w3`, `w4`, `w5`, `w6`, `w7`, `w8`, `w9`, `w10`, `w11`, `w12`, `w13`, `w14`, `w15`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`, `r8`, `r9`, `r10`, `r11`, `r12`, `r13`, `r14`, `r15`) VALUES ('$sarok','$name','$fname','$mname','$husband','$gram','$ward','$birthno','$voterid','$mnum','$aname','$date','$w1','$w2','$w3','$w4','$w5','$w6','$w7','$w8','$w9','$w10','$w11','$w12','$w13','$w14','$w15','$r1','$r2','$r3','$r4','$r5','$r6','$r7','$r8','$r9','$r10','$r11','$r12','$r13','$r14','$r15')";
    print_r(error_get_last());

    if (mysqli_query($con, $sql)) {


        header("Location:waresentry.php");
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($con);
    }

    // Close conection
    mysqli_close($con);
}
ob_end_flush();
?>