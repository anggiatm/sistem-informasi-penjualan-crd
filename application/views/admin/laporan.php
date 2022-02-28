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
                                        <label for="cari" class="col-sm-2 col-form-label col-form-label-sm">Cari Pelanggan</label>
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
                                            <label for="periode">Periode</label>
                                            <select id="periode" class="form-control form-control-sm">
                                                <option value="semua" selected>Semua</option>
                                                <option value="harian">Harian</option>
                                                <option value="bulanan">Bulanan</option>
                                                <option value="tahunan">Tahunan</option>
                                            </select>
                                        </div>
                                        <div id="settanggal">
                                        </div>

                                        <div id="settahun">
                                        </div>

                                        <div id="setbulan">
                                        </div>

                                        <div id="setminggu">
                                        </div>
                                    </div>

                                </div>
                                <div class="card-body">
                                    <div class="table-responsive-sm mt-4">
                                        <table class="table table-sm table-hover">
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
                                            <tbody id="tbl-laporan">
                                                <tr data-value="">
                                                </tr>
                                            </tbody>
                                        </table>
                                        <button type="button" class="btn btn-primary" id="btn-print-laporan">Print Laporan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Hapus</button>
                            <button type="button" class="btn btn-primary">Print Nota</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                    $('#tgl-awal').datepicker('setDate', new Date());
                    var data = readOrders("", "2020-01-01", getDateJs(), "tgl_pesan", "ASC");
                    writeTableOrders(data);
                });


                $('#btn-print-laporan').click(function() {
                    var laporan = [];
                    var no;
                    var nama;
                    var tglpesan;
                    var tglselesai;
                    var pelanggan;
                    var total;
                    var uangmuka;
                    var sisa;
                    var status;

                    var penjualan;
                    var pendapatan;
                    var tagihan;

                    $('#tbl-laporan tr[data-value]').each(function() {
                        var data = $(this).attr('data-value');

                        if (data == "total-penjualan") {
                            penjualan = $('tr[data-value=' + data + ']>th[name=col-value]').html();

                        } else if (data == "total-pendapatan") {
                            pendapatan = $('tr[data-value=' + data + ']>th[name=col-value]').html();

                        } else if (data == "total-tagihan") {
                            tagihan = $('tr[data-value=' + data + ']>th[name=col-value]').html();

                        } else {
                            no = $('tr[data-value=' + data + ']>th[name=col-no]').html();
                            nama = $('tr[data-value=' + data + ']>td[name=col-nama]').html();
                            tglpesan = $('tr[data-value=' + data + ']>td[name=col-tglpesan]').html();
                            tglselesai = $('tr[data-value=' + data + ']>td[name=col-tglselesai]').html();
                            pelanggan = $('tr[data-value=' + data + ']>td[name=col-pelanggan]').html();
                            total = $('tr[data-value=' + data + ']>td[name=col-total]').html();
                            uangmuka = $('tr[data-value=' + data + ']>td[name=col-uangmuka]').html();
                            sisa = $('tr[data-value=' + data + ']>td[name=col-sisa]').html();
                            status = $('tr[data-value=' + data + ']>td[name=col-status]').html();

                            laporan.push({
                                no: no,
                                nama: nama,
                                tglpesan: tglpesan,
                                tglselesai: tglselesai,
                                pelanggan: pelanggan,
                                total: total,
                                uangmuka: uangmuka,
                                sisa: sisa,
                                status: status
                            });
                        }
                    });
                    var periode = $('#periode').val();
                    var tglprint = sqlFormatDate("now");

                    printLaporanPDF(laporan, periode, tglprint, penjualan, pendapatan, tagihan);
                });

                function printLaporanPDF(laporan, periode, tglprint, penjualan, pendapatan, tagihan) {

                    var doc = new jsPDF("p", "", "a4");

                    doc.setFont("helvetica");
                    doc.setFontStyle("bold");
                    doc.text("CIMANDE ROLLING DOOR", 105, 8, null, null, "center");
                    doc.setFontStyle("normal");
                    doc.setFontSize(9);
                    doc.text("Toko Kaca & Aluminium", 105, 12, null, null, "center");
                    doc.text("Alamat", 105, 16, null, null, "center");

                    doc.text("Laporan Periode", 10, 24, null, null, "left");
                    doc.text("Tanggal Print", 10, 28, null, null, "left");

                    doc.text(": " + periode, 35, 24, null, null, "left");
                    doc.text(": " + tglprint, 35, 28, null, null, "left");

                    var header = 40;
                    var header2 = header + 4;
                    doc.setLineWidth(0.5);
                    doc.line(10, header - 4, 200, header - 4);

                    doc.setFontSize(8);
                    doc.setFont("helvetica");
                    doc.setFontStyle("bold");
                    doc.text("No", 12, header, null, null, "center");
                    doc.text("No Order", 25, header, null, null, "center");
                    doc.text("Nama", 45, header, null, null, "center");
                    doc.text("Pesanan", 45, header2, null, null, "center");
                    doc.text("Tgl Pesan", 69, header, null, null, "center");
                    doc.text("Tgl Selesai", 89, header, null, null, "center");
                    doc.text("ID", 110, header, null, null, "center");
                    doc.text("Pelanggan", 110, header2, null, null, "center");
                    doc.text("Total", 127, header, null, null, "center");
                    doc.text("Uang Muka", 150, header, null, null, "center");
                    doc.text("Sisa", 175, header, null, null, "center");
                    doc.text("Status", 195, header, null, null, "center");


                    doc.setLineWidth(0.1);
                    doc.line(10, header2 + 2, 200, header2 + 2);
                    doc.setFontStyle("normal");

                    var startTable = 50;
                    var newLine = 7;
                    var enter = 4;

                    for (var i = 0; i < laporan.length; i++) {
                        var x = 0;
                        var y = 0;

                        doc.text((i + 1).toString(), 10, startTable); //No
                        doc.text(laporan[i].no, 17, startTable); //qty

                        var jbline = laporan[i].nama.split("\n");
                        for (x = 0; x < jbline.length; x++) {
                            doc.text(jbline[x], 37, startTable + (x * enter)); //Jenis barang    30 character per line
                        }

                        doc.text(laporan[i].tglpesan, 69, startTable, null, null, "center"); //Harga
                        doc.text(laporan[i].tglselesai, 89, startTable, null, null, "center"); //Harga
                        doc.text(laporan[i].pelanggan, 110, startTable, null, null, "center"); //Hargalo
                        doc.text(laporan[i].total, 138, startTable, null, null, "right"); //Jumlah
                        doc.text(laporan[i].uangmuka, 159, startTable, null, null, "right"); //Jumlah
                        doc.text(laporan[i].sisa, 184, startTable, null, null, "right"); //Jumlah
                        doc.text(laporan[i].status, 190, startTable, null, null, "left"); //Jumlah

                        if (x < y) {
                            doc.line(10, startTable + 2 + (enter * (y - 1)), 200, startTable + 2 + (enter * (y - 1))); //line next for
                            startTable = startTable + 2 + (enter * y);
                        } else {
                            doc.line(10, startTable + 2 + (enter * (x - 1)), 200, startTable + 2 + (enter * (x - 1))); //line next for
                            startTable = startTable + 2 + (enter * x);
                        }
                    }
                    doc.setFontStyle("bold");
                    startTable = startTable + 2 + (enter * x);
                    doc.text("Total Penjualan = " + penjualan, 190, startTable, null, null, "right"); //Jumlah

                    doc.line(10, startTable + 2 + (enter * (x - 1)), 200, startTable + 2 + (enter * (x - 1))); //line next for
                    startTable = startTable + 2 + (enter * x);

                    doc.text("Total Pendapatan = " + pendapatan, 190, startTable, null, null, "right"); //Jumlah

                    doc.line(10, startTable + 2 + (enter * (x - 1)), 200, startTable + 2 + (enter * (x - 1))); //line next for
                    startTable = startTable + 2 + (enter * x);

                    doc.text("Total Tagihan = " + tagihan, 190, startTable, null, null, "right"); //Jumlah


                    var filename = periode + tglprint + '.pdf';
                    doc.save(filename);

                    const pdf = new File([doc.output("blob")], filename, {
                        type: "pdf"
                    });
                    var data = new FormData();
                    data.append('file', pdf);
                    uploadNota("laporan", data);
                }

                $("#but_upload").click(function() {

                });


                $('#periode').change(function() {
                    var key = $('#cari').val();
                    var periode = $(this).val();


                    if (periode == "harian") {
                        $('#settanggal>div').remove();
                        $('#settahun>div').remove();
                        $('#setbulan>div').remove();
                        $('#setminggu>div').remove();

                        var html = '';
                        html += '<div class="form-group col text-center">';
                        html += '<label>Pilih Tanggal</label>';
                        html += '<div class="form-group-sm input-group input-daterange datepicker">';
                        html += '<input type="text" class="form-control form-control-sm datepicker" id="tgl-awal" autocomplete="off">';
                        html += '</div>';
                        html += '</div>';

                        $('#settanggal').html(html);
                        $('.datepicker').datepicker({
                            format: 'dd-mm-yyyy'
                        });

                        $('#tgl-awal').change(function() {
                            var tgl = jsToSqlFormatDate($(this).val());
                            writeTableOrders(readOrders("", tgl, tgl, "tgl_pesan", "ASC"));
                        });
                    }

                    // if (periode == "mingguan") {
                    //     $('#settanggal>div').remove();
                    //     $('#settahun>div').remove();
                    //     $('#setbulan>div').remove();
                    //     $('#setminggu>div').remove();

                    //     var html = '';
                    //     html += '<div class="form-group col text-center">';
                    //     html += '<label>Rentang Tanggal</label>';
                    //     html += '<div class="form-group-sm input-group input-daterange datepicker">';
                    //     html += '<input type="text" class="form-control form-control-sm datepicker" id="tgl-awal" autocomplete="off">';
                    //     html += '<div class="input-group-addon">s/d</div>';
                    //     html += '<input type="text" class="form-control form-control-sm datepicker" id="tgl-akhir" autocomplete="off">';
                    //     html += '</div>';
                    //     html += '</div>';

                    //     $('#settanggal').html(html);
                    //     $('.datepicker').datepicker({
                    //         format: 'DD,dd-mm-yyyy'
                    //     });


                    // $('#tgl-awal').change(function() {
                    //     tgl = $(this).val();
                    //     $('#tgl-awal').datepicker('setDate', new Date("08-01-2020"));
                    //     //document.write(tgl);
                    // });


                    //$('#tgl-awal').datepicker('setDate', new Date());

                    // var html = '';
                    // html += '<div>';
                    // html += '<label for="tahun">Tahun</label>';
                    // html += '<select id="tahun" class="form-control form-control-sm">';
                    // html += '<option value="2020" selected>2020</option>';
                    // html += '<option value="2021">2021</option>';
                    // html += '<option value="2022">2022</option>';
                    // html += '</select>';
                    // html += '</div>';
                    // $('#settahun').html(html);

                    // html = '';
                    // html += '<div>';
                    // html += '<label for="bulan">Bulan</label>';
                    // html += '<select id="bulan" class="form-control form-control-sm">';
                    // html += '<option value="Januari" selected>Januari</option>';
                    // html += '<option value="Februari">Februari</option>';
                    // html += '<option value="Maret">Maret</option>';
                    // html += '<option value="April">April</option>';
                    // html += '<option value="Mei">Mei</option>';
                    // html += '<option value="Juni">Juni</option>';
                    // html += '<option value="Juli">Juli</option>';
                    // html += '<option value="Agustus">Agustus</option>';
                    // html += '<option value="September">September</option>';
                    // html += '<option value="Oktober">Oktober</option>';
                    // html += '<option value="November">November</option>';
                    // html += '<option value="Desember">Desember</option>';
                    // html += '</select>';
                    // html += '</div>';
                    // $('#setbulan').html(html);

                    // html = '';
                    // html += '<div>';
                    // html += '<label for="minggu">Minggu Ke-</label>';
                    // html += '<select id="minggu" class="form-control form-control-sm">';
                    // html += '<option value="1" selected>1</option>';
                    // html += '<option value="2">2</option>';
                    // html += '<option value="3">3</option>';
                    // html += '<option value="4">4</option>';
                    // html += '</select>';
                    // html += '</div>';
                    // $('#setminggu').html(html);
                    // }

                    if (periode == "bulanan") {
                        $('#settanggal>div').remove();
                        $('#settahun>div').remove();
                        $('#setbulan>div').remove();
                        $('#setminggu>div').remove();

                        var html = '';
                        html += '<div>';
                        html += '<label for="tahun">Tahun</label>';
                        html += '<select id="tahun" class="form-control form-control-sm">';
                        html += '<option value="2020" selected>2020</option>';
                        html += '<option value="2021">2021</option>';
                        html += '<option value="2022">2022</option>';
                        html += '</select>';
                        html += '</div>';
                        $('#settahun').html(html);

                        html = '';
                        html += '<div>';
                        html += '<label for="bulan">Bulan</label>';
                        html += '<select id="bulan" class="form-control form-control-sm">';
                        html += '<option value="01" selected>Januari</option>';
                        html += '<option value="02">Februari</option>';
                        html += '<option value="03">Maret</option>';
                        html += '<option value="04">April</option>';
                        html += '<option value="05">Mei</option>';
                        html += '<option value="06">Juni</option>';
                        html += '<option value="07">Juli</option>';
                        html += '<option value="08">Agustus</option>';
                        html += '<option value="09">September</option>';
                        html += '<option value="10">Oktober</option>';
                        html += '<option value="11">November</option>';
                        html += '<option value="12">Desember</option>';
                        html += '</select>';
                        html += '</div>';
                        $('#setbulan').html(html);

                        $('#tahun').change(function() {
                            var tahun = "";
                            var bulan = "";

                            tahun = $(this).val();
                            bulan = $('#bulan').val();

                            var awal = tahun + "-" + bulan + "-01";
                            var akhir = tahun + "-" + bulan + "-31";
                            writeTableOrders(readOrders("", awal, akhir, "tgl_pesan", "ASC"));
                        });

                        $('#bulan').change(function() {
                            var tahun = "";
                            var bulan = "";

                            tahun = $('#tahun').val();
                            bulan = $(this).val();

                            var awal = tahun + bulan + "01";
                            var akhir = tahun + bulan + "31";
                            writeTableOrders(readOrders("", awal, akhir, "tgl_pesan", "ASC"));
                        });
                    }

                    if (periode == "tahunan") {
                        $('#settanggal>div').remove();
                        $('#settahun>div').remove();
                        $('#setbulan>div').remove();
                        $('#setminggu>div').remove();

                        var html = '';
                        html += '<div>';
                        html += '<label for="tahun">Tahun</label>';
                        html += '<select id="tahun" class="form-control form-control-sm">';
                        html += '<option value="2020" selected>2020</option>';
                        html += '<option value="2021">2021</option>';
                        html += '<option value="2022">2022</option>';
                        html += '</select>';
                        html += '</div>';
                        $('#settahun').html(html);

                        $('#tahun').change(function() {
                            var tahun = "";
                            tahun = $(this).val();

                            var awal = tahun + "-01" + "-01";
                            var akhir = tahun + "-12" + "-31";
                            //document.write(awal)
                            writeTableOrders(readOrders("", awal, akhir, "tgl_pesan", "ASC"));
                        });
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



                function writeTableOrders(data) {
                    if (data.length > 0) {
                        var totalpenjualan = 0;
                        var totalpendapatan = 0;
                        var totaltagihan = 0;

                        $('#tbl-laporan').empty();
                        var html = '';
                        for (var i = 0; i < data.length; i++) {
                            html += '<tr data-value = "' + data[i].no_order + '">';
                            html += '<th scope="row" name="col-no">' + data[i].no_order + '</th>';
                            html += '<td name="col-nama">' + data[i].nama_pesanan + '</td>';
                            html += '<td name="col-tglpesan">' + data[i].tgl_pesan + '</td>';
                            html += '<td name="col-tglselesai">' + data[i].tgl_selesai + '</td>';
                            html += '<td name="col-pelanggan">' + data[i].id_pelanggan + '</td>';
                            html += '<td name="col-total">' + formatToRupiah(data[i].total_harga); + '</td>';
                            html += '<td name="col-uangmuka">' + formatToRupiah(data[i].uang_muka) + '</td>';
                            html += '<td name="col-sisa">' + formatToRupiah(data[i].sisa) + '</td>';
                            html += '<td name="col-status">' + data[i].status + '</td>';
                            html += '</tr>';


                            totalpenjualan = totalpenjualan + parseInt(data[i].total_harga);
                            totalpendapatan = totalpendapatan + (parseInt(data[i].total_harga) - parseInt(data[i].sisa));
                            totaltagihan = totaltagihan + parseInt(data[i].sisa);
                        }
                        html += '<tr data-value="total-penjualan">';
                        html += '<td colspan=6></td>';
                        html += '<th scope="row">Total Penjualan</th>';
                        html += '<th scope="row" name="col-value">' + formatToRupiah(totalpenjualan) + '</th>';
                        html += '</tr>';

                        html += '<tr data-value="total-pendapatan">';
                        html += '<td colspan=6></td>';
                        html += '<th scope="row">Total Pendapatan</th>';
                        html += '<th scope="row" name="col-value">' + formatToRupiah(totalpendapatan) + '</th>';
                        html += '</tr>';


                        html += '<tr data-value="total-tagihan">';
                        html += '<td colspan=6></td>';
                        html += '<th scope="row">Total Tagihan</th>';
                        html += '<th scope="row" name="col-value">' + formatToRupiah(totaltagihan) + '</th>';
                        html += '</tr>';

                        $('#tbl-laporan').html(html);
                        $(function() {
                            $('#tbl-laporan tr[data-value]').each(function() {
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

</body>

</html>