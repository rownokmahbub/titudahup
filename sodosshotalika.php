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
  <?php
  include './navbar.php'
  ?>
  <p class='text-center text-2xl mt-5 font-semibold'>সদস্য তালিকা </p>
  <!--hero section-->
  <div class="my-10">

    <table id="myTable" class="cell-border display responsive wrap" style="width:100%">
      <thead>
        <tr>
        <th data-priority="1">ক্রমিক নং </th>
          <th data-priority="1">নাম</th>
          <th data-priority="2">পদবি</th>

          <th data-priority="2">শিক্ষাগত যোগ্যতা</th>
          <th data-priority="2">জন্ম তারিখ </th>
          <th data-priority="2">মোবাইল নং</th>
          <th data-priority="2">ওয়ার্ড নং</th>
          <th data-priority="2">ভোটার আইডি </th>
         
          <th data-priority="2">অ্যাকশন</th>
        </tr>
      </thead>
      <tbody>

        <?php
        include './dbconnect.php';
        $query = "SELECT * FROM `sodosshotalika`";
        $poriciti = mysqli_query($con, $query);

        while ($row = mysqli_fetch_assoc($poriciti)) {
          $id = $row['id'];
        ?>
          <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">

          <td class=''><?= $row['slno'] ?></td>
                        <td class=''><?= $row['name'] ?></td>
                        <td class=''><?= $row['podobi'] ?></td>
                        <td class=''><?= $row['joggota'] ?></td>
                        <td class=''><?= $row['birthdate'] ?></td>
                        <td class=''><?= $row['mobileno'] ?></td>
                        <td class=''><?= $row['word'] ?></td>
                        <td class=''><?= $row['voterid'] ?></td>
            <td class=''>

              <div class="flex gap-3 justify-center items-center w-full">
                <a href="sodossoreport.php?id=<?php echo $id; ?>" class='px-3 py-2 cursor-pointer rounded-xl text-white text-sm  bg-blue-800 hover:bg-blue-600  duration-300 transition flex items-center gap-1'>
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                  </svg>
                </a>

              </div>
            </td>

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