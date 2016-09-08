

<?php
$mysql_query = mysql_query("select * from berita where idberita = 1 ");
// $data = mysql_fetch_object($mysql_query);
//  print_r($data);

$guru =  mysql_fetch_object(mysql_query('select sum(guru) as guru from dpenduduk '));
$dagang =  mysql_fetch_object(mysql_query('select sum(dagang) as dagang  from dpenduduk '));
$tani =  mysql_fetch_object(mysql_query('select sum(tani) as tani  from dpenduduk '));
$dokter =  mysql_fetch_object(mysql_query('select sum(dokter) as dokter  from dpenduduk '));
$perawat =  mysql_fetch_object(mysql_query('select sum(perawat) as perawat  from dpenduduk '));
$bidan =  mysql_fetch_object(mysql_query('select sum(bidan) as bidan  from dpenduduk '));
$tni =  mysql_fetch_object(mysql_query('select sum(tni) as tni  from dpenduduk '));
$polri =  mysql_fetch_object(mysql_query('select sum(polri) as polri  from dpenduduk '));
$swasta =  mysql_fetch_object(mysql_query('select sum(swasta) as swasta  from dpenduduk '));
$tb =  mysql_fetch_object(mysql_query('select sum(tb) as tb  from dpenduduk '));




?>
<div class="col-md-12" >
    <!-- general form elements -->               

    <div>
        <!-- AREA CHART -->
        <div hidden="" class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Data Statistik Pekerjaan</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="chart">
                    <canvas id="areaChart" style="height:250px"></canvas>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <!-- DONUT CHART -->
        <div class="box box-danger">
            <div class="box-header with-border">
                 <h3 class="box-title">DATA STATISTIK BERDASARKAN PEKERJAAN</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <canvas id="pieChart" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </div>
    <!-- /.col (LEFT) -->
    <div>
        <!-- LINE CHART -->
        <div hidden="" class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Data Statistik Pekerjaan</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="chart">
                    <canvas id="lineChart" style="height:250px"></canvas>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <!-- BAR CHART -->

        <div class="box box-success">
            <div class="box-header with-border">
                 <h3 class="box-title">DATA STATISTIK BERDASARKAN GOLONGAN PEKERJAAN</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="chart">
                    <canvas id="barChart" style="height:230px"></canvas>
                </div>
            </div>
            <!-- /.box-body -->
        </div>

        <!-- /.box -->

    </div>
    <!-- /.col (RIGHT) -->

    <!-- /.row -->



    <script src="./desa/plugins/chartjs/Chart.min.js"></script>
    <script>
                $(function() {
                    /* ChartJS
                     * -------
                     * Here we will create a few charts using ChartJS
                     */

                    //--------------
                    //- AREA CHART -
                    //--------------

                    // Get context with jQuery - using jQuery's .get() method.
                    var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
                    // This will get the first returned node in the jQuery collection.
                    var areaChart = new Chart(areaChartCanvas);

                    var areaChartData = {
                        labels: ["Guru", "Petani", "Pedagang", "Dokter", "Perawat", "Bidan", "TNI","POLRI","Swasta","Tidak Bekerja"],
                        datasets: [
                            {
                                label: "A",
                                fillColor: "rgba(210, 214, 222, 1)",
                                strokeColor: "rgba(210, 214, 222, 1)",
                                pointColor: "rgba(210, 214, 222, 1)",
                                pointStrokeColor: "#c1c7d1",
                                pointHighlightFill: "#fff",
                                pointHighlightStroke: "rgba(220,220,220,1)",
                                data: ["","" ,"","","", "","","","",""]
                            },
                            {
                                label: "Digital Goods",
                                fillColor: "rgba(60,141,188,0.9)",
                                strokeColor: "rgba(60,141,188,0.8)",
                                pointColor: "#3b8bba",
                                pointStrokeColor: "rgba(60,141,188,1)",
                                pointHighlightFill: "#fff",
                                pointHighlightStroke: "rgba(60,141,188,1)",
                                data: [<?php echo $guru->guru ?>, <?php echo $tani->tani ?>,<?php echo $dagang->dagang ?>,<?php echo $dokter->dokter ?>, <?php echo $perawat->perawat ?>, <?php echo $bidan->bidan ?>,<?php echo $tni->tni ?>,<?php echo $polri->polri ?>,<?php echo $swasta->swasta?>,<?php echo $tb->tb?>]
                            }
                        ]
                    };

                    var areaChartOptions = {
                        //Boolean - If we should show the scale at all
                        showScale: true,
                        //Boolean - Whether grid lines are shown across the chart
                        scaleShowGridLines: false,
                        //String - Colour of the grid lines
                        scaleGridLineColor: "rgba(0,0,0,.05)",
                        //Number - Width of the grid lines
                        scaleGridLineWidth: 1,
                        //Boolean - Whether to show horizontal lines (except X axis)
                        scaleShowHorizontalLines: true,
                        //Boolean - Whether to show vertical lines (except Y axis)
                        scaleShowVerticalLines: true,
                        //Boolean - Whether the line is curved between points
                        bezierCurve: true,
                        //Number - Tension of the bezier curve between points
                        bezierCurveTension: 0.3,
                        //Boolean - Whether to show a dot for each point
                        pointDot: false,
                        //Number - Radius of each point dot in pixels
                        pointDotRadius: 4,
                        //Number - Pixel width of point dot stroke
                        pointDotStrokeWidth: 1,
                        //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                        pointHitDetectionRadius: 20,
                        //Boolean - Whether to show a stroke for datasets
                        datasetStroke: true,
                        //Number - Pixel width of dataset stroke
                        datasetStrokeWidth: 2,
                        //Boolean - Whether to fill the dataset with a color
                        datasetFill: true,
                        //String - A legend template
                        legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
                        //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                        maintainAspectRatio: true,
                        //Boolean - whether to make the chart responsive to window resizing
                        responsive: true
                    };

                    //Create the line chart
                    areaChart.Line(areaChartData, areaChartOptions);

                    //-------------
                    //- LINE CHART -
                    //--------------
                    var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
                    var lineChart = new Chart(lineChartCanvas);
                    var lineChartOptions = areaChartOptions;
                    lineChartOptions.datasetFill = false;
                    lineChart.Line(areaChartData, lineChartOptions);

                    //-------------
                    //- PIE CHART -
                    //-------------
                    // Get context with jQuery - using jQuery's .get() method.
                    var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
                    var pieChart = new Chart(pieChartCanvas);
                    var PieData = [
                        {
                            value: <?php echo $guru->guru ?>,
                            color: "#f56954",
                            highlight: "#f56954",
                            label: "Guru"
                        },
                        {
                            value: <?php echo $tani->tani ?>,
                            color: "#00a65a",
                            highlight: "#00a65a",
                            label: "Petani"
                        },
                        {
                            value: <?php echo $dagang->dagang ?>,
                            color: "#f39c12",
                            highlight: "#f39c12",
                            label: "Pedagang"
                        },
                        {
                            value: <?php echo $dokter->dokter ?>,
                            color: "#00c0ef",
                            highlight: "#00c0ef",
                            label: "Dokter"
                        },
                        {
                            value: <?php echo $perawat->perawat ?>,
                            color: "#3c8dbc",
                            highlight: "#3c8dbc",
                            label: "Perawat"
                        },
                        {
                            value: <?php echo $tni->tni ?>,
                            color: "#d2d6de",
                            highlight: "#d2d6de",
                            label: "TNI"
                        },
                        {
                            value: <?php echo $polri->polri ?>,
                            color: "#d2d6de",
                            highlight: "#d2d6de",
                            label: "Polri"
                        },
                        {
                            value: <?php echo $swasta->swasta ?>,
                            color: "#d2d6de",
                            highlight: "#d2d6de",
                            label: "Swasta"
                        },
                   
                        {
                            value:  <?php echo $tb->tb ?>,
                            color: "#d2d6de",
                            highlight: "#d2d6de",
                            label: "Tidak Bekerja"
                        }
                    ];
                    var pieOptions = {
                        //Boolean - Whether we should show a stroke on each segment
                        segmentShowStroke: true,
                        //String - The colour of each segment stroke
                        segmentStrokeColor: "#fff",
                        //Number - The width of each segment stroke
                        segmentStrokeWidth: 2,
                        //Number - The percentage of the chart that we cut out of the middle
                        percentageInnerCutout: 50, // This is 0 for Pie charts
                        //Number - Amount of animation steps
                        animationSteps: 100,
                        //String - Animation easing effect
                        animationEasing: "easeOutBounce",
                        //Boolean - Whether we animate the rotation of the Doughnut
                        animateRotate: true,
                        //Boolean - Whether we animate scaling the Doughnut from the centre
                        animateScale: false,
                        //Boolean - whether to make the chart responsive to window resizing
                        responsive: true,
                        // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                        maintainAspectRatio: true,
                        //String - A legend template
                        legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
                    };
                    //Create pie or douhnut chart
                    // You can switch between pie and douhnut using the method below.
                    pieChart.Doughnut(PieData, pieOptions);

                    //-------------
                    //- BAR CHART -
                    //-------------
                    var barChartCanvas = $("#barChart").get(0).getContext("2d");
                    var barChart = new Chart(barChartCanvas);
                    var barChartData = areaChartData;
                    barChartData.datasets[1].fillColor = "#00a65a";
                    barChartData.datasets[1].strokeColor = "#00a65a";
                    barChartData.datasets[1].pointColor = "#00a65a";
                    var barChartOptions = {
                        //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
                        scaleBeginAtZero: true,
                        //Boolean - Whether grid lines are shown across the chart
                        scaleShowGridLines: true,
                        //String - Colour of the grid lines
                        scaleGridLineColor: "rgba(0,0,0,.05)",
                        //Number - Width of the grid lines
                        scaleGridLineWidth: 1,
                        //Boolean - Whether to show horizontal lines (except X axis)
                        scaleShowHorizontalLines: true,
                        //Boolean - Whether to show vertical lines (except Y axis)
                        scaleShowVerticalLines: true,
                        //Boolean - If there is a stroke on each bar
                        barShowStroke: true,
                        //Number - Pixel width of the bar stroke
                        barStrokeWidth: 2,
                        //Number - Spacing between each of the X value sets
                        barValueSpacing: 5,
                        //Number - Spacing between data sets within X values
                        barDatasetSpacing: 1,
                        //String - A legend template
                        legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
                        //Boolean - whether to make the chart responsive
                        responsive: true,
                        maintainAspectRatio: true
                    };

                    barChartOptions.datasetFill = false;
                    barChart.Bar(barChartData, barChartOptions);
                });
    </script>
