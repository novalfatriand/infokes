<?php

    include "../layout/header.php";

    $_SESSION['title'] = 'iClinic - Dokter';

?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Dokter</h1>
                    <p class="mb-4">Berikut ini adalah informasi terkait Dokter yang bertugas pada perusahaan iClinic.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="tambah-dokter.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Tambah Data Dokter</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Spesialisasi</th>
                                            <th>Alamat</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $dataDokter = mysqli_query($conn, "SELECT * FROM dokter");
                                        $angka = 1;
                                        while ($doctor = mysqli_fetch_assoc($dataDokter)) { ?>
                                            <tr>
                                                <td><?php echo $angka++ ?></td>
                                                <td><?php echo $doctor['nama'] ?></td>
                                                <td><?php echo $doctor['spesialisasi'] ?></td>
                                                <td><?php echo $doctor['alamat'] ?></td>
                                                <td><?php echo $doctor['email'] ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php include "../layout/footer.php" ?>