<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "boykotbul";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Bağlantı hatası: " . $conn->connect_error);
}

$marka_adi = '';
$boykot_durumu = '';
$aciklama = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['marka_adi'])) {
  $marka_adi = $conn->real_escape_string($_POST['marka_adi']);


  $sql = "SELECT * FROM boykot_markalari WHERE marka_adi LIKE '%$marka_adi%'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();
    $tam_marka_adi = strtoupper(trim($row['marka_adi'])); 
    $boykot_durumu = $row['boykot_durumu'] ? "$tam_marka_adi Boykot Ediliyor.." : "$tam_marka_adi Boykot Edilmiyor..";
    $aciklama = $row['aciklama'];
  } else {
    $boykot_durumu = "Boykot listesinde bulunamadı.";
  }
}

$conn->close();
?>


<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./css/navbar.css">
  <link rel="stylesheet" href="./css/bodyupdated.css">
  <link rel="stylesheet" href="./css/imageboykotbul.css">
  <link rel="stylesheet" href="./css/font.css">
  <title>Boykotbul</title>
  <link rel="icon" href="./logo/logo4.jpg" type="image/x-icon">
</head>

<body class="bg-black" style="background-color: rgb(32, 32, 32); color: white;">


  <?php include("./sayfabilesenleri/boykotmarkabul/navbar.php") ?>

  <div class="bodyhomepage">

    <div class="photos">
      <div>
        <div class="flex flex-col space-y-8 sm:space-y-12 items-center">

          <h2 class="text-4xl font-semibold sm:mr-5 md:mr-0 md:text-5xl" style="filter:brightness(100%)">Boykot mu
            araştırın..</h2>


          <form method="POST" action="./boykotmarkabul.php">
            <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
            <div class="relative">
              <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
              </div>
              <input type="search" name="marka_adi" id="search"
                class="block p-4 ps-10  w-80 sm:w-96 text-sm text-white  rounded-lg bg-black placeholder-white focus:ring-blue-500 focus:border-blue-500"
                placeholder="Boykot markaları araştırın." required />
              <button type="submit"
                class="text-white absolute end-2.5 bottom-2.5 bg-slate-800 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Ara</button>
            </div>
          </form>



          <?php if ($marka_adi): ?>
            <div class="mt-6 roboto py-7 px-12 rounded-lg " style="background-color: rgba(32, 32, 32, 0.934);">
              <?php if ($boykot_durumu == "Boykot listesinde bulunamadı."): ?>
                <p><strong>Arattığınız Marka Adı:</strong> <?= strtoupper(htmlspecialchars(trim($marka_adi))); ?></p>
                <p><strong>Durum:</strong> <?= $boykot_durumu ?></p>
              <?php else: ?>
                <p><strong>Arattığınız Marka Adı:</strong> <?= strtoupper(htmlspecialchars($tam_marka_adi)); ?></p>
                <p><strong>Boykot Durumu:</strong> <?= $boykot_durumu ?></p>
              <?php endif; ?>
            </div>
          <?php endif; ?>


        </div>
      </div>
    </div>


    <?php include("./sayfabilesenleri/anasayfa/footer.php") ?>

  </div>

</body>

<style>
  .scf {
    @media (min-width: 640px) {
      width: 800px !important;
    }

    width: 300px !important;
  }
</style>

</html>