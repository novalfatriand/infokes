
<?php 

    include "../layout/header.php";

    $_SESSION['title'] = "iClinic - Dashboard"; 

?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <?php
                            $query_record = mysqli_query($conn, "SELECT * FROM rekam_medis");
                            $jumlah_record = mysqli_num_rows($query_record);
                        ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Rekam Medis</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_record ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-folder-open fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <?php 
                            $query_pasien = mysqli_query($conn, "SELECT * FROM pasien");
                            $jumlah_pasien = mysqli_num_rows($query_pasien);
                         ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Pasien</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_pasien ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                         <?php 
                            $query_dokter = mysqli_query($conn, "SELECT * FROM dokter");
                            $jumlah_dokter = mysqli_num_rows($query_dokter);
                         ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Dokter
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $jumlah_dokter ?></div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-md fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <?php
                            $query_antrean = mysqli_query($conn, "SELECT * FROM antrean");
                            $jumlah_antrean = mysqli_num_rows($query_antrean);
                        ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Antrean Pemeriksaan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_antrean ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Daftar Antrean</h6>
                                </div>
                                <!-- Card Body -->
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
                                                        <form method="GET" action="">
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

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Nomor Antrean</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="btn btn-success w-100">
                                        <?php echo $current_queue ?>
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