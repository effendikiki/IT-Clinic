<body>
    <!-- ini navbar -->
    <div class="row my-5 pb-5">
        <nav class="navbar navbar-expand-lg navbar-tertiary navbar-dark bg-tertiary py-2 fixed-top">
            <div class="container">
                <a class="navbar-brand" href="<?php echo site_url(); ?>dashboard"><strong>IT - Clinic</strong></a>
                </button>
                <div class="navbar-collapse" id="navbar_main">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url(); ?>dashboard/admin_view_shipment">Request Pengiriman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url(); ?>dashboard/admin_view_history">Request History</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url(); ?>dashboard/admin_view_account">List User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url(); ?>dashboard/admin_verify_account">Verify User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="#" id="" role="button" data-toggle="dropdown">
                                <i class="fas fa-bell">
                                    <span class="badge badge-danger text-light"><?php echo ($notify_account_number + $notify_shipment_number); ?></span>
                                </i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-xl py-0">
                                <div class="py-3 px-3">
                                    <h5 class="heading h6 mb-0">User Pending List</h5>
                                </div>
                                <div class="list-group">
                                    <?php foreach ($unverified_account as $rows) {
                                    ?>
                                        <a href="<?php echo site_url(); ?>dashboard/admin_verify_account" class="list-group-item list-group-item-action d-flex align-items-center">
                                            <div class="list-group-content">
                                                <div class="list-group-heading"><?php echo $rows->user; ?></div>
                                            </div>
                                        </a>
                                    <?php
                                    } ?>
                                </div>
                                <div class="py-3 px-3">
                                    <h5 class="heading h6 mb-0">Request Pengiriman List</h5>
                                </div>
                                <div class="list-group">
                                    <?php foreach ($notify_shipment_list as $rows) {
                                    ?>
                                        <a href="<?php echo site_url(); ?>dashboard/admin_view_shipment" class="list-group-item list-group-item-action d-flex align-items-center">
                                            <div class="list-group-content">
                                                <div class="list-group-heading"><?php echo $rows->code_order . " - " . $rows->customer ?></div>
                                            </div>
                                        </a>
                                    <?php
                                    } ?>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url(); ?>login/logout">Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- akhir navbar -->

    <!-- ini body -->

    <div class="row mx-5">
        <div class="col">
            <?php
            if ($this->session->flashdata('message') != '') {
            ?>
                <div class="alert alert-primary">
                    <?php echo $this->session->flashdata('message'); ?>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    <!-- table -->
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h3>List Teknisi Request :</h3>
                    <table class="table table-hover table-cards align-items-center" id="technician">
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
                                        <a href="#" class="btn btn-sm btn-primary mt-1" data-toggle="modal" data-target="#modal_in_progress">Sedang Diperbaiki</a>
                                        <a href="#" class="btn btn-sm btn-primary mt-1" data-toggle="modal" data-target="#modal_update_<?php echo $rows->id; ?>">Update</a>
                                        <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_more_detail_<?php echo $rows->id; ?>">Details</a>
                                        <!-- modal -->
                                        <div class="modal modal-light fade" id="modal_more_detail_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
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
                                                        <p class="card-text h6">Kode Order : <?php echo $rows->code_order; ?></p>
                                                        <p class="card-text h6">Customer : <?php echo $rows->customer; ?></p>
                                                        <p class="card-text h6">Teknisi : <?php echo $rows->technician; ?></p>
                                                        <p class="card-text h6">Keterangan : </p>
                                                        <textarea disabled class="form-control" name="detail" id="detail" cols="75" rows="6" placeholder="<?php echo $rows->detail; ?>"></textarea><br>
                                                        <p class="card-text h6">Tanggal Order : <?php echo $rows->date_order; ?></p>
                                                        <p class="card-text h6">Tanggal Selesai : <?php echo $rows->date_finish; ?></p>
                                                        <p class="card-text h6">Biaya Servis : RP <?php echo $rows->price; ?></p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Kembali</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal modal-primary fade" id="modal_update_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Update Order</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="d-flex justify-content-center">
                                                                <img class="rounded-circle" src="<?php echo base_url(); ?>data/order/<?php echo $rows->image; ?>" width="200px" height="200px" style="object-fit: cover">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br><br>
                                                    <div class="modal-body">
                                                        <form action="<?php echo site_url('dashboard/admin_update_request' . "/" . $rows->id); ?>" method="POST">

                                                            <div class="form-group">
                                                                <label>Kode Order</label>
                                                                <input type="text" class="form-control" name="code_order" id="code_order" value="<?php echo $rows->code_order; ?>" readonly>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Customer</label>
                                                                <input type="text" class="form-control" name="customer" id="customer" value="<?php echo $rows->customer; ?>" readonly>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Technician</label>
                                                                <input type="text" class="form-control" name="technician" id="technician" value="<?php echo $rows->technician; ?>" readonly>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Tanggal Pemesanan</label>
                                                                <input type="date" class="form-control form-control-sm" style="font-size: 18pt" name="date_order" id="date_order" value="<?php echo $rows->date_order; ?>" readonly>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Tanggal Selesai</label>
                                                                <input type="date" class="form-control form-control-sm" style="font-size: 18pt" name="date_finish" id="date_finish" value="<?php echo date('Y-m-d'); ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Harga (Dalam Rupiah)</label>
                                                                <input type="number" class="form-control form-control-lg" style="font-size: 19pt" name="price" id="price" value="<?php echo $rows->price; ?>">
                                                            </div>

                                                            <div class=" form-group">
                                                                <label>Keterangan</label>
                                                                <textarea class="form-control" name="detail" id="detail" cols="75" rows="10" placeholder="tulis keluhan anda disini..."><?php echo $rows->detail; ?></textarea>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Status</label>
                                                                <select class="custom-select" name="status" id="status">
                                                                    <option selected value="<?php echo $rows->status; ?>">Pilih Status</option>
                                                                    <option value="in_progress">Sedang Diperbaiki</option>
                                                                    <option value="finish">Selesai</option>
                                                                </select>
                                                            </div>
                                                            <button class="btn btn-sm btn-success btn-block " type="submit">Update</button>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Kembali</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal -->
                                    </td>
                                </tr>
                            <?php
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
    <br><br><br>
    <!-- table -->

    <!--modal-->
    <div class="modal modal-primary fade" id="modal_in_progress" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class=" text-center">
                        <i class="fa fa-exclamation-circle fa-4x"></i>
                        <h4 class="heading mt-4">Request order masih sedang dikerjakan</h4>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>
    <!--modal-->
    <!-- ini body -->

    <!-- footer -->
    <footer class="pt-5 pb-3 footer footer-dark bg-tertiary">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="pr-lg-5">
                        <h1 class="heading h6 text-uppercase font-weight-700 mb-3"><strong>IT-</strong>Clinic</h1>
                        <p>IT-Clinic didesain dan di program untuk menjadi sebuah platform yang menghubungkan antara Customer dengan Teknisi,
                            juga menjamin keamanan dan kepuasan Customer.</p>
                    </div>
                </div>

                <!-- space kosong -->
                <div class="col-4"></div>
                <!-- space kosong -->

                <div class="col-2">
                    <h5 class="heading h6 text-uppercase font-weight-700 mb-3">Navigation</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="<?php echo base_url(); ?>dashboard">List Request</a></li>
                        <li><a class="text-muted" href="<?php echo site_url(); ?>dashboard/admin_view_history">Request History</a></li>
                        <li><a class="text-muted" href="<?php echo site_url(); ?>dashboard/admin_view_account">List User</a></li>
                        <li><a class="text-muted" href="<?php echo site_url(); ?>dashboard/admin_verify_account">Verify User</a></li>
                        <li><a class="text-muted" href="<?php echo base_url(); ?>login/logout">Logout</a></li>
                    </ul>
                </div>

                <div class="col-1 col-md">
                    <h5 class="heading h6 text-uppercase font-weight-700 mb-3">About</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="<?php echo site_url(); ?>home/about">About Us</a></li>
                        <li><a class="text-muted" href="<?php echo site_url(); ?>">Home</a></li>
                    </ul>
                </div>

            </div>
            <hr>

            <div class="d-flex align-items-center">
                <span class="text-muted">
                    © 2020 <a href="<?php echo site_url(); ?>home/about" class="text-muted">IT-Clinic</a>
                </span>
            </div>

        </div>
    </footer>
    <!-- footer -->

    <!-- cdn js ojo diganti!! -->

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/theme.js"></script>
    <script>
        $(document).ready(function() {
            $('#technician').DataTable();
        });
    </script>
</body>

</html>