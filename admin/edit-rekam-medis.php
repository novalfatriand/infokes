<?php

    include "../layout/header.php";

    $_SESSION['title'] = 'iClinic - Edit Rekam Medis';

    $data_pasien = mysqli_query($conn, "SELECT id_pasien, nama_pasien FROM pasien");
    $data_dokter = mysqli_query($conn, "SELECT id_dokter, nama FROM dokter");

    if(isset($_GET['edit'])) {
        $id = $_GET['edit'];
        
        $data_records = mysqli_query($conn, "SELECT * FROM rekam_medis WHERE id_rekam_medis = '$id'");
        $record = mysqli_fetch_assoc($data_records);

        $id_pasien_diambil = $record['id_pasien'];
        $id_dokter_diambil = $record['id_dokter'];

        $data_patient = mysqli_query($conn, "SELECT * FROM pasien WHERE id_pasien = '$id_pasien_diambil'");
        $patient = mysqli_fetch_assoc($data_patient);
    
        $data_doctors = mysqli_query($conn, "SELECT * FROM dokter WHERE id_dokter = '$id_dokter_diambil'");
        $doctors = mysqli_fetch_assoc($data_doctors);
    }


    $update_message = "";
    $update_error = null;

    if(isset($_POST['btn_update_rekam_medis'])) {
        $update_nama = $_POST['nama_pasien'];
        $update_dokter = $_POST['nama_dokter'];
        $update_tanggal = $_POST['tanggal'];
        $update_diagnosa = $_POST['diagnosa'];
        $update_pemeriksaan = $_POST['pemeriksaan'];

        $update_record = mysqli_query($conn, "UPDATE rekam_medis SET id_pasien = '$update_nama', id_dokter = '$update_dokter',
        tanggal = '$update_tanggal', diagnosa = '$update_diagnosa', pemeriksaan = '$update_pemeriksaan' WHERE id_rekam_medis = '$id'");

        if($update_record) {
            $update_error = False;
            $update_message = "Berhasil melakukan update Rekam Medis!";
        } else {
            $update_error = True;
            $update_message = "Gagal melakukan update! Coba lagi.";
        }
    }

?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Edit Rekam Medis</h1>
                    <p class="mb-4">Silahkan edit isi form dibawah ini dengan benar, kemudian lakukan Update untuk memperbarui data Rekam Medis.</p>

                            <?php if ($update_error !== null) { ?>
                                <div class="alert <?php echo $update_error ? 'alert-warning' : 'alert-primary'; ?>" role="alert">
                                    <?php echo $update_message ?>
                                </div>
                            <?php } ?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h5 class="text-primary font-weight-bold mt-2">Formulir Edit Rekam Medis</h5>
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form method="POST" action="">

                                    <div class="mb-3 col-sm-6">
                                        <label for="exampleInputNamaPasien1" class="form-label">Nama Pasien</label>
                                        <select name="nama_pasien" id="exampleInputNamaPasien1" class="form-control" required>
                                            <option value="<?php echo $patient['id_pasien'] ?>"><?php echo $patient['nama_pasien'] ?></option>
                                            <?php while($pasien_result = mysqli_fetch_assoc($data_pasien)) { ?>
                                                <option value="<?php echo $pasien_result['id_pasien'] ?>"><?php echo $pasien_result['nama_pasien'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-sm-6">
                                        <label for="exampleInputNamaDokter1" class="form-label">Nama Dokter</label>
                                        <select name="nama_dokter" id="exampleInputNamaDokter1" class="form-control" required>
                                            <option value="<?php echo $doctors['id_dokter'] ?>"><?php echo $doctors['nama'] ?></option>
                                            <?php while($dokter_result = mysqli_fetch_assoc($data_dokter)) { ?>
                                                <option value="<?php echo $dokter_result['id_dokter'] ?>"><?php echo $dokter_result['nama'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-sm-6">
                                        <label for="exampleInputTanggal1" class="form-label">Tanggal</label>
                                        <input type="date" name="tanggal" class="form-control" id="exampleInputTanggal1" aria-describedby="tanggalHelp" value="<?php echo $record['tanggal'] ?>" required>
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <label for="exampleInputDiagnosa" class="form-label">Diagnosa</label>
                                        <input type="text" name="diagnosa" class="form-control" id="exampleInputDiagnosa" aria-describedby="diagnosaHelp" value="<?php echo $record['diagnosa'] ?>" required>
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <label for="exampleInputPemeriksaan1" class="form-label">Pemeriksaan</label>
                                        <input type="text" name="pemeriksaan" class="form-control" id="exampleInputPemeriksaan1" aria-describedby="pemeriksaanHelp" value="<?php echo $record['pemeriksaan'] ?>" required>
                                    </div>
                                    <button type="submit" name="btn_update_rekam_medis" class="mr-1 mt-2 btn btn-primary btn-sm shadow-sm">Update</button>
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