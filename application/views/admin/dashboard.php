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
                                    <div class="row">
                                        <div class="col-xl-10">
                                            <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
                                        </div>
                                        <div class="col-xl-2">
                                            <select class="form-control form-control-sm form-sm btn btn-outline-secondary" id="periode">
                                                <option value="harian">Harian</option>
                                                <option value="bulanan">Bulanan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-auto mt-5" id="loader">
                                    <div class="loader"></div>
                                    <p class="font-italic">Sedang memuat....</p>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area" id="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                    <hr>
                                    Performa Toko
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

            <?php $this->load->view('template/footer'); ?>

            <?php $this->load->view('template/mainscript'); ?>
            <script>
                $(document).ready(function() {
                    writeChart($('#periode').val());
                    $('#loader').hide();
                });

                $('#periode').change(function() {
                    writeChart($(this).val());
                });

                function writeChart(periode) {

                    $('#myAreaChart').remove();
                    $('#chart-area').append('<canvas id="myAreaChart"><canvas>');

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
                            dataChartTgl.push(tgl.substring(2));
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
                        }
                    }


                    (Chart.defaults.global.defaultFontFamily = "Nunito"),
                    '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
                    Chart.defaults.global.defaultFontColor = "#858796";

                    // Area Chart Example
                    var ctx = document.getElementById("myAreaChart");
                    var myLineChart = new Chart(ctx, {
                        type: "line",
                        data: {
                            labels: dataChartTgl,
                            datasets: [{
                                label: "Penjualan",
                                lineTension: 0.3,
                                backgroundColor: "rgba(78, 115, 223, 0.05)",
                                borderColor: "rgba(78, 115, 223, 1)",
                                pointRadius: 3,
                                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                                pointBorderColor: "rgba(78, 115, 223, 1)",
                                pointHoverRadius: 3,
                                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                                pointHitRadius: 10,
                                pointBorderWidth: 2,
                                data: dataChart,
                            }, ],
                        },
                        options: {
                            maintainAspectRatio: false,
                            layout: {
                                padding: {
                                    left: 10,
                                    right: 25,
                                    top: 25,
                                    bottom: 0,
                                },
                            },
                            scales: {
                                xAxes: [{
                                    time: {
                                        unit: "date",
                                    },
                                    gridLines: {
                                        display: false,
                                        drawBorder: false,
                                    },
                                    ticks: {
                                        maxTicksLimit: 7,
                                    },
                                }, ],
                                yAxes: [{
                                    ticks: {
                                        maxTicksLimit: 5,
                                        padding: 10,
                                        // Include a dollar sign in the ticks
                                        callback: function(value, index, values) {
                                            return "Rp." + formatToRupiah(value);
                                        },
                                    },
                                    gridLines: {
                                        color: "rgb(234, 236, 244)",
                                        zeroLineColor: "rgb(234, 236, 244)",
                                        drawBorder: false,
                                        borderDash: [2],
                                        zeroLineBorderDash: [2],
                                    },
                                }, ],
                            },
                            legend: {
                                display: false,
                            },
                            tooltips: {
                                backgroundColor: "rgb(255,255,255)",
                                bodyFontColor: "#858796",
                                titleMarginBottom: 10,
                                titleFontColor: "#6e707e",
                                titleFontSize: 14,
                                borderColor: "#dddfeb",
                                borderWidth: 1,
                                xPadding: 15,
                                yPadding: 15,
                                displayColors: false,
                                intersect: false,
                                mode: "index",
                                caretPadding: 10,
                                callbacks: {
                                    label: function(tooltipItem, chart) {
                                        var datasetLabel =
                                            chart.datasets[tooltipItem.datasetIndex].label || "";
                                        return datasetLabel + ": Rp" + formatToRupiah(tooltipItem.yLabel);
                                    },
                                },
                            },
                        },
                    });
                }
            </script>



</body>

</html>