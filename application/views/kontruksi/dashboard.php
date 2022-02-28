<?php $this->load->view('template/header'); ?>



<body id="page-top">
    <input type="hidden" class="form-control form-control-sm" id="kontruksi" value=" <?php echo $_SESSION['username'] ?>" disabled>
    <div id="wrapper">

        <?php $this->load->view('template/sidebar'); ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php $this->load->view('template/topbar'); ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <!-- Area Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">


                                </div>

                                <div class="mx-auto mt-5" id="loader">
                                    <div class="loader"></div>
                                    <p class="font-italic">Sedang memuat....</p>
                                </div>

                                <div class="card-body">
                                    <div id="card-orders">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Konfirmasi Order -->

            <div class="modal fade" id="modal-konfirmasi-selesai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ambil Pekerjaan?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Anda akan mengerjakan order ini?
                            <input type="text" class="form-control form-control-sm" id="modal-title" disabled>

                        </div>

                        <div class=" modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                            <button class="btn btn-primary" id="btn-selesai">Ambil</button>
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
                    var data = readOrders("", "2020-01-01", getDateJs(), "tgl_pesan", "ASC");

                    writeCard(data);
                    $('#loader').hide();
                });

                function writeCard(data) {
                    var html = '';
                    var statusBg = '';
                    var statusBd = '';
                    var datapelanggan;

                    if (data.length > 0) {
                        $('#card-orders>div').remove();
                        var count = 0;
                        for (var i = 0; i < data.length; i++) {
                            if (data[i].status == "dalam-antrian") {
                                if (hitungHari(data[i].tgl_selesai, getDateJs()) < 0) {
                                    drawCard('danger');
                                    //color = 'table-danger';
                                } else {
                                    drawCard('warning');
                                    //color = 'table-warning';
                                }
                            } else {
                                count++;
                                if (count == data.length) {
                                    var html = '';
                                    html += '<div class="alert alert-primary" role="alert">';
                                    html += 'Belum Ada Pekerjaan !';
                                    html += '</div>';
                                }
                            }

                            function drawCard(color) {
                                statusBd = 'border-left-' + color;
                                statusBg = 'alert-' + color;

                                html += '<div class="card mt-4 ' + statusBd + '" data-value="' + data[i].no_order + '">';
                                html += '<div class=" ' + statusBg + '">';
                                html += '<div class="row mt-1 mr-2 ml-2">';
                                html += '<div class="col-md-3">';
                                html += '<i class="fas fa-list-ol"></i> ' + data[i].no_order + '<br>'; //Nomor Order
                                html += '<i class="fas fa-shopping-cart"></i>  ' + data[i].nama_pesanan; // Nama Order
                                html += '</div>';
                                html += '<div class="col-md-4">';
                                html += '<i class="fas fa-calendar-plus"></i>  ' + formatTanggal(data[i].tgl_pesan) + '<br>'; // Sisa Tagihan
                                html += '<i class="fas fa-calendar-check"></i>  ' + formatTanggal(data[i].tgl_selesai); // Sisa Tagihan
                                html += '</div>';
                                html += '<div class="col-md-2">';
                                html += '<i class="fas fa-question"></i> ' + data[i].status; //Status
                                html += '</div>';
                                html += '<div class="col-md-3">';
                                //html += '<button class="btn btn-danger btn-sm mr-0">Hapus</button>'; //BUTTON Hapus


                                html += '<button name="selesai" class="btn btn-primary btn-icon-split btn-sm">'
                                html += '<span class="icon text-white-50">'
                                html += '<i class="fas fa-edit"></i>'
                                html += '</span>'
                                html += '<span class="text">Ambil Pekerjaan</span>'
                                html += '</button>'

                                html += '<button class="btn btn-light btn-icon-split btn-sm" data-toggle="collapse" data-target="#a' + data[i].no_order + '">'
                                html += '<span class="icon text-white-10"> Detail'
                                html += '<i class="fas fa-caret-down"></i>'
                                html += '</span>'
                                html += '</button>'

                                html += '</div>';
                                html += '</div>';
                                html += '</div>';

                                html += '<div class="card-body">';
                                html += '<div class="row">';


                                //datapelanggan = readPelanggan(data[i].id_pelanggan);


                                html += '<div class="col-md-1">';
                                html += '</div>';
                                html += '</div>';
                                html += '<footer>';

                                html += '<div class="collapse mt-2" id="a' + data[i].no_order + '">';
                                html += '<div class="table-responsive-sm">';
                                html += '<table class="table table-sm table-hover">';
                                html += '<caption>Daftar Order</caption>';
                                html += '<thead>';
                                html += '<tr>';
                                html += '<th scope="col">ID Barang</th>';
                                html += '<th scope="col">Nama Barang</th>';
                                html += '<th scope="col">Spesifikasi</th>';
                                html += '<th scope="col">Qty</th>';
                                html += '<th scope="col">Satuan</th>';
                                html += '</tr>';
                                html += '</thead>';

                                var dataordersitem = readOrdersItem(data[i].no_order);

                                html += '<tbody id="tbl-orders">';
                                for (var j = 0; j < dataordersitem.length; j++) {
                                    html += '<tr data-value="">';
                                    html += '<td>' + dataordersitem[j].id_barang + '</td>';
                                    var databarang = readBarang("", dataordersitem[j].id_barang, "nama_barang", "ASC");
                                    html += '<td>' + databarang[0].nama_barang + '</td>';
                                    html += '<td>' + dataordersitem[j].spesifikasi + '</td>';
                                    html += '<td>' + dataordersitem[j].qty + '</td>';
                                    html += '<td>' + dataordersitem[j].unit + '</td>';
                                    html += '</tr>';
                                }

                                html += '</tbody>';
                                html += '</table>';
                                html += '</div>';
                                html += '</div>';


                                html += '</footer>';
                                html += '</div>';
                                html += '</div>';
                            }
                        }
                        $('#card-orders').html(html);

                        // '#card-orders div[data-value]>div>div>div>button'
                        $('#card-orders div[data-value]').each(function() {
                            var data = $(this).attr('data-value');
                            $('#card-orders div[data-value=' + data + ']>div>div>div>button[name=selesai]').click(function() {
                                writeModal(data);
                            });
                        });
                    } else {
                        // $('#card-orders').html('');
                    }
                }

                function writeModal(key) {
                    var data = readOrders(key, "2020-01-01", getDateJs(), "tgl_pesan", "ASC");

                    $('#modal-title').val('Order No. ' + key);
                    $('#modal-konfirmasi-selesai').modal('show');

                    $('#btn-selesai').click(function() {
                        var kontruksi = $('#kontruksi').val();
                        var status = "dalam-perakitan";
                        updateOrders(key,
                            data[0].nama_pesanan,
                            data[0].tgl_pesan,
                            data[0].tgl_selesai,
                            data[0].id_pelanggan,
                            data[0].total_barang,
                            data[0].total_harga,
                            data[0].uang_muka,
                            data[0].sisa,
                            kontruksi,
                            data[0].driver,
                            status,
                            data[0].note);

                        location.reload();
                        //$('#modal-konfirmasi-selesai').modal('hide');
                    });
                }
            </script>

</body>

</html>