<?php

    include '../services/config.php';
    session_start();

    if($_SESSION['is_login'] == False) {
        header('location: ../index.php');
    }

    if(isset($_POST['btn_logout'])) {
        session_unset();
        session_destroy();

        header('location: ../index.php');
    }


    $dokter_trouble = "";

    if(isset($_POST['btn_tambahDokter'])) {
        $nama = $_POST['nama'];
        $spesialisasi = $_POST['spesialisasi'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];

        $query = mysqli_query($conn, "INSERT INTO dokter (nama, spesialisasi, alamat, email) VALUES ('$nama', '$spesialisasi', '$alamat', '$email')");

        if(!$query) {
            $dokter_trouble = "Gagal menambahkan data baru!";
        } else {
            header('location: ../admin/dokter.php');
        }
    }


    $pasien_trouble = "";

    if(isset($_POST['btn_tambah_pasien'])) {
        $nama = $_POST['nama'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat_pasien = $_POST['alamat'];
        $email_pasien = $_POST['email'];

        $query_tambah_pasien = mysqli_query($conn, "INSERT INTO pasien (nama_pasien, tanggal_lahir, jenis_kelamin, alamat, email) VALUES 
        ('$nama', '$tanggal_lahir', '$jenis_kelamin', '$alamat_pasien', '$email_pasien')");

        if(!$query_tambah_pasien) {
            $pasien_trouble = "Gagal mendaftarkan pasien baru!";
        } else {
            header('location: ../admin/pasien.php');
        }
    }


    $rekam_medis_trouble = "";

    if(isset($_POST['btn_rekam_medis'])) {
        $nama_pasien = $_POST['nama_pasien'];
        $nama_dokter = $_POST['nama_dokter'];
        $tanggal = $_POST['tanggal'];
        $diagnosa = $_POST['diagnosa'];
        $pemeriksaan = $_POST['pemeriksaan'];

        $add_rekam_medis = mysqli_query($conn, "INSERT INTO rekam_medis (id_pasien, id_dokter, tanggal, diagnosa, pemeriksaan) VALUES 
        ('$nama_pasien', '$nama_dokter', '$tanggal', '$diagnosa', '$pemeriksaan')");

        if(!$add_rekam_medis) {
            $rekam_medis_trouble = "Gagal menambahkan Rekam Medis baru.";
        } else {
            header('location: ../admin/rekam-medis.php');
        }
    }


    // Fitur Delete Rekam Medis
    $delete_message = "";
    $delete_error = null;

    if(isset($_GET['delete'])) {
        $id_delete = $_GET['delete'];
        $delete_query = mysqli_query($conn, "DELETE FROM rekam_medis WHERE id_rekam_medis = '$id_delete'");
        
        if($delete_query) {
            $delete_error = False;
            $delete_message = "Berhasil menghapus rekam medis!";
            header('location: ../admin/rekam-medis.php');
        } else {
            $delete_error = True;
            $delete_message = "Gagal menghapus rekam medis! Coba lagi.";
        }
    }



    $current_queue = "Kosong";
    $query_calling = mysqli_query($conn, "SELECT * FROM antrean ORDER BY id_antrean ASC LIMIT 1");
    $fetch_calling = mysqli_fetch_assoc($query_calling);
    if (mysqli_num_rows($query_calling) == 0) {
        $current_queue = "Kosong";
    } else {
        $current_queue = $fetch_calling['kode_antrean'];
    }

    if(isset($_GET['btn_call'])) {
        $id_calling = $_GET['btn_call'];
        
        $delete_calling = mysqli_query($conn, "DELETE FROM antrean WHERE id_antrean = '$id_calling'");

        if($delete_calling) {
            header('location: ../admin/antrean.php');
        }
        
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../img/logo.png" type="image/icon type">
    <title><?php echo $_SESSION['title'] ?></title>
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center mt-3 mb-3" href="dashboard.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <div class="sidebar-brand-text mx-3">iClinic</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Data Center</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Dashboard
            </div>

            <li class="nav-item">
                <a class="nav-link" href="../admin/rekam-medis.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Rekam Medis</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../admin/antrean.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Antrean</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data
            </div>

            <li class="nav-item">
                <a class="nav-link" href="../admin/pasien.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Pasien</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../admin/dokter.php">
                    <i class="fas fa-fw fa-user-md"></i>
                    <span>Dokter</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['nama'] ?></span>
                                <img class="img-profile rounded-circle"
                                    src="../img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->