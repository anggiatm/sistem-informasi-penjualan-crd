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
                    <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modal-create-pelanggan">Tambah Pelanggan</button>
                </div>
            </div>


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



            <!-- Modal Form Tambah Pelanggan -->
            <div class="modal fade" id="modal-create-pelanggan" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="id">ID Pelanggan (otomatis)</label>
                                <input type="text" class="form-control" id="id" name="id" disabled>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Pelanggan</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama...">
                            </div>
                            <div class="form-group">
                                <label for="notelp">No Telepon</label>
                                <input type="text" class="form-control" id="notelp" name="notelp" placeholder="Masukan Nomor Telepon...">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat Lengkap...">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="button" class="btn btn-primary" id="btn-create-pelanggan">Simpan</button>
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
                            <div class="form-group">
                                <label for="detail-id">ID Pelanggan (otomatis)</label>
                                <input type="text" class="form-control" id="detail-id" name="detail-id" disabled>
                            </div>
                            <div class="form-group">
                                <label for="detail-nama">Nama Pelanggan</label>
                                <input type="text" class="form-control" id="detail-nama" name="detail-nama" disabled>
                            </div>
                            <div class="form-group">
                                <label for="detail-notelp">No Telepon</label>
                                <input type="text" class="form-control" id="detail-notelp" name="detail-notelp" disabled>
                            </div>
                            <div class="form-group">
                                <label for="detail-alamat">Alamat</label>
                                <input type="text" class="form-control" id="detail-alamat" name="detail-alamat" disabled>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal" name="btn-tutup">Tutup</button>
                                <button type="button" class="btn btn-outline-danger" id="btn-delete-pelanggan" data-value="delete">Hapus</button>
                                <button type="button" class="btn btn-outline-warning" id="btn-edit-pelanggan" data-value="edit">Edit</button>
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

        </main>

        <!-- END MAIN CONTENT -->

    </div>
</div>


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

            var respons = createPelanggan(id, nama, notelp, alamat);

        });

        $('#btn-delete-pelanggan').click(function() {
            var id = $('#detail-id').val();
            var respons = deletePelanggan(id);

        });


        $('#btn-edit-pelanggan').click(function() {
            if ($(this).html() == "Edit") {
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
            $('#detail-nama').prop('disabled', true);
            $('#detail-notelp').prop('disabled', true);
            $('#detail-alamat').prop('disabled', true);
            $('#btn-edit-pelanggan').prop('class', 'btn btn-outline-warning');
            $('#btn-edit-pelanggan').html("Edit");
        }

        function btnSimpan() {
            $('#detail-nama').prop('disabled', false);
            $('#detail-notelp').prop('disabled', false);
            $('#detail-alamat').prop('disabled', false);
            $('#btn-edit-pelanggan').prop('class', 'btn btn-outline-primary');
            $('#btn-edit-pelanggan').html("Simpan");
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



<?php $this->load->view('template/footer'); ?>