<?php

    include "../layout/header.php";

    $_SESSION['title'] = 'iClinic - Antrean Pasien';

    // Function untuk generate kode antrean
    function generateQueueCode($length = 4) {
        $characters = 'A0123456789';
        $charactersLength = strlen($characters);
        $randomCode = '';
        
        for ($i = 0; $i < $length; $i++) {
            $randomCode .= $characters[rand(0, $charactersLength - 1)];
        }
        
        return $randomCode;
    }

    // Fitur untuk menambahkan antrean baru
    if(isset($_POST['btn_antrean'])) {
        $nama_antrean = $_POST['nama_pasien_antrean'];
        $tanggal_antrean = $_POST['tanggal_antrean'];
        $kode_antrean = generateQueueCode();

        $antrean_query = mysqli_query($conn, "INSERT INTO antrean (nama_antrean, tanggal_antrean, kode_antrean) VALUES
        ('$nama_antrean', '$tanggal_antrean', '$kode_antrean')");

        if(!$antrean_query) {
            echo "Gagal antrean";
        }
    }

?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Daftar Antrean Pasien</h1>
                    <p class="mb-4">Daftar Nomor Urut Pasien pada iClinic.</p>


                            <?php if ($delete_error !== null) { ?>
                                <div class="alert <?php echo $delete_error ? 'alert-warning' : 'alert-primary'; ?>" role="alert">
                                    <?php echo $delete_message ?>
                                </div>
                            <?php } ?>

                    <div class="col-md-4">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <p class="font-weight-bold">Nomor Antrean</p>
                                    <button class="btn btn-success"><?php echo $current_queue ?></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <form method="POST" action="">
                                        <div class="mb-3">
                                            <label for="exampleInputNama1" class="form-label">Nama</label>
                                            <input type="text" name="nama_pasien_antrean" class="form-control" id="exampleInputNama1" aria-describedby="namaHelp" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputTanggal1" class="form-label">Tanggal</label>
                                            <input type="date" name="tanggal_antrean" class="form-control" id="exampleInputTanggal1" aria-describedby="tanggalHelp" required>
                                        </div>
                                        <button type="submit" name="btn_antrean" class="mr-1 mt-2 btn btn-primary btn-sm shadow-sm">Tambah</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nama Pasien</th>
                                                <th>Tanggal</th>
                                                <th>Antrean</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $queue_query = mysqli_query($conn, "SELECT * FROM antrean");
                                            while ($data_queue = mysqli_fetch_assoc($queue_query)) { ?>
                                                <tr>
                                                    <td><?php echo $data_queue['nama_antrean'] ?></td>
                                                    <td><?php echo $data_queue['tanggal_antrean'] ?></td>
                                                    <td><button class="btn btn-sm btn-success"><?php echo $data_queue['kode_antrean'] ?></button></td>
                                                    <td>
                                                        <form method="GET" action="../layout/header.php">
                                                            <button type="submit" name="btn_call" class="btn btn-sm btn-warning" value="<?php echo $data_queue['id_antrean'] ?>">Call</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php include "../layout/footer.php" ?>