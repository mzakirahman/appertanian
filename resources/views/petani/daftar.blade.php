<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Control Panel - Daftar Petani</title>

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
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="dashboard" class="site_title"><i class="fa fa-cog"></i> <span>Control Panel</span></a>
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
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Desa</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target=".bs-example-modal-lg"><i class="fa fa-plus"></i> Tambah
                                            Petani</button>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box">
                                            <table id="datatable-buttons" class="table table-striped table-bordered"
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th width="5%">No</th>
                                                        <th>Petani</th>
                                                        <th>Kecamatan</th>
                                                        <th>Desa</th>
                                                        <th>Hp</th>
                                                        <th>Kelas</th>
                                                        <th>Luas</th>
                                                        <th>Tumbuhan</th>
                                                        <th>Nama Tumbuhan</th>
                                                        <th>Waktu Panen / Bln</th>
                                                        <th>Tanggal Tanam</th>
                                                        <th>Jumlah Bibit</th>
                                                        <th>Koordinat</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $n=1; ?>
                                                    @forelse ($petani as $value)
                                                    <tr>
                                                        <td><?= $n++; ?></td>
                                                        <td>{{$value->nama}}</td>
                                                        <td>{{$value->kecamatan}}</td>
                                                        <td>{{$value->desa}}</td>
                                                        <td>{{$value->hp}}</td>
                                                        <td>{{$value->kelas}}</td>
                                                        <td>{{$value->luas}}</td>
                                                        <td>{{$value->kategori}}</td>
                                                        <td>{{$value->nmtumbuhan}}</td>
                                                        <td>{{$value->waktu_panen}}</td>
                                                        <td>{{$value->tanggal}}</td>
                                                        <td>{{$value->jumlah_bibit}}</td>
                                                        <td>{{$value->koordinat}}</td>
                                                        <td>
                                                            <?php $email=Session::get('name'); if($email==$value->user){ ?>
                                                            <a href="" class="btn btn-sm btn-warning"
                                                                data-toggle="modal" data-target=".rubah<?= $n ?>"><i
                                                                    class="fa fa-edit"></i> Rubah</a>
                                                            <a href="hapusdaftar/{{$value->id}}"
                                                                class="btn btn-sm btn-danger"><i
                                                                    class="fa fa-trash"></i> Hapus</a>
                                                                    <?php } ?>
                                                        </td>
                                                    </tr>
                                                    <?php $email=Session::get('name'); if($email==$value->user){ ?>
                                                    <div class="modal fade rubah<?= $n ?>" tabindex="-1" role="dialog"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">

                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel">Edit
                                                                        Desa
                                                                    </h4>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal"><span
                                                                            aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{route('updatedaftar')}}"
                                                                        method="POST">
                                                                        @csrf

                                                                        <div class="form-group">
                                                                            <label for="">Nama Petani *</label>
                                                                            <input type="text" class="form-control"
                                                                                name="nama" value="{{$value->nama}}"
                                                                                required>
                                                                            <input type="text" value="{{$value->id}}"
                                                                                name="id" hidden required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Kecamatan *</label>
                                                                            <select name="kecamatan" id=""
                                                                                class="form-control">
                                                                                @foreach ($kecamatan as $val)
                                                                                <option value="{{$val->id}}" <?php
                                                                                    if($value->kecamatan==$val->kecamatan){ echo
                                                                                    "selected";}else{} ?>>
                                                                                    {{$val->kecamatan}}
                                                                                </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Desa *</label>
                                                                            <select name="desa" id=""
                                                                                class="form-control">
                                                                                @foreach ($desa as $val)
                                                                                <option value="{{$val->id}}" <?php
                                                                                    if($value->desa==$val->desa){ echo
                                                                                    "selected";}else{} ?>>
                                                                                    {{$val->desa}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Nama Tumbuhan *</label>
                                                                            <input type="text" class="form-control"
                                                                                name="nmtumbuhan" value="{{$value->nmtumbuhan}}"
                                                                                required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Kelas Petani *</label>
                                                                            <select name="kelas" id=""
                                                                                class="form-control">
                                                                                @foreach ($kelas as $val)
                                                                                <option value="{{$val->id}}" <?php
                                                                                    if($value->kelas==$val->kelas){ echo
                                                                                    "selected";}else{} ?>>
                                                                                    {{$val->kelas}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Jenis Tumbuhan *</label>
                                                                            <select name="kategori" id=""
                                                                                class="form-control">
                                                                                @foreach ($kategori as $val)
                                                                                <option value="{{$val->id}}" <?php
                                                                                    if($value->kategori==$val->kategori){ echo
                                                                                    "selected";}else{} ?>>
                                                                                    {{$val->kategori}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Luas Lahan *</label>
                                                                            <input type="number" class="form-control"
                                                                                name="luas" value="{{$value->luas}}"
                                                                                required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">No Hp</label>
                                                                            <input type="text" class="form-control"
                                                                                name="hp" value="{{$value->hp}}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Jangka Waktu Panen *</label>
                                                                            <input type="text" class="form-control"
                                                                                name="waktu_panen"
                                                                                value="{{$value->waktu_panen}}"
                                                                                required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Tanggal Tanam *</label>
                                                                            <input type="date" class="form-control"
                                                                                name="tanggal"
                                                                                value="{{$value->tanggal}}" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Jumlah Bibit Tumbuhan
                                                                                *</label>
                                                                            <input type="text" class="form-control"
                                                                                name="jumlah_bibit"
                                                                                value="{{$value->jumlah_bibit}}"
                                                                                required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Titik Koordinat Lokasi
                                                                                *</label>
                                                                            <input type="text" class="form-control"
                                                                                name="koordinat"
                                                                                value="{{$value->koordinat}}" required>
                                                                            <p>Latitude: <i id="latitude<?= $n ?>"></i>,
                                                                                Longtitude: <i
                                                                                    id="longitude<?= $n ?>"></i></p>
                                                                            <script type="text/javascript">
                                                                            $(document).ready(function() {
                                                                                navigator.geolocation
                                                                                    .getCurrentPosition(
                                                                                        function(position) {
                                                                                            $("#latitude<?= $n ?>")
                                                                                                .html(
                                                                                                    `${position.coords.latitude}`
                                                                                                );
                                                                                            $("#longitude<?= $n ?>")
                                                                                                .html(
                                                                                                    `${position.coords.longitude}`
                                                                                                );

                                                                                        },
                                                                                        function(e) {
                                                                                            alert(
                                                                                                'Geolocation Tidak Mendukung Pada Browser Anda'
                                                                                            );
                                                                                        }, {
                                                                                            enableHighAccuracy: true
                                                                                        });
                                                                            });
                                                                            </script>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            Note : (*) wajib di isi.
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <button type="submit"
                                                                                class="btn btn-primary btn-sm"><i
                                                                                    class="fa fa-save"></i>
                                                                                Simpan</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                    @empty
                                                    <tr>
                                                        <td colspan="13">Data belum ada</td>
                                                    </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Tambah Petani</h4>
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="formD" name="formD" action="{{ route('simpandaftar') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Nama Petani *</label>
                                    <input type="text" class="form-control" name="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Kecamatan *</label>
                                    <select name="kecamatan" id="" class="form-control">
                                        @foreach ($kecamatan as $value)
                                        <option value="{{$value->id}}">{{$value->kecamatan}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Desa *</label>
                                    <select name="desa" id="" class="form-control">
                                        @foreach ($desa as $value)
                                        <option value="{{$value->id}}">{{$value->desa}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Tumbuhan *</label>
                                    <input type="text" class="form-control" name="nmtumbuhan" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Kelas Petani *</label>
                                    <select name="kelas" id="" class="form-control">
                                        @foreach ($kelas as $value)
                                        <option value="{{$value->id}}">{{$value->kelas}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Tumbuhan *</label>
                                    <select name="kategori" id="" class="form-control">
                                        @foreach ($kategori as $value)
                                        <option value="{{$value->id}}">{{$value->kategori}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Luas Lahan *</label>
                                    <input type="number" class="form-control" name="luas" required>
                                </div>
                                <div class="form-group">
                                    <label for="">No Hp</label>
                                    <input type="text" class="form-control" name="hp">
                                </div>
                                <div class="form-group">
                                    <label for="">Jangka Waktu Panen / bulan *</label>
                                    <input type="text" class="form-control" name="waktu_panen" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Tanam *</label>
                                    <input type="date" class="form-control" name="tanggal" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Jumlah Bibit Tumbuhan *</label>
                                    <input type="text" class="form-control" name="jumlah_bibit" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Titik Koordinat Lokasi *</label>
                                    <input type="text" class="form-control" id="koordinat" value="" name="koordinat"
                                        required>
                                    <p>Latitude: <i id="latitude"></i>, Longtitude: <i id="longitude"></i></p>
                                </div>
                                <div class="form-group">
                                    Note : (*) wajib di isi.
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i>
                                        Simpan</button>
                                </div>
                            </form>
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
    <!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        navigator.geolocation.getCurrentPosition(function(position) {
            $("#latitude").html(`${position.coords.latitude}`);
            $("#longitude").html(`${position.coords.longitude}`);
            document.formD.koordinat.value = position.coords.latitude + "," + position.coords.longitude;
        }, function(e) {
            alert('Geolocation Tidak Mendukung Pada Browser Anda');
        }, {
            enableHighAccuracy: true
        });
    });
    </script>
</body>

</html>