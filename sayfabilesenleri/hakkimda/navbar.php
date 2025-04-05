<?php


$metin = <<<ENES

<!--Bilgisayarlar için-->
<nav class="hidden sm:block navbarsettings" style="background-color: rgb(0,0,0) !important;">
  <div style="width: 100%;" class=" flex flex-wrap items-center justify-between mx-auto py-4 px-4">

    <!--Kısım1-->
    <div class="flex flex-row justify-start">
      <div>
        <a href="./anasayfa.php" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="./logo/logo.jpg" class="h-8 rounded-md" />
          <span class="self-center text-2xl font-bolder whitespace-nowrap dark:text-white font-mono"></span>
        </a>
      </div>

      <div class="hidden renk sm:block menuler flex-wrap   flex space-x-2 items-center cdx">

        <a href="./anasayfa.php" >Anasayfa</a>
        <a href="./hakkimda.php" class="underline">Hakkımızda</a>
        <a href="./boykotmarkabul.php">BoykotAra</a>


      </div>


    </div>

    <!--Kısım3-->
    <div class="flex items-center md:order-2  md:space-x-0 rtl:space-x-reverse">
      <button type="button"
        class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
        data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        <a href="./index2.html">
          <img class="w-8 h-8 rounded-full" src="./logo/logo2.png" alt="user photo">
        </a>
      </button>
    </div>




  </div>


</nav>

<!--telefonlar için-->
<nav class="block sm:hidden" style="background-color: rgb(0,0,0) !important;">
  <div style="width: 100%;" class=" flex flex-wrap items-center justify-between mx-auto py-4 px-4">

    <!--soltaraf-->
    <div class="flex flex-col justify-start">
   
       <div>
        <a href="./anasayfa.php" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="./logo/logo.jpg" class="h-8 rounded-md" />
          <span class="self-center text-lg font-bolder whitespace-nowrap dark:text-white font-mono">Boykotbul</span>
        </a>
      </div>

     


    </div>





    <!--ensagtaraf-->
    <div class="flex items-center md:order-2  md:space-x-0 rtl:space-x-reverse">
      <button type="button"
        class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
        data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        <a href="./index2.html">
          <img class="w-8 h-8 rounded-full" src="./logo/logo2.png" alt="user photo">
        </a>
      </button>
    </div>




  </div>

  <div class="menuler renk navbarsettings2 px-7 flex   w-100 justify-center  ">

  <a href="./anasayfa.php" >Anasayfa</a>
  <a href="./hakkimda.php" class="underline">Hakkımızda</a>
  <a href="./boykotmarkabul.php">BoykotAra</a>


  </div>

</nav>

ENES;

print ($metin);







?>