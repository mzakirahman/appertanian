<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Control Panel - Dashboard</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">

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
                        <a href="index.html" class="site_title"><i class="fa fa-cog"></i> <span>Control Panel</span></a>
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
                    <div class="animated flipInY col-sm-3 ">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-legal"></i></div>
                            <div class="count">{{$kecamatan}}</div>
                            <!-- <h3>Kecamatan</h3> -->
                            <p>Jumlah Kecamatan</p>
                        </div>
                    </div>
                    <div class="animated flipInY col-sm-3 ">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-legal"></i></div>
                            <div class="count">{{$desa}}</div>
                            <!-- <h3>Desa</h3> -->
                            <p>Jumlah Desa</p>
                        </div>
                    </div>
                    <div class="animated flipInY col-sm-3 ">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-map"></i></div>
                            <div class="count">{{$luas}}</div>
                            <!-- <h3>Luas Lahan</h3> -->
                            <p>Luas Lahan</p>
                        </div>
                    </div>
                    <div class="animated flipInY col-sm-3 ">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-folder-open"></i></div>
                            <div class="count">{{$kategori}}</div>
                            <!-- <h3>Jenis Tumbuhan</h3> -->
                            <p>Jenis Tumbuhan</p>
                        </div>
                    </div>
                    <div class="animated flipInY col-sm-3 ">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-users"></i></div>
                            <div class="count">{{$petani}}</div>
                            <!-- <h3>Jenis Tumbuhan</h3> -->
                            <p>Jumlah Petani</p>
                        </div>
                    </div>
                    <div class="animated flipInY col-sm-12 ">
                        Informasi Penggunaan:<br>
                        <a href=""
                                                                class="btn btn-sm btn-primary"><i
                                                                    class="fa fa-save"></i> Hapus</a> Digunakan untuk menyimpan data<br>
                        <a href="" class="btn btn-sm btn-warning"
                                                                data-toggle="modal" data-target=""><i
                                                                    class="fa fa-edit"></i> Rubah</a> Digunakan untuk merubah data
                                                            <br><a href=""
                                                                class="btn btn-sm btn-danger"><i
                                                                    class="fa fa-trash"></i> Hapus</a> Digunakan untuk menghapus data
                                                               
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

</body>

</html>