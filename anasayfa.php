<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./css/navbar.css">
  <link rel="stylesheet" href="./css/bodyupdated.css">
  <link rel="stylesheet" href="./css/image.css">
  <link rel="icon" href="./logo/logo4.jpg" type="image/x-icon">
  <title>Anasayfa</title>
</head>

<body class="bg-black" style="background-color: rgb(32, 32, 32); color: white;">


  <?php include("./sayfabilesenleri/anasayfa/navbar.php") ?>



  <div class="bodyhomepage">

    <div class="photos">
      <div>
        <div class="flex flex-col space-y-8 sm:space-y-12 items-center">

          <h2 class="text-4xl font-semibold sm:mr-5 md:mr-0 md:text-5xl" style="filter:brightness(98%)">Hoşgeldiniz</h2>

          <a href="./boykotmarkabul.php"
            style="background-color:rgb(32, 32, 32) !important; border-width: 2px; color: white;"
            class="py-2.5 px-5 me-0 mb-2 text-xs sm:text-sm font-medium focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Boykot
            markası arayın.</a>

        </div>
      </div>
    </div>

   
    <?php include("./sayfabilesenleri/anasayfa/footer.php") ?>

  </div>

</body>

</html>
