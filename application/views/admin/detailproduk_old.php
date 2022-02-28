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
                            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/produk">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo $produk; ?></li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div id="card">

            </div>


            <!-- Modal Create Jenis -->
            <div class="modal fade" id="modal-create-jenis" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Tambah Produk</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-group">
                                        <label for="produk">Produk</label>
                                        <input type="text" class="form-control form-control-sm" id="produk" name="produk" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="id">ID Default Barang</label>
                                        <input type="text" class="form-control form-control-sm" id="id" name="id" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="produk">Nama Jenis</label>
                                        <input type="text" class="form-control form-control-sm" id="jenis" name="jenis">
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="button" class="btn btn-primary" id="btn-create-jenis">Simpan</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- END Modal Create Jenis -->

        </main>
        <!-- END MAIN CONTENT -->
    </div>
</div>
<?php $this->load->view('template/mainscript'); ?>

<script>
    $(document).ready(function() {
        var produk = "<?php echo $produk; ?>";
        writeCard(readJenis(produk));

        $('#btn-create-jenis').click(function() {
            var id = $('#id').val();
            var jenis = $('#jenis').val();

            createJenis(id, produk, jenis);
            location.reload();
        });

        function writeCard(data) {
            var numOfCols = 3;
            var rowCount = 0;
            var bootstrapColWidth = 4;
            var html = '';

            for (var i = 0; i <= data.length; i++) {
                if ((rowCount % numOfCols) == 0) {
                    html += '<div class="row mt-4">';
                }
                rowCount++;
                html += '<div class="d-flex justify-content-around col-md-' + bootstrapColWidth + '">';
                if (i == data.length) {
                    html += '<div class="card" style="width: 18rem;" data-value="Create Jenis">';
                } else {
                    html += '<div class="card" style="width: 18rem;" data-value="' + data[i].jenis + '">';
                }
                html += '<img class="card-img-top" src="default.PNG" alt="Card image cap">';
                html += '<div class=" card-body">';
                if (i == data.length) {
                    html += '<p class="card-text">Tambah Jenis</p>';
                } else {
                    html += '<p class="card-text">' + data[i].jenis + '</p>';
                }
                html += '</div>';
                html += '</div>';
                html += '</div>';

                if ((rowCount % numOfCols) == 0) {
                    html += '</div>';
                }
            }
            $('#card').html(html);
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
        }

        function getDetail(jenis) {
            if (jenis == "Create Jenis") {
                //generate id
                var datajenis = readJenis(produk, "", "");
                var counterjenis = datajenis.length + 1;
                var str = "" + counterjenis;
                var pad = "00";
                var idjenis = pad.substring(0, pad.length - str.length) + str;

                $('#id').val(idjenis);
                $('#produk').val(produk);
                $('#modal-create-jenis').modal('show');
            } else {
                window.location = '<?php echo base_url(); ?>admin/tabelproduk?produk=' + produk + '&jenis=' + jenis;
            }

        }
    });
</script>

<?php $this->load->view('template/footer'); ?>