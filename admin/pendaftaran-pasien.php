<?php

    include "../layout/header.php";

    $_SESSION['title'] = 'iClinic - Pendaftaran Pasien';

?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tambah Data Pasien</h1>
                    <p class="mb-4">Silahkan isi form dibawah ini dengan benar untuk menambahkan data Pasien baru.</p>

                            <?php if ($pasien_trouble) { ?>
                                <div class="alert alert-warning" role="alert">
                                    <?php echo $pasien_trouble ?>
                                </div>
                            <?php } ?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h5 class="text-primary font-weight-bold mt-2">Formulir Pendaftaran Pasien</h5>
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form method="POST" action="../layout/header.php">
                                    <div class="mb-3 col-sm-6">
                                        <label for="exampleInputNama1" class="form-label">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="exampleInputNama1" aria-describedby="namaHelp" required>
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <label for="exampleInputTanggalLahir1" class="form-label">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" class="form-control" id="exampleInputTanggalLahir1" aria-describedby="tanggalLahirHelp" required>
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <label for="exampleInputJenisKelamin1" class="form-label">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" id="exampleInputJenisKelamin1" class="form-control" required>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <label for="exampleInputAlamat" class="form-label">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" id="exampleInputAlamat" aria-describedby="alamatHelp" required>
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                    </div>
                                    <button type="submit" name="btn_tambah_pasien" class="mr-1 mt-2 btn btn-primary btn-sm shadow-sm">Submit</button>
                                    <a href="pasien.php" class="mt-2 d-none d-sm-inline-block btn btn-sm btn-outline-secondary shadow-sm">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php include "../layout/footer.php" ?>