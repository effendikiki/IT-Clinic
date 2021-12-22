<body class="deep-purple accent-2">

    <div class="container-fluid">

        <div class="row vh-100 vw-100">
            <!-- start of col 1 SIDEBAR -->
            <div class="col-1 deep-purple accent-2 vh-100">
                <!-- sidenav -->
                <div class="d-flex flex-column text-center">

                    <div class="pt-5">
                        <div class="btn p-2 btn-lg shadow-none">
                            <a href="<?php echo site_url(); ?>dashboard/customer" class="text-white ">
                                <i class="fas fa-home fa-2x "></i>
                                <p>Home</p>
                            </a>
                        </div>
                    </div>
                    <div class="py-2 ">
                        <div class="btn p-2 shadow-none ">
                            <a href="<?php echo site_url(); ?>dashboard/customer_view_profile" class="text-white-50 ">
                                <i class="fas fa-user fa-2x "></i>
                                <p>Profile</p>
                            </a>
                        </div>
                    </div>
                    <div class="py-2 ">
                        <div class="btn p-2 shadow-none ">
                            <a href="<?php echo site_url(); ?>dashboard/customer_view_request" class="text-white-50 ">
                                <i class="fas fa-receipt fa-2x "></i>
                                <p>Request</p>
                            </a>
                        </div>
                    </div>
                    <div class="py-2 ">
                        <div class="btn p-2 shadow-none ">
                            <a href="<?php echo site_url(); ?>dashboard/customer_view_history" class="text-white-50 ">
                                <i class="fas fa-file-invoice-dollar fa-2x "></i>
                                <p>History</p>
                            </a>
                        </div>
                    </div>
                    <div class="pt-5 ">
                        <div class="btn p-2 shadow-none ">
                            <a href="<?php echo site_url(); ?>login/logout " class="text-white ">
                                <i class="fas fa-sign-out-alt fa-2x "></i>
                                <p>LogOut</p>
                            </a>
                        </div>
                    </div>

                </div>
                <!-- SideNav-->


                <!-- end of col-1 -->
            </div>
            <!-- end of col-1 SIDEBAR-->

            <!-- start of col-9 -->
            <div class="col-9 vh-100">
                <article class="view jarallax vh-100" style="background-image: url( '<?php echo base_url(); ?>assets/new/bg-white-rounded.png'); background-repeat: no-repeat;
                 background-position: center; background-size: 120% 100%; ">


                    <!-- header-atas -->
                    <div class="row h-50" style="background-image: url('<?php echo base_url(); ?>assets/new/header.png');background-repeat: no-repeat;
                    background-position: center; background-size: 90% 100%">
                        <!-- Grid Column -->
                        <div class="row w-100 h-25">
                            <div class="col-md-1"></div>
                            <div class="col-md-4 h-50">
                                <div class="h-75">
                                </div>
                                <h2 class="h-25">Welcome, <?php echo $this->session->userdata('user'); ?> !</h2>
                            </div>
                            <div class="col-md-7">
                            </div>
                        </div>
                        <div class="row h-75 w-50 ">
                            <div class="col-md-2 "></div>
                            <div class="col-md-10 ">
                                <div class="d-flex flex-column ">
                                    <br><br>
                                    <h6 class="brown-text font-weight-bold">Silahkan lakukan request Perbaikan sekarang juga :)</h6>
                                    <p class="brown-text font-weight-medium">Hubungi IT-clinic Helpdesk untuk bantuan lebih lanjut, atau pelajari tata cara melakukan request melalui link di bawah</p>
                                    <p>
                                        <a href="#" class="btn btn-md btn-success btn-rounded waves-effect shadow-none" data-toggle="modal" data-target="#modal_add_request">
                                            <i class="fas fa-plus"></i> &nbsp; Add Request
                                        </a>
                                        <a href="#" class="btn btn-md btn-orange btn-rounded waves-effect shadow-none" data-toggle="modal" data-target="#modal_learn_more">
                                            <i class="fas fa-question"></i> &nbsp; learn more
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <!-- Modal -->

                            <!-- add -->
                            <div class="modal modal-light fade" id="modal_add_request" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header success-color text-white">
                                            <h5 class="modal-title">Add Request</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo site_url(); ?>dashboard/customer_add_request_process" enctype="multipart/form-data" method="POST">
                                                <div class=" form-group">
                                                    <label>Foto Perangkat</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="inputGroupFile02" name="image" required />
                                                        <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Tanggal Pemesanan</label>
                                                    <input type="date" class="form-control" name="date_order" id="date_order" value="<?php echo date('Y-m-d'); ?>" readonly>
                                                </div>

                                                <div class=" form-group">
                                                    <label>Keterangan</label>
                                                    <textarea class="form-control" name="detail" id="detail" cols="75" rows="10" placeholder="tulis keluhan anda disini..."></textarea>
                                                </div>
                                                <button class="btn btn-lg btn-success btn-block" type="submit">Request</button>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-sm btn-outline-success" data-dismiss="modal">Kembali</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- add -->

                            <!-- learn more -->
                            <div class="modal fade left " id="modal_learn_more" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none; " aria-hidden="true">
                                <div class="modal-dialog modal-full-height modal-left" role="document">
                                    <!--Content-->
                                    <div class="modal-content">
                                        <!--Header-->
                                        <div class="modal-header deep-purple accent-2 text-white">
                                            <h4 class="modal-title w-100 weight-bold" id="myModalLabel">Panduan pengguna</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <!--Body-->
                                        <div class="modal-body mt-3">
                                            <p>
                                                Halo, selamat datang di IT-Clinic :)
                                                <br>
                                                ikuti langkah-langkah berikut untuk memulai proses pemesanan layanan
                                            </p>

                                            <ul class="list-group z-depth-0">
                                                <li class="list-group-item justify-content-between">
                                                    <span class="badge badge-primary badge-pill">1</span>
                                                    &nbsp; Tekan tombol add request
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                    <span class="badge badge-primary badge-pill">2</span>
                                                    &nbsp; Tambahkan foto perangkat anda
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                    <span class="badge badge-primary badge-pill">3</span>
                                                    &nbsp; Tulis kerusakan perangkat
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                    <span class="badge badge-primary badge-pill">4</span>
                                                    &nbsp; Tekan tombol "Request" jika sudah selesai
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                    <span class="badge badge-primary badge-pill">5</span>
                                                    &nbsp; Tunggu konfirmasi dari admin
                                                </li>
                                                <li class="list-group-item justify-content-between">
                                                    <span class="badge badge-primary badge-pill">6</span>
                                                    &nbsp; Anda bisa melihat status Request dari halaman Request di Menu sebelah kiri
                                                </li>

                                            </ul>

                                        </div>
                                        <!--Footer-->
                                        <div class="modal-footer justify-content-center">
                                            <button type="button" class="btn btn-outline-primary waves-effect waves-light" data-dismiss="modal">Kembali</button>
                                        </div>
                                    </div>
                                    <!--/.Content-->
                                </div>
                            </div>
                            <!-- learn more -->
                            <!-- Modal -->


                        </div>
                        <!-- Grid Column -->
                    </div>
                    <!-- header-atas -->

                    <!-- content-bawah -->
                    <div class="row h-50 mt-4 ml-5">
                        <div class="row w-100 ml-3">
                            <p>
                                <h4>Ringkasan Request</h4>
                            </p>

                        </div>
                        <div class="row w-100 h-50">

                            <!-- Col Card  -->
                            <div class="col-md-4 vh-100 ">
                                <div class="card bg-primary text-white">
                                    <div class="card-body">
                                        <p>
                                            <h5 class="card-title">
                                                <span class="counter"><?php echo $in_queue; ?></span>
                                                <i class="fas fa-sync fa-spin fa-lg"></i> &nbsp; Dalam antrian</h5>
                                        </p>

                                        <p class="card-text">
                                            <p>
                                                <h6>
                                                    <span class="font-weight-bold"><?php echo $in_queue; ?></span> request sedang dalam antrian
                                                </h6>
                                            </p>
                                            <button class="btn btn-sm btn-rounded btn-white">
                                                <a href="<?php echo site_url(); ?>dashboard/customer_view_request" class="text-dark">
                                                    <span> more details</span> &nbsp;
                                                    <i class=" fas fa-arrow-right"></i>
                                                </a>
                                            </button>


                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Col Card  -->

                            <!-- Col Card  -->
                            <div class="col-md-4 vh-100 ">
                                <div class="card orange text-white">
                                    <div class="card-body">
                                        <p>
                                            <h5 class="card-title">
                                                <span class="counter"><?php echo $in_progress; ?></span>
                                                <i class="fas fa-cog fa-spin fa-lg"></i> &nbsp; Sedang dikerjakan</h5>
                                        </p>

                                        <p class="card-text">
                                            <p>
                                                <h6>
                                                    <span class="font-weight-bold"><?php echo $in_progress; ?></span> request sedang dikerjakan
                                                </h6>
                                            </p>
                                            <button class="btn btn-sm btn-rounded btn-white">
                                                <a href="<?php echo site_url(); ?>dashboard/customer_view_request" class="text-dark">
                                                    <span> more details</span> &nbsp;
                                                    <i class=" fas fa-arrow-right"></i>
                                                </a>
                                            </button>


                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Col Card  -->

                            <!-- Col Card  -->
                            <div class="col-md-4 vh-100 ">
                                <div class="card bg-success text-white">
                                    <div class="card-body">
                                        <p>
                                            <h5 class="card-title">
                                                <span class="counter"><?php echo $finish; ?></span>
                                                <i class="fas fa-truck fa-lg"></i> &nbsp; Siap dikirim</h5>
                                        </p>

                                        <p class="card-text">
                                            <p>
                                                <h6>
                                                    <span class="font-weight-bold"><?php echo $finish; ?></span> request siap untuk dikirim
                                                </h6>
                                            </p>
                                            <button class="btn btn-sm btn-rounded btn-white">
                                                <a href="<?php echo site_url(); ?>dashboard/customer_view_request" class="text-dark">
                                                    <span> more details</span> &nbsp;
                                                    <i class=" fas fa-arrow-right"></i>
                                                </a>
                                            </button>


                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Col Card  -->
                        </div>
                        <div class="row w-100 h-50">

                        </div>


                    </div>
                    <!-- content-bawah -->

            </div>
            <!-- end of col-9 -->
            <div class="col-2 white ">
                <div style="height: 10%;"></div>
                <div class="row blue-gradient d-flex flex-column" style="height: 80%;">
                    <center>
                        <h4 class="text-white pt-5">put your Ads here</h4>
                    </center>
                </div>
                <div style="height: 10%;"></div>

            </div>




        </div>
    </div>
    </div>


    </div>


    <!-- jQuery -->
    <script type=" text/javascript " src="<?php echo base_url(); ?>assets/new/js/jquery.min.js "></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript " src="<?php echo base_url(); ?>assets/new/js/popper.min.js "></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript " src="<?php echo base_url(); ?>assets/new/js/bootstrap.min.js "></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript " src="<?php echo base_url(); ?>assets/new/js/mdb.min.js "></script>
    <!-- Datatable Javascript -->

    <!-- Your custom scripts (optional) -->
    <script type="text/javascript ">
        $(document).ready(function() {
            // SideNav Button Initialization
            $(".button-collapse ").sideNav({
                slim: true,
            });
        });

        $('#inputGroupFile02').on('change', function() {
            //get the file name
            var fileName = $(this).val();
            var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(cleanFileName);
        })
    </script>

</body>

</html>