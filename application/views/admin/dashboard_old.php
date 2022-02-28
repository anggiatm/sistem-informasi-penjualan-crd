<?php $this->load->view('template/header'); ?>


<div class="container-fluid">
    <div class="row">

        <!-- SIDE BAR -->
        <?php $this->load->view('template/sidebar'); ?>
        <!-- END SIDE BAR -->


        <!-- MAIN CONTENT -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <!-- <div class="btn-group mr-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                    </div> -->

                    <label class="sr-only" for="periode">Periode</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text form-control-sm">
                                <span data-feather="calendar"></span>
                            </div>
                        </div>
                        <select class="form-control form-control-sm btn btn-outline-secondary" id="periode">
                            <option value="harian">Harian</option>
                            <option value="bulanan">Bulanan</option>
                        </select>
                    </div>
                </div>
            </div>

            <canvas class="my-4 w-100" id="chart1" width="900" height="380"></canvas>

        </main>
        <!-- END MAIN CONTENT -->


    </div>
</div>

<?php $this->load->view('template/mainscript'); ?>
<script>
    $(document).ready(function() {
        writeChart($('#periode').val());
    });
    $('#periode').change(function() {
        periode = $(this).val();
        writeChart(periode);
    });

    function writeChart(periode) {
        var dataChart = [];
        var dataChartTgl = [];

        if (periode == "harian") {
            for (var i = -30; i < 1; i++) {
                var totalharian = 0;
                var tgl = sqlFormatDate(i);
                var data = readOrders("", tgl, tgl, "tgl_pesan", "ASC");
                if (data.length > 0) {
                    for (var j = 0; j < data.length; j++) {
                        totalharian = totalharian + parseInt(data[j].total_harga);
                    }
                } else {
                    totalharian = 0;
                }
                dataChart.push((totalharian));
                //dataChartOrder.push(data.length);
                dataChartTgl.push(tgl);
            }
        } else {
            for (var i = -6; i < 1; i++) {
                var awal = "";
                var akhir = "";
                var tgl = i * 31;
                awal = sqlFormatDate(tgl);
                var date = formatTanggal(awal);
                date = date.split(" ");
                date = date[2] + " " + date[3];
                dataChartTgl.push(date);

                awal = awal.split('-');
                awal = parseInt(awal[2]);
                awal = sqlFormatDate(tgl - awal + 1);

                akhir = sqlFormatDate(tgl + 31);
                akhir = akhir.split('-');
                akhir = parseInt(akhir[2]);
                akhir = sqlFormatDate(tgl + 31 - akhir);

                var data = readOrders("", awal, akhir, "tgl_pesan", "ASC");
                var jumlah = 0;
                if (data.length > 0) {
                    for (var j = 0; j < data.length; j++) {
                        jumlah = jumlah + parseInt(data[j].total_harga);

                    }
                } else {
                    jumlah = 0;
                }
                dataChart.push(jumlah);
                // document.write(i + " " + awal + "-" + akhir + " = " + jumlah);
                // document.write('<br>');
            }
        }

        var ctx = document.getElementById('chart1').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: dataChartTgl,
                datasets: [{
                    label: 'Penjualan',
                    data: dataChart,
                    backgroundColor: [
                        'rgba(99, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(99, 102, 255, 1)'
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            callback: function(value, index, values) {
                                return formatToRupiah(value);
                            }
                        }
                    }]
                }
            }
        });
    }
</script>
<?php $this->load->view('template/footer'); ?>