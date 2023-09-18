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

<body class='bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50'>

  <div class="flex md:h-screen flex-col justify-center px-5">


    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm px-10 py-10 bg-white z-40 rounded-xl">
      <a href='index.php' class="flex gap-1 mb-5">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M15 18l-6-6 6-6" />
        </svg>
        <p>Home</p>

      </a>
      <form class="space-y-6" action="userloginprocess.php" method="POST">
        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 px-3 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>

          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
          <div>
              <div class="relative inline-flex  group w-full">
                  <div
                          class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-purple-400 via-emerald-200 to-purple-400 rounded-full blur-xl group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                  </div>
                  <button type="submit" title="Get quote now"
                     class="relative inline-flex items-center justify-center px-8 py-2 text-lg font-medium text-white transition-all duration-200 bg-gradient-to-r from-cyan-900 to-blue-900 rounded-xl w-full shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                     role="button">Login Now
                  </button>
              </div>
          </div>

      </form>


    </div>
  </div>

</body>

</html>