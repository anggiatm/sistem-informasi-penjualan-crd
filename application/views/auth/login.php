<?php $this->load->view('template/header'); ?>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">

                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('admin/'); ?>">
                                        <div class="sidebar-brand-icon">
                                            <img class="img-profile rounded-circle" width="170" src="<?php echo base_url('/assets/logo/company-logo-primary.svg'); ?>">
                                        </div>
                                    </a>
                                    <strong>
                                        <p class=" text-primary text-sm-center mt-0 mb-2">Aplikasi Penjualan Barang - CRD</p>
                                    </strong>
                                    <hr>

                                    <form class="user" method="post" action="<?php echo base_url('auth'); ?>">
                                        <?= $this->session->flashdata('message'); ?>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user mb-0" id="username" name="username" value="<?= set_value('username') ?>" placeholder="Username">
                                            <?= form_error('username'); ?>
                                        </div>


                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                            <?= form_error('password'); ?>
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block" type="submit">Login</button>

                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script src="<?php echo base_url('/assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/sb-admin-2.min.js'); ?>"></script>



</body>

</html>