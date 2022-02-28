<script src="<?php echo base_url('/assets/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/sb-admin-2.min.js'); ?>"></script>

<script src="<?php echo base_url('/assets/js/jspdf.debug.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/jspdf.min.js'); ?>"></script>

<script src="<?php echo base_url('/assets/vendor/chart.js/Chart.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/datepicker/js/bootstrap-datepicker.min.js'); ?>"></script>




<script>
    //FUSNGSI BARU MULAI DARI SINI -------------------------------------------------------------------

    //---CRUD PELANGGAN----------------------------------------------------------------------------------
    function createPelanggan(id, nama, notelp, alamat) {
        $.ajax({
            url: "<?php echo base_url(); ?>admin/createPelanggan",
            method: "POST",
            data: {
                id: id,
                nama: nama,
                notelp: notelp,
                alamat: alamat
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                result = data; //result "berhasil" atau "gagal"
            }
        });
        return result;
    }

    function readPelanggan(key) {
        var result;
        $.ajax({
            url: "<?php echo base_url(); ?>admin/readPelanggan",
            method: "POST",
            data: {
                key: key
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                result = data;
            }
        });
        return result;
    }

    function updatePelanggan(id, nama, notelp, alamat) {
        $.ajax({
            url: "<?php echo base_url(); ?>admin/updatePelangganbaru",
            method: "POST",
            data: {
                id: id,
                nama: nama,
                notelp: notelp,
                alamat: alamat
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                result = data;
            }
        });
        return result;
    }

    function deletePelanggan(id) {
        $.ajax({
            url: "<?php echo base_url(); ?>admin/deletePelanggan",
            method: "POST",
            data: {
                id: id
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                result = data; //result "berhasil" atau "gagal"
            }
        });
        return result;
    }




    //---CRUD BARANG------------------------------------------------------------
    function createBarang(id, produk, nama, unit, harga, keterangan) {
        $.ajax({
            url: "<?php echo base_url(); ?>admin/createBarang",
            method: "POST",
            data: {
                id: id,
                produk: produk,
                nama: nama,
                unit: unit,
                harga: harga,
                keterangan: keterangan
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                result = data; //result "berhasil" atau "gagal"
            }
        });
        return result;
    }

    function readBarang(produk, key, sort, order) {
        var result;
        $.ajax({
            url: "<?php echo base_url(); ?>admin/readBarang",
            method: "POST",
            data: {
                produk: produk,
                key: key,
                sort: sort,
                order: order
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                result = data;
            }
        });
        return result;
    }

    function updateBarang(id, produk, nama, unit, harga, keterangan) {
        var result;
        $.ajax({
            url: "<?php echo base_url(); ?>admin/updateBarang",
            method: "POST",
            data: {
                id: id,
                produk: produk,
                nama: nama,
                unit: unit,
                harga: harga,
                keterangan: keterangan
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                result = data;
            }
        });
        return result;
    }

    function deleteBarang(id) {
        $.ajax({
            url: "<?php echo base_url(); ?>admin/deleteBarang",
            method: "POST",
            data: {
                id: id
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                result = data; //result "berhasil" atau "gagal"
            }
        });
        return result;
    }

    // CRUD USER

    function readUser() {
        var result;
        $.ajax({
            url: "<?php echo base_url(); ?>admin/readUser",
            method: "POST",
            data: {},
            async: false,
            dataType: 'json',
            success: function(data) {
                result = data;
            }
        });
        return result;
    }

    function deleteUser(id) {
        $.ajax({
            url: "<?php echo base_url(); ?>admin/deleteUser",
            method: "POST",
            data: {
                id: id
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                result = data; //result "berhasil" atau "gagal"
            }
        });
        return result;
    }




    //---CRUD PRODUK---------------------------------------------------------------------
    function createProduk(id, produk) {
        $.ajax({
            url: "<?php echo base_url(); ?>admin/createProduk",
            method: "POST",
            data: {
                id: id,
                produk: produk
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                result = data; //result "berhasil" atau "gagal"
            }
        });
        return result;
    }

    function readProduk(key) {
        var result;
        $.ajax({
            url: "<?php echo base_url(); ?>admin/readProduk",
            method: "POST",
            data: {
                key: key
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                result = data;
            }
        });
        return result;
    }

    function updateProduk(id, produk) {
        $.ajax({
            url: "<?php echo base_url(); ?>admin/updateProduk",
            method: "POST",
            data: {
                id: id,
                produk: produk
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                result = data;
            }
        });
        return result;
    }

    function deleteProduk(id) {
        $.ajax({
            url: "<?php echo base_url(); ?>admin/deleteProduk",
            method: "POST",
            data: {
                id: id
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                result = data; //result "berhasil" atau "gagal"
            }
        });
        return result;
    }




    //---CRUD ORDERS---------------------------------------------------------------------
    function createOrders(data) {
        var result;
        $.ajax({
            url: "<?php echo base_url(); ?>admin/createOrders",
            method: "POST",
            data: {
                no: data[0].noorder, //1
                nama: data[0].namapesanan, //2
                tglpesan: data[0].tglpesan, //3
                tglselesai: data[0].tglselesai, //4
                idpel: data[0].idpel, //5
                totalbarang: data[0].totalbarang, //6
                totalharga: data[0].totalharga, //7
                uangmuka: data[0].uangmuka, //8
                sisa: data[0].sisa, //9
                kontruksi: data[0].kontruksi, //10
                driver: data[0].driver, //11
                status: data[0].status, //12
                note: data[0].note //13
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                result = data; //result "berhasil" atau "gagal"
            }
        });
        return result;
    }

    function readOrders(key, tgl_awal, tgl_akhir, sort, order) {
        var result;
        $.ajax({
            url: "<?php echo base_url(); ?>admin/readOrders",
            method: "POST",
            data: {
                key: key,
                tgl_awal: tgl_awal,
                tgl_akhir: tgl_akhir,
                sort: sort,
                order: order
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                result = data;
            }
        });
        return result;
    }

    function updateOrders(no, nama, tglpesan, tglselesai, idpel, totalbarang, totalharga, uangmuka, sisa, kontruksi, driver, status, note) {
        var result;
        $.ajax({
            url: "<?php echo base_url(); ?>admin/updateOrders",
            method: "POST",
            data: {
                no: no, //1
                nama: nama, //2
                tglpesan: tglpesan, //3
                tglselesai: tglselesai, //4
                idpel: idpel, //5
                totalbarang: totalbarang, //6
                totalharga: totalharga, //7
                uangmuka: uangmuka, //8
                sisa: sisa, //9
                kontruksi: kontruksi, //10
                driver: driver, //11
                status: status, //12
                note: note //13
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                result = data;
            }
        });
        return result;
    }

    function deleteOrders(id) {
        var result;
        $.ajax({
            url: "<?php echo base_url(); ?>admin/deleteOrders",
            method: "POST",
            data: {
                id: id
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                result = data; //result "berhasil" atau "gagal"
            }
        });
        return result;
    }


    //---CRUD ORDERS_ITEM---------------------------------------------------------------------
    function createOrdersItem(no, id, qty, spesifikasi, unit, harga, jumlah) {

        var result;
        $.ajax({
            url: "<?php echo base_url(); ?>admin/createOrdersItem",
            method: "POST",
            data: {
                no: no,
                id: id,
                qty: qty,
                spesifikasi: spesifikasi,
                unit: unit,
                harga: harga,
                jumlah: jumlah
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                result = data; //result "berhasil" atau "gagal"
            }
        });
        return result;
    }

    function readOrdersItem(key) {
        var result;
        $.ajax({
            url: "<?php echo base_url(); ?>admin/readOrdersItem",
            method: "POST",
            data: {
                key: key
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                result = data;
            }
        });
        return result;
    }

    function updateOrdersItem(no, id) {
        var result;
        $.ajax({
            url: "<?php echo base_url(); ?>admin/updateOrdersItem",
            method: "POST",
            data: {
                no: no,
                id: id
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                result = data;
            }
        });
        return result;
    }

    function deleteOrdersItem(id) {
        var result;
        $.ajax({
            url: "<?php echo base_url(); ?>admin/deleteOrdersItem",
            method: "POST",
            data: {
                id: id
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                result = data; //result "berhasil" atau "gagal"
            }
        });
        return result;
    }

    //GENERATE ID PELANGGAN
    function generateIdPelanggan() {
        var data = readPelanggan("");
        var newint = parseInt((data[data.length - 1].id_pelanggan));

        var strint = "" + (newint + 1);
        var pad = "00000";
        var fidpelanggan = pad.substring(0, pad.length - strint.length) + strint;
        return fidpelanggan;
    }

    // GENERATE ID BARANG
    function generateIdBarang(produk) {
        var idproduk = readProduk(produk);
        idproduk = idproduk[0].id;

        var idbarang = readBarang(produk, "", "id_barang", "ASC");
        idbarang = ((idbarang[idbarang.length - 1].id_barang));
        idbarang = idbarang.split('-');
        idbarang = parseInt(idbarang[1]) + 1;


        var str = "" + idbarang;
        var pad = "000";
        idbarang = pad.substring(0, pad.length - str.length) + str;
        return (idproduk + '-' + idbarang);
    }

    // GENERATE ORDER ID
    function generateOrderId(tgl) {
        var ordercount = 0;
        var data = readOrders("", "2020-01-01", sqlFormatDate(tgl), "tgl_pesan", "ASC");
        var currentdate = tgl.split('-');
        var date = currentdate[0];
        var month = currentdate[1];
        var year = currentdate[2];
        var str = "" + month;
        var pad = "00";
        var fmonth = pad.substring(0, pad.length - str.length) + str;

        date = "" + date;
        date = pad.substring(0, pad.length - date.length) + date;

        for (var i = 0; i < data.length; i++) {
            if (((data[i].tgl_pesan).slice(0, 10)) == (("" + year) + "-" + ("" + fmonth) + "-" + ("" + date))) {
                ordercount++
            }
        }
        var strcount = "" + (ordercount + 1);
        var fcount = pad.substring(0, pad.length - strcount.length) + strcount;

        return (date + fmonth + ("" + year).slice(-2) + "-" + fcount);
    }

    function getTimeDate() {
        var result;
        $.ajax({
            url: "<?php echo base_url(); ?>admin/getTimeDate",
            method: "POST",
            data: {},
            async: false,
            dataType: 'json',
            success: function(data) {
                result = data; //result "berhasil" atau "gagal"
            }
        });
        return result;
    }

    function getDateJs() {
        var year = new Date().getFullYear();
        var month = new Date().getMonth();
        var day = new Date().getDate();

        month = "" + (month + 1);
        var pad = "00";
        month = pad.substring(0, pad.length - month.length) + month;

        day = "" + (day);
        var pad = "00";
        day = pad.substring(0, pad.length - day.length) + day;

        var result = year.toString() + "-" + month.toString() + "-" + day.toString();
        return result;
    }

    function sqlFormatDate(val) {
        var pad = "00";

        if (val == "now") {
            var year = new Date().getFullYear();
            var month = new Date().getMonth();
            var day = new Date().getDate();

            month = "" + (month + 1);
            month = pad.substring(0, pad.length - month.length) + month;
            day = "" + (day);
            day = pad.substring(0, pad.length - day.length) + day;

            var result = year.toString() + "-" + month.toString() + "-" + day.toString();
            return result;
        } else if (val.length > 3) {
            val = val.split("-");
            return (val[2] + "-" + val[1] + "-" + val[0]); // return format YYYY-MM-DD
        } else {
            var date = new Date();
            date.setDate(date.getDate() + val);
            var year = date.getFullYear();
            var month = date.getMonth();
            var day = date.getDate();
            month = "" + (month + 1);
            month = pad.substring(0, pad.length - month.length) + month;
            day = "" + (day);
            day = pad.substring(0, pad.length - day.length) + day;
            var result = year.toString() + "-" + month.toString() + "-" + day.toString();
            return result;
        }
    }

    function jsToSqlFormatDate(date) {
        if (date.includes("/") == true) {
            date = date.split("/");
            return date[2] + "-" + date[1] + "-" + date[0];
        }

        if (date.includes("-") == true) {
            date = date.split("-");
            return date[2] + "-" + date[1] + "-" + date[0];
        }
    }

    function hariIndo(day) {
        if (day.includes("Sun")) {
            return "Minggu";
        } else if (day.includes("Mon")) {
            return "Senin";
        } else if (day.includes("Tue")) {
            return "Selasa";
        } else if (day.includes("Wed")) {
            return "Rabu";
        } else if (day.includes("Thu")) {
            return "Kamis";
        } else if (day.includes("Fri")) {
            return "Jumat";
        } else if (day.includes("Sat")) {
            return "Sabtu";
        }
    }

    function bulanIndo(month) {
        if (month.includes("Jan")) {
            return "Januari";
        } else if (month.includes("Feb")) {
            return "Februari";
        } else if (month.includes("Mar")) {
            return "Maret";
        } else if (month.includes("Apr")) {
            return "April";
        } else if (month.includes("May")) {
            return "Mei";
        } else if (month.includes("Jun")) {
            return "Juni";
        } else if (month.includes("Jul")) {
            return "Juli";
        } else if (month.includes("Aug")) {
            return "Agustus";
        } else if (month.includes("Sep")) {
            return "September";
        } else if (month.includes("Oct")) {
            return "Oktober";
        } else if (month.includes("Nov")) {
            return "November";
        } else if (month.includes("Dec")) {
            return "Desember";
        }
    }


    function formatToRupiah(val) {
        var result;

        if (Number.isInteger(val)) {
            return (" " + new Intl.NumberFormat('ban').format(val));
        } else {
            val = val.replace(/,/g, '');
            val = val.replace(/Rp. /g, '');
            if (val.includes(" ")) {
                val = val.split(" ");
                result = parseInt(val[1]);
            } else {
                result = parseInt(val);
            }

            if (isNaN(result) == true) {
                return (" 0");

            } else {
                return (" " + new Intl.NumberFormat('ban').format(result));
            }
        }

    }

    function formatRupiahToInt(rp) {
        rp = rp.replace(/,/g, '');
        rp = rp.split(" ");
        return parseInt(rp[1]);
    }

    function formatTanggal(tgl) {
        var b = tgl.split("-");
        var hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        var bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        var a = new Date(tgl);
        return (hari[a.getDay()] + ", " + b[2] + " " + bulan[a.getMonth()] + " " + b[0]);
    }

    function hitungHari(awal, akhir) {
        var a = new Date(awal);
        var b = new Date(akhir);
        return ((a - b) / 86400000);
    }


    function getPeriode(periode) {
        var tglawal;
        var tglakhir;
        switch (periode) {
            case "semua":
                tglawal = "2020-01-01";
                tglakhir = sqlFormatDate("now");
                break;

            case "1hari":
                tglawal = sqlFormatDate("now");
                tglakhir = sqlFormatDate("now");
                break;

            case "3hari":
                tglawal = sqlFormatDate(-3);
                tglakhir = sqlFormatDate("now");
                break;

            case "1minggu":
                tglawal = sqlFormatDate(-7);
                tglakhir = sqlFormatDate("now");
                break;


            case "1bulan":
                tglawal = sqlFormatDate(-30);
                tglakhir = sqlFormatDate("now");
                break;

            case "custom":
                tglawal = jsToSqlFormatDate($('#tgl-awal').val());
                tglakhir = jsToSqlFormatDate($('#tgl-akhir').val());
                break;
            default:
                tglawal = "2020-01-01";
                tglakhir = sqlFormatDate("now");
        }
        return {
            awal: tglawal,
            akhir: tglakhir
        };
    }

    function uploadNota(type, data) {
        if (type == "nota") {
            $.ajax({
                url: "<?php echo base_url(); ?>admin/uploadNota",
                type: "POST",
                data: data,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response != 0) {
                        // alert('file uploaded');
                    } else {
                        //alert('file not uploaded');
                    }
                },
            });
        } else {
            $.ajax({
                url: "<?php echo base_url(); ?>admin/uploadLaporan",
                type: "POST",
                data: data,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response != 0) {
                        // alert('file uploaded');
                    } else {
                        //alert('file not uploaded');
                    }
                },
            });
        }
    }

    function downloadPdf(type, filename) {
        $.ajax({
            url: "<?php echo base_url(); ?>admin/downloadPdf",
            type: "POST",
            data: {
                type: type,
                filename: filename
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                result = data;
            }
        });
        return result;
    }

    function formValidation(dataver) {
        var valid = [];
        $('span').remove();
        for (var i = 0; i < dataver.length; i++) {
            if (dataver[i][0].val() == "") {
                if (dataver[i][1] > 0) {
                    $(dataver[i][0]).removeClass('border-success');
                    $(dataver[i][0]).addClass('border-danger');

                    var html = '<span class="text-danger">Harus diisi !</span>';
                    $(dataver[i][0]).closest('div').append(html);
                    valid.push(0);
                } else {
                    $(dataver[i][0]).removeClass('border-success');


                    $(dataver[i][0]).addClass('border-warning');
                    var html = '<span name="msg" class="text-warning">Dapat dikosongkan !</span>';
                    $(dataver[i][0]).closest('div').append(html);
                    valid.push(1);
                }

            } else {
                $(dataver[i][0]).removeClass('border-danger');
                $(dataver[i][0]).addClass('border-success');
                $(dataver[i][0]).closest('div>span').removeClass('text-danger');

                valid.push(1);
            }
        }
        var count = 0;
        for (var i = 0; i < valid.length; i++) {
            count = count + valid[i];
        }

        // document.write(valid.length);

        if (count == valid.length) {
            return 1;
        } else {
            return 0;
        }
    }
</script>