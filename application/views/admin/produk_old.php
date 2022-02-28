<?php $this->load->view('template/header'); ?>


<div class="container-fluid">
    <div class="row">

        <!-- SIDE BAR -->
        <?php $this->load->view('template/sidebar'); ?>
        <!-- CONTENT -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

            <div class="row mt-4">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><a href="<?php echo base_url() ?>admin/produk">Home</a></li>
                        </ol>
                    </nav>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 20rem;" data-value="Fabrikasi">
                        <img class="card-img-top" src="<?php echo base_url(); ?>public/lib/Barang-Fabrikasi/default.PNG" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Barang Fabrikasi</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 20rem;" data-value="Satuan">
                        <img class="card-img-top" src="<?php echo base_url(); ?>public/lib/Barang-Satuan/default.PNG">
                        <div class="card-body">
                            <p class="card-text">Barang Satuan</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 20rem;" data-value="Service">
                        <img class="card-img-top" src="<?php echo base_url(); ?>public/lib/Jasa-Service/default.PNG" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Jasa Service</p>
                        </div>
                    </div>
                </div>
            </div>







        </main>
        <!-- END MAIN CONTENT -->

    </div>
</div>
<?php $this->load->view('template/mainscript'); ?>

<script>
    $(document).ready(function() {
        $('.card').each(function() {
            $(this).css('cursor', 'pointer').hover(
                function() {
                    $(this).prop('class', 'card bg-info');
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

<?php $this->load->view('template/footer'); ?>