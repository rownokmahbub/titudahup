<?php
session_start();
$email = $_SESSION['email'];
if ($email == null) {
  header('Location:login2.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>


    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">


</head>

<body class="md:px-32 mx-auto bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50">
    <div class="flex flex-col  px-5 justify-center md:h-screen md:py-20 w-full lg:max-w-screen-sm mx-auto items-center">
      
        <div class="space-y-2">
            <p class='text-4xl font-semibold leading-snug text-center mb-10'>অ্যাডমিন ড্যাশবোর্ড এ আপনাকে স্বাগতম</p>

            <form action="logout.php" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-5">
                <div>
                    <div class="relative inline-flex  group w-full">
                        <div
                                class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-purple-400 via-emerald-200 to-purple-400 rounded-full blur-xl group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                        </div>
                        <a href="createuser.php" title="Get quote now"
                           class="relative inline-flex items-center justify-center px-8 py-2 text-lg font-medium text-white transition-all duration-200 bg-gradient-to-r from-cyan-900 to-blue-900 rounded-full shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                           role="button">Create User
                        </a>
                    </div>
                </div>


<!--                <input type="button"-->
<!--                    class="px-4 py-2 cursor-pointer rounded-full text-white font-semibold text-base bg-sky-800 hover:bg-sky-600  duration-300 transition"-->
<!--                    value="User Log" onclick="log();">-->
<!--                <script>-->
<!--                function log() {-->
<!--                    location.assign('userlog.php');-->
<!--                }-->
<!--                </script>-->

                <div>
                    <div class="relative inline-flex  group w-full">
                        <div
                                class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-purple-400 via-emerald-200 to-purple-400 rounded-full blur-xl group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                        </div>
                        <a href="./gallery/ghome.php" title="Get quote now"
                           class="relative inline-flex items-center justify-center px-8 py-2 text-lg font-medium text-white transition-all duration-200 bg-gradient-to-r from-cyan-900 to-blue-900 rounded-full shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                           role="button">Gallery Page
                        </a>
                    </div>
                </div>
                <div>
                    <div class="relative inline-flex w-full group">
                        <div
                                class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-purple-400 via-emerald-200 to-purple-400 rounded-full blur-xl group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                        </div>
                        <a href="home/home.php" title="Get quote now"
                           class="relative inline-flex items-center justify-center px-8 py-2 text-lg font-medium text-white transition-all duration-200 bg-gradient-to-r from-cyan-900 to-blue-900 rounded-full shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                           role="button">Home Page
                        </a>
                    </div>
                </div>
                <div>
                    <div class="relative inline-flex  group">
                        <div
                                class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-purple-400 via-emerald-200 to-purple-400 rounded-full blur-xl group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                        </div>
                        <a href="./protisthan/phome.php" title="Get quote now"
                           class="relative inline-flex items-center justify-center px-8 py-2 text-lg font-medium text-white transition-all duration-200 bg-gradient-to-r from-cyan-900 to-blue-900 rounded-full shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                           role="button">Protisthan
                        </a>
                    </div>
                </div>
                <div>
                    <div class="relative inline-flex w-full group">
                        <div
                                class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-purple-400 via-emerald-200 to-purple-400 rounded-full blur-xl group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                        </div>
                        <a href="./fileuploaddownload.php" title="Get quote now"
                           class="relative inline-flex items-center justify-center px-8 py-2 text-lg font-medium text-white transition-all duration-200 bg-gradient-to-r from-cyan-900 to-blue-900 rounded-full shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                           role="button">Import Export
                        </a>
                    </div>
                </div>
                <div>
                    <div class="relative inline-flex w-full group">
                        <div
                                class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-red-400 via-red-200 to-red-400 rounded-full blur-xl group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                        </div>
                        <button type="submit" title="Get quote now"
                           class="relative inline-flex items-center justify-center px-8 py-2 text-lg font-medium text-white transition-all duration-200 bg-gradient-to-r from-pink-700 to-red-700 rounded-full shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                           role="button">Logout Now
                        </button>
                    </div>
                </div>


            </form>
        </div>

    </div>


</body>

</html>