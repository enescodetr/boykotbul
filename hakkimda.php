<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./css/navbar.css">
  <link rel="stylesheet" href="./css/body.css">
  <link rel="stylesheet" href="./css/image.css">
  <title>Hakkımızda</title>
  <link rel="icon" href="./logo/logo4.jpg" type="image/x-icon">
</head>

<body class="bg-black" style=" color: white; ">

  <div class="background"></div>

  <div class="content">
    <?php include("./sayfabilesenleri/hakkimda/navbar.php") ?>


    <div class="hidden sm:block  mx-auto body1 ">


      <img src="./css/photos/wallpaper2.jpg" style="width: 100%; height:300px; object-fit: cover; filter: brightness(80%);  ">
      <div class="p-5 pt-8">
        <h2 class="text-4xl mb-3 pacifico">Hakkımızda</h2>
        <hr class="mb-3">
        <img src="./sayfabilesenleri/hakkimda/footer.php" alt="">
        <p>
          BoykotBul, tüketicilerin bilinçli tercih yapmalarını kolaylaştırmak için kurulmuş bir platformdur. Amacımız,
          boykot edilen markaları ve ürünleri şeffaf bir şekilde listeleyerek, kullanıcıların değerlerine uygun seçimler
          yapmalarına destek olmaktır.
          Bağımsız ve tarafsız bir yaklaşımı benimseyen platformumuzda, boykot sebeplerine dair doğrulanmış bilgiler
          sunuyor, tüketicilerin bilinçli toplumsal hareketlere katılmasını teşvik ediyoruz.
          Tüketim gücünü iyilik için kullan!</p>

      </div>


    </div>

    <!--telefonlar için-->
    <div class="block sm:hidden  mx-auto  ">

      <!--Telefonlar için-->
      <img src="./css/photos/wallpaper2.jpg" style="width: 100%; height:300px; object-fit: cover; filter: brightness(50%); ">
      <div class="p-5 pt-8">
        <h2 class="text-4xl mb-3 pacifico">Hakkımızda</h2>
        <hr class="mb-3">
        <img src="./sayfabilesenleri/hakkimda/footer.php" alt="">
        <p>
          BoykotBul, tüketicilerin bilinçli tercih yapmalarını kolaylaştırmak için kurulmuş bir platformdur. Amacımız,
          boykot edilen markaları ve ürünleri şeffaf bir şekilde listeleyerek, kullanıcıların değerlerine uygun seçimler
          yapmalarına destek olmaktır.
          Bağımsız ve tarafsız bir yaklaşımı benimseyen platformumuzda, boykot sebeplerine dair doğrulanmış bilgiler
          sunuyor, tüketicilerin bilinçli toplumsal hareketlere katılmasını teşvik ediyoruz.
          Tüketim gücünü iyilik için kullan!</p>

      </div>


    </div>

  </div>
  <?php include('./sayfabilesenleri/hakkimda/footer.php') ?>
</body>

<style>

  .background {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background-image: url("./css/photos/wallpaper.webp");
    background-size: contain;
    background-position: center;
    filter: blur(10px) brightness(30%);

    z-index: -1;
  
  }


  .content {
    position: relative;
    z-index: 1;
    
  }
</style>


</html>