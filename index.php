<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nosnippet, noarchive">
    <link rel="icon" href="img/logo.png" type="image/icon type">
    <title>Welcome to ICLINIC</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    

    <section id="navbar">


<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600 ">
  <div class="max-w-screen-lg flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="index.html" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="media/img/Icon.png" class="h-8" alt="Flowbite Logo">
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">ICLINIC</span>
  </a>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
    <!-- ini button login, gua gapaham gimana caranya biar ke login form -->
      <a href="login.php" type="button" id="LoginButton" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Log In</a>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="#Home" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
      </li>
      <li>
        <a href="#About" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
      </li>
      <li>
        <a href="#Kontak" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

    </section>



  
    <section id="Home">
      <div class="home">
        <div class="py-80">
            <img src="media/img/logo.png" alt="Casphedeus Logo" class="logo">
            <h1 class="mb-8">Selamat Datang Di Sistem Informasi Manajemen RS</h1>
            <h2 class="mt-8">Platform <span class="font-bold">iClinic</span></h2>
        </div>
      </div>
      
      <div class="text-center mt-16">
        <h1 class="font-bold text-4xl">Solusi digital untuk meningkatkan <br>
          efisiensi fasilitas kesehatan</h1>
          <div class="flex justify-center mt-4 mb-2">
          <img src="media/img/welcome.png" alt="welcome" >
          </div>
        <h2 class="font-semibold text-2xl mt-16 md:text-3xl">Penerapan Rekam Medis Elektronik sebagai ujung <br>
          tombak transformasi digital fasilitas kesehatan</h2>
      </div>

      <div class="grid grid-cols-2 mt-12 ml-10 md:ml-24 lg:ml-32">
        <div class="rounded-md shadow-2xl p-4 mr-10 border-y">
          <h1 class="font-semibold text-lg md:text-2xl">UU RI No. 29 Tahun 2004 tentang praktik kedokteran Pasal 79, huruf b</h1>
          <p class="mt-2 mb-2 text-sm md:text-base">Dipidana dengan pidana kurungan paling lama 1 (satu) tahun atau denda paling banyak Rp50.000.000,00 (lima puluh juta rupiah), setiap dokter atau dokter gigi yang dengan sengaja tidak membuat rekam medis</p>
        </div>
        <div class="rounded-md shadow-2xl p-4 mr-2 md:mr-6 border-y">
          <h1 class="font-semibold text-lg md:text-2xl">Permenkes No. 24 Tahun 2022 tentang RM Pasal 45</h1>
          <p class="text-sm md:text-base">Seluruh Fasilitas Kesehatan harus menyelenggarakan Rekam Medis Elektronik sesuai dengan ketentuan dalam Peraturan Menteri ini paling lambat tanggal 31 Desember 2023.</p>
        </div>
      </div>
      <div class="mt-12 ml-10 rounded-md shadow-2xl p-4 mb-12 mr-16 border-y md:ml-24 lg:ml-32">
        <h1 class="font-semibold text-lg md:text-2xl">Kemenkes Meluncurkan Program IHS Satu Sehat</h1>
        <p class="mt-2 mb-2 text-sm md:text-base">Pada 26 Juli 2022 lalu Kemenkes RI meluncurkan Program IHS Satu Sehat, sebuah platform yang akan menyediakan integrasi data dan menyajikan berbagai macam data tersebut, mulai dari rekam medis hingga resume medis dari berbagai macam standarisasi menjadi satu kesatuan yang seragam dalam format dan protokol pertukarannya.</p>
      </div>

    </section>

    <section id="About">
      <div class="about">
        
        <div class="bg-gradient-to-r from-cyan-600 to-green-400 py-12 mt-40">

          <div class="grid grid-cols-2 gap-8">
            <div class="space-y-6 ml-3 md:ml-10 lg:ml-32">
                  <h1 class="text-3xl font-bold text-white">Berinovasi tanpa henti,<br>
                            dorong kemajuan faskes</h1>
                 <h2 class="text-lg text-white">Salah satu cara Trustmedis mewujudkan misinya adalah dengan berinovasi tanpa henti dalam memberikan solusi dan layanan kesehatan yang lebih baik bagi masyarakat. Trustmedis memahami bahwa tantangan di sektor kesehatan semakin kompleks dan memerlukan inovasi yang berkesinambungan.</h2>
                 <button class="bg-blue-600 px-10 py-6 rounded-md text-white hover:bg-blue-800">Hubungi Kami</button>
            </div>
            <div class="">
              <img src="media/img/about1.jpg" alt="kerja" class="w-[520px] rounded-md">
            </div>
          </div>
        </div>
        <div class="pt-20 pb-32 py-10 mt-20">
          <h1 class="text-center text-2xl ml-4 text-blue-950">Kami telah diberikan kepercayaan <br> oleh banyak fasilitas kesehatan di Indonesia</h1>
          <div class="grid grid-cols-1 py-16 md:grid-cols-2 lg:grid-cols-3 justify-items-center">
            <div class="mb-5 w-6/12 rounded-lg p-4 shadow-lg bg-blue-950 lg:ml-32 md:w-9/12">
              <p class="text-lg ml-8 text-white">Berdiri sejak</p>
              <h1 class="text-3xl ml-8 mt-2 font-bold text-white md:text-4xl">2024</h1>
            </div>
            <div class="mb-5 w-6/12 rounded-lg p-4 shadow-lg bg-blue-950  md:w-9/12">
              <p class="text-lg ml-8 text-white">Jumlah Karyawan</p>
              <h1 class="text-3xl ml-8 mt-2 font-bold text-white md:text-4xl">6</h1>
            </div>
            <div class="mb-5 w-6/12 rounded-lg p-4 shadow-lg bg-blue-950 lg:mr-32 md:w-9/12">
              <p class="text-lg ml-8 text-white">Sebaran Pengguna</p>
              <h1 class="text-3xl ml-8 mt-2 font-bold text-white md:text-4xl">10 Provinsi</h1>
            </div>
            <div class="mb-5 w-6/12 rounded-lg p-4 shadow-lg bg-blue-950 lg:ml-32 md:w-9/12">
              <p class="text-lg ml-8 text-white">Jumlah Klien</p>
              <h1 class="text-3xl ml-8 mt-2 font-bold text-white md:text-4xl">50+</h1>
            </div>
            <div class="mb-5 w-6/12 rounded-lg p-4 shadow-lg bg-blue-950 lg:mx-10 md:w-9/12">
              <p class="text-lg ml-8 text-white">Jumlah Pengguna</p>
              <h1 class="text-3xl ml-8 mt-2 font-bold text-white md:text-4xl">100+</h1>
            </div>
            <div class="mb-5 w-6/12 rounded-lg p-4 shadow-lg bg-blue-950 lg:mr-32 md:w-9/12">
              <p class="text-lg ml-8 text-white">Jumlah Pasien Terlayani</p>
              <h1 class="text-3xl ml-8 mt-2 font-bold text-white md:text-4xl">7.000+</h1>
            </div>
          </div>
        </div>
        <div class="pl-10 bg-gray-200 py-10 md:pl-20">
          <div class="grid grid-cols-1 lg:grid-cols-2">
            <div>
          <p class="text-md font-bold text-blue-950 tracking-widest mt-20">Our Leader</p>
          <h1 class="mt-4 text-3xl font-bold">Healthtech solution that you can trust</h1>
          <h2 class="mt-3 font-light">Selamat datang di iClinic, solusi inovatif untuk sistem informasi manajemen rumah sakit yang dirancang untuk mempermudah operasional, meningkatkan efisiensi, dan memberikan pelayanan kesehatan yang lebih baik dengan teknologi canggih yang terintegrasi.</h2>
            </div>
            <div class="grid justify-center mt-8 lg:mt-4">
          <img src="media/img/pale.jpg" alt="pale" width="300" class="rounded-md">
          <p class="bg-blue-800 text-center font-medium text-white rounded-md p-4 mt-4 lg:p-2 w-300">Noval Fatriand <br><span class="font-extralight">Project Manager</span></p>
            </div>
          </div>


          <div class="text-center mt-16 mb-6">
            <h1 class="font-bold text-3xl text-blue-950">Our Teams</h1>
            <h2 class="font-light mt-2">Leader kami merupakan praktisi yang berangkat dari berbagai latar belakang yang berbeda</h2>
          </div>
          <div class="grid grid-cols-8 justify-center gap-6">
            <div class="col-start-1 col-span-2 sm:col-start-2 lg:w-[220px]">
              <img src="media/img/fahri.jpg" alt="fahri" class="rounded-md">
              <p class="bg-blue-800 text-center font-medium text-white rounded-md mt-1 p-2 text-xs md:text-base">Fachri Azis <br><span class="font-extralight">Front-End Developer</span></p>
            </div>
            <div class="col-start-3 col-span-2 sm:col-start-4 lg:w-[220px]">
              <img src="media/img/zaki.jpg" alt="zaki" class="rounded-md">
              <p class="bg-blue-800 text-center font-medium text-white rounded-md mt-1 p-2 text-xs md:text-base">Muhammad Sultan Zakki <br><span class="font-extralight">Desainer</span></p>
            </div>
            <div class="col-start-5 col-span-2 sm:col-start-6 lg:w-[220px]">
              <img src="media/img/rangga.jpg" alt="rangga" class="rounded-md">
              <p class="bg-blue-800 text-center font-medium text-white rounded-md mt-1 p-2 text-xs md:text-base">Ranggafalih Arsyanda <br><span class="font-extralight">Front-End Developer</span></p>
            </div>
            <div class="col-start-2 col-span-2 sm:col-start-3 lg:w-[220px]">
              <img src="media/img/caya.jpg" alt="cahaya" class="rounded-md">
              <p class="bg-blue-800 text-center font-medium text-white rounded-md mt-1 p-2 text-xs md:text-base">Cahaya Ikeu Putri <br><span class="font-extralight">Desainer</span></p>
            </div>
            <div class="col-start-4 col-span-2 sm:col-start-5 lg:w-[220px]">
              <img src="media/img/mauly.jpg" alt="mauly" class="rounded-md">
              <p class="bg-blue-800 text-center font-medium text-white rounded-md mt-1 p-2 text-xs md:text-base">Mauly Sitta Rahmania <br><span class="font-extralight">Desainer</span></p>
            </div>
          </div>

        </div>
      </div>

    </section>




    <section id="Kontak">
      <div class="kontak">

        <!-- jujur ini ga terlalu paham, ngambil dari template -->
        
        <form>
          <div class="space-y-12 justify-center grid mt-20 mb-24">
            <div class="border-b border-gray-900/10 pb-12">
              <h2 class="text-2xl font-bold text-gray-900 text-center md:text-3xl lg:text-4xl">Contact US</h2>
        
              <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                  <label for="username" class="block text-base font-medium text-gray-900 lg:text-lg">Full Name</label>
                  <div class="mt-2">
                    <div class="">
                      <input type="text" name="username" id="username" class="rounded-md block w-full grow py-1.5 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-base" placeholder="Enter Your Full Name">
                    </div>
                  </div>
                </div>

                <div class="sm:col-span-4">
                  <label for="username" class="block text-base font-medium text-gray-900 lg:text-lg">Email</label>
                  <div class="mt-2">
                    <div class="">
                      <input type="email" name="email" id="email" class="rounded-md block w-full py-1.5 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-base" placeholder="Enter Your Email">
                    </div>
                  </div>
                </div>
        
                <div class="col-span-full">
                  <label for="about" class="block text-base font-medium text-gray-900 lg:text-lg">Message</label>
                  <div class="mt-2">
                    <textarea name="message" id="message" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm"></textarea>
                  </div>
                </div>
              </div>
            </div>
        
          <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="submit" class="rounded-md bg-blue-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700">Submit</button>
          </div>
        </form>
          
        

      </div>
    </section>

</body>


