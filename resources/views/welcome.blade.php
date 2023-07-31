<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Pemetaan Hasil Pertanian Pulau Bengkalis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
    #boxindex {

        background: #000000;
        background-size: 100% 100%;
        background-attachment: fixed;
    }
    </style>
</head>

<body
    style="background: url('https://i1.wp.com/lpmnuansa.undip.ac.id/wp-content/uploads/2021/09/Website-Inovasi-Teknologi-Pertanian.jpg'); background-repeat: no-repeat; background-size: 100% 100%; background-attachment: fixed;">

    <div class="container-fluid" id="boxinde">
        <div class="row">
            <div class="col-md-12 text-center" style="padding-top:50px;">
                <img src="https://diskominfotik.bengkaliskab.go.id/editor/content_upload/images/logo%20kabupaten%20bengkalis.png"
                    width="200px" alt="">
            </div>
            <div class="col-md-12 text-center text-white" style="font-size:30px; padding-top:70px;">
                <b>Selamat Datang di</b><br>Aplikasi Pemetaan Hasil Pertanian Pulau Bengkalis
            </div>
            <div class="col-md-12 text-center" style="padding-top:50px;">
                <button data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="btn btn-primary">Login</button>&nbsp;&nbsp;&nbsp;
                <a href="pengunjung" class="btn btn-secondary">Pengunjung</a>
            </div>
            <div class="col-md-12" style="padding:0px;">
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl" style="padding:0px;">
                        <div class="modal-content" style="padding:0px;">
                            <div class="modal-body"
                                style="background: url('https://i1.wp.com/lpmnuansa.undip.ac.id/wp-content/uploads/2021/09/Website-Inovasi-Teknologi-Pertanian.jpg'); background-repeat: no-repeat; background-size: 100% 100%; background-attachment: fixed; padding:0px;">
                                <div class="row">
                                    <div class="col-md-6 text-center"
                                        style="padding:80px; background:rgb(192,192,192,0.8);">
                                        <div style="">
                                            <form action="{{route('login')}}" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <img src="kunci.png" width="200px" alt="">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group" align="left" style="">
                                                            <label for="">Username</label>
                                                            <input type="text" class="form-control" name="email"
                                                                require>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group" align="left" style="">
                                                            <label for="">Password</label>
                                                            <input type="password" class="form-control" name="password"
                                                                require>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12" align="left" style="padding-top:20px;">
                                                        <button class="btn btn-success">Login</button>
                                                        <a data-bs-dismiss="modal" href="index.php"
                                                            class="btn btn-outline-secondary">
                                                            Kembali</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-center bg-white" style="padding:1px;">
                                        <div class="card shadow shadow-md"
                                            style="height:500px; padding:1px; border:1px solid white;">
                                            <div class="card-body" style="">
                                                <div style="padding-bottom:30px; padding-top:30px;">
                                                    <img src="https://diskominfotik.bengkaliskab.go.id/editor/content_upload/images/logo%20kabupaten%20bengkalis.png"
                                                        width="150px" alt="">
                                                </div>
                                                Bengkalis adalah salah satu kabupaten di provinsi Riau, Indonesia.
                                                Ibu kotanya
                                                berada di Bengkalis Kota. Wilayah dari kabupaten ini mencakup
                                                daratan bagian Timur
                                                Pulau Sumatra dan wilayah kepulauan, dengan luas adalah 6.973,00
                                                km².
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    < script src = "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity = "sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin = "anonymous" >
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    </script>
</body>

</html>