<?php

session_start();
$email = $_SESSION['email'];
if ($email == null) {
    header('Location:../../login2.php');
}
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /*Overrides for Tailwind CSS */

        /*Form fields*/
        .dataTables_wrapper select,
        .dataTables_wrapper .dataTables_filter input {
            color: #4a5568;
            /*text-gray-700*/
            padding-left: 1rem;
            /*pl-4*/
            padding-right: 1rem;
            /*pl-4*/
            padding-top: .5rem;
            /*pl-2*/
            padding-bottom: .5rem;
            /*pl-2*/
            line-height: 1.25;
            /*leading-tight*/
            border-width: 2px;
            /*border-2*/
            border-radius: .25rem;
            border-color: #edf2f7;
            /*border-gray-200*/
            background-color: #edf2f7;
            /*bg-gray-200*/
        }

        /*Row Hover*/
        table.dataTable.hover tbody tr:hover,
        table.dataTable.display tbody tr:hover {
            background-color: #ebf4ff;
            /*bg-indigo-100*/
        }

        /*Pagination Buttons*/
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Current selected */
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #667eea !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Hover */
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #667eea !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Add padding to bottom border */
        table.dataTable.no-footer {
            border-bottom: 1px solid #e2e8f0;
            /*border-b-1 border-gray-300*/
            margin-top: 0.75em;
            margin-bottom: 0.75em;
        }

        /*Change colour of responsive icon*/
        table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
        table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
            background-color: #667eea !important;
            /*bg-indigo-500*/
        }
    </style>

</head>

<body class="md:px-32 mx-auto  py-20">
    <a href="../home.php" class="text-center bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 font-semibold flex gap-3 items-center sticky top-0 left-0 w-full py-5 px-5">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M19 12H6M12 5l-7 7 7 7" />
        </svg>
        Back</a>

    <p class="text-center font-semibold text-2xl md:text-3xl">ইউনিয়ন এর পরিচিতি এডিট করুণ </p>
    <div class="container mt-5">
        <table id="example" class="display rounded-md overflow-hidden" style="width:100%">
            <thead>
                <tr class="bg-sky-900 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0 text-white">
                    <th>ক্রমিক নং</th>
                    <th>ইউনিয়ন পরিচিতি</th>
                    <th>অ্যাকশন</th>

                </tr>
            </thead>
            <tbody>

                <?php
                include '../../dbconnect.php';
                $query = "SELECT * FROM `unionporiciti`";
                $poriciti = mysqli_query($con, $query);

                while ($row = mysqli_fetch_assoc($poriciti)) {
                    $id = $row['id'];
                ?>
                    <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">

                        <td class='border-grey-light border  p-3  cursor-pointer'><?= $row['id'] ?></td>
                        <td class='border-grey-light border  p-3  cursor-pointer'><?= $row['poriciti'] ?></td>

                        <td class="border-grey-light border  p-3  cursor-pointer flex  gap-3 items-center">
                            <a class="flex items-center text-teal-900 hover:font-medium" href="upporicitiedit.php?id=<?php echo $id; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#115e59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path>
                                    <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                                </svg>
                                Edit
                            </a>
                            <a class="flex items-center text-teal-900 hover:font-medium" href="../delete/poricitidelete.php?id=<?php echo $id; ?>">
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

    <!-- union khobor edit -->

    <p class="text-center font-semibold text-2xl md:text-3xl my-5">ইউনিয়ন এর খবর এডিট করুণ </p>
    <div class="container mt-5">
        <table id="example1" class="display rounded-md overflow-hidden" style="width:100%">
            <thead>
                <tr class="bg-sky-900 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0 text-white py-3">
                    <th>ক্রমিক নং</th>
                    <th>খবর</th>
                    <th>অ্যাকশন</th>

                </tr>
            </thead>
            <tbody>

                <?php
                include '../../dbconnect.php';
                $query = "SELECT * FROM `khobor`";
                $poriciti = mysqli_query($con, $query);

                while ($row = mysqli_fetch_assoc($poriciti)) {
                    $id = $row['id'];
                ?>
                    <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">

                        <td class='border-grey-light border  p-3  cursor-pointer'><?= $row['id'] ?></td>
                        <td class='border-grey-light border  p-3  cursor-pointer'><?= $row['khobor'] ?></td>

                        <td class="border-grey-light border  p-3  cursor-pointer flex  gap-3 items-center">
                            <a class="flex items-center text-teal-900 hover:font-medium" href="khoboredit.php?id=<?php echo $id; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#115e59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path>
                                    <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                                </svg>
                                Edit
                            </a>
                            <a class="flex items-center text-teal-900 hover:font-medium" href="../delete/khobordelete.php?id=<?php echo $id; ?>">
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

    <!-- notice uodate -->

    <p class="text-center font-semibold text-2xl md:text-3xl my-5">ইউনিয়ন এর নোটিস যোগ করুণ </p>
    <div class="container mt-5">
        <table id="example" class="display rounded-md overflow-hidden" style="width:100%">
            <thead>
                <tr class="bg-sky-900 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0 text-white">
                    <th>ক্রমিক নং</th>
                    <th>নোটিশ</th>
                    <th>অ্যাকশন</th>

                </tr>
            </thead>
            <tbody>

                <?php
                include '../../dbconnect.php';
                $query = "SELECT * FROM `notice`";
                $poriciti = mysqli_query($con, $query);

                while ($row = mysqli_fetch_assoc($poriciti)) {
                    $id = $row['id'];
                ?>
                    <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">

                        <td class='border-grey-light border  p-3  cursor-pointer'><?= $row['id'] ?></td>
                        <td class='border-grey-light border  p-3  cursor-pointer'><?= $row['notice'] ?></td>

                        <td class="border-grey-light border  p-3  cursor-pointer flex  gap-3 items-center">
                            <a class="flex items-center text-teal-900 hover:font-medium" href="noticeedit.php?id=<?php echo $id; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#115e59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path>
                                    <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                                </svg>
                                Edit
                            </a>
                            <a class="flex items-center text-teal-900 hover:font-medium" href="../delete/noticedelete.php?id=<?php echo $id; ?>">
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

    <!-- sebar sorto uodate -->

    <p class="text-center font-semibold text-2xl md:text-3xl my-5">ইউনিয়ন এর সেবার শর্ত যোগ করুণ </p>
    <div class="container mt-5">
        <table id="example" class="display rounded-md overflow-hidden" style="width:100%">
            <thead>
                <tr class="bg-sky-900 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0 text-white">
                    <th>ক্রমিক নং</th>
                    <th>সেবার শর্ত</th>
                    <th>অ্যাকশন</th>

                </tr>
            </thead>
            <tbody>

                <?php
                include '../../dbconnect.php';
                $query = "SELECT * FROM `sebarsorto`";
                $poriciti = mysqli_query($con, $query);

                while ($row = mysqli_fetch_assoc($poriciti)) {
                    $id = $row['id'];
                ?>
                    <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">

                        <td class='border-grey-light border  p-3  cursor-pointer'><?= $row['id'] ?></td>
                        <td class='border-grey-light border  p-3  cursor-pointer'><?= $row['sorto'] ?></td>

                        <td class="border-grey-light border  p-3  cursor-pointer flex  gap-3 items-center">
                            <a class="flex items-center text-teal-900 hover:font-medium" href="sebarsortoedit.php?id=<?php echo $id; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#115e59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path>
                                    <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                                </svg>
                                Edit
                            </a>
                            <a class="flex items-center text-teal-900 hover:font-medium" href="../delete/sebarsortodelete.php?id=<?php echo $id; ?>">
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

    <!-- sebar mullo uodate -->

    <p class="text-center font-semibold text-2xl md:text-3xl my-5">ইউনিয়ন এর সেবার মূল্য যোগ করুণ </p>
    <div class="container mt-5">
        <table id="example" class="display rounded-md overflow-hidden" style="width:100%">
            <thead>
                <tr class="bg-sky-900 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0 text-white">
                    <th>ক্রমিক নং</th>
                    <th>সেবার মূল্য</th>
                    <th>অ্যাকশন</th>

                </tr>
            </thead>
            <tbody>

                <?php
                include '../../dbconnect.php';
                $query = "SELECT * FROM `sebarmullo`";
                $poriciti = mysqli_query($con, $query);

                while ($row = mysqli_fetch_assoc($poriciti)) {
                    $id = $row['id'];
                ?>
                    <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">

                        <td class='border-grey-light border  p-3  cursor-pointer'><?= $row['id'] ?></td>
                        <td class='border-grey-light border  p-3  cursor-pointer'><?= $row['mullo'] ?></td>

                        <td class="border-grey-light border  p-3  cursor-pointer flex  gap-3 items-center">
                            <a class="flex items-center text-teal-900 hover:font-medium" href="sebarmulloedit.php?id=<?php echo $id; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#115e59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path>
                                    <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                                </svg>
                                Edit
                            </a>
                            <a class="flex items-center text-teal-900 hover:font-medium" href="../delete/sebarmullodelete.php?id=<?php echo $id; ?>">
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

    <!-- shikkhar  uodate -->

    <p class="text-center font-semibold text-2xl md:text-3xl my-5">শিক্ষা প্রতিষ্ঠান এর তথ্য যোগ করুণ</p>
    <div class="container mt-5">
        <table id="example" class="display rounded-md overflow-hidden" style="width:100%">
            <thead>
                <tr class="bg-sky-900 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0 text-white">
                    <th>কলেজ</th>
                    <th>মাধ্যমিক বিদ্যালয়</th>
                    <th>নিম্ন মাধ্যমিক বিদ্যালয়</th>
                    <th>প্রাথমিক বিদ্যালয়</th>
                    <th>মাদ্রাসা</th>
                    <th>কমিউনিটি সেন্টার</th>
                    <th>শিক্ষার হার</th>
                    <th>অ্যাকশন</th>

                </tr>
            </thead>
            <tbody>

                <?php
                include '../../dbconnect.php';
                $query = "SELECT * FROM `shikkha`";
                $poriciti = mysqli_query($con, $query);

                while ($row = mysqli_fetch_assoc($poriciti)) {
                    $id = $row['id'];
                ?>
                    <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">

                        <td class='border-grey-light border  p-3'><?= $row['college'] ?></td>
                        <td class='border-grey-light border  p-3'><?= $row['maddhomik'] ?></td>
                        <td class='border-grey-light border  p-3'><?= $row['nimo'] ?></td>
                        <td class='border-grey-light border  p-3'><?= $row['prathomic'] ?></td>
                        <td class='border-grey-light border  p-3'><?= $row['madracha'] ?></td>
                        <td class='border-grey-light border  p-3'><?= $row['community'] ?></td>
                        <td class='border-grey-light border  p-3'><?= $row['shikkharhar'] ?></td>

                        <td class="border-grey-light border  p-3  cursor-pointer flex  gap-3 items-center">
                            <a class="flex items-center text-teal-900 hover:font-medium" href="shikkhaedit.php?id=<?php echo $id; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#115e59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path>
                                    <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                                </svg>
                                Edit
                            </a>
                            <a class="flex items-center text-teal-900 hover:font-medium" href="../delete/shikkhadelete.php?id=<?php echo $id; ?>">
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

    <!-- union details  uodate -->

    <p class="text-center font-semibold text-2xl md:text-3xl my-5">ইউনিয়ন এর তথ্য যোগ করুণ</p>
    <div class="container mt-5">
        <table id="example" class="display rounded-md overflow-hidden" style="width:100%">
            <thead>
                <tr class="bg-sky-900 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0 text-white">
                    <th>ডাকঘর</th>
                    <th>গ্রাম</th>
                    <th>মৌজা</th>
                    <th>হাট বাজার</th>
                    <th>পুলিশ ক্যাম্প</th>
                    <th>এনজিও সংস্থা</th>
                    <th>ভুমি অফিস</th>
                    <th>মসজিদ</th>
                    <th>কবরস্থান</th>
                    <th>ঈদগাহ ময়দান</th>
                    <th>মন্দির</th>
                    <th>শ্মশান</th>
                    <th>অ্যাকশন</th>

                </tr>
            </thead>
            <tbody>

                <?php
                include '../../dbconnect.php';
                $query = "SELECT * FROM `uniondetails`";
                $poriciti = mysqli_query($con, $query);

                while ($row = mysqli_fetch_assoc($poriciti)) {
                    $id = $row['id'];
                ?>
                    <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">

                        <td class='border-grey-light border  p-3'><?= $row['dakghor'] ?></td>
                        <td class='border-grey-light border  p-3'><?= $row['gram'] ?></td>
                        <td class='border-grey-light border  p-3'><?= $row['mouja'] ?></td>
                        <td class='border-grey-light border  p-3'><?= $row['hatbazar'] ?></td>
                        <td class='border-grey-light border  p-3'><?= $row['policecamp'] ?></td>
                        <td class='border-grey-light border  p-3'><?= $row['enjio'] ?></td>
                        <td class='border-grey-light border  p-3'><?= $row['vhumi'] ?></td>
                        <td class='border-grey-light border  p-3'><?= $row['mosjid'] ?></td>
                        <td class='border-grey-light border  p-3'><?= $row['koborsthan'] ?></td>
                        <td class='border-grey-light border  p-3'><?= $row['edgah'] ?></td>
                        <td class='border-grey-light border  p-3'><?= $row['mondir'] ?></td>
                        <td class='border-grey-light border  p-3'><?= $row['sosan'] ?></td>

                        <td class="border-grey-light border  p-3  cursor-pointer flex  gap-3 items-center">
                            <a class="flex items-center text-teal-900 hover:font-medium" href="uniondetailsedit.php?id=<?php echo $id; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#115e59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path>
                                    <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                                </svg>
                                Edit
                            </a>
                            <a class="flex items-center text-teal-900 hover:font-medium" href="../delete/uniondetailsdelete.php?id=<?php echo $id; ?>">
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



<!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!--Datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script>
    $('#example').DataTable({
        order: [
            [3, 'desc']
        ],
    });
</script>

</html>