<?php
include 'dbconnect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
</head>

<body>


    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>

                <th>লাইসেন্স নম্বর</th>
                <th>নাম</th>
                <th>পিতার নাম/স্বামীর নাম</th>
                <th>ব্যবসার স্থান</th>
                <th>ব্যবসার ধরণ</th>
                <th>ওয়ার্ড</th>

                <th>মোট কর</th>



            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM tadeentry  ";
            $all_data = mysqli_query($con, $query);
            while ($row = mysqli_fetch_array($all_data)) {
            ?>
                <tr>
                    <td><?= $row['licence_no'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['father_husband'] ?></td>
                    <td><?= $row['messars'] ?></td>
                    <td><?= $row['babshardhoron'] ?></td>

                    <td><?= $row['word'] ?></td>

                    <td><?= $row['kor'] ?></td>





                </tr>
            <?php
            }
            ?>
        </tbody>

    </table>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <script src="https://use.fontawesome.com/2c7ebecd35.js"></script>

</body>

</html>