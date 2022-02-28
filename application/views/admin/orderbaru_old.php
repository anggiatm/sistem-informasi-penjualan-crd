<?php $this->load->view('template/header_old'); ?>


<div class="container-fluid">
    <div class="row">

        <!-- SIDE BAR -->
        <?php $this->load->view('template/sidebar_old'); ?>



        <!-- CONTENT -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

            <div class="row mt-4">
                <div class="col">
                    <h4 class="text-center">Form Order Baru</h4>
                </div>
            </div>
            <hr>
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
                            <input type="text" class="form-control form-control-sm" id="detail-nama">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="order-nama" class="text-primary col-sm-1 col-form-label col-form-label-sm fas fa-id-card fa-lg my-auto"></label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm" id="order-id" disabled>
                        </div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#cari-pelanggan">
                                <i class="fas fa-search"></i></button>
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
            <hr>



            <div class="row">
                <div class="col-md-2 d-flex align-items-center">
                    <div class="input-group mb-2 d-none" id="div-tinggi">
                        <input type="text" class="form-control" id="tinggi" placeholder="Tinggi">
                        <div class="input-group-append">
                            <div class="input-group-text"><b>cm</b></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-md-2">
                    <div class="input-group mb-2 d-none" id="div-lebar">
                        <input type="text" class="form-control" id="lebar" placeholder="Lebar">
                        <div class="input-group-append">
                            <div class="input-group-text"><b>cm</b></div>
                        </div>
                    </div>
                </div>
            </div>

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
                            <i class="fas fa-plus"></i> Tambah</button>
                    </div>
                </div>
            </div>

            <div class="row mt-4 mb-5">
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
                                <input type="text" class="form-control form-control-sm datepicker mr-2" id="tgl-awal" autocomplete="off">
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



            <nav class="navbar fixed-bottom navbar-light bg-dark justify-content-end">
                <button type="button" class="btn btn-sm btn-secondary" id="tutup">Tutup</button>
                <button type="button" class="btn btn-sm btn-primary" id="konfirmasi-order">ORDER</button>
            </nav>

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
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary" id="order">Order & Print Nota</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Modal Form Detail -->


        </main>
        <!-- END MAIN CONTENT -->
    </div>


</div>




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
        var dataver = [
            [$('#detail-nama'), 1],
            [$('#order-nama'), 1],
            [$('#order-notelp'), 0],
            [$('#order-alamat'), 0]
        ];
        // 1 : DANGER
        // 2 : WARNING

        if (formValidation(dataver) > 0) {
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

                    html += '<td>' + $('tr[data-value=' + data + ']>td[name=col-barang]>textarea').val() + '</td>';
                    html += '<td>' + $('tr[data-value=' + data + ']>td[name=col-spesifikasi]>textarea').val() + '</td>';
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
        }
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
        var note = $('#note').val();

        tglpesan = sqlFormatDate(tglpesan);
        tglselesai = sqlFormatDate(tglselesai);


        totalbarang = parseInt(totalbarang);
        totalharga = formatRupiahToInt(totalharga);
        uangmuka = formatRupiahToInt(uangmuka);
        sisa = formatRupiahToInt(sisa);

        var status = "";
        if ($('input[type=checkbox]').is(':checked')) {
            status = "selesai";
        } else {
            status = "diproses";
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
            note: note,
            status: status
        }];


        if (readPelanggan(idpel).length > 0) {
            updatePelanggan(idpel, namapel, telp, alamat);
        } else {
            createPelanggan(idpel, namapel, telp, alamat);
        }

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

            var statOrderItem = createOrdersItem(noorder, idbarang, qty, spesifikasi, unit, harga, jumlah);

        });

        createNotaPDF(ordersItem, orders);
        location.reload();

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

        var startTable = 56;
        var newLine = 7;
        var enter = 4;
        var end = 195;
        var begin = 15;

        doc.setFont("helvetica");
        doc.setFontStyle("bold");
        doc.text("TOKO KACA & ALUMINIUM", 105, 8, null, null, "center");
        doc.setFontStyle("normal");
        doc.setFontSize(9);
        doc.text("CIMANDE ROLLING DOOR", 105, 12, null, null, "center");
        doc.text("Alamat", 105, 16, null, null, "center");

        doc.text("No Order", begin, 24, null, null, "left");
        doc.text("Nama  Order", begin, 28, null, null, "left");
        doc.text("Tanggal Order", begin, 32, null, null, "left");

        doc.text(": " + orders[0].noorder, begin + 25, 24, null, null, "left");
        doc.text(": " + orders[0].namapesanan, begin + 25, 28, null, null, "left");
        doc.text(": " + formatTanggal(orders[0].tglpesan), begin + 25, 32, null, null, "left");

        doc.text("No Pel", 140, 24, null, null, "left");
        doc.text("Nama", 140, 28, null, null, "left");
        doc.text("No Telp", 140, 32, null, null, "left");
        doc.text("Alamat", 140, 36, null, null, "left");

        doc.text(": " + orders[0].idpel, 153, 24, null, null, "left");
        doc.text(": " + orders[0].namapel, 153, 28, null, null, "left");
        doc.text(": " + orders[0].telp, 153, 32, null, null, "left");
        doc.text(": " + orders[0].alamat, 153, 36, null, null, "left");

        doc.setLineWidth(0.5);
        doc.line(begin, 44, end, 44);

        doc.setFont("helvetica");
        doc.setFontStyle("bold");
        doc.text("QTY", 28, 48, null, null, "center");
        doc.text("Jenis / Spesifikasi Barang", 72, 48);
        doc.text("Harga", 151, 48);
        doc.text("Jumlah", 177, 48);

        doc.setLineWidth(0.1);
        doc.line(begin, 52, end, 52);
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
                doc.line(begin, startTable + 2 + (enter * (y - 1)), end, startTable + 2 + (enter * (y - 1))); //line next for
                startTable = startTable + 2 + (enter * y);
            } else {
                doc.line(begin, startTable + 2 + (enter * (x - 1)), end, startTable + 2 + (enter * (x - 1))); //line next for
                startTable = startTable + 2 + (enter * x);
            }
        }

        doc.line(begin, 44, begin, startTable - 4);
        doc.line(45, 44, 45, startTable - 4);



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


        doc.line(140, 44, 140, startTable + enter + 12);
        doc.line(170, 44, 170, startTable + enter + 12);
        doc.line(end, 44, end, startTable + enter + 12);


        doc.setFontStyle("normal");

        doc.text("Note :", begin + 5, startTable + 2, null, null, "center");
        doc.text(orders[0].note, begin + 10, startTable + 2, null, null, "left");
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
        html += '<button class="btn btn-light btn-sm fas fa-trash fa-2x text-danger" name="btn-hapus-row"></button>';
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

<?php $this->load->view('template/footer'); ?>