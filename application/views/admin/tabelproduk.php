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
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/produk">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo $_GET['produk']; ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <!-- Area Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <div class="form-group row mt-4">

                                        <div class="input-group col-sm-6">
                                            <input type="text" class="form-control form-control-sm" id="cari" placeholder="Cari Barang">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary btn-sm" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="col-auto">
                                            <button class="btn btn-primary btn-icon-split btn-sm" data-toggle="modal" data-target="#tambahBarang" id="btn-modal-create-produk">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-cart-plus"></i>
                                                </span>
                                                <span class="text">Tambah Produk</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-body">
                                    <div class="table-responsive-sm mt-4">
                                        <table class="table table-hover">
                                            <caption>List Produk <?php echo $_GET['produk']; ?></caption>
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID Barang</th>
                                                    <th scope="col">Nama Barang</th>
                                                    <th scope="col">Unit</th>
                                                    <th scope="col">Harga</th>
                                                    <th scope="col">Keterangan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
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





            <!-- Modal Form Detail -->
            <div class="modal fade" id="detail" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Detail Produk</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" name="btn-tutup">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="detail-id">ID Barang (otomatis)</label>
                                        <input type="text" class="form-control" id="detail-id" name="detail-id" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="detail-produk">Produk</label>
                                        <input type="text" class="form-control" id="detail-produk" name="detail-produk" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="detail-nama">Nama Barang</label>
                                        <input type="text" class="form-control" id="detail-nama" name="detail-nama" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="detail-unit">Unit</label>
                                        <input type="text" class="form-control" id="detail-unit" name="detail-unit" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="detail-harga">Harga</label>
                                        <input type="text" class="form-control form-control-sm" id="detail-harga" name="detail-harga" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="detail-keterangan">Keterangan</label>
                                        <textarea class="form-control form-control-sm" id="detail-keterangan" rows="3" disabled></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-danger" id="btn-hapus">Hapus</button>
                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal" name="btn-tutup">Tutup</button>
                                <!-- <span id="btn-edit-simpan"></span> -->

                                <button type="button" class="btn btn-outline-warning" id="btn-edit" data-value="edit">Edit</button>
                                <!-- <button type="button" class="btn btn-outline-primary" id="btn-simpan">Simpan</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Modal Form Detail -->


            <!-- Modal Form Tambah Produk -->
            <div class="modal fade" id="tambahBarang" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Tambah Produk <?php echo $_GET['produk'] ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="id">ID Barang (otomatis)</label>
                                        <input type="text" class="form-control form-control-sm" id="id" name="id" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="produk">Produk</label>
                                        <input type="text" class="form-control form-control-sm" id="produk" name="produk" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama Barang</label>
                                        <input type="text" class="form-control form-control-sm" id="nama" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="unit">Satuan</label>
                                        <input type="text" class="form-control form-control-sm" id="unit" name="unit">
                                    </div>
                                    <div class=" form-group">
                                        <label for="harga">Harga</label>
                                        <input type="text" class="form-control form-control-sm" id="harga" name="harga">
                                    </div>
                                    <div class="form-group">
                                        <label for="keterangan">Keterangan</label>
                                        <textarea class="form-control form-control-sm" id="keterangan" rows="3" placeholder="Masukan Keterangan Lengkap. Contoh Kaca-Mati, Double... dll"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="button" class="btn btn-primary" id="btn-create-barang">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Modal Form Tambah Produk -->
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
                    var produk = "<?php echo $_GET['produk']; ?>";
                    var key = $('#cari').val();

                    writeTable(readBarang(produk, key, "nama_barang", "ASC"));
                    $('#cari').keyup(function() {
                        var key = $(this).val();
                        writeTable(readBarang(produk, key, "nama_barang", "ASC"));
                    });

                    $('#btn-edit').click(function() {
                        if ($(this).html() == "Edit") {
                            btnSimpan();
                        } else {
                            var id = $('#detail-id').val();
                            var produk = $('#detail-produk').val();
                            var nama = $('#detail-nama').val();
                            var unit = $('#detail-unit').val();
                            var harga = $('#detail-harga').val();
                            var keterangan = $('#detail-keterangan').val();
                            updateBarang(id, produk, nama, unit, formatRupiahToInt(harga), keterangan);
                            btnEdit();
                        }
                    });

                    $('.modal button[name=btn-tutup]').click(function() {
                        btnEdit();
                    });

                    $('#detail-harga').keyup(function() {
                        $(this).val(formatToRupiah($(this).val()));
                    });

                    $('#harga').keyup(function() {
                        $(this).val(formatToRupiah($(this).val()));
                    });

                    //AUTO-FILL------
                    $('#btn-modal-create-produk').click(function() {

                        $('#id').val(generateIdBarang(produk));
                        $('#produk').val(produk);
                    });

                    $('#btn-create-barang').click(function() {
                        var id = $('#id').val();
                        var produk = $('#produk').val();
                        var nama = $('#nama').val();
                        var unit = $('#unit').val();
                        var harga = $('#harga').val();
                        var keterangan = $('#keterangan').val();
                        createBarang(id, produk, nama, unit, formatRupiahToInt(harga), keterangan);
                        $('#tambahBarang').modal('hide');
                        location.reload();
                    });

                    $('#btn-tambah-produk').click(function() {
                        getIdProduk(produk, folder);
                    });

                    $('#btn-hapus').click(function() {
                        var id = $('#detail-id').val();
                        deleteBarang(id);
                        $('#detail').modal('hide');
                        writeTable(readBarang(produk, key, "nama_barang", "ASC"));
                    });

                    function btnEdit() {
                        $('#detail-nama').prop('disabled', true);
                        $('#detail-unit').prop('disabled', true);
                        $('#detail-harga').prop('disabled', true);
                        $('#detail-keterangan').prop('disabled', true);
                        $('#btn-edit').prop('class', 'btn btn-outline-warning');
                        $('#btn-edit').html("Edit");
                    }

                    function btnSimpan() {
                        $('#detail-nama').prop('disabled', false);
                        $('#detail-unit').prop('disabled', false);
                        $('#detail-keterangan').prop('disabled', false);
                        $('#detail-harga').prop('disabled', false);
                        $('#btn-edit').prop('class', 'btn btn-outline-primary');
                        $('#btn-edit').html("Simpan");
                    }


                    function writeTable(data) {
                        if (data.length > 0) {
                            $('.table>tbody').empty();
                            var html = '';
                            for (var i = 0; i < data.length; i++) {
                                html += '<tr data-value = ' + data[i].id_barang + ' >';
                                html += '<th scope="row">' + data[i].id_barang + '</th>';
                                html += '<td>' + data[i].nama_barang + '</td>';
                                html += '<td>' + data[i].unit + '</td>';
                                html += '<td>' + formatToRupiah(data[i].harga) + '</td>';
                                html += '<td>' + data[i].keterangan + '</td>';
                                html += '</tr>';
                            }
                            $('.table>tbody').html(html);
                            $(function() {
                                $('.table tr[data-value]').each(function() {
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
                        var data = readBarang(produk, key, "nama_barang", "ASC");

                        $('#detail-id').val(data[0].id_barang);
                        $('#detail-produk').val(data[0].produk);
                        $('#detail-nama').val(data[0].nama_barang);
                        $('#detail-unit').val(data[0].unit);
                        $('#detail-harga').val(formatToRupiah(data[0].harga));
                        $('#detail-keterangan').val(data[0].keterangan);
                        $('#detail').modal('show');
                    }
                });

                function getFilter(produk, folder) {

                    var cari = $('#cari').val();

                    $.ajax({
                        url: "<?php echo base_url(); ?>admin/getFilterproduk",
                        method: "POST",
                        data: {
                            key: cari,
                            folder: folder,
                            produk: produk
                        },
                        async: false,
                        dataType: 'json',
                        success: function(data) {
                            if (data.length > 0) {
                                $('.table>tbody').empty();
                                $('.table>thead').empty();
                                var tablebody = '';
                                var tablehead = '';
                                var test = '';
                                for (var i = 0; i < data.length; i++) {
                                    tablebody += '<tr data-value = ' + data[i].id_barang + ' >';
                                    tablebody += '<th scope="row">' + data[i].id_barang + '</th>';

                                    // if (data[i].spesifikasi != test) {
                                    tablebody += '<td>' + folder + " " + data[i].spesifikasi + '</td>';
                                    tablebody += '<td>' + data[i].harga + '</td>';
                                    //  }
                                    //   if (data[i].keterangan != test) {
                                    tablebody += '<td>' + data[i].keterangan + '</td>';
                                    // }

                                    tablebody += '</tr>';
                                }
                                tablehead += '<tr>';
                                tablehead += '<th scope="col">ID Barang</th>';
                                // if (data[1].spesifikasi != test) {
                                tablehead += '<th scope="col">Nama Barang</th>';
                                tablehead += '<th scope="col">Harga</th>';
                                //  }
                                //  if (data[1].keterangan != test) {
                                tablehead += '<th scope="col">keterangan</th>';
                                //   }



                                tablehead += '</tr>';
                                $('.table>thead').html(tablehead);
                                $('.table>tbody').html(tablebody);

                                $(function() {
                                    $('.table tr[data-value]').each(function() {
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
                    });
                }




                function tambahBarang() {
                    var id = $('#id').val();
                    var produk = $('#produk').val();
                    var nama = $('#nama').val();
                    var spesifikasi = $('#spesifikasi').val();
                    var harga = $('#harga').val();
                    var keterangan = $('#keterangan').val();
                    $.ajax({
                        url: "<?php echo base_url(); ?>admin/tambahBarang",
                        method: "POST",
                        data: {
                            id: id,
                            produk: produk,
                            nama: nama,
                            spesifikasi: spesifikasi,
                            harga: harga,
                            keterangan: keterangan
                        },
                        async: false,
                        dataType: 'json',
                        success: function(data) {
                            $('#detail-id').val(data[0].id_barang);
                            $('#detail-nama').val(data[0].nama_barang);
                            $('#detail-spesifikasi').val(data[0].attr1);
                            $('#detail-keterangan').val(data[0].keterangan);
                            $('#detail').modal('show');
                        }
                    });
                }

                function getIdProduk(produk, folder) {
                    $.ajax({
                        url: "<?php echo base_url(); ?>admin/getIdProduk",
                        method: "POST",
                        data: {
                            produk: produk,
                            folder: folder
                        },
                        async: false,
                        dataType: 'json',
                        success: function(data) {
                            $('#id').val(data);
                        }
                    });

                    $('#produk').val(produk);
                    $('#nama').val(folder);
                }

                function hapusBarang(id) {
                    $.ajax({
                        url: "<?php echo base_url(); ?>admin/hapusBarang",
                        method: "POST",
                        data: {
                            id: id,
                        },
                        async: false,
                        dataType: 'json',
                        success: function() {
                            location.reload();
                        }
                    });
                }
            </script>

</body>

</html>