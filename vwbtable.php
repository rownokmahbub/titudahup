<?php
session_start();
$email = $_SESSION['email'];
if ($email == null) {
    header('Location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="style.css">
</head>

<body class="md:px-32 mx-auto  py-20">
    <a href="./userhome.php" class="text-center bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 font-semibold flex gap-3 items-center sticky top-0 left-0 w-full py-5 px-5">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M19 12H6M12 5l-7 7 7 7" />
        </svg>
        Back</a>
<p class="text-center font-semibold text-2xl md:text-3xl mt-5"> ভিডব্লিউবি তথ্য এডিট করুণ </p>
    <div class="container mt-5">
        <table id="example" class="display rounded-md overflow-hidden" style="width:100%">
            <thead>
                <tr class="bg-sky-900 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0 text-white">
                    <th>ক্রমিক নং</th>
                    <th>নাম</th>
                    <th>পিতা/স্বামীর নাম </th>
                    <th>গ্রাম</th>
                    <th>ওয়ার্ড</th>
                    <th>ভোটার আইডি</th>
                    <th>চক্র</th>
                    <th>অ্যাকশন</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include './dbconnect.php';
                $query = "SELECT * FROM `vwb`";
                $poriciti = mysqli_query($con, $query);

                while ($row = mysqli_fetch_assoc($poriciti)) {
                    $id = $row['id'];
                ?>
                    <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">

                        <td class='border-grey-light border  p-3  cursor-pointer'><?= $row['slno'] ?></td>

                        <td class='border-grey-light border  p-3  cursor-pointer'><?= $row['name'] ?></td>
                        <td class='border-grey-light border  p-3  cursor-pointer'><?= $row['fatherhusband'] ?></td>
                        <td class='border-grey-light border  p-3  cursor-pointer'><?= $row['gram'] ?></td>
                        <td class='border-grey-light border  p-3  cursor-pointer'><?= $row['word'] ?></td>
                        <td class='border-grey-light border  p-3  cursor-pointer'><?= $row['voterid'] ?></td>
                        <td class='border-grey-light border  p-3  cursor-pointer'><?= $row['cokro'] ?></td>


                        <td class="border-grey-light border  p-3  cursor-pointer flex  gap-3 items-center">
                            <a class="flex items-center text-teal-900 hover:font-medium" href="./vwbedit.php?id=<?php echo $id; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#115e59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path>
                                    <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                                </svg>
                                Edit
                            </a>
                            <a class="flex items-center text-teal-900 hover:font-medium" href="./vwbdelete.php?id=<?php echo $id; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#991b1b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg>
                                Delete
                            </a>
                        </td>





                    </tr>
                <?php
                }


                ?>
            </tbody>
        </table>

    </div>
</body>

</html>