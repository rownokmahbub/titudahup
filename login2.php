<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
</head>

<body>

    <div class="relative flex flex-col justify-center items-center min-h-screen overflow-hidden bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50">
        <form class="p-10 bg-white via-purple-50 to-pink-50 z-40 r drop-shadow-lg space-y-4 rounded-2xl shadow-2xl shadow-gray-300 flex flex-col" action="loginprocess2.php" id="demo-form" method="POST">
            <a href='index.php' class="flex gap-1 mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M15 18l-6-6 6-6" />
                </svg>
                <p>Home</p>

            </a>


            <input type="hidden" id="token" name="token">

            <!-- Email -->
            <div class="flex flex-col gap-2">
                <label for="hr45jl345g">Email</label>
                <input type="email" name="email" id="hr45jl345g" required class="peer border-slate-400 border w-64 rounded-lg px-4 py-2 ">
                <p class="invisible peer-invalid:visible text-red-700 font-light w-full">
                    Please enter a valid email address
                </p>
            </div>


            <div class="flex flex-col gap-2">
                <label for="a3d4g7k45">Password</label>
                <input type="password" name="pass" id="a3d4g7k45" required class="peer border-slate-400 w-64 border rounded-lg px-2 py-2">

                <p class="invisible peer-invalid:visible text-red-700 font-light">
                    Please enter your password
                </p>
            </div>

            <div>
                <div class="relative inline-flex  group w-full">
                    <div
                            class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-purple-400 via-emerald-200 to-purple-400 rounded-full blur-xl group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                    </div>
                    <button type="submit" title="Get quote now"
                       class="relative inline-flex items-center justify-center px-8 py-2 text-lg font-medium text-white transition-all duration-200 bg-gradient-to-r from-cyan-900 to-blue-900 rounded-xl shadow-lg w-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                       role="button">Login Now
                    </button>
                </div>
            </div>

        </form>


</body>

</html>