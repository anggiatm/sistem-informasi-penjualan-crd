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
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">

                                    <div class="form-group row mt-4">
                                        <label for="cari" class="col-sm-2 col-form-label col-form-label-sm">Cari Order</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control form-control-sm" id="cari" placeholder="Masukan Nama atau ID Pelanggan">
                                        </div>
                                        <div class="col-auto">

                                            <a href="<?php echo base_url('admin/orderbaru'); ?>" class="btn btn-sm btn-primary btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-shopping-cart"></i>
                                                </span>
                                                <span class="text">Order Baru</span>
                                            </a>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-1">
                                            <label>Filter : </label>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="periode" class="form-control-sm">Periode</label>
                                            <select id="periode" class="form-control form-control-sm">
                                                <option value="semua" selected>Semua</option>
                                                <option value="1hari">Hari Ini</option>
                                                <option value="3hari">3 Hari Terakhir</option>
                                                <option value="1minggu">1 Minggu Terakhir</option>
                                                <option value="1bulan">1 Bulan Terakhir</option>
                                                <option value="custom">Rentang Tanggal</option>
                                            </select>
                                        </div>
                                        <div id="settanggal">

                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="sort" class="form-control-sm">Sort By</label>
                                            <select id="sort" class="form-control form-control-sm">
                                                <option value="tgl_pesan" selected>Tanggal Order</option>
                                                <option value="tgl_selesai">Tanggal Jatuh Tempo</option>
                                                <option value="sisa">Tagihan</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="order" class="form-control-sm">Order</label>
                                            <select id="order" class="form-control form-control-sm">
                                                <option value="ASC" selected>Ascend</option>
                                                <option value="DESC">Descend</option>
                                            </select>
                                        </div>
                                    </div>
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
            <div class="modal fade" id="modal-konfirmasi-selesai" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal-title"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" name="btn-tutup">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="form-group row">
                                <label for="nama-pemesan" class="col-sm-2 col-form-label col-form-label-sm">Pemesan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="nama-pemesan" disabled>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <label for="nama-order" class="col-sm-2 col-form-label col-form-label-sm">Order</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="nama-order" disabled>
                                </div>
                            </div>

                            <!-- <div class="form-group row">
                                <label for="sisa-tagihan" class="col-sm-2 col-form-label col-form-label-sm"></label>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="cek-selesai">
                                        <label class="form-check-label" for="cek-selesai">
                                            Pesanan Selesai
                                        </label>
                                    </div>
                                </div>
                            </div> -->



                            <div class="form-group row mb-0">
                                <label for="sisa-tagihan" class="col-sm-2 col-form-label col-form-label-sm">Tagihan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="sisa-tagihan" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="sisa-tagihan" class="col-sm-2 col-form-label col-form-label-sm"></label>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="cek-lunas">
                                        <label class="form-check-label" for="cek-lunas">
                                            Tagihan Lunas
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <p class="text-center" id="msg-konfirmasi-selesai">Order Telah Selesai ?</p>
                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Tidak</button>
                            <button type="button" class="btn btn-outline-primary" id="btn-selesai">Ya</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Modal Form Detail -->

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
                    $('#tgl-awal').datepicker('setDate', new Date());
                    var data = readOrders("", "2020-01-01", getDateJs(), "tgl_pesan", "ASC");

                    writeCard(data);
                    $('#loader').hide();
                });

                $('#periode').change(function() {
                    var key = $('#cari').val();
                    var periode = $(this).val();
                    var sort = $('#sort').val();
                    var order = $('#order').val();

                    if (periode == "custom") {
                        var html = '';
                        html += '<div class="form-group col text-center">';
                        html += '<label>Rentang Tanggal</label>';
                        html += '<div class="form-group-sm input-group input-daterange datepicker">';
                        html += '<input type="text" class="form-control form-control-sm datepicker" id="tgl-awal" autocomplete="off">';
                        html += '<div class="input-group-addon">s/d</div>';
                        html += '<input type="text" class="form-control form-control-sm datepicker" id="tgl-akhir" autocomplete="off">';
                        html += '</div>';
                        html += '</div>';

                        $('#settanggal').html(html);
                        $('.datepicker').datepicker({
                            format: 'dd-mm-yyyy'
                        });
                        $('.input-daterange input').each(function() {
                            $(this).datepicker('clearDates');
                        });

                        $('#tgl-awal').change(function() {
                            var tgl = getPeriode(periode);
                            writeCard(readOrders(key, tgl.awal, tgl.akhir, sort, order));
                        });
                        $('#tgl-akhir').change(function() {
                            var tgl = getPeriode(periode);
                            writeCard(readOrders(key, tgl.awal, tgl.akhir, sort, order));
                        });
                    } else {
                        $('#settanggal>div').remove();
                        var tgl = getPeriode(periode);
                        var data = readOrders(key, tgl.awal, tgl.akhir, sort, order);
                        writeCard(data);
                    }
                });

                $('#cari').keyup(function() {
                    var key = $(this).val();
                    var periode = $('#periode').val();
                    var sort = $('#sort').val();
                    var order = $('#order').val();
                    var tgl = getPeriode(periode);

                    var data = readOrders(key, tgl.awal, tgl.akhir, sort, order);
                    writeCard(data);
                });

                $('#sort').change(function() {
                    var key = $('#cari').val();
                    var periode = $('#periode').val();
                    var sort = $(this).val();
                    var order = $('#order').val();

                    var tgl = getPeriode(periode);
                    writeCard(readOrders(key, tgl.awal, tgl.akhir, sort, order));
                });

                $('#order').change(function() {
                    var key = $('#cari').val();
                    var periode = $('#periode').val();
                    var sort = $('#sort').val();
                    var order = $(this).val();

                    var tgl = getPeriode(periode);
                    writeCard(readOrders(key, tgl.awal, tgl.akhir, sort, order));
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
                            if (data[i].status == "dalam-antrian" ||
                                data[i].status == "dalam-perakitan" ||
                                data[i].status == "selesai-dirakit" ||
                                data[i].status == "dalam-pengiriman" ||
                                data[i].sisa > 0) {
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
                                    html += 'Belum Ada Order Yang Diproses';
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
                                html += '<div class="col-md-3">';
                                html += '<i class="fas fa-file-invoice-dollar"></i> ' + formatToRupiah(data[i].sisa) + '<br>'; // Sisa Tagihan
                                html += '<i class="fas fa-question"></i> ' + data[i].status; //Status
                                html += '</div>';
                                html += '<div class="col-md-2">';
                                //html += '<button class="btn btn-danger btn-sm mr-0">Hapus</button>'; //BUTTON Hapus


                                html += '<button name="selesai" class="btn btn-primary btn-icon-split btn-sm">'
                                html += '<span class="icon text-white-50">'
                                html += '<i class="fas fa-edit"></i>'
                                html += '</span>'
                                html += '<span class="text">Update</span>'
                                html += '</button>'

                                html += '</div>';
                                html += '</div>';
                                html += '</div>';

                                html += '<div class="card-body">';
                                html += '<div class="row">';


                                datapelanggan = readPelanggan(data[i].id_pelanggan);

                                if (datapelanggan.length != 0) {
                                    html += '<div class="col-md-3">';
                                    html += '<i class="fas fa-user"></i>  ' + datapelanggan[0].nama_pelanggan;
                                    html += '</div>';
                                    html += '<div class="col-md-3">';

                                    if (datapelanggan[0].no_telp == "") {
                                        html += '<i class="fas fa-phone"></i> ' + '-';
                                    } else {
                                        html += '<i class="fas fa-phone"></i> ' + datapelanggan[0].no_telp;
                                    }

                                    html += '</div>';
                                    html += '<div class="col-md-5">';

                                    if (datapelanggan[0].alamat == "") {
                                        html += '<i class="fas fa-map-marked-alt"></i> ' + ' -';
                                    } else {
                                        html += '<i class="fas fa-map-marked-alt"></i> ' + datapelanggan[0].alamat;
                                    }
                                    html += '</div>';
                                } else {
                                    html += '<div class="col-md-10">';
                                    html += '<i class="fas fa-user"></i>  ' + data[i].id_pelanggan + ' <i class="text-danger">Data Pelanggan Tidak Ditemukan</i>';
                                    html += '</div>';
                                }

                                html += '<div class="col-md-1">';
                                html += '<button class="btn btn-light btn-icon-split btn-sm" data-toggle="collapse" data-target="#a' + data[i].no_order + '">'
                                //html += '<span class="text">Detail</span>'
                                html += '<span class="icon text-white-50">'
                                html += '<i class="fas fa-caret-down"></i>'
                                html += '</span>'
                                html += '</button>'

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
                                html += '<th scope="col">Harga @</th>';
                                html += '<th scope="col">Jumlah</th>';
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
                                    html += '<td>' + formatToRupiah(dataordersitem[j].harga) + '</td>';
                                    html += '<td>' + formatToRupiah(dataordersitem[j].jumlah) + '</td>';
                                    html += '</tr>';
                                }

                                html += '<tr data-value="">';
                                html += '<td colspan="7"></td>';
                                html += '</tr>';
                                html += '<tr data-value="">';
                                html += '<td colspan="5"></td>';
                                html += '<th scope="row">Uang Muka</th>';
                                html += '<td>' + formatToRupiah(data[i].uang_muka) + '</td>';
                                html += '</tr>';
                                html += '<tr data-value="">';
                                html += '<td colspan="5"></td>';
                                html += '<th scope="row">Sisa</th>';
                                html += '<td>' + formatToRupiah(data[i].sisa) + '</td>';
                                html += '</tr>';
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
                    $('#modal-title').html('Order No. ' + key);
                    $('#nama-order').val(data[0].nama_pesanan);
                    var pel = readPelanggan(data[0].id_pelanggan);
                    if (pel.length != 0) {
                        $('#nama-pemesan').val(pel[0].nama_pelanggan + ' [' + data[0].id_pelanggan + ']');
                    } else {

                        $('#nama-pemesan').val('Data pelanggan tidak ditemukan [' + data[0].id_pelanggan + ']');
                    }
                    $('#sisa-tagihan').val(formatToRupiah(data[0].sisa));
                    $('#modal-konfirmasi-selesai').modal('show');
                    $('#btn-selesai').click(function() {
                        var cekselesai = 0;
                        var ceklunas = 0;
                        var sisa = data[0].sisa;
                        var status = data[0].status;

                        // if ($('#cek-selesai').is(":checked")) {
                        //     cekselesai = 1;
                        //     status = "selesai";
                        // } else {
                        //     cekselesai = 0;
                        // }

                        if ($('#cek-lunas').is(":checked")) {
                            ceklunas = 1;
                            sisa = 0;
                        } else {
                            ceklunas = 0;
                        }
                        updateOrders(key,
                            data[0].nama_pesanan,
                            data[0].tgl_pesan,
                            data[0].tgl_selesai,
                            data[0].id_pelanggan,
                            data[0].total_barang,
                            data[0].total_harga,
                            data[0].uang_muka,
                            sisa,
                            data[0].kontruksi,
                            data[0].driver,
                            data[0].status,
                            data[0].note);
                        location.reload();
                        //$('#modal-konfirmasi-selesai').modal('hide');
                    });
                }
            </script>

</body>

</html>