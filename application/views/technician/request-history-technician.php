<body class="success-color">

    <div class="container-fluid">

        <div class="row vh-100 vw-100">
            <!-- start of col 1 SIDEBAR -->
            <div class="col-1 success-color vh-100">
                <!-- sidenav -->
                <div class="d-flex flex-column text-center">

                    <div class="pt-5">
                        <div class="btn p-2 btn-lg shadow-none">
                            <a href="<?php echo site_url(); ?>dashboard/technician" class="text-white-50">
                                <i class="fas fa-home fa-2x "></i>
                                <p>Home</p>
                            </a>
                        </div>
                    </div>
                    <div class="py-2 ">
                        <div class="btn p-2 shadow-none ">
                            <a href="<?php echo site_url(); ?>dashboard/technician_view_profile" class="text-white-50">
                                <i class="fas fa-user fa-2x "></i>
                                <p>Profile</p>
                            </a>
                        </div>
                    </div>
                    <div class="py-2 ">
                        <div class="btn p-2 shadow-none ">
                            <a href="<?php echo site_url(); ?>dashboard/technician_view_accepted_request" class="text-white-50">
                                <i class="fas fa-receipt fa-2x "></i>
                                <p>Accepted Request</p>
                            </a>
                        </div>
                    </div>
                    <div class="py-2 ">
                        <div class="btn p-2 shadow-none ">
                            <a href="<?php echo site_url(); ?>dashboard/technician_view_history" class="text-white">
                                <i class="fas fa-file-invoice-dollar fa-2x "></i>
                                <p>History</p>
                            </a>
                        </div>
                    </div>
                    <div class="pt-5 ">
                        <div class="btn p-2 shadow-none ">
                            <a href="<?php echo site_url(); ?>login/logout" class="text-white ">
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
            <div class="col-11 vh-100">
                <article class="view jarallax vh-100" style="background-image: url( '<?php echo base_url(); ?>assets/new/bg-white-rounded.png'); background-repeat: no-repeat;
                 background-position: center; background-size: 120% 100%; ">

                    <!-- content -->
                    <div class="row h-100">

                        <div class="row w-100 mt-3">
                            <div class="col-md-12">
                                <!-- table -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card shadow-none">
                                            <div class="card-body">
                                                <h3>Request History:</h3>
                                                <table class="table table-hover table-cards align-items-center" id="dtMaterialDesignExample">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>Kode Order</th>
                                                            <th>Keterangan</th>
                                                            <th>Tanggal Pesan</th>
                                                            <th>Tanggal Selesai</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($request as $rows) {
                                                        ?>
                                                            <tr>
                                                                <td>
                                                                    <img class="rounded-circle" src="<?php echo base_url(); ?>data/order/<?php echo $rows->image; ?>" width="100px" height="100px" style="object-fit: cover">
                                                                </td>
                                                                <td>
                                                                    <?php echo $rows->code_order; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $rows->detail; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $rows->date_order; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $rows->date_finish; ?>
                                                                </td>
                                                                <td>
                                                                    <a href="#" class="btn btn-md btn-info" data-toggle="modal" data-target="#modal_more_detail_<?php echo $rows->id; ?>">Details</a>

                                                                </td>
                                                            </tr>

                                                        <?php
                                                        } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- table -->
                            </div>


                        </div>
                        <!-- Grid Column -->
                    </div>
                    <!-- content -->



                    <!-- modal -->
                    <div class="modal modal-light fade" id="modal_more_detail_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header info-color text-white">
                                    <div class="modal-title h6" id="modal_title_6">More details</div>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="row">
                                    <div class="col mt-3">
                                        <div class="d-flex justify-content-center">
                                            <img class="rounded-circle" src="<?php echo base_url(); ?>data/order/<?php echo $rows->image; ?>" width="200px" height="200px" style="object-fit: cover">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-body mt-4">
                                    <p class="card-text h6">Kode Order :
                                        <?php echo $rows->code_order; ?>
                                    </p>
                                    <p class="card-text h6">Keterangan : </p>
                                    <textarea disabled class="form-control" name="detail" id="detail" cols="75" rows="6" placeholder="<?php echo $rows->detail; ?>"></textarea><br>
                                    <p class="card-text h6">Tanggal Order :
                                        <?php echo $rows->date_order; ?>
                                    </p>
                                    <p class="card-text h6">Tanggal Selesai :
                                        <?php echo $rows->date_finish; ?>
                                    </p>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-info" data-dismiss="modal">Kembali</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- modal -->


            </div>
            <!-- end of col-9 -->





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
    <script src="<?php echo base_url(); ?>assets/new/js/addons/datatables.min.js" type="text/javascript"></script>

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

        // Material Design example
        $(document).ready(function() {
            $('#dtMaterialDesignExample').DataTable({
                "scrollY": "45vh",
                "scrollCollapse": true,
            });
            $('#dtMaterialDesignExample_wrapper').find('label').each(function() {
                $(this).parent().append($(this).children());
            });
            $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('input').each(function() {
                const $this = $(this);
                $this.attr("placeholder", "Search");
                $this.removeClass('form-control-sm');
            });
            $('#dtMaterialDesignExample_wrapper .dataTables_length').addClass('d-flex flex-row');
            $('#dtMaterialDesignExample_wrapper .dataTables_filter').addClass('md-form');
            $('#dtMaterialDesignExample_wrapper select').removeClass(
                'custom-select custom-select-sm form-control form-control-sm');
            $('#dtMaterialDesignExample_wrapper select').addClass('mdb-select');
            $('#dtMaterialDesignExample_wrapper .mdb-select').materialSelect();
            $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('label').remove();
        });
    </script>


</body>

</html>