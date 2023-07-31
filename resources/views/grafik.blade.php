 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <!-- Meta, title, CSS, favicons, etc. -->
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="icon" href="images/favicon.ico" type="image/ico" />

     <title>Control Panel - Grafik</title>

     <!-- Bootstrap -->
     <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- Font Awesome -->
     <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
     <!-- NProgress -->
     <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
     <!-- iCheck -->
     <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
     <!-- Chart.js -->
     <script src="vendors/Chart.js/dist/Chart.min.js"></script>

     <!-- bootstrap-progressbar -->
     <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
     <!-- JQVMap -->
     <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
     <!-- bootstrap-daterangepicker -->
     <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

     <!-- Custom Theme Style -->
     <link href="build/css/custom.min.css" rel="stylesheet">
 </head>

 <body class="nav-md">
     <div class="container body">
         <div class="main_container">
             <div class="col-md-3 left_col">
                 <div class="left_col scroll-view">
                     <div class="navbar nav_title" style="border: 0;">
                         <a href="dashboard" class="site_title"><i class="fa fa-cog"></i> <span>Control
                                 Panel</span></a>
                     </div>

                     <div class="clearfix"></div>


                     <!-- sidebar menu -->
                     @include('includes.sidebar')

                     <!-- /sidebar menu -->
                 </div>
             </div>

             <!-- top navigation -->
             @include('includes.topnavigation')
             <!-- /top navigation -->

             <!-- page content -->
             <div class="right_col" role="main">
                 <!-- top tiles -->
                 <div class="row">
                     <div class="col-md-6 col-sm-6  ">
                         <div class="x_panel">
                             <div class="x_title">
                                 <h2>Kecamatan </h2>
                                 <ul class="nav navbar-right panel_toolbox">
                                     <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                     </li>
                                     <li><a class="close-link"><i class="fa fa-close"></i></a>
                                     </li>
                                 </ul>
                                 <div class="clearfix"></div>
                             </div>
                             <div class="x_content">

                                 <canvas id="mybarChartq"></canvas>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-6 col-sm-6  ">
                         <div class="x_panel">
                             <div class="x_title">
                                 <h2>Desa</h2>
                                 <ul class="nav navbar-right panel_toolbox">
                                     <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                     </li>
                                     <li><a class="close-link"><i class="fa fa-close"></i></a>
                                     </li>
                                 </ul>
                                 <div class="clearfix"></div>
                             </div>
                             <div class="x_content">
                                 <canvas id="pieChartdesa"></canvas>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-6 col-sm-6  ">
                         <div class="x_panel">
                             <div class="x_title">
                                 <h2>Jenis Tumbuhan</h2>
                                 <ul class="nav navbar-right panel_toolbox">
                                     <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                     </li>
                                     <li><a class="close-link"><i class="fa fa-close"></i></a>
                                     </li>
                                 </ul>
                                 <div class="clearfix"></div>
                             </div>
                             <div class="x_content">
                                 <canvas id="canvasDoughnuttumbuhan"></canvas>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-6 col-sm-6  ">
                         <div class="x_panel">
                             <div class="x_title">
                                 <h2>Kelas Petani</h2>
                                 <ul class="nav navbar-right panel_toolbox">
                                     <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                     </li>
                                     <li><a class="close-link"><i class="fa fa-close"></i></a>
                                     </li>
                                 </ul>
                                 <div class="clearfix"></div>
                             </div>
                             <div class="x_content">
                                 <canvas id="linekelas"></canvas>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- /page content -->

             <!-- footer content -->
             <footer>
                 <div class="pull-right">
                     Aplikasi Pemetaan Hasil Pertanian Pulau Bengkalis
                 </div>
                 <div class="clearfix"></div>
             </footer>
             <!-- /footer content -->
         </div>
     </div>

     <!-- jQuery -->
     <script src="vendors/jquery/dist/jquery.min.js"></script>
     <!-- Bootstrap -->
     <script src="vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
     <!-- FastClick -->
     <script src="vendors/fastclick/lib/fastclick.js"></script>
     <!-- NProgress -->
     <script src="vendors/nprogress/nprogress.js"></script>
     <!-- Chart.js -->
     <script src="vendors/Chart.js/dist/Chart.min.js"></script>
     <!-- gauge.js -->
     <script src="vendors/gauge.js/dist/gauge.min.js"></script>
     <!-- bootstrap-progressbar -->
     <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
     <!-- iCheck -->
     <script src="vendors/iCheck/icheck.min.js"></script>
     <!-- Skycons -->
     <script src="vendors/skycons/skycons.js"></script>
     <!-- Flot -->
     <script src="vendors/Flot/jquery.flot.js"></script>
     <script src="vendors/Flot/jquery.flot.pie.js"></script>
     <script src="vendors/Flot/jquery.flot.time.js"></script>
     <script src="vendors/Flot/jquery.flot.stack.js"></script>
     <script src="vendors/Flot/jquery.flot.resize.js"></script>
     <!-- Flot plugins -->
     <script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
     <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
     <script src="vendors/flot.curvedlines/curvedLines.js"></script>
     <!-- DateJS -->
     <script src="vendors/DateJS/build/date.js"></script>
     <!-- JQVMap -->
     <script src="vendors/jqvmap/dist/jquery.vmap.js"></script>
     <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
     <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
     <!-- bootstrap-daterangepicker -->
     <script src="vendors/moment/min/moment.min.js"></script>
     <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

     <!-- Custom Theme Scripts -->
     <script src="build/js/custom.min.js"></script>
     <script>
     e = document.getElementById("mybarChartq"), new
     Chart(e, {
         type: "bar",
         data: {
             labels: [@foreach($kecamatan as $val)
                 "{{$val->kecamatan}}",
                 @endforeach
             ],
             datasets: [{
                     label: "#Jumlah Desa",
                     backgroundColor: "#26B99A",
                     data: [@foreach($kecamatan as $val)
                         "{{$val->desa}}",
                         @endforeach
                     ]
                 },
                 {
                     label: "#Jumlah Petani",
                     backgroundColor: "#03586A",
                     data: [@foreach($kecamatan as $val)
                         "{{$val->jumlah}}",
                         @endforeach
                     ]
                 }
             ]
         },
         options: {
             scales: {
                 yAxes: [{
                     ticks: {
                         beginAtZero: !0
                     }
                 }]
             }
         }
     });
     e = document.getElementById("pieChartdesa"), new
     Chart(e, {
         type: "pie",
         data: {
             labels: [@foreach($desa as $val)
                 "{{$val->desa}}",
                 @endforeach
             ],
             datasets: [{
                 label: "Luas",
                 backgroundColor: ["#26B99A", "#E74C3C", "#9B59B6", "#BDC3C7", "#3498DB"],
                 data: [@foreach($desa as $val)
                     "{{$val->luas}}",
                     @endforeach
                 ]
             }]
         },
         options: {
             scales: {
                 yAxes: [{
                     ticks: {
                         beginAtZero: !0
                     }
                 }]
             }
         }
     });
     e = document.getElementById("canvasDoughnuttumbuhan"), new
     Chart(e, {
         type: "doughnut",
         data: {
             labels: [@foreach($kategori as $val)
                 "{{$val->kategori}}",
                 @endforeach
             ],
             datasets: [{
                 backgroundColor: ["#BDC3C7", "#9B59B6", "#E74C3C", "#26B99A", "#3498DB"],
                 hoverBackgroundColor: ["#CFD4D8", "#B370CF", "#E95E4F", "#36CAAB", "#49A9EA"],
                 data: [@foreach($kategori as $val)
                     "{{$val->jumlah}}",
                     @endforeach
                 ]
             }]
         },
         options: {
             scales: {
                 yAxes: [{
                     ticks: {
                         beginAtZero: !0
                     }
                 }]
             }
         }
     });
     e = document.getElementById("linekelas"), new
     Chart(e, {
         type: "line",
         data: {
             labels: [@foreach($kelas as $val)
                 "{{$val->kelas}}",
                 @endforeach
             ],
             datasets: [{
                 label: "Jumlah",
                 backgroundColor: "rgba(38, 185, 154, 0.31)",
                 hoverBackgroundColor: ["#CFD4D8", "#B370CF", "#E95E4F", "#36CAAB", "#49A9EA"],
                 borderColor: "rgba(38, 185, 154, 0.7)",
                 pointBorderColor: "rgba(38, 185, 154,0.7)",
                 pointBackgroundColor: " rgba(38, 185, 154,0.7)",
                 pointHoverBackgroundColor: "#fff",
                 ointHoverBorderColor: "rgba(220, 220, 220, 1)",
                 pointBorderWidth: 1,
                 data: [@foreach($kelas as $val)
                     "{{$val->jumlah}}",
                     @endforeach
                 ]
             }]
         },
         options: {
             scales: {
                 yAxes: [{
                     ticks: {
                         beginAtZero: !0
                     }
                 }]
             }
         }
     });

     //  e = document.getElementById("lineCharta"),
     //      new Chart(e, {
     //          type: "line",
     //          data: {
     //              labels: ["Kelas 1", "Kelas 2", "Kelas3 ", " Kelas 4 ", "Kelas 5 ", "Kelas 6 ", "Kelas 7 "],
     //              datasets: [{
     //                  label: "Jumlah ",
     //                  backgroundColor: "rgba(38, 185,154, 0.31)",
     //                  borderColor: "rgba(38, 185, 154, 0.7)",
     //                  pointBorderColor: "rgba(38, 185, 154,0.7)",
     //                  pointBackgroundColor: "rgba(38, 185, 154,0.7)",
     //                  pointHoverBackgroundColor: "#fff ",
     //                  pointHoverBorderColor: "rgba(220, 220, 220, 1)",
     //                  pointBorderWidth: 1,
     //                  data: [31, 74, 6, 39, 20, 85, 7],
     //              }]
     //          }
     //      });

     e = document.getElementById("lineCharta");
     new Chart(e, {
         type: "line",
         data: {
             labels: ["Kelas 1", "Kelas 2", "Kelas3 ", "Kelas 4 ", "Kelas 5 ", "Kelas 6 ", "Kelas 7 "],
             datasets: [{
                     label: "Jumlah ",
                     backgroundColor: "rgba(38, 185, 154, 0.31)",
                     borderColor: "rgba(38, 185, 154, 0.7)",
                     pointBorderColor: "rgba(38, 185, 154,0.7)",
                     pointBackgroundColor: " rgba(38, 185, 154,0.7)",
                     pointHoverBackgroundColor: "#fff",
                     ointHoverBorderColor: "rgba(220, 220, 220, 1)",
                     pointBorderWidth: 1,
                     data: [31, 74, 6, 39, 20, 85, 7]
                 },
                 {
                     label: "MySecond dataset ",
                     backgroundColor: "rgba(3, 88, 106, 0.3)",
                     borderColor: "rgba(3, 88, 106,0.70)",
                     pointBorderColor: "rgba(3, 88, 106, 0.70)",
                     pointBackgroundColor: "rgba(3, 88, 106,0.70)",
                     pointHoverBackgroundColor: "#fff ",
                     pointHoverBorderColor: "rgba(151, 187, 205, 1)",
                     pointBorderWidth: 1,
                     data: []
                 }
             ]
         }
     });
     </script>
 </body>

 </html>