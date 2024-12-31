<?php

    include "../layout/header.php";

    $_SESSION['title'] = 'iClinic - Rekam Medis';

    $query_rekam_medis = mysqli_query($conn, "SELECT 
                                                                rm.id_rekam_medis,
                                                                p.nama_pasien,
                                                                d.nama,
                                                                rm.tanggal,
                                                                rm.diagnosa,
                                                                rm.pemeriksaan
                                                            FROM 
                                                                rekam_medis rm
                                                            JOIN 
                                                                pasien p ON rm.id_pasien = p.id_pasien
                                                            JOIN 
                                                                dokter d ON rm.id_dokter = d.id_dokter
                                                            ORDER BY
                                                                rm.id_rekam_medis ASC");

?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Basis Data Rekam Medis</h1>
                    <p class="mb-4">Informasi Rahasia terkait data rekam medis pasien yang terdaftar dalam sistem iClinic.</p>


                            <?php if ($delete_error !== null) { ?>
                                <div class="alert <?php echo $delete_error ? 'alert-warning' : 'alert-primary'; ?>" role="alert">
                                    <?php echo $delete_message ?>
                                </div>
                            <?php } ?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="tambah-rekam-medis.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Tambah Rekam Medis</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Pasien</th>
                                            <th>Dokter</th>
                                            <th>Diagnosa</th>
                                            <th>Pemeriksaan</th>
                                            <th>Tanggal</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $angka_basisdata = 1;
                                        while ($basis_data_record = mysqli_fetch_assoc($query_rekam_medis)) { ?>
                                            <tr>
                                                <td><?php echo $angka_basisdata++ ?></td>
                                                <td><?php echo $basis_data_record['nama_pasien'] ?></td>
                                                <td><?php echo $basis_data_record['nama'] ?></td>
                                                <td><?php echo $basis_data_record['diagnosa'] ?></td>
                                                <td><?php echo $basis_data_record['pemeriksaan'] ?></td>
                                                <td><?php echo $basis_data_record['tanggal'] ?></td>
                                                <td><a href="edit-rekam-medis.php?edit=<?php echo $basis_data_record['id_rekam_medis'] ?>" class="btn btn-warning btn-sm">Edit</a></td>
                                                <td><a href="../layout/header.php?delete=<?php echo $basis_data_record['id_rekam_medis'] ?>" class="btn btn-danger btn-sm">Hapus</a></td>
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