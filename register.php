<?php

    include 'services/config.php';
    session_start();

    $message = "";
    $error = null;

    if(isset($_POST['btn_register'])) {
        $nama = mysqli_real_escape_string($conn, $_POST['nama']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $safe_password = hash("sha256", $password);

        $query = mysqli_query($conn, "INSERT INTO perawat (nama, email, password) VALUES ('$nama', '$email', '$safe_password')");

        if($query) {
            $error = False;
            $message = "Berhasil melakukan registrasi! Silahkan ke halaman login.";
        } else {
            $error = True;
            $message = "Gagal melakukan Registrasi! Coba lagi.";
        }
    }

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nosnippet, noarchive">
    <link rel="icon" href="img/logo.png" type="image/icon type">
    <title>Welcome to ICLINIC | Register</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />
</head>

<body>
    
    <section id="Login">
        <div class="login">

            <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-white">
  <body class="h-full">
  ```
-->
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-10 w-auto" src="media/img/Icon.png" alt="Your Company">
      <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Register your account</h2>
    </div>
    
    <?php if ($error !== null) { ?>
      <div class="alert <?php echo $error ? 'alert-warning' : 'alert-primary'; ?>" role="alert">
        <?php echo $message ?>
      </div>
    <?php } ?>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="#" method="POST">
      <div>
          <label for="nama" class="block text-sm/6 font-medium text-gray-900">Nama</label>
          <div class="mt-2">
            <input type="text" name="nama" id="nama" autocomplete="nama" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
          </div>
        </div>

        <div>
          <label for="username" class="block text-sm/6 font-medium text-gray-900">Email</label>
          <div class="mt-2">
            <input type="email" name="email" id="username" autocomplete="username" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
          </div>
        </div>
  
        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
          </div>
          <div class="mt-2">
            <input type="password" name="password" id="password" autocomplete="current-password" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
          </div>
        </div>
  
        <div>
          <button type="submit" name="btn_register" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm/6 font-medium text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
          <a href="login.php" class="flex w-full justify-center rounded-lg bg-white px-3 py-1.5 text-sm/6 font-medium text-indigo-600 shadow-sm hover:bg-indigo-500 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 border border-blue-700 mt-2">Sign In</a>
        </div>
      </form>
  
    </div>
  </div>
  

        </div>
    </section>

</body>