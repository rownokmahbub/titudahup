<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />






    <script>
        tailwind.config = {
            theme: {
                colors: {
                    primary: '#075985',
                    secondary: '#0284c7',
                },
                extend: {
                    animation: {
                        marquee: 'marquee 35s linear infinite',
                    },
                    keyframes: {
                        marquee: {
                            '0%': {
                                transform: 'translateY(0%)'
                            },
                            '100%': {
                                transform: 'translateY(-100%)'
                            },
                        }
                    },
                }
            }
        }
    </script>

</head>

<body class="md:px-10 mx-auto bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40">
    <!-- Navbar goes here -->
    <a href="./index.php" class="text-center mb-3 font-semibold flex gap-3 mt-10 items-center sticky top-0 left-0 w-full ">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M19 12H6M12 5l-7 7 7 7" />
        </svg>
        Back</a>
    <p class='text-center text-2xl font-semibold'>টেডলাইসেন্স তালিকা </p>
    <!--hero section-->
    <div class="my-10">

        <table id="myTable" class="cell-border display responsive wrap" style="width:100%">
            <thead>
                <tr>
                    <th data-priority="1">লাইসেন্স নম্বর</th>
                    <th data-priority="1">নাম</th>
                    <th data-priority="2">পিতার নাম/স্বামীর নাম</th>
                    <th data-priority="2">মাতার নাম</th>
                    <th data-priority="2">ওয়ার্ড</th>
                    <th data-priority="2">জন্মস্থান </th>
                    <th data-priority="2">মেসার্স</th>
                    <th data-priority="2">ব্যবসা ধরন</th>
                    <th data-priority="2">কর</th>
                    <th data-priority="2">ভোটার আইডি</th>
                    <th data-priority="2">মোবাইল নাম্বার</th>
                    <th data-priority="2">উপজেলা</th>
                    <th data-priority="2">জেলা</th>

                </tr>
            </thead>
            <tbody>

                <?php
                include './dbconnect.php';
                $query = "SELECT * FROM `tadeentry`";
                $poriciti = mysqli_query($con, $query);

                while ($row = mysqli_fetch_assoc($poriciti)) {
                    $id = $row['id'];
                ?>
                    <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">

                        <td class=''><?= $row['licence_no'] ?></td>
                        <td class=''><?= $row['name'] ?></td>
                        <td class=''><?= $row['father_husband'] ?></td>
                        <td class=''><?= $row['mother_name'] ?></td>
                        <td class=''><?= $row['word'] ?></td>
                        <td class=''><?= $row['bplace'] ?></td>
                        <td class=''><?= $row['tradename'] ?></td>
                        <td class=''><?= $row['babshardhoron'] ?></td>
                        <td class=''><?= $row['kor'] ?></td>
                        <td class=''><?= $row['voterid'] ?></td>
                        <td class=''><?= $row['mobileno'] ?></td>
                        <td class=''><?= $row['upozela'] ?></td>
                        <td class=''><?= $row['zela'] ?></td>



                    </tr>
                <?php
                }


                ?>

            </tbody>
        </table>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
        $('#myTable').DataTable({
            responsive: true,
            columnDefs: [{
                    responsivePriority: 1,
                    targets: 0
                },
                {
                    responsivePriority: 2,
                    targets: -1
                }
            ]
        });
    </script>
    <script src="style.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
</body>

</html>