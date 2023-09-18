<?php
session_start();
$email = $_SESSION['email'];
if ($email == null) {
    header('Location:subuser.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">


</head>

<body class="md:px-32 mx-auto bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50">
    <div class="flex flex-col gap-10 px-5 justify-center items-center md:h-screen">
        <div class="space-y-2 text-center">
            <p class='text-4xl font-semibold leading-snug'>ড্যাশবোর্ড এ আপনাকে স্বাগতম</p>


        </div>
        <form action="userlogout.php">


            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2 items-center mt-2">

                <a href='taxentry.php'
                    class='px-4 py-2.5 cursor-pointer rounded-full text-white font-semibold text-base bg-sky-800 hover:bg-sky-600  duration-300 text-center transition'>ট্যাক্স
                    এন্ট্রি </a>
                <a href='taxentrytable.php'
                    class='px-4 py-2.5 cursor-pointer rounded-full text-white font-semibold text-base bg-purple-800 hover:bg-purple-600  duration-300 text-center transition'>ট্যাক্স
                    এডিট </a>
                <a href='tadeentry.php'
                    class='px-4 py-2 cursor-pointer rounded-full text-white font-semibold text-base bg-sky-800 hover:bg-sky-600  duration-300 text-center transition'>টেড
                    এন্ট্রি</a>
                <a href='tadeentrytable.php'
                    class='px-4 py-2 cursor-pointer rounded-full text-white font-semibold text-base bg-purple-800 hover:bg-purple-600  duration-300 text-center transition'>টেড
                    এডিট</a>
                <a href='nagorikentry.php'
                    class='px-4 py-2 cursor-pointer rounded-full text-white font-semibold text-base bg-sky-800 hover:bg-sky-600  duration-300 text-center transition'>নাগরিক
                    এন্ট্রি </a>
                <a href='nagoriktable.php'
                    class='px-4 py-2 cursor-pointer rounded-full text-white font-semibold text-base bg-purple-800 hover:bg-purple-600  duration-300 text-center transition'>নাগরিক
                    এডিট </a>

                <a href='waresentry.php'
                    class='px-4 py-2 cursor-pointer rounded-full text-white font-semibold text-base bg-sky-800 hover:bg-sky-600  duration-300 text-center transition'>ওয়ারেশ
                    এন্ট্রি </a>
                <a href='warestable.php'
                    class='px-4 py-2 cursor-pointer rounded-full text-white font-semibold text-base bg-purple-800 hover:bg-purple-600  duration-300 text-center transition'>ওয়ারেশ
                    এডিট</a>
                <a href='boyoskovataentry.php'
                    class='px-4 py-2 cursor-pointer rounded-full text-white font-semibold text-base bg-sky-800 hover:bg-sky-600  duration-300 text-center transition'>বয়স্ক
                    ভাতা
                    এন্ট্রি </a>
                <a href='boyoskotable.php'
                    class='px-4 py-2 cursor-pointer rounded-full text-white font-semibold text-base bg-purple-800 hover:bg-purple-600  duration-300 text-center transition'>বয়স্ক
                    ভাতা এডিট</a>
                <a href='bidhobavataentry.php'
                    class='px-4 py-2 cursor-pointer rounded-full text-white font-semibold text-base bg-sky-800 hover:bg-sky-600  duration-300 text-center transition'>বিধবা
                    ভাতা
                    এন্ট্রি </a>
                <a href='bidhobatable.php'
                    class='px-4 py-2 cursor-pointer rounded-full text-white font-semibold text-base bg-purple-800 hover:bg-purple-600  duration-300 text-center transition'>বিধবা
                    এডিট</a>
                <a href='protibondhivata.php'
                    class='px-4 py-2 cursor-pointer rounded-full text-white font-semibold text-base bg-sky-800 hover:bg-sky-600  duration-300 text-center transition'>প্রতিবন্ধী
                    ভাতা এন্ট্রি </a>
                <a href='protibondhitable.php'
                    class='px-4 py-2 cursor-pointer rounded-full text-white font-semibold text-base bg-purple-800 hover:bg-purple-600  duration-300 text-center transition'>প্রতিবন্ধী
                    এডিট</a>
                <a href='masisuvata.php'
                    class='px-4 py-2 cursor-pointer rounded-full text-white font-semibold text-base bg-sky-800 hover:bg-sky-600  duration-300 text-center transition'>মা
                    ও শিশু ভাতা এন্ট্রি </a>
                <a href='masisutable.php'
                    class='px-4 py-2 cursor-pointer rounded-full text-white font-semibold text-base bg-purple-800 hover:bg-purple-600  duration-300 text-center transition'>মা
                    ও শিশু ভাতা এডিট</a>
            </div>
            <br><br>
            <button
                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-full duration-300 text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                type='submit'>Log Out</button>
        </form>
    </div>


</body>

</html>