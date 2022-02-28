<?php $this->load->view('template/header'); ?>

<body id="page-top">
    <div id="wrapper">

        <?php $this->load->view('template/sidebar'); ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php $this->load->view('template/topbar'); ?>
                <div class="container-fluid">

                    <!-- 404 Error Text -->
                    <div class="text-center">
                        <div class="error mx-auto" data-text="403">403</div>
                        <p class="lead text-gray-800 mb-5">Akses Dilarang !</p>
                        <p class="text-gray-500 mb-0">Silahkan hubungi admin website untuk menambahkan user baru ...</p>
                        <a href="<?php echo base_url('admin'); ?>">&larr; Kembali ke Dashboard</a>
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

</body>

</html>