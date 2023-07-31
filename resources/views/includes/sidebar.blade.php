<?php
    $queryprofil=DB::table('users')->where('email',Session::get('name'))->get();
?>
<!-- menu profile quick info -->
<div class="profile clearfix">
    <div class="profile_pic">
        <img src="https://diskominfotik.bengkaliskab.go.id/editor/content_upload/images/logo%20kabupaten%20bengkalis.png"
            alt="..." class="img-circle profile_img">
    </div>
    <div class="profile_info">
        <span>Delamat Datang,</span>
        <h2>@foreach($queryprofil as $vap) {{$vap->nama}} @endforeach()</h2>
    </div>
</div>
<!-- /menu profile quick info -->

<br />
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>Main Menu</h3>
        <ul class="nav side-menu">
            <li><a href="dashboard"><i class="fa fa-home"></i> Beranda</a></li>
            <li><a><i class="fa fa-users"></i> Data Petani <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <?php
                        if(Session::get('level')=='admin'){
                    ?>
                    <li><a href="kecamatan">Kecamatan</a></li>
                    <li><a href="desa">Desa</a></li>
                    <li><a href="kelas">Kelas Petani</a></li>
                    <li><a href="kategori">Kategori Tumbuhan</a></li>
                    <?php } ?>
                    <li><a href="daftar">Daftar Petani</a></li>
                </ul>
            </li>
            <li><a href="grafik"><i class="fa fa-bar-chart-o"></i> Grafik</a></li>
            <li><a href="mapping"><i class="fa fa-map"></i> Mapping</a></li>
            <li><a href="logout"><i class="fa fa-sign-out"></i> Keluar</a></li>
        </ul>
    </div>

</div>