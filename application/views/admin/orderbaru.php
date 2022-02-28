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
                                    <h6 class="m-0 font-weight-bold text-primary">Order Detail</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row mt-4">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="detail-id" class="col-sm-2 col-form-label col-form-label-sm">No Order</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm" id="detail-no" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="detail-nama" class="col-sm-2 col-form-label col-form-label-sm">Nama Pesanan</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm" id="detail-nama" placeholder="Masukan nama pesanan">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="order-nama" class="text-primary col-sm-1 col-form-label col-form-label-sm fas fa-id-card fa-lg my-auto"></label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm" id="order-id" disabled>
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#cari-pelanggan">
                                                                <i class="fas fa-search"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="order-nama" class="text-primary col-sm-1 col-form-label col-form-label-sm fas fa-user fa-lg my-auto"></label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm" id="order-nama" placeholder="Nama">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="order-notelp" class="text-primary col-sm-1 col-form-label col-form-label-sm fas fa-phone-alt fa-lg my-auto"></label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm" id="order-notelp" placeholder="Nomor Telepon">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="order-alamat" class="text-primary col-sm-1 col-form-label col-form-label-sm fas fa-map fa-lg my-auto"></label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm" id="order-alamat" placeholder="Alamat">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Order Cart</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive-sm table-sm">
                                                <table class="table table-hover table-bordered mb-0 pt-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" style="width: 1%">No</th>
                                                            <th scope="col" style="width: 15%">Jenis Barang</th>
                                                            <th scope="col">Ukuran/ Spesifikasi</th>
                                                            <th scope="col" style="width: 7%">QTY</th>
                                                            <th scope="col" style="width: 10%">Satuan</th>
                                                            <th scope="col" style="width: 12%">Harga</th>
                                                            <th scope="col" style="width: 12%">Jumlah</th>
                                                            <th scope="col" style="width: 5%">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tbl-nota">
                                                    </tbody>
                                                </table>
                                                <button class="btn btn-primary btn-sm col-md-12 pt-0 mt-0" id="tambah-nota-barang">
                                                    <i class="fas fa-cart-plus"></i> Tambah</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="tgl-awal">Order Masuk</label>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label for="tgl-akhir">Order Selesai</label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-9">
                                                    <div class="form-group-sm input-group input-daterange datepicker">
                                                        <input type="text" class="form-control form-control-sm datepicker mr-2" id="tgl-awal" autocomplete="off" disabled>
                                                        <div class="input-group-addon">s/d</div>
                                                        <input type="text" class="form-control form-control-sm datepicker ml-2" id="tgl-akhir" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="selesai">
                                                        <label class="form-check-label" for="selesai">Selesai</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="form-group">
                                                    <label for="note">Note : </label>
                                                    <textarea class="form-control form-control-sm" id="note" rows="3" cols="87" placeholder="Optional...."></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="table-responsive-sm ">
                                                <table class="table table-hover table-bordered">
                                                    <!-- <caption>Daftar Order</caption> -->
                                                    <thead>
                                                    </thead>
                                                    <tbody id="tbl-nota-final">
                                                        <tr data-value="total-barang">
                                                            <th scope="row">Total Barang</th>
                                                            <td>0</td>
                                                        </tr>
                                                        <tr data-value="total-harga">
                                                            <th scope="row">Total Harga</th>
                                                            <td>Rp. 0</td>
                                                        </tr>
                                                        <tr data-value="uang-muka">
                                                            <th scope="row">Uang Muka</th>
                                                            <td>
                                                                <input type="text" value="Rp. 0">
                                                                <div class="form-check form-check-inline ml-3">
                                                                    <input class="form-check-input" type="checkbox" id="cek-lunas">
                                                                    <label class="form-check-label" for="cek-lunas">LUNAS</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr data-value="sisa">
                                                            <th scope="row">Sisa</th>
                                                            <td>Rp. 0</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <nav class="navbar navbar-light  justify-content-end">

                                        <button class="btn btn-primary btn-icon-split" id="konfirmasi-order">
                                            <span class="text">Lanjut</span>
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                        </button>
                                    </nav>
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

            <!-- Modal Form Detail -->
            <div class="modal fade" id="cari-pelanggan" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Detail Pelanggan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" name="btn-tutup">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <label for="cari" class="col-sm-2 col-form-label col-form-label-sm">Cari Pelanggan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="cari" placeholder="Masukan Nama / Nomor Pelanggan" autofocus>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="table-responsive-sm mt-4">
                                        <table class="table table-hover">
                                            <caption>Cari Pelanggan</caption>
                                            <thead>
                                                <tr>
                                                    <th scope="col">Nama Pelanggan</th>
                                                    <th scope="col">ID Pelanggan</th>
                                                    <th scope="col">Telepon</th>
                                                    <th scope="col">Alamat</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbl-cari">
                                                <tr data-value="">
                                                    <th scope="row"></th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Modal Form Detail -->

            <!-- Modal Konfirmasi Order -->
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="modal-konfirmasi-order">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Detail Order</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row mb-0">
                                        <label for="no-order" class="col-sm-4 col-form-label col-form-label-sm">No. Order</label>
                                        <div class="col-sm-8">
                                            <input size="30" type="text" id="no-order" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <label for="nama-order" class="col-sm-4 col-form-label col-form-label-sm">Nama Order</label>
                                        <div class="col-sm-8">
                                            <input size="30" type="text" id="nama-order" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <label for="tgl-order" class="col-sm-4 col-form-label col-form-label-sm">Tgl Order</label>
                                        <div class="col-sm-8">
                                            <input size="30" type="text" id="tgl-order" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <label for="tgl-selesai" class="col-sm-4 col-form-label col-form-label-sm">Tgl Selesai</label>
                                        <div class="col-sm-8">
                                            <input size="30" type="text" id="tgl-selesai" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row mb-0">
                                        <label for="no-pel" class="col-sm-4 col-form-label col-form-label-sm">No. Pel</label>
                                        <div class="col-sm-8">
                                            <input size="30" type="text" id="no-pel" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <label for="nama-pel" class="col-sm-4 col-form-label col-form-label-sm">Nama</label>
                                        <div class="col-sm-8">
                                            <input size="30" type="text" id="nama-pel" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <label for="no-telp" class="col-sm-4 col-form-label col-form-label-sm">No. Telp</label>
                                        <div class="col-sm-8">
                                            <input size="30" type="text" id="no-telp" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <label for="alamat" class="col-sm-4 col-form-label col-form-label-sm">Alamat</label>
                                        <div class="col-sm-8">
                                            <input size="30" type="text" id="alamat" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive-sm mt-1 pr-0">
                                <table class="table table-sm table-hover">
                                    <caption>Data Order</caption>
                                    <thead>
                                        <tr class="table-active">
                                            <th scope="col">No</th>

                                            <th scope="col">Jenis Barang</th>
                                            <th scope="col">Ukuran / Spesifikasi</th>
                                            <th scope="col">QTY</th>
                                            <th scope="col">Satuan</th>
                                            <th scope="col">Harga @</th>
                                            <th scope="col">Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbl-orders-item">
                                        <tr data-value="">
                                            <th scope="row"></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Edit</button>
                            <button href="#" class="btn btn-primary btn-icon-split" id="order">
                                <span class="icon text-white-50">
                                    <i class="fas fa-shopping-cart"></i>
                                </span>
                                <span class="text">Order & Print Nota</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Modal Form Detail -->

            <div class="modal animated--grow-in" tabindex="-1" role="dialog" id="modal-order-sukses">
                <div class="modal-dialog" role="alert">
                    <div class="modal-content">
                        <div class="alert alert-success mb-0" role="alert">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="alert-heading">Order Berhasil Dibuat!</h4>
                            <hr>
                            <p>Order telah masuk ke order diproses. <a href="<?php echo site_url('admin/orderdiproses'); ?>" class="alert-link">Klik Disini</a> untuk melihat order yang sedang diproses.</p>
                        </div>
                    </div>
                </div>
            </div>


            <?php $this->load->view('template/footer'); ?>

            <?php $this->load->view('template/mainscript'); ?>
            <script>
                $(document).ready(function() {


                    $('.datepicker').datepicker({
                        format: 'dd-mm-yyyy'
                    });

                    $('.input-daterange input').each(function() {
                        $(this).datepicker('clearDates');
                    });

                    $('#tgl-awal').datepicker('setDate', new Date());

                    $('#detail-no').val(generateOrderId($('#tgl-awal').val()));
                    $('#order-id').val(generateIdPelanggan());

                    var rowcount = 0;
                    rowcount++;
                    addNewRow(rowcount);
                    editRow(rowcount);
                    //btnSimpan(rowcount);
                    writeTablePelanggan(readPelanggan(""));

                    $('#tambah-nota-barang').click(function() {
                        rowcount++;
                        addNewRow(rowcount);
                        $('#tbl-nota tr[data-value]').each(function() {
                            var data = $(this).attr('data-value');
                            //storeRow(data);
                            btnEdit(data);
                        });
                        editRow(rowcount);
                        //btnSimpan(rowcount);
                    });

                    $('#order').click(function() {
                        var noorder = $('#detail-no').val();
                        var namapesanan = $('#detail-nama').val();
                        var tglpesan = $('#tgl-awal').val();
                        var tglselesai = $('#tgl-akhir').val();
                        var idpel = $('#order-id').val();
                        var namapel = $('#order-nama').val();
                        var telp = $('#order-notelp').val();
                        var alamat = $('#order-alamat').val();
                        var totalbarang = $('#tbl-nota-final>tr[data-value=total-barang]>td').html();
                        var totalharga = $('#tbl-nota-final>tr[data-value=total-harga]>td').html();
                        var uangmuka = $('#tbl-nota-final>tr[data-value=uang-muka]>td>input').val();
                        var sisa = $('#tbl-nota-final>tr[data-value=sisa]>td').html();
                        var kontruksi = "";
                        var driver = "";
                        var status = "";
                        var note = $('#note').val();

                        tglpesan = sqlFormatDate(tglpesan);
                        tglselesai = sqlFormatDate(tglselesai);


                        totalbarang = parseInt(totalbarang);
                        totalharga = formatRupiahToInt(totalharga);
                        uangmuka = formatRupiahToInt(uangmuka);
                        sisa = formatRupiahToInt(sisa);


                        if ($('input[type=checkbox]').is(':checked')) {
                            status = "selesai-dikirim";
                        } else {
                            status = "dalam-antrian";
                        }

                        var orders = [{
                            noorder: noorder,
                            namapesanan: namapesanan,
                            tglpesan: tglpesan,
                            tglselesai: tglselesai,
                            idpel: idpel,
                            namapel: namapel,
                            telp: telp,
                            alamat: alamat,
                            totalbarang: totalbarang,
                            totalharga: totalharga,
                            uangmuka: uangmuka,
                            sisa: sisa,
                            kontruksi: kontruksi,
                            driver: driver,
                            note: note,
                            status: status
                        }];


                        if (readPelanggan(idpel).length > 0) {
                            updatePelanggan(idpel, namapel, telp, alamat);
                        } else {
                            createPelanggan(idpel, namapel, telp, alamat);
                        }

                        var statOrderItem;
                        var statOrder = createOrders(orders); //STRORE TO DATABASE ORDER

                        var ordersItem = [];
                        var no;
                        var qty;
                        var jenisbarang;
                        var idbarang;
                        var spesifikasi;
                        var unit;
                        var harga;
                        var jumlah;

                        $('#tbl-nota tr[data-value]').each(function() {
                            var data = $(this).attr('data-value');
                            var cekqty = $('tr[data-value=' + data + ']>td[name=col-qty]').html();

                            if (cekqty.includes("<option") == true) {
                                no = $('tr[data-value=' + data + ']>td[name=col-no]').html();
                                qty = $('tr[data-value=' + data + ']>td[name=col-qty]>select').val();
                                jenisbarang = $('tr[data-value=' + data + ']>td[name=col-barang]>textarea').val();
                                spesifikasi = $('tr[data-value=' + data + ']>td[name=col-spesifikasi]>textarea').val();
                                unit = $('tr[data-value=' + data + ']>td[name=col-unit]>select').val();
                                harga = $('tr[data-value=' + data + ']>td[name=col-harga]>input').val();
                                jumlah = $('tr[data-value=' + data + ']>td[name=col-jumlah]>input').val();

                            } else {
                                no = $('tr[data-value=' + data + ']>td[name=col-no]').html();
                                qty = $('tr[data-value=' + data + ']>td[name=col-qty]').html();
                                jenisbarang = $('tr[data-value=' + data + ']>td[name=col-barang]').html();
                                spesifikasi = $('tr[data-value=' + data + ']>td[name=col-spesifikasi]').html();
                                unit = $('tr[data-value=' + data + ']>td[name=col-unit]').html();
                                harga = $('tr[data-value=' + data + ']>td[name=col-harga]').html();
                                jumlah = $('tr[data-value=' + data + ']>td[name=col-jumlah]').html();
                            }

                            ordersItem.push({
                                no: no,
                                qty: qty,
                                jenisbarang: jenisbarang,
                                spesifikasi: spesifikasi,
                                unit: unit,
                                harga: harga,
                                jumlah: jumlah
                            });

                            idbarang = jenisbarang.split("\n");
                            idbarang = idbarang[0].replace(/#/g, '');

                            harga = formatRupiahToInt(harga);
                            jumlah = formatRupiahToInt(jumlah);

                            statOrderItem = createOrdersItem(noorder, idbarang, qty, spesifikasi, unit, harga, jumlah);

                        });
                        if (statOrder == "berhasil" && statOrderItem == "berhasil") {
                            createNotaPDF(ordersItem, orders);
                            $('#detail-no').val(generateOrderId(jsToSqlFormatDate(sqlFormatDate('now'))));
                            $('#detail-nama').val('');
                            $('#tgl-awal').datepicker('setDate', new Date());
                            $('#tgl-akhir').datepicker('setDate', new Date());
                            $('#order-id').val('');
                            $('#order-nama').val('');
                            $('#order-notelp').val('');
                            $('#order-alamat').val('');
                            $('#tbl-nota-final>tr[data-value=total-barang]>td').html('0');
                            $('#tbl-nota-final>tr[data-value=total-harga]>td').html('Rp. 0');
                            $('#tbl-nota-final>tr[data-value=uang-muka]>td>input').val('Rp. 0');
                            $('#tbl-nota-final>tr[data-value=sisa]>td').html('Rp. 0');
                            $('#note').val('');


                            $('#tbl-nota tr[data-value]').each(function() {
                                var data = $(this).attr('data-value');
                                $('tr[data-value=' + data + ']').remove();
                            });


                            rowcount++;
                            addNewRow(rowcount);
                            editRow(rowcount);
                            $('#modal-konfirmasi-order').modal('hide');
                            $('#modal-order-sukses').modal('show');

                        }
                        //location.reload();

                    });

                });


                $('#cari').keyup(function() {
                    var key = $('#cari').val();
                    var data = readPelanggan(key);
                    writeTablePelanggan(data);
                });

                $('#tgl-awal').change(function() {
                    $('#detail-no').val(generateOrderId($(this).val()));
                });

                $('#tbl-nota-final>tr[data-value=uang-muka]>td>input').keyup(function() {
                    $(this).val(formatToRupiah($(this).val()));
                    updateTotalBarang();
                });

                $('.modal').on('shown.bs.modal', function() {
                    $(this).find('[autofocus]').focus();
                });

                $('#cek-lunas').click(function() {
                    if ($('#cek-lunas').is(":checked")) {
                        $('#tbl-nota-final>tr[data-value=uang-muka]>td>input').val($('#tbl-nota-final>tr[data-value=total-harga]>td').html());
                        updateTotalBarang();
                    } else {
                        $('#tbl-nota-final>tr[data-value=uang-muka]>td>input').val("Rp. 0");
                        updateTotalBarang();
                    }
                });


                $('#konfirmasi-order').click(function() {
                    // var dataver = [
                    //     [$('#detail-nama'), 1],
                    //     [$('#order-nama'), 1],
                    //     [$('#order-notelp'), 0],
                    //     [$('#order-alamat'), 0]
                    // ];
                    // 1 : DANGER
                    // 2 : WARNING

                    //if (formValidation(dataver) > 0) {
                    //var note = $('#note').val();


                    $('#no-order').val($('#detail-no').val());
                    $('#nama-order').val($('#detail-nama').val());
                    $('#tgl-order').val(formatTanggal(sqlFormatDate($('#tgl-awal').val())));
                    $('#tgl-selesai').val(formatTanggal(sqlFormatDate($('#tgl-akhir').val())));

                    $('#no-pel').val($('#order-id').val());
                    $('#nama-pel').val($('#order-nama').val());
                    $('#no-telp').val($('#order-notelp').val());
                    $('#alamat').val($('#order-alamat').val());


                    var html = '';

                    $('#tbl-nota tr[data-value]').each(function() {
                        var data = $(this).attr('data-value');
                        var cekqty = $('tr[data-value=' + data + ']>td[name=col-qty]').html();

                        if (cekqty.includes("<option") == true) {
                            html += '<tr data-value = ' + $('tr[data-value=' + data + ']>th[name=col-no]').html() + ' >';
                            html += '<th scope="row">' + $('tr[data-value=' + data + ']>th[name=col-no]').html() + '</th>';


                            var barangln = $('tr[data-value=' + data + ']>td[name=col-barang]>textarea').val().split('\n');
                            html += '<td>';
                            for (var i = 0; i < barangln.length; i++) {
                                html += barangln[i] + '<br>';
                            }
                            html += '</td>';

                            //  html += '<td>' + $('tr[data-value=' + data + ']>td[name=col-barang]>textarea').val() + '</td>';

                            var spekln = $('tr[data-value=' + data + ']>td[name=col-spesifikasi]>textarea').val().split('\n');
                            html += '<td>';
                            for (var i = 0; i < spekln.length; i++) {
                                html += spekln[i] + '<br>';
                            }
                            html += '</td>';

                            // html += '<td>' + $('tr[data-value=' + data + ']>td[name=col-spesifikasi]>textarea').val() + '</td>';
                            html += '<td>' + $('tr[data-value=' + data + ']>td[name=col-qty]>select').val() + '</td>';
                            html += '<td>' + $('tr[data-value=' + data + ']>td[name=col-unit]>select').val() + '</td>';
                            html += '<td>' + $('tr[data-value=' + data + ']>td[name=col-harga]>input').val() + '</td>';
                            html += '<td>' + $('tr[data-value=' + data + ']>td[name=col-jumlah]>input').val() + '</td>';
                            html += '</tr>';

                        } else {

                            html += '<tr data-value = ' + $('tr[data-value=' + data + ']>th[name=col-no]').html() + ' >';
                            html += '<th scope="row">' + $('tr[data-value=' + data + ']>th[name=col-no]').html() + '</th>';

                            html += '<td>' + $('tr[data-value=' + data + ']>td[name=col-barang]').html() + '</td>';
                            html += '<td>' + $('tr[data-value=' + data + ']>td[name=col-spesifikasi]').html() + '</td>';
                            html += '<td>' + $('tr[data-value=' + data + ']>td[name=col-qty]').html() + '</td>';
                            html += '<td>' + $('tr[data-value=' + data + ']>td[name=col-unit]').html() + '</td>';
                            html += '<td>' + $('tr[data-value=' + data + ']>td[name=col-harga]').html() + '</td>';
                            html += '<td>' + $('tr[data-value=' + data + ']>td[name=col-jumlah]').html() + '</td>';
                            html += '</tr>';
                        }
                    });

                    html += '<tr data-value ="total-barang">';
                    html += '<td colspan="5"></td>';
                    html += '<th scope="row">Total Barang</th>';
                    html += '<td>' + $('#tbl-nota-final>tr[data-value=total-barang]>td').html() + '</td>';
                    html += '</tr>';

                    html += '<tr data-value ="total-harga">';
                    html += '<td colspan="5"></td>';
                    html += '<th scope="row">Total Harga</th>';
                    html += '<td>' + formatToRupiah($('#tbl-nota-final>tr[data-value=total-harga]>td').html()) + '</td>';
                    html += '</tr>';

                    html += '<tr data-value ="uang-muka">';
                    html += '<td colspan="5"></td>';
                    html += '<th scope="row">Uang Muka</th>';
                    html += '<td>' + formatToRupiah($('#tbl-nota-final>tr[data-value=uang-muka]>td>input').val()) + '</td>';
                    html += '</tr>';

                    html += '<tr data-value ="sisa">';
                    html += '<td colspan="5"></td>';
                    html += '<th scope="row">Sisa</th>';
                    html += '<td>' + formatToRupiah($('#tbl-nota-final>tr[data-value=sisa]>td').html()) + '</td>';
                    html += '</tr>';
                    $('#tbl-orders-item').html(html);

                    $('#modal-konfirmasi-order').modal('show');
                    // }
                });





                function updateTotalBarang() {
                    var count = 0;
                    $('#tbl-nota tr[data-value]').each(function() {
                        var data = $(this).attr('data-value');
                        var qty = $('tr[data-value=' + data + ']>td[name=col-qty]').html();

                        if (qty.includes("<option") == true) {
                            count = count + parseInt($('tr[data-value=' + data + ']>td[name=col-qty]>select').val());
                        } else {
                            count = count + parseInt($('tr[data-value=' + data + ']>td[name=col-qty]').html());
                        }
                    });
                    $('#tbl-nota-final tr[data-value=total-barang]>td').html(count + " Unit");

                    count = 0;
                    $('#tbl-nota tr[data-value]').each(function() {
                        var data = $(this).attr('data-value');
                        var jumlah = $('tr[data-value=' + data + ']>td[name=col-jumlah]').html();
                        if (jumlah.includes("<input") == true) {
                            var str = $('tr[data-value=' + data + ']>td[name=col-jumlah]>input').val();
                            str = str.replace(/,/g, '');
                            var splitstr = str.split(" ");
                            count = count + parseInt(splitstr[1]);
                        } else {
                            var str = $('tr[data-value=' + data + ']>td[name=col-jumlah]').html();
                            str = str.replace(/,/g, '');
                            var splitstr = str.split(" ");
                            count = count + parseInt(splitstr[1]);
                        }
                    });

                    var uangmuka = $('#tbl-nota-final tr[data-value=uang-muka]>td>input').val();

                    uangmuka = uangmuka.replace(/,/g, '');
                    var splituangmuka = uangmuka.split(" ");
                    uangmuka = parseInt(splituangmuka[1]);

                    var total = count;

                    var count = new Intl.NumberFormat('ban').format(count);
                    $('#tbl-nota-final tr[data-value=total-harga]>td').html(" " + count);

                    var sisa = total - uangmuka;
                    sisa = new Intl.NumberFormat('ban').format(sisa);
                    $('#tbl-nota-final tr[data-value=sisa]>td').html(" " + sisa);
                }

                function createNotaPDF(nota, orders) {
                    var doc = new jsPDF("l", "", "a5");

                    var logo = 'data:image/png;base64,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';

                    doc.addImage(logo, 'PNG', 16, 7, 25, 16);

                    var startTable = 60;
                    var newLine = 7;
                    var enter = 4;
                    var end = 195;
                    var beginX = 15;
                    var beginY = 29;

                    var beginHeaderX = 105;
                    var beginHeaderY = 12;

                    beginTableY = 48;

                    doc.setFont("helvetica");
                    doc.setFontStyle("bold");
                    doc.text("CIMANDE ROLLING DOOR", beginHeaderX, beginHeaderY, null, null, "center");
                    doc.setFontStyle("normal");
                    doc.setFontSize(12);
                    doc.text("Toko Kaca & Aluminium", beginHeaderX, beginHeaderY + 4, null, null, "center");
                    doc.setFontSize(9);
                    doc.text("Jl. Raya Sukabumi KM.17 Talang II Cimande - Caringin Bogor 16730", beginHeaderX, beginHeaderY + 8, null, null, "center");
                    //0822 1339 4565 - 0877 7002 0196 - 
                    doc.text("Telp. 0856 5959 0005", beginHeaderX, beginHeaderY + 11, null, null, "center");
                    doc.line(beginX, beginHeaderY + 12, end, beginHeaderY + 12); //line next for



                    doc.text("No Order", beginX, beginY, null, null, "left");
                    doc.text("Nama  Order", beginX, beginY + 4, null, null, "left");
                    doc.text("Tanggal Order", beginX, beginY + 8, null, null, "left");

                    doc.text(": " + orders[0].noorder, beginX + 25, beginY, null, null, "left");
                    doc.text(": " + orders[0].namapesanan, beginX + 25, beginY + 4, null, null, "left");
                    doc.text(": " + formatTanggal(orders[0].tglpesan), beginX + 25, beginY + 8, null, null, "left");

                    doc.text("No Pel", 130, beginY, null, null, "left");
                    doc.text("Nama", 130, beginY + 4, null, null, "left");
                    doc.text("No Telp", 130, beginY + 8, null, null, "left");
                    doc.text("Alamat", 130, beginY + 12, null, null, "left");

                    doc.text(": " + orders[0].idpel, 153, beginY, null, null, "left");
                    doc.text(": " + orders[0].namapel, 153, beginY + 4, null, null, "left");
                    doc.text(": " + orders[0].telp, 153, beginY + 8, null, null, "left");


                    //WRAP TEXT > 24 Character
                    var kataLength = [];
                    var row = [];
                    if ((orders[0].alamat).length > 24) {
                        var kata = (orders[0].alamat).split(" ");

                        for (var i = 0; i < kata.length; i++) {
                            kataLength.push(kata[i].length);
                        }
                        var baris = "";
                        for (var i = 0; i < kataLength.length; i++) {
                            if (((baris.length) + (kata[i].length)) < 24) {
                                baris = baris + " " + kata[i];
                            } else {
                                row.push(baris);
                                baris = "";
                            }
                            if (i == kataLength.length - 1) {
                                row.push(baris);
                            }
                        }
                        for (var i = 0; i < row.length; i++) {
                            var y = 41
                            if (i == 0) {
                                doc.text(": " + row[i], 153, y + (i * 4), null, null, "left");
                            } else {
                                doc.text("  " + row[i], 153, y + (i * 4), null, null, "left");
                            }
                        }
                    } else {
                        doc.text(": " + orders[0].alamat, 153, beginY + 12, null, null, "left");
                    }



                    doc.setLineWidth(0.5);
                    doc.line(beginX, beginTableY, end, beginTableY);

                    doc.setFont("helvetica");
                    doc.setFontStyle("bold");
                    doc.text("QTY", 28, beginTableY + 4, null, null, "center");
                    doc.text("Jenis / Spesifikasi Barang", 72, beginTableY + 4);
                    doc.text("Harga", 151, beginTableY + 4);
                    doc.text("Jumlah", 177, beginTableY + 4);

                    doc.setLineWidth(0.1);
                    doc.line(beginX, beginTableY + 7, end, beginTableY + 7);
                    doc.setFontStyle("normal");


                    for (var i = 0; i < nota.length; i++) {
                        var x = 0;
                        var y = 0;

                        doc.text(nota[i].qty + "  " + nota[i].unit, 28, startTable, null, null, "center"); //No

                        var jbline = nota[i].jenisbarang.split("\n");
                        jbline = jbline[0];

                        //for (x = 0; x < jbline.length; x++) {
                        //doc.text(jbline, 45, startTable + (x * enter)); //Jenis barang    30 character per line
                        //};

                        var usline = nota[i].spesifikasi.split("\n");
                        for (y = 0; y < usline.length; y++) {
                            if (y == 0) {
                                doc.text(jbline + ' - ' + usline[y], 50, startTable + (y * enter)); //Spesifikasi barang    30 character per line
                            } else {
                                doc.text(usline[y], 50, startTable + (y * enter)); //Spesifikasi barang    30 character per line
                            }
                        }

                        doc.text(nota[i].harga, 168, startTable, null, null, "right"); //Harga
                        doc.text(nota[i].jumlah, end - 3, startTable, null, null, "right"); //Jumlah

                        if (x < y) {
                            doc.line(beginX, startTable + 2 + (enter * (y - 1)), end, startTable + 2 + (enter * (y - 1))); //line next for
                            startTable = startTable + 2 + (enter * y);
                        } else {
                            doc.line(beginX, startTable + 2 + (enter * (x - 1)), end, startTable + 2 + (enter * (x - 1))); //line next for
                            startTable = startTable + 2 + (enter * x);
                        }
                    }

                    doc.line(beginX, beginTableY, beginX, startTable - 4);
                    doc.line(45, beginTableY, 45, startTable - 4);



                    doc.setFontStyle("bold");
                    doc.text("Total", 145, startTable + 2, null, null, "left");
                    doc.text(formatToRupiah(orders[0].totalharga), end - 3, startTable + 2, null, null, "right");
                    doc.line(140, startTable + 4, end, startTable + 4);


                    doc.text("Uang Muka", 145, startTable + 4 + enter, null, null, "left");
                    doc.text(formatToRupiah(orders[0].uangmuka), end - 3, startTable + 4 + enter, null, null, "right");
                    doc.line(140, startTable + enter + 6, end, startTable + enter + 6);

                    doc.text("Sisa", 145, startTable + 10 + enter, null, null, "left");
                    doc.text(formatToRupiah(orders[0].sisa), end - 3, startTable + 10 + enter, null, null, "right");
                    doc.line(140, startTable + enter + 12, end, startTable + enter + 12);


                    doc.line(140, beginTableY, 140, startTable + enter + 12);
                    doc.line(170, beginTableY, 170, startTable + enter + 12);
                    doc.line(end, beginTableY, end, startTable + enter + 12);


                    doc.setFontStyle("normal");

                    doc.text("Note :", beginX + 5, startTable + 2, null, null, "center");
                    doc.text(orders[0].note, beginX + 10, startTable + 2, null, null, "left");
                    doc.line(140, startTable + 4, end, startTable + 4);

                    doc.text("Bagian Penjualan", 170, 125, null, null, "center");
                    doc.text("Pelanggan", 30, 125, null, null, "center");


                    var filename = orders[0].noorder + '.pdf';
                    doc.save(filename);

                    const pdf = new File([doc.output("blob")], filename, {
                        type: "pdf"
                    });
                    var data = new FormData();
                    data.append('file', pdf);
                    uploadNota("nota", data);
                }


                function addNewRow(newrowcount) {

                    var html = '';
                    html += '<tr data-value="' + newrowcount + '">';

                    html += '<th name="col-no">';
                    html += '</th>';

                    html += '<td name="col-barang">';
                    html += '</td>';

                    html += '<td name="col-spesifikasi">';
                    html += '</td>';

                    html += '<td name="col-qty">';
                    html += '</td>';

                    html += '<td name="col-unit">';
                    html += '</td>';

                    html += '<td name="col-harga">';
                    html += '</td>';
                    html += '<td name="col-jumlah">';
                    html += '</td>';
                    html += '<td name="col-aksi">'
                    html += '<button name="btn-hapus-row" class="btn btn-danger btn-circle">';
                    html += '<i class="fas fa-trash"></i>';
                    html += '</button>';


                    //html += '<button class="btn btn-warning btn-sm" name="btn-edit-row">Edit</button>';
                    html += '</td>'
                    html += '</tr>';
                    $('#tbl-nota').append(html);

                    // $('tr[data-value=' + newrowcount + ']>td[name=col-aksi]>button[name=btn-edit-row]').click(function() {
                    //     if ($(this).html() == "Edit") {
                    //         editRow(newrowcount);
                    //         btnSimpan(newrowcount);
                    //     } else {
                    //         storeRow(newrowcount);
                    //         btnEdit(newrowcount);
                    //     }
                    // });

                    $('tr[data-value=' + newrowcount + ']>td[name=col-aksi]>button[name=btn-hapus-row]').click(function() {
                        $('tr[data-value=' + newrowcount + ']').remove();
                        nocount();
                    });
                    nocount();
                }

                function btnEdit(row) {
                    $('tr[data-value=' + row + ']>td>button[name=btn-edit-row]').prop('class', 'btn btn-outline-warning btn-sm');
                    $('tr[data-value=' + row + ']>td>button[name=btn-edit-row]').html("Edit");
                }

                function btnSimpan(row) {
                    $('tr[data-value=' + row + ']>td>button[name=btn-edit-row]').prop('class', 'btn btn-outline-primary btn-sm');
                    $('tr[data-value=' + row + ']>td>button[name=btn-edit-row]').html("Simpan");
                }

                function storeRow(row) {
                    var qty = $('tr[data-value=' + row + ']>td[name=col-qty]>select').val();
                    $('tr[data-value=' + row + ']>td[name=col-qty]').html(qty);
                    $('tr[data-value=' + row + ']>td[name=col-qty]>select').remove();

                    var spesifikasi = $('tr[data-value=' + row + ']>td[name=col-spesifikasi]>textarea').val();
                    $('tr[data-value=' + row + ']>td[name=col-spesifikasi]').html(spesifikasi);
                    $('tr[data-value=' + row + ']>td[name=col-spesifikasi]>textarea').remove();

                    var unit = $('tr[data-value=' + row + ']>td[name=col-unit]>select').val();
                    $('tr[data-value=' + row + ']>td[name=col-unit]').html(unit);
                    $('tr[data-value=' + row + ']>td[name=col-unit]>select').remove();

                    var harga = $('tr[data-value=' + row + ']>td[name=col-harga]>input').val();
                    $('tr[data-value=' + row + ']>td[name=col-harga]').html(harga);
                    $('tr[data-value=' + row + ']>td[name=col-harga]>input').remove();

                    var jumlah = $('tr[data-value=' + row + ']>td[name=col-jumlah]>input').val();
                    $('tr[data-value=' + row + ']>td[name=col-jumlah]').html(jumlah);
                    $('tr[data-value=' + row + ']>td[name=col-jumlah]>input').remove();


                    var barang = $('tr[data-value=' + row + ']>td[name=col-barang]>textarea').val();
                    $('tr[data-value=' + row + ']>td[name=col-barang]').html(barang);
                    $('tr[data-value=' + row + ']>td[name=col-barang]>textarea').remove();
                }


                function editRow(row) {
                    var qty = $('tr[data-value=' + row + ']>td[name=col-qty]').html();
                    var spesifikasi = $('tr[data-value=' + row + ']>td[name=col-spesifikasi]').html();
                    var unit = $('tr[data-value=' + row + ']>td[name=col-unit]').html();
                    var harga = $('tr[data-value=' + row + ']>td[name=col-harga]').html();
                    var jumlah = $('tr[data-value=' + row + ']>td[name=col-jumlah]').html();
                    var barang = $('tr[data-value=' + row + ']>td[name=col-barang]').html();
                    var html = '';


                    html += '<select class="form-control form-control-sm" name="qty">';
                    for (var i = 1; i <= 300; i++) {
                        html += '<option value="' + i + '">' + i + '</option>';
                    }
                    html += '</select>';
                    $('tr[data-value=' + row + ']>td[name=col-qty]').html(html);

                    if (qty != "") {
                        $('tr[data-value=' + row + ']>td[name=col-qty]>select').val(qty);
                    } else {
                        $('tr[data-value=' + row + ']>td[name=col-qty]>select').val(1);
                    }

                    html = ''
                    html += '<textarea class="form-control form-control-sm" rows="4"></textarea>';
                    $('tr[data-value=' + row + ']>td[name=col-spesifikasi]').html(html);
                    if (spesifikasi != "") {
                        $('tr[data-value=' + row + ']>td[name=col-spesifikasi]>textarea').val(spesifikasi);
                    } else {
                        $('tr[data-value=' + row + ']>td[name=col-spesifikasi]>textarea').val("");
                    }

                    html = ''
                    html += '<select class="form-control form-control-sm" rows="4">';
                    html += '<option value="Unit">Unit</option>';
                    html += '<option value="Set">Set</option>';
                    html += '<option value="Set">Roll</option>';
                    html += '<option value="Set">Box</option>';
                    html += '<option value="Batang">Batang</option>';
                    html += '<option value="Pcs">Pcs</option>';
                    html += '<option value="Meter">Meter</option>';
                    html += '<option value="Sentimeter">Sentimeter</option>';
                    html += '</select>';
                    $('tr[data-value=' + row + ']>td[name=col-unit]').html(html);
                    if (unit != "") {
                        $('tr[data-value=' + row + ']>td[name=col-unit]>select').val(unit);
                    } else {
                        $('tr[data-value=' + row + ']>td[name=col-unit]>select').val("Unit");
                    }

                    html = ''
                    html += '<input class="form-control form-control-sm" rows="4"></input>';
                    $('tr[data-value=' + row + ']>td[name=col-harga]').html(html);

                    if (harga != "") {
                        $('tr[data-value=' + row + ']>td[name=col-harga]>input').val(harga);
                    } else {
                        $('tr[data-value=' + row + ']>td[name=col-harga]>input').val("");
                    }

                    html = ''
                    html += '<input class="form-control form-control-sm" rows="4"></input>';
                    $('tr[data-value=' + row + ']>td[name=col-jumlah]').html(html);

                    if (jumlah != "") {
                        $('tr[data-value=' + row + ']>td[name=col-jumlah]>input').val(jumlah);
                    } else {
                        $('tr[data-value=' + row + ']>td[name=col-jumlah]>input').val("");
                    }

                    html = '';
                    html += '<div class="input-group" role="group" aria-label="Basic example">';
                    html += '<select class="form-control form-control-sm" name="produk">';
                    html += '<option value="Fabrikasi">Fabrikasi</option>';
                    html += '<option value="Satuan">Satuan</option>';
                    html += '<option value="Service">Service</option>';
                    html += '</select>';
                    html += '<select class="form-control form-control-sm" name="barang">';
                    html += '</select>';
                    html += '</div>';
                    html += '<textarea class="form-control form-control-sm mt-1" rows="3"></textarea>';
                    $('tr[data-value=' + row + ']>td[name=col-barang]').html(html);


                    if (barang != "") {
                        $('tr[data-value=' + row + ']>td[name=col-barang]>textarea').val(barang);
                    } else {
                        $('tr[data-value=' + row + ']>td[name=col-barang]>textarea').val("");
                    }


                    var produk = $('tr[data-value=' + row + ']>td[name=col-barang]>div>select[name=produk]').val();
                    var listbarang = readBarang(produk, "", "nama_barang", "ASC");
                    writeBarang(listbarang, row);

                    $('tr[data-value=' + row + ']>td[name=col-barang]>div>select[name=produk]').change(function() {
                        var produk = $('tr[data-value=' + row + ']>td[name=col-barang]>div>select[name=produk]').val();
                        var listbarang = readBarang(produk, "", "nama_barang", "ASC");
                        writeBarang(listbarang, row);
                    });


                    $('tr[data-value=' + row + ']>td[name=col-barang]>div>select[name=barang]').change(function() {
                        var produk = $('tr[data-value=' + row + ']>td[name=col-barang]>div>select[name=produk]').val();
                        var id = $('tr[data-value=' + row + ']>td[name=col-barang]>div>select[name=barang]').val();
                        if (id != 0) {
                            var databarang = readBarang(produk, id, "nama_barang", "ASC");
                            writeNota(databarang, row);
                        }
                    });

                    $('tr[data-value=' + row + ']>td[name=col-qty]>select').change(function() {
                        updateJumlah(row);
                        updateTotalBarang();
                    });

                    $('tr[data-value=' + row + ']>td[name=col-harga]>input').keyup(function() {
                        $(this).val(formatToRupiah($(this).val()));

                        updateJumlah(row);
                        updateTotalBarang();
                    });
                }

                function writeBarang(listbarang, row) {
                    var html = '';
                    for (var i = 0; i < listbarang.length; i++) {
                        html += '<option value="' + listbarang[i].id_barang + '">' + listbarang[i].nama_barang + '</option>';
                    }
                    $('tr[data-value=' + row + ']>td[name=col-barang]>div>select[name=barang]').html(html);
                }

                function writeNota(databarang, row) {
                    $('tr[data-value=' + row + ']>td[name=col-barang]>textarea').val('#' + databarang[0].id_barang + '\n' + databarang[0].nama_barang);
                    $('tr[data-value=' + row + ']>td[name=col-spesifikasi]>textarea').val(databarang[0].nama_barang);
                    $('tr[data-value=' + row + ']>td[name=col-unit]>select').val(databarang[0].unit);
                    $('tr[data-value=' + row + ']>td[name=col-harga]>input').val(" " + new Intl.NumberFormat('ban').format(databarang[0].harga));
                    updateJumlah(row);
                    updateTotalBarang();
                }

                function updateJumlah(row) {
                    var qty = $('tr[data-value=' + row + ']>td[name=col-qty]>select').val();
                    var harga = $('tr[data-value=' + row + ']>td[name=col-harga]>input').val();
                    harga = harga.replace(/,/g, '');
                    if (harga.includes(" ")) {
                        var splitharga = harga.split(" ");
                        var total = qty * parseInt(splitharga[1]);
                    } else {
                        var total = qty * harga;
                    }
                    $('tr[data-value=' + row + ']>td[name=col-jumlah]>input').val(" " + new Intl.NumberFormat('ban').format(total));
                }



                function nocount() {
                    var count = 1;
                    $('#tbl-nota tr[data-value]').each(function() {
                        var data = $(this).attr('data-value');
                        $('tr[data-value=' + data + ']>th[name=col-no]').html(count++);
                    });
                }


                function writeTablePelanggan(data) {
                    if (data.length > 0) {
                        $('#tbl-cari').empty();
                        var html = '';
                        for (var i = 0; i < data.length; i++) {
                            html += '<tr data-value = ' + data[i].id_pelanggan + ' >';
                            html += '<td>' + data[i].nama_pelanggan + '</td>';
                            html += '<td>' + data[i].id_pelanggan + '</td>';
                            html += '<td>' + data[i].no_telp + '</td>';
                            html += '<td>' + data[i].alamat + '</td>';
                            html += '</tr>';
                        }
                        $('#tbl-cari').html(html);
                        $(function() {
                            $('#tbl-cari tr[data-value]').each(function() {
                                $(this).css('cursor', 'pointer').hover(
                                    function() {
                                        $(this).addClass('active');
                                    },
                                    function() {
                                        $(this).removeClass('active');
                                    }).click(function() {
                                    writePelanggan($(this).attr('data-value'));
                                });
                            });
                        });
                    } else {
                        $('#tbl-cari').empty();
                    }
                }

                function writePelanggan(id) {
                    var data = readPelanggan(id);
                    $('#order-id').val(data[0].id_pelanggan);
                    $('#order-nama').val(data[0].nama_pelanggan);
                    $('#order-notelp').val(data[0].no_telp);
                    $('#order-alamat').val(data[0].alamat);
                    $('#cari-pelanggan').modal('hide');
                }
            </script>

</body>

</html>