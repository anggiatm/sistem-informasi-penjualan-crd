<?php $this->load->view('template/header'); ?>

<body id="page-top">
    <div id="wrapper">

        <?php $this->load->view('template/sidebar'); ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php $this->load->view('template/topbar'); ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <!-- Area Chart -->

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active"><a href="<?php echo base_url() ?>admin/produk">Home</a></li>
                                </ol>
                            </nav>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="card shadow mb-4" data-value="Fabrikasi">
                                <div class="card-header py-3">
                                    <img class="card-img-top" src="<?php echo base_url(); ?>public/lib/Barang-Fabrikasi/default.PNG" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Barang Fabrikasi</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4">
                            <div class="card shadow mb-4" data-value="Satuan">
                                <div class="card-header py-3">
                                    <img class="card-img-top" src="<?php echo base_url(); ?>public/lib/Barang-Satuan/default.PNG">
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Barang Satuan</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4">
                            <div class="card shadow mb-4" data-value="Service">
                                <div class="card-header py-3">
                                    <img class="card-img-top" src="<?php echo base_url(); ?>public/lib/Jasa-Service/default.PNG" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Jasa Service</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Logout?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Anda yakin akan logout?</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                            <a class="btn btn-primary" href="<?php echo base_url('auth/logout'); ?>">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <?php $this->load->view('template/footer'); ?>

            <?php $this->load->view('template/mainscript'); ?>
            <script>
                $(document).ready(function() {
                    $('.card').each(function() {
                        $(this).css('cursor', 'pointer').hover(
                            function() {
                                $(this).prop('class', 'card bg-primary text-gray-400 font-weight-bold');
                                //$(this).addClass('active');
                            },
                            function() {
                                $(this).prop('class', 'card');
                            }).click(function() {
                            getDetail($(this).attr('data-value'));
                        });
                    });

                    function getDetail(produk) {
                        window.location = '<?php echo base_url(); ?>admin/tabelproduk?produk=' + produk;
                    }
                })
            </script>

</body>

</html>