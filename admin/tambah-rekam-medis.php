<?php

    include "../layout/header.php";

    $_SESSION['title'] = 'iClinic - Tambah Rekam Medis';

    $data_pasien = mysqli_query($conn, "SELECT id_pasien, nama_pasien FROM pasien");
    $data_dokter = mysqli_query($conn, "SELECT id_dokter, nama FROM dokter");

?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tambah Rekam Medis</h1>
                    <p class="mb-4">Silahkan isi form dibawah ini dengan benar untuk menambahkan data Rekam Medis baru.</p>

                            <?php if ($rekam_medis_trouble) { ?>
                                <div class="alert alert-warning" role="alert">
                                    <?php echo $rekam_medis_trouble ?>
                                </div>
                            <?php } ?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h5 class="text-primary font-weight-bold mt-2">Formulir Rekam Medis</h5>
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form method="POST" action="../layout/header.php">

                                    <div class="mb-3 col-sm-6">
                                        <label for="exampleInputNamaPasien1" class="form-label">Nama Pasien</label>
                                        <select name="nama_pasien" id="exampleInputNamaPasien1" class="form-control" required>
                                            <option value="">Pilih Pasien</option>
                                            <?php while($pasien_result = mysqli_fetch_assoc($data_pasien)) { ?>
                                                <option value="<?php echo $pasien_result['id_pasien'] ?>"><?php echo $pasien_result['nama_pasien'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-sm-6">
                                        <label for="exampleInputNamaDokter1" class="form-label">Nama Dokter</label>
                                        <select name="nama_dokter" id="exampleInputNamaDokter1" class="form-control" required>
                                            <option value="">Pilih Dokter</option>
                                            <?php while($dokter_result = mysqli_fetch_assoc($data_dokter)) { ?>
                                                <option value="<?php echo $dokter_result['id_dokter'] ?>"><?php echo $dokter_result['nama'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-sm-6">
                                        <label for="exampleInputTanggal1" class="form-label">Tanggal</label>
                                        <input type="date" name="tanggal" class="form-control" id="exampleInputTanggal1" aria-describedby="tanggalHelp" required>
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <label for="exampleInputDiagnosa" class="form-label">Diagnosa</label>
                                        <input type="text" name="diagnosa" class="form-control" id="exampleInputDiagnosa" aria-describedby="diagnosaHelp" required>
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <label for="exampleInputPemeriksaan1" class="form-label">Pemeriksaan</label>
                                        <input type="text" name="pemeriksaan" class="form-control" id="exampleInputPemeriksaan1" aria-describedby="pemeriksaanHelp" required>
                                    </div>
                                    <button type="submit" name="btn_rekam_medis" class="mr-1 mt-2 btn btn-primary btn-sm shadow-sm">Submit</button>
                                    <a href="rekam-medis.php" class="mt-2 d-none d-sm-inline-block btn btn-sm btn-outline-secondary shadow-sm">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php include "../layout/footer.php" ?>