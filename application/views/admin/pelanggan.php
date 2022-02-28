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


                                        <div class="input-group col-sm-6">
                                            <input type="text" class="form-control form-control-sm" id="cari" placeholder="Masukan Nama atau ID Pelanggan">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary btn-sm" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>


                                        <div class="col-auto">
                                            <button class="btn btn-sm btn-primary btn-icon-split" data-toggle="modal" data-target="#modal-create-pelanggan">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-user-plus"></i>
                                                </span>
                                                <span class="text">Tambah Pelanggan</span>
                                            </button>
                                        </div>
                                    </div>


                                </div>
                                <div class="card-body">
                                    <div class="table-responsive-sm mt-4">
                                        <table class="table table-hover">
                                            <caption>Daftar Pelanggan</caption>
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama Pelanggan</th>
                                                    <th scope="col">ID Pelanggan</th>
                                                    <th scope="col">Telepon</th>
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
            <!-- Modal Form Tambah Pelanggan -->
            <div class="modal fade" id="modal-create-pelanggan" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Tambah Pelanggan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="form-group row ml-2">
                                <label for="order-nama" class="text-primary col-sm-1 col-form-label fas fa-id-card my-auto"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="id" name="id" disabled>
                                </div>
                            </div>

                            <div class="form-group row ml-2">
                                <label for="order-nama" class="text-primary col-sm-1 col-form-label fas fa-user my-auto"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="nama" name="nama" placeholder="Nama">
                                </div>
                            </div>

                            <div class="form-group row ml-2">
                                <label for="order-nama" class="text-primary col-sm-1 col-form-label fas fa-phone my-auto"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="notelp" name="notelp" placeholder="Nomor Telepon">
                                </div>
                            </div>

                            <div class="form-group row ml-2">
                                <label for="order-nama" class="text-primary col-sm-1 col-form-label fas fa-map my-auto"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="alamat" name="alamat" placeholder="Alamat">
                                </div>
                            </div>


                            <div class="modal-footer">
                                <button class="btn btn-secondary btn-icon-split" data-dismiss="modal">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-times"></i>
                                    </span>
                                    <span class="text">Batal</span>
                                </button>

                                <button class="btn btn-primary btn-icon-split" id="btn-create-pelanggan">
                                    <span class="icon text-white-50" name="icon">
                                        <i class="fas fa-save"></i>
                                    </span>
                                    <span class="text">Simpan</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Modal Form Tambah Pelanggan -->


            <!-- Modal Form Detail -->
            <div class="modal fade" id="detail" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Detail Pelanggan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" name="btn-tutup">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group row ml-2">
                                <label for="order-nama" class="text-primary col-sm-1 col-form-label fas fa-id-card my-auto"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="detail-id" name="detail-id" disabled>
                                </div>
                            </div>

                            <div class="form-group row ml-2">
                                <label for="order-nama" class="text-primary col-sm-1 col-form-label fas fa-user my-auto"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="detail-nama" name="detail-nama" placeholder="Nama" disabled>
                                </div>
                            </div>

                            <div class="form-group row ml-2">
                                <label for="order-nama" class="text-primary col-sm-1 col-form-label fas fa-phone my-auto"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="detail-notelp" name="detail-notelp" placeholder="Nomor Telepon" disabled>
                                </div>
                            </div>

                            <div class="form-group row ml-2">
                                <label for="order-nama" class="text-primary col-sm-1 col-form-label fas fa-map my-auto"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="detail-alamat" name="detail-alamat" placeholder="Alamat" disabled>
                                </div>
                            </div>






                            <div class="modal-footer">

                                <button class="btn btn-secondary btn-icon-split" data-dismiss="modal">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-times"></i>
                                    </span>
                                    <span class="text">Tutup</span>
                                </button>

                                <button class="btn btn-danger btn-icon-split" id="btn-delete-pelanggan">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Hapus</span>
                                </button>

                                <button class="btn btn-warning btn-icon-split" id="btn-edit-pelanggan">
                                    <span class="icon text-white-50" name="icon">
                                        <i class="fas fa-user-edit"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Modal Form Detail -->

            <!-- Modal Alert -->
            <div class="modal fade" id="berhasiltambah" name="berhasil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="alert alert-primary" role="alert">
                        Pelanggan Berhasil Ditambahkan
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- END Modal Alert -->


            <!-- modal konfirmasi hapus order -->
            <div class="modal fade" id="modal-hapus-pelanggan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="alert alert-danger mb-0" role="alert">
                            Pelanggan <strong></strong>. Yakin menghapus pelanggan ini?
                            <hr>
                            <div class="text-right">
                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                                <button class="btn btn-danger btn-sm btn-icon-split" id="btn-hapus">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Hapus</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- modal berhasil hapus order -->
            <div class="modal fade" id="modal-berhasil-hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <div class="alert alert-success mb-0" role="alert">
                            Pelanggan <strong></strong> berhasil dihapus !
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- modal berhasil hapus order -->
            <div class="modal fade" id="modal-berhasil-tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="alert alert-success mb-0" role="alert">
                            Pelanggan <strong></strong> berhasil ditambahkan !
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
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
                <?php if ($this->session->flashdata('pesan') == 'berhasiltambahpelanggan') : ?>
                    $('#berhasiltambah').modal('show');
                <?php endif ?>

                $(document).ready(function() {
                    writeTable(readPelanggan($('#cari').val()));

                    $('#id').val(generateIdPelanggan());

                    $('#cari').keyup(function() {
                        writeTable(readPelanggan($('#cari').val()));
                    });

                    $('#btn-create-pelanggan').click(function() {
                        var id = $('#id').val();
                        var nama = $('#nama').val();
                        var notelp = $('#notelp').val();
                        var alamat = $('#alamat').val();

                        if (createPelanggan(id, nama, notelp, alamat) == "berhasil") {
                            writeTable(readPelanggan($('#cari').val()));
                            $('.modal').modal('hide');
                            $('strong').html(nama + ' [' + id + ']');
                            $('#modal-berhasil-tambah').modal('show');
                        }

                    });

                    $('#btn-delete-pelanggan').click(function() {
                        var id = $('#detail-id').val();
                        var nama = $('#detail-nama').val();
                        $('strong').html(nama + ' [' + id + ']');
                        $('#modal-hapus-pelanggan').modal('show');
                    });

                    $('#btn-hapus').click(function() {
                        var id = $('#detail-id').val();
                        if (deletePelanggan(id) == "berhasil") {
                            writeTable(readPelanggan($('#cari').val()));
                            $('.modal').modal('hide');
                            $('#modal-berhasil-hapus').modal('show');
                        }
                    });


                    $('#btn-edit-pelanggan').click(function() {
                        if ($('#btn-edit-pelanggan>span[class=text]').html() == "Edit") {
                            btnSimpan();
                        } else {
                            var id = $('#detail-id').val();
                            var nama = $('#detail-nama').val();
                            var notelp = $('#detail-notelp').val();
                            var alamat = $('#detail-alamat').val();
                            updatePelanggan(id, nama, notelp, alamat);
                            btnEdit();
                        }
                    });

                    $('.modal button[name=btn-tutup]').click(function() {
                        btnEdit();
                    });

                    function getDetail(id) {
                        var data = readPelanggan(id);

                        $('#detail-id').val(data[0].id_pelanggan);
                        $('#detail-nama').val(data[0].nama_pelanggan);
                        $('#detail-notelp').val(data[0].no_telp);
                        $('#detail-alamat').val(data[0].alamat);
                        $('#detail').modal('show');
                    }

                    function btnEdit() {

                        // <button class="btn btn-warning btn-icon-split" id="btn-edit-pelanggan">
                        //             <span class="icon text-white-50">
                        //                 <i class="fas fa-user-edit"></i>
                        //             </span>
                        //             <span class="text">Edit</span>
                        //         </button>

                        $('#detail-nama').prop('disabled', true);
                        $('#detail-notelp').prop('disabled', true);
                        $('#detail-alamat').prop('disabled', true);
                        $('#btn-edit-pelanggan').prop('class', 'btn btn-warning btn-icon-split');
                        $('#btn-edit-pelanggan>span[name=icon]>i').prop('class', 'fas fa-user-edit');
                        $('#btn-edit-pelanggan>span[class=text]').html("Edit");
                    }

                    function btnSimpan() {
                        $('#detail-nama').prop('disabled', false);
                        $('#detail-notelp').prop('disabled', false);
                        $('#detail-alamat').prop('disabled', false);

                        $('#btn-edit-pelanggan').prop('class', 'btn btn-primary btn-icon-split');
                        $('#btn-edit-pelanggan>span[name=icon]>i').prop('class', 'fas fa-save');

                        $('#btn-edit-pelanggan>span[class=text]').html("Simpan");
                    }

                    function writeTable(data) {
                        if (data.length > 0) {
                            $('.table>tbody').empty();
                            var html = '';
                            for (var i = 0; i < data.length; i++) {
                                html += '<tr data-value = ' + data[i].id_pelanggan + ' >';
                                html += '<th scope="row">' + (i + 1) + '</th>';
                                html += '<td>' + data[i].nama_pelanggan + '</td>';
                                html += '<td>' + data[i].id_pelanggan + '</td>';
                                html += '<td>' + data[i].no_telp + '</td>';
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
                });
            </script>

</body>

</html>