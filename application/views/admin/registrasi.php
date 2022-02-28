<?php $this->load->view('template/header'); ?>

<body id="page-top">
    <div id="wrapper">

        <?php $this->load->view('template/sidebar'); ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php $this->load->view('template/topbar'); ?>
                <div class="container-fluid">

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-7 col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Daftar User</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="table-responsive-sm ">
                                        <table class="table table-sm">
                                            <thead>
                                                <tr>
                                                    <td></td>
                                                    <th scope="col">Username</th>
                                                    <th scope="col">Role</th>
                                                    <th scope="col">Password</th>
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

                        <!-- Pie Chart -->
                        <div class="col-xl-5 col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Registrasi User Baru</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">

                                    <form class="user" method="post" action="<?php echo base_url('admin/createUser'); ?>">
                                        <?= $this->session->flashdata('message'); ?>
                                        <div class=" form-group">
                                            <input type="text" class="form-control form-control-user" id="username" name="username" value="<?= set_value('username'); ?>" placeholder="Username">
                                            <span class="text-danger font-italic"><?= form_error('username'); ?></span>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                                <span class="text-danger font-italic"><?= form_error('password'); ?></span>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Ulangi Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <select id="role" name="role" class="form-control form-control">
                                                <option value="0" selected>Pilih Role ..</option>
                                                <option value="1">Penjualan</option>
                                                <option value="2">Kontruksi</option>
                                                <option value="3">Driver</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Registrasi Akun
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



            <!-- modal konfirmasi hapus order -->
            <div class="modal fade" id="modal-hapus-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="alert alert-danger mb-0" role="alert">
                            Username <strong></strong>. Yakin menghapus user ini?
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

            <!-- modal update order -->
            <div class="modal fade" id="modal-update-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">



                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Update Password</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">

                                <form class="user" method="post" action="<?php echo base_url('admin/createUser'); ?>">
                                    <?= $this->session->flashdata('message'); ?>
                                    <div class=" form-group">
                                        <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username">
                                        <span class="text-danger font-italic"><?= form_error('username'); ?></span>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                            <span class="text-danger font-italic"><?= form_error('password'); ?></span>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Ulangi Password">
                                        </div>

                                    </div>


                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Registrasi Akun
                                    </button>
                                </form>
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
                            User <strong></strong> berhasil dihapus !
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- modal gagal hapus order -->
            <div class="modal fade" id="modal-gagal-hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <div class="alert alert-danger mb-0" role="alert">
                            User <strong></strong> tidak dapat dihapus !
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

</body>

<script>
    $(document).ready(function() {

        writeTable(readUser());

    });


    function writeTable(data) {
        if (data.length > 0) {
            $('.table>tbody').empty();
            var html = '';
            for (var i = 0; i < data.length; i++) {

                html += '<tr data-value = ' + data[i].username + ' >';
                html += '<td>';
                html += '<button name="btn-hapus-row" class="btn btn-danger btn-circle btn-sm" data-value=' + data[i].username + '>';
                html += '<i class="fas fa-trash"></i>';
                html += '</button>';
                html += '</td>';
                html += '<th>' + data[i].username + '</th>';
                html += '<td>' + data[i].role + '</td>';
                html += '<td>';
                html += '<button name="btn-update-row" class="btn btn-primary btn-icon-split btn-sm" data-value=' + data[i].username + '>';
                html += ' <span class = "icon text-white-50" ><i class="fas fa-upload"></i></span>';
                html += '<span class="text">Update</span>';
                html += '</button>';
                html += '</td>';
                html += '</tr>';


            }
            $('.table>tbody').html(html);


            $('button[name=btn-update-row]').click(function() {
                $('strong').html($(this).attr('data-value'));
                $('#modal-update-user').modal('show');
            });

            $('button[name=btn-hapus-row]').click(function() {
                $('strong').html($(this).attr('data-value'));
                $('#modal-hapus-user').modal('show');
            });

            $('#btn-hapus').click(function() {
                if ($('strong').html() != 'admin') {
                    if (deleteUser($('strong').html()) == "berhasil") {
                        writeTable(readUser());
                        $('.modal').modal('hide');
                        $('#modal-berhasil-hapus').modal('show');
                    }
                } else {
                    $('.modal').modal('hide');
                    $('#modal-gagal-hapus').modal('show');
                }
            });

        } else {
            $('.table>tbody').empty();
        }
    }
</script>

</html>