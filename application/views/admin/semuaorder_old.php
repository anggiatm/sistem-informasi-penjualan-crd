<?php $this->load->view('template/header'); ?>


<div class="container-fluid">
    <div class="row">

        <!-- SIDE BAR -->
        <?php $this->load->view('template/sidebar'); ?>
        <!-- CONTENT -->

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

            <div class="form-group row mt-4">
                <label for="cari" class="col-sm-2 col-form-label col-form-label-sm">Cari Pelanggan</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control form-control-sm" id="cari" placeholder="Masukan Nama atau ID Pelanggan">
                </div>
                <div class="col-auto">
                    <a href=" <?php echo base_url('admin/orderbaru'); ?>">
                        <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#tambahpelanggan">Order Baru</button>
                    </a>
                </div>
            </div>


            <div class="row">
                <div class="form-group col-md-1">
                    <label>Filter : </label>

                </div>
                <div class="form-group col-md-2">
                    <label for="periode">Periode</label>
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
                    <label for="sort">Sort By</label>
                    <select id="sort" class="form-control form-control-sm">
                        <option value="tgl_pesan" selected>Tanggal Order</option>
                        <option value="tgl_selesai">Tanggal Jatuh Tempo</option>
                        <option value="sisa">Tagihan</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="order">Order</label>
                    <select id="order" class="form-control form-control-sm">
                        <option value="ASC" selected>Ascend</option>
                        <option value="DESC">Descend</option>
                    </select>
                </div>
            </div>


            <div class="table-responsive-sm mt-4">
                <table class="table table-hover">
                    <caption>Data Order</caption>
                    <thead>
                        <tr class="table-active">
                            <th scope="col">No Order</th>
                            <th scope="col">Nama Pesanan</th>
                            <th scope="col">Tgl Pesan</th>
                            <th scope="col">Tgl Selesai</th>
                            <th scope="col">ID Pelanggan</th>
                            <th scope="col">Total Harga</th>
                            <th scope="col">Uang Muka</th>
                            <th scope="col">Sisa Tagihan</th>
                            <th scope="col">Status</th>

                        </tr>
                    </thead>
                    <tbody id="tbl-orders">
                        <tr data-value="">
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
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


            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="modal-detail-order">
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
                                            <input type="text" id="no-order" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <label for="nama-order" class="col-sm-4 col-form-label col-form-label-sm">Nama Order</label>
                                        <div class="col-sm-8">
                                            <input type="text" id="nama-order" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <label for="tgl-order" class="col-sm-4 col-form-label col-form-label-sm">Tgl Order</label>
                                        <div class="col-sm-8">
                                            <input type="text" id="tgl-order" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <label for="tgl-selesai" class="col-sm-4 col-form-label col-form-label-sm">Tgl Selesai</label>
                                        <div class="col-sm-8">
                                            <input type="text" id="tgl-selesai" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row mb-0">
                                        <label for="no-pel" class="col-sm-4 col-form-label col-form-label-sm">No. Pel</label>
                                        <div class="col-sm-8">
                                            <input type="text" id="no-pel" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <label for="nama-pel" class="col-sm-4 col-form-label col-form-label-sm">Nama</label>
                                        <div class="col-sm-8">
                                            <input type="text" id="nama-pel" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <label for="no-telp" class="col-sm-4 col-form-label col-form-label-sm">No. Telp</label>
                                        <div class="col-sm-8">
                                            <input type="text" id="no-telp" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <label for="alamat" class="col-sm-4 col-form-label col-form-label-sm">Alamat</label>
                                        <div class="col-sm-8">
                                            <input type="text" id="alamat" disabled>
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
                                            <th scope="col">QTY</th>
                                            <th scope="col">Jenis Barang</th>
                                            <th scope="col">Ukuran / Spesifikasi</th>
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
                            <button type="button" class="btn btn-danger">Hapus</button>
                            <button type="button" class="btn btn-primary" id="btn-print-nota">Print Nota</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
        $('#tgl-awal').datepicker('setDate', new Date());
        var data = readOrders("", "2020-01-01", getDateJs(), "tgl_pesan", "ASC");
        writeTableOrders(data);


        //alert(hitungHari("2020-08-14", getDateJs()));
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
                writeTableOrders(readOrders(key, tgl.awal, tgl.akhir, sort, order));
            });
            $('#tgl-akhir').change(function() {
                var tgl = getPeriode(periode);
                writeTableOrders(readOrders(key, tgl.awal, tgl.akhir, sort, order));
            });
        } else {
            $('#settanggal>div').remove();
            var tgl = getPeriode(periode);
            var data = readOrders(key, tgl.awal, tgl.akhir, sort, order);
            writeTableOrders(data);
        }
    });

    $('#cari').keyup(function() {
        var key = $(this).val();
        var periode = $('#periode').val();
        var sort = $('#sort').val();
        var order = $('#order').val();
        var tgl = getPeriode(periode);

        var data = readOrders(key, tgl.awal, tgl.akhir, sort, order);
        writeTableOrders(data);
    });

    $('#sort').change(function() {
        var key = $('#cari').val();
        var periode = $('#periode').val();
        var sort = $(this).val();
        var order = $('#order').val();

        var tgl = getPeriode(periode);
        writeTableOrders(readOrders(key, tgl.awal, tgl.akhir, sort, order));
    });

    $('#order').change(function() {
        var key = $('#cari').val();
        var periode = $('#periode').val();
        var sort = $('#sort').val();
        var order = $(this).val();

        var tgl = getPeriode(periode);
        writeTableOrders(readOrders(key, tgl.awal, tgl.akhir, sort, order));
    });

    $('#btn-print-nota').click(function() {
        var no = $('#no-order').val();
        downloadPdf("nota", no);
    });



    function writeTableOrders(data) {
        if (data.length > 0) {
            $('#tbl-orders').empty();
            var html = '';
            for (var i = 0; i < data.length; i++) {
                var color = '';
                if (data[i].status == "diproses" || data[i].sisa > 0) {
                    if (hitungHari(data[i].tgl_selesai, getDateJs()) < 0) {
                        color = 'table-danger';
                    } else {
                        color = 'table-warning';
                    }
                } else {
                    color = 'table-success';
                }
                html += '<tr data-value = "' + data[i].no_order + '" class="' + color + '">';
                html += '<th scope="row">' + data[i].no_order + '</th>';
                html += '<td>' + data[i].nama_pesanan + '</td>';
                html += '<td>' + data[i].tgl_pesan + '</td>';
                html += '<td>' + data[i].tgl_selesai + '</td>';
                html += '<td>' + data[i].id_pelanggan + '</td>';
                html += '<td>' + formatToRupiah(data[i].total_harga); + '</td>';
                html += '<td>' + formatToRupiah(data[i].uang_muka) + '</td>';
                html += '<td>' + formatToRupiah(data[i].sisa) + '</td>';
                html += '<td>' + data[i].status + '</td>';
                html += '</tr>';
            }
            $('#tbl-orders').html(html);
            $(function() {
                $('#tbl-orders tr[data-value]').each(function() {
                    $(this).css('cursor', 'pointer').hover(
                        function() {
                            $(this).addClass('active');
                        },
                        function() {
                            $(this).removeClass('active');
                        }).click(function() {
                        getDetail($(this).attr('data-value'));
                    });
                });
            });
        } else {
            $('.table>tbody').empty();
        }
    }

    function getDetail(key) {
        var data = readOrders(key, "2020-01-01", getDateJs(), "tgl_pesan", "ASC");
        $('#no-order').val(data[0].no_order);
        $('#nama-order').val(data[0].nama_pesanan);
        $('#tgl-order').val(data[0].tgl_pesan);
        $('#tgl-selesai').val(data[0].tgl_selesai);

        var pel = readPelanggan(data[0].id_pelanggan);
        $('#no-pel').val(data[0].id_pelanggan);
        $('#nama-pel').val(pel[0].nama_pelanggan);
        $('#no-telp').val(pel[0].no_telp);
        $('#alamat').val(pel[0].alamat);

        var item = readOrdersItem(data[0].no_order);
        var html = '';
        for (var i = 0; i < item.length; i++) {
            html += '<tr data-value = ' + item[i].id_barang + ' >';
            html += '<th scope="row">' + (i + 1) + '</th>';
            html += '<td>' + item[i].qty + '</td>';
            var namabarang = readBarang("", item[i].id_barang, "nama_barang", "ASC");
            html += '<td>' + namabarang[0].nama_barang + '</td>';
            html += '<td>' + item[i].spesifikasi + '</td>';
            html += '<td>' + item[i].unit + '</td>';
            html += '<td>' + formatToRupiah(item[i].harga); + '</td>';
            html += '<td>' + formatToRupiah(item[i].jumlah) + '</td>';
            html += '</tr>';
        }

        html += '<tr data-value ="total-barang">';
        html += '<td colspan="5"></td>';
        html += '<th scope="row">Total Barang</th>';
        html += '<td>' + data[0].total_barang + '</td>';
        html += '</tr>';

        html += '<tr data-value ="total-harga">';
        html += '<td colspan="5"></td>';
        html += '<th scope="row">Total Harga</th>';
        html += '<td>' + formatToRupiah(data[0].total_harga) + '</td>';
        html += '</tr>';

        html += '<tr data-value ="uang-muka">';
        html += '<td colspan="5"></td>';
        html += '<th scope="row">Uang Muka</th>';
        html += '<td>' + formatToRupiah(data[0].uang_muka) + '</td>';
        html += '</tr>';

        html += '<tr data-value ="sisa">';
        html += '<td colspan="5"></td>';
        html += '<th scope="row">Sisa</th>';
        html += '<td>' + formatToRupiah(data[0].sisa) + '</td>';
        html += '</tr>';
        $('#tbl-orders-item').html(html);

        $('#modal-detail-order').modal('show');
    }
</script>
<?php $this->load->view('template/footer'); ?>