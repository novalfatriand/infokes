<?php

    include "../layout/header.php";

    $_SESSION['title'] = 'iClinic - Pasien';

?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Daftar Pasien</h1>
                    <p class="mb-4">Informasi terkait data pasien yang terdaftar dalam sistem iClinic.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="pendaftaran-pasien.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Pendaftaran Pasien</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $data_pasien = mysqli_query($conn, "SELECT * FROM pasien");
                                        $angka_pasien = 1;
                                        while ($pasien = mysqli_fetch_assoc($data_pasien)) { ?>
                                            <tr>
                                                <td><?php echo $angka_pasien++ ?></td>
                                                <td><?php echo $pasien['nama_pasien'] ?></td>
                                                <td><?php echo $pasien['tanggal_lahir'] ?></td>
                                                <td><?php echo $pasien['jenis_kelamin'] ?></td>
                                                <td><?php echo $pasien['alamat'] ?></td>
                                                <td><?php echo $pasien['email'] ?></td>
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