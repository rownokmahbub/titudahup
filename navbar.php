<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav class="sticky top-0 left-0 w-full bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="index.php" class="flex items-center">
                <img src="./Assets/logo.png" class="h-8 mr-3" alt="logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap ">তিতুদহ ইউপি</span>
            </a>
            <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto " id="navbar-dropdown">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg  md:flex-row md:space-x-4 space-y-8 md:space-y-0 md:mt-0 md:border-0 items-center">
                    <li>
                        <a href="index.php" class="block py-2 pl-3 pr-4   rounded  md:p-0 " aria-current="page">মুল
                            পাতা</a>
                    </li>
                    <li class="">
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary md:p-0 md:w-auto  ">ট্যাক্স
                            ও সনদ <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar" class="z-50 hidden font-normal bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 divide-y divide-gray-100 rounded-lg shadow w-44 ">
                            <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="taxtable.php" class="block px-4 py-2 hover:bg-primary hover:text-white">হোল্ডিং ট্যাক্স
                                        যাচাই</a>
                                </li>

                                <li>
                                    <a href="sonodjachai.php" class="block px-4 py-2 hover:bg-primary hover:text-white "> নাগরিক সনদ
                                        যাচাই</a>
                                </li>
                                <li>
                                    <a href="tadejachai.php" class="block px-4 py-2 hover:bg-primary hover:text-white ">টেড লাইন্সেস
                                        যাচাই</a>
                                </li>
                                <li>
                                    <a href="waresjachai.php" class="block px-4 py-2 hover:bg-primary hover:text-white ">ওয়ারেশ সনদ যাচাই</a>
                                </li>
                            </ul>

                        </div>
                    </li>

                    <li class="z-50">
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar5" class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary md:p-0 md:w-auto  ">গ্যালারি
                            <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar5" class="z-50 hidden font-normal bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 divide-y divide-gray-100 rounded-lg shadow w-44 ">
                            <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="porishodborgo.php" class="block px-4 py-2 hover:bg-primary hover:text-white ">পরিষদ বর্গ</a>
                                </li>
                                <li>
                                    <a href="kormokortaborgo.php" class="block px-4 py-2 hover:bg-primary hover:text-white ">কর্মকর্তা বর্গ ও
                                        কর্মচারী</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white ">ভিডিও</a>
                                </li>
                            </ul>

                        </div>
                    </li>
                    <li class="z-50">
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar2" class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary md:p-0 md:w-auto  ">অন্যান্য
                            <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar2" class="z-50 hidden font-normal bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 divide-y divide-gray-100 rounded-lg shadow w-44 ">
                            <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="shikkhaprotisthan.php" class="block px-4 py-2 hover:bg-primary hover:text-white ">শিক্ষা প্রতিষ্ঠান</a>
                                </li>
                                <li>
                                    <a href="protisthan.php" class="block px-4 py-2 hover:bg-primary hover:text-white ">প্রতিষ্ঠান সমূহ</a>
                                </li>
                                <li>
                                    <a href="mouja.php" class="block px-4 py-2 hover:bg-primary hover:text-white ">মৌজার
                                        তালিকা</a>
                                </li>
                                <li>
                                    <a href="vwb.php" class="block px-4 py-2 hover:bg-primary hover:text-white ">ভিডব্লিউবি
                                        তালিকা</a>
                                </li>

                                <li>
                                    <a href="gram.php" class="block px-4 py-2 hover:bg-primary hover:text-white ">গ্রামের
                                        তালিকা </a>
                                </li>
                            </ul>

                        </div>
                    </li>
                    <li class="z-50">
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar3" class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary md:p-0 md:w-auto  ">ভাতাভোগী
                            তালিকা <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar3" class="z-50 hidden font-normal bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 divide-y divide-gray-100 rounded-lg shadow w-44 ">
                            <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="boyoskovtable.php" class="block px-4 py-2 hover:bg-primary hover:text-white ">বয়স্ক ভাতা</a>
                                </li>
                                <li>
                                    <a href="bidhobavtable.php" class="block px-4 py-2 hover:bg-primary hover:text-white ">বিধবা ভাতা</a>
                                </li>
                                <li>
                                    <a href="protibondhivtable.php" class="block px-4 py-2 hover:bg-primary hover:text-white ">প্রতিবন্ধি ভাতা</a>
                                </li>
                                <li>
                                    <a href="masisuvtable.php" class="block px-4 py-2 hover:bg-primary hover:text-white ">মা ও শিশু ভাতা
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </li>
                    <li class="hover:scale-95">
                        <div>
                            <div class="relative inline-flex w-full group">
                                <div class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-purple-400 via-emerald-200 to-purple-400 rounded-full blur-xl group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                                </div>
                                <a href="./subuser.php" title="Get quote now" class="relative inline-flex items-center justify-center px-4 py-2 text-lg font-medium text-white transition-all duration-200 bg-gradient-to-r from-cyan-900 to-blue-900 rounded-full shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900" role="button">User Login
                                </a>
                            </div>
                        </div>

                    </li>
                    <li class="hover:scale-95">
                        <div>
                            <div class="relative inline-flex w-full group">
                                <div class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-purple-400 via-emerald-200 to-purple-400 rounded-full blur-xl group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                                </div>
                                <a href="./login2.php" title="Get quote now" class="relative inline-flex items-center justify-center px-4 py-2 text-lg font-medium text-white transition-all duration-200 bg-gradient-to-r from-cyan-900 to-blue-900 rounded-full shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900" role="button">Admin Login
                                </a>
                            </div>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
    </nav>

</body>

</html>