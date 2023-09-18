<?php
include 'dbconnect.php';

$query = "SELECT * FROM `unionporiciti`";
$poriciti = mysqli_query($con, $query);
$khobor = "SELECT * FROM `khobor`";
$news = mysqli_query($con, $khobor);
$notices = "SELECT notice FROM `notice`";
$notice = mysqli_query($con, $notices);
$sebarsorto = "SELECT * FROM `sebarsorto`";
$sorto = mysqli_query($con, $sebarsorto);
$sebarmullo = "SELECT * FROM `sebarmullo`";
$mullo = mysqli_query($con, $sebarmullo)

?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


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
    <style>
        .google-maps {
            position: relative;
            padding-bottom: 40%;
            height: 0;
            overflow: hidden;
        }

        .google-maps iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100% !important;
            height: 60% !important;
        }
    </style>
</head>

<body class="md:px-32 mx-auto bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-50">
    <!-- Navbar goes here -->
    <?php
    include './navbar.php'
    ?>
    <!--hero section-->

    <div id="default-carousel" class="relative w-full mt-2 rounded-lg overflow-hidden" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden  md:h-[350px]">
            <!-- Item 1 -->
            <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                <img src="Assets/hero1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">

            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="Assets/hero2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">


            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="Assets/hero3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">

            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="Assets/hero4.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">

            </div>

        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>

        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white  z-40/30 dark:bg-gray-800/30 group-hover:bg-white  z-40/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white  z-40/30 dark:bg-gray-800/30 group-hover:bg-white  z-40/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <!-- Main sections -->

    <div class="my-10 ">
        <p class="text-xl font-semibold text-center ">ইউনিয়ন পরিচিতি</p>
        <p class=" flex  justify-center items-center text-justify text-gray-600">

            <?php
            $count = mysqli_num_rows($poriciti);
            if ($count > 0) {
                while ($row = mysqli_fetch_assoc($poriciti)) {
                    echo "{$row['poriciti']}";
                }
            } else {
                echo "আপনার কোনো ডাটা নাই !";
            }

            ?>

        </p>

    </div>

    <!-- notice  -->
    <div class="bg-white  z-40 rounded-xl px-5 py-5 drop-shadow-lg my-10">
        <div class="flex gap-5">
            <div class="space-y-3">
                <p class="text-xl font-semibold">খবর</p>
                <img class="w-20 h-20 rounded-full flex-shrink-0" src="Assets/mike.jpg" alt="mike">
            </div>
            <div class="overflow-x-hidden">
                <div class="py-5 flex flex-col gap-1">
                    <marquee class="mx-4 text-xl h-20" onMouseOver="this.stop()" onMouseOut="this.start()" direction="up" scrollamount="1">
                        <?php
                        $count = mysqli_num_rows($news);
                        if ($count > 0) {
                            while ($row = mysqli_fetch_assoc($news)) {
                                echo "{$row['khobor']}";
                                echo '<br>';
                            }
                        } else {
                            echo "আপনার কোনো খবর  নাই !";
                        }

                        ?>

                    </marquee>


                </div>
            </div>
        </div>
    </div>
    <div class="bg-white  z-40 rounded-xl px-5 py-5 drop-shadow-lg my-10">
        <div class="flex gap-5">
            <div class="space-y-3">
                <p class="text-xl font-semibold">নোটিশ</p>
                <img class="w-20 h-20 rounded-full flex-shrink-0" src="Assets/mogram.png" alt="mike">
            </div>
            <div class="flex flex-col gap-5">
                <p>
                    <?php
                    $count = mysqli_num_rows($notice);
                    if ($count > 0) {
                        while ($row = mysqli_fetch_assoc($notice)) {
                            echo "{$row['notice']}";
                            echo '<br>';
                        }
                    } else {
                        echo "আপনার কোনো ডাটা নাই !";
                    }

                    ?>
                </p>

            </div>
        </div>
    </div>
    <!-- seba somuho -->
    <div class="my-10 grid grid-cols-1 md:grid-cols-2 gap-10">
        <div class="flex flex-col gap-3 border-t-4 border-primary rounded-xl bg-white  z-20 drop-shadow-xl px-5 py-5">
            <p class="text-2xl font-semibold text-center">সেবা পাওয়ার শর্ত সমূহ</p>
            <p class="text-gray-600">
                <?php
                $count = mysqli_num_rows($sorto);
                if ($count > 0) {
                    while ($row = mysqli_fetch_assoc($sorto)) {

                        echo "{$row['sorto']}";
                        echo '<br>';
                    }
                } else {
                    echo "আপনার কোনো ডাটা নাই !";
                }

                ?>
            </p>
        </div>
        <div class="flex flex-col gap-3 border-t-4 border-primary rounded-xl bg-white  z-20 drop-shadow-xl px-5 py-5">
            <p class="text-2xl font-semibold text-center">সেবা মূল্য সমূহ</p>
            <?php
            $count = mysqli_num_rows($mullo);
            if ($count > 0) {
                while ($row = mysqli_fetch_assoc($mullo)) {

                    echo "{$row['mullo']}";
                    echo '<br>';
                }
            } else {
                echo "আপনার কোনো ডাটা নাই !";
            }

            ?>
        </div>
    </div>

    <!-- table -->
    <p class="text-3xl text-center font-semibold px-5 mx-auto w-full my-5">শিক্ষা প্রতিষ্ঠানের তথ্য সমূহ</p>
    <div class="table-wrapper rounded-t-xl rounded-b-xl overflow-hidden">
        <table class="fl-table ">
            <thead>
                <tr>
                    <th>কলেজ</th>
                    <th>মাধ্যমিক বিদ্যালয়</th>
                    <th>নিম্ন মাধ্যমিক বিদ্যালয়</th>
                    <th>প্রাথমিক বিদ্যালয়</th>
                    <th>মাদ্রাসা</th>
                    <th>কমিউনিটি সেন্টার</th>
                    <th>শিক্ষার হার</th>



                </tr>
            </thead>
            <tbody>
                <?php

                $query = "SELECT * FROM `shikkha`";
                $poriciti = mysqli_query($con, $query);

                while ($row = mysqli_fetch_assoc($poriciti)) {
                    $id = $row['id'];
                ?>
                    <tr class="">

                        <td class=''><?= $row['college'] ?></td>
                        <td class=''><?= $row['maddhomik'] ?></td>
                        <td class=''><?= $row['nimo'] ?></td>
                        <td class=''><?= $row['prathomic'] ?></td>
                        <td class=''><?= $row['madracha'] ?></td>
                        <td class=''><?= $row['community'] ?></td>
                        <td class=''><?= $row['shikkharhar'] ?></td>



                    </tr>
                <?php
                }


                ?>


            <tbody>
        </table>
    </div>
    <p class="text-3xl text-center font-semibold px-5 mx-auto w-full my-5">ইউনিয়ন এর বিভিন্ন তথ্য</p>
    <div class="table-wrapper rounded-t-xl rounded-b-xl overflow-hidden">

        <table class="fl-table">
            <thead>
                <tr>
                    <th>ডাকঘর</th>
                    <th>গ্রাম</th>
                    <th>মৌজা</th>
                    <th>হাট বাজার</th>
                    <th>পুলিশ ক্যাম্প</th>
                    <th>এনজিও সংস্থা</th>
                    <th>ইউনিয়ন ভুমি অফিস</th>
                    <th>মসজিদ</th>
                    <th>কবরস্থান</th>
                    <th>ঈদগাহ ময়দান</th>
                    <th>মন্দির</th>
                    <th>শ্মশান</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $query = "SELECT * FROM `uniondetails`";
                $poriciti = mysqli_query($con, $query);

                while ($row = mysqli_fetch_assoc($poriciti)) {
                    $id = $row['id'];
                ?>
                    <tr class="">

                        <td class=''><?= $row['dakghor'] ?></td>
                        <td class=''><?= $row['gram'] ?></td>
                        <td class=''><?= $row['mouja'] ?></td>
                        <td class=''><?= $row['hatbazar'] ?></td>
                        <td class=''><?= $row['policecamp'] ?></td>
                        <td class=''><?= $row['enjio'] ?></td>
                        <td class=''><?= $row['vhumi'] ?></td>
                        <td class=''><?= $row['mosjid'] ?></td>
                        <td class=''><?= $row['koborsthan'] ?></td>
                        <td class=''><?= $row['edgah'] ?></td>
                        <td class=''><?= $row['mondir'] ?></td>
                        <td class=''><?= $row['sosan'] ?></td>


                    </tr>
                <?php
                }


                ?>




            <tbody>
        </table>
    </div>
    <!-- google map -->

    <div class="google-maps rounded-lg overflow-hidden">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.66510394799!2d88.90584107621955!3d23.54454469664642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fed049fab00e85%3A0x4ac7a83302b7ed70!2sTitudah%20Union%20Council!5e0!3m2!1sen!2sbd!4v1687576864406!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- footer area -->
    <div class="px-4  mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
        <div class="grid gap-16 row-gap-10 mb-8 lg:grid-cols-6">
            <div class="md:max-w-md lg:col-span-2">
                <a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
                    <img src="Assets/logo.png" alt="logo">
                    <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">UP</span>
                </a>
                <div class="mt-4 lg:max-w-sm">
                    <p class="text-sm text-gray-800">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam.
                    </p>
                    <p class="mt-4 text-sm text-gray-800">
                        Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                        explicabo.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-5 row-gap-8 lg:col-span-4 md:grid-cols-4">
                <div>
                    <p class="font-semibold tracking-wide text-gray-800">Category</p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">News</a>
                        </li>
                        <li>
                            <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">World</a>
                        </li>
                        <li>
                            <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Games</a>
                        </li>
                        <li>
                            <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">References</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold tracking-wide text-gray-800">Business</p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Web</a>
                        </li>
                        <li>
                            <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">eCommerce</a>
                        </li>
                        <li>
                            <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Business</a>
                        </li>
                        <li>
                            <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Entertainment</a>
                        </li>
                        <li>
                            <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Portfolio</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold tracking-wide text-gray-800">Apples</p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Media</a>
                        </li>
                        <li>
                            <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Brochure</a>
                        </li>
                        <li>
                            <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Nonprofit</a>
                        </li>
                        <li>
                            <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Educational</a>
                        </li>
                        <li>
                            <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Projects</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold tracking-wide text-gray-800">Cherry</p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Infopreneur</a>
                        </li>
                        <li>
                            <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Personal</a>
                        </li>
                        <li>
                            <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Wiki</a>
                        </li>
                        <li>
                            <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Forum</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-between pt-5 pb-10 border-t sm:flex-row">
            <p class="text-sm text-gray-600">
                © Copyright 2020 Lorem Inc. All rights reserved.
            </p>
            <div class="flex items-center mt-4 space-x-4 sm:mt-0">
                <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
                    <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                        <path d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z">
                        </path>
                    </svg>
                </a>
                <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
                    <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                        <circle cx="15" cy="15" r="4"></circle>
                        <path d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z">
                        </path>
                    </svg>
                </a>
                <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
                    <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                        <path d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    <script src="style.js"></script>
</body>

</html>