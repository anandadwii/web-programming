<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Konfirmasi</title>
</head>
<body>
<div class="container-overflow">
    <header class="top-head header-7" data-sticky="true">
        <div class="container">
            <div class="row up-head">
                <div class="col-xs-6 col-sm-5 col-md-6">
                    <div class="logo"
                    <a href="http://upj.ac.id">
                        <img alt="logo" src="//upj.ac.id/upload/module/logo/logo2.png">
                    </a>
                </div>
            </div>
            <div class="col-sm-7 col-md-6">
                <div class="row">
                    <div class="hidden-xs col-xs-12 col-sm-7 col-md-7 col-md-offset-1">
                        <div class="media-middle">
                            <h21 class="title-topa" style="font-size: 24px;color: dodgerblue;">INTEGRITYYYYYYYYYY</h21>
                            <h21 class="title-topb" style="font-size: 24px; color: darkgreen;">PROFESSIONALISM</h21>
                            <h21 class="title-topc" style="font-size: 24px; color: red;">ENTREPRENEURSHIP</h21>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="#">Pendaftaran</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Akademik</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Penelitian</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Kerjasama
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Industri</a>
                    <a class="dropdown-item" href="#">Akademik</a>
                    <a class="dropdown-item" href="#">Lain-Lain</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="heading">
                <h2>Konfirmasi Pendaftaran dulu ngab</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h6>Jalur Penerimaan</h6>
                    <p><?= $_POST["jalurpmb"] ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Nama Lengkap</label>
                    <p><?= $_POST["namapmb"] ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Tempat dan Tanggal Lahir</label>
                    <p><?= $_POST["lahirpmb"] ?></p>
                </div>
                <div class="col-md-6">
                    <label>NIK</label>
                    <p><?= $_POST["nikpmb"] ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label>Jenis Kelamin</label>
                    <p><?= $_POST["kelaminpmb"] ?></p>
                </div>
                <div class="col-md-4">
                    <label>Agama</label>
                    <p><?= $_POST["agamapmb"] ?></p>
                </div>
                <div class="col-md-4">
                    <label>Status</label>
                    <p><?= $_POST["statusnikahpmb"] ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Alamat</label>
                    <p><?= $_POST["alamatpmb"] ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label>Kode Pos</label>
                    <p><?= $_POST["kodepospmb"] ?></p>
                </div>
                <div class="col-md-4">
                    <label>No Handphone</label>
                    <p><?= $_POST["nohppmb"] ?></p>
                </div>
                <div class="col-md-4">
                    <label>Email</label>
                    <p><?= $_POST["emailpmb"] ?></p>
                </div>
            </div>
            <br>
            <h2 class="col-lg-12 clearfix">DATA SEKOLAH ASAL CALON MAHASISWA</h2>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <label>Asal Sekolah</label>
                    <p><?= $_POST["lulusanpmb"] ?></p>
                </div>
                <div class="col-md-4">
                    <label>Wilayah Sekolah</label>
                    <p><?= $_POST["wilayahpmb"] ?></p>
                </div>
                <div class="col-md-4">
                    <label>Jurusan Sekolah</label>
                    <p><?= $_POST["jurusanpmb"] ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Tahun Lulus</label>
                    <p><?= $_POST["angkatanpmb"] ?></p>
                </div>
                <div class="col-md-6">
                    <label>Biaya Kuliah dibiayai oleh</label>
                    <p><?= $_POST["biayapmb"] ?></p>
                </div>
            </div>
            <br>
            <h2 class="col-lg-12 clearfix">DATA ORANG TUA MAHASISWA</h2>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <label>Nama Ayah</label>
                    <p><?= $_POST["namaayahpmb"] ?></p>
                </div>
                <div class="col-md-6">
                    <label>Nama Ibu</label>
                    <p><?= $_POST["namaibupmb"] ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Alamat Orang Tua</label>
                    <p><?= $_POST["alamatortupmb"] ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Kode Pos</label>
                    <p><?= $_POST["kodeposortupmb"] ?></p>
                </div>
                <div class="col-md-6">
                    <label>Nomor Handphone</label>
                    <p><?= $_POST["nohportupmb"] ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Pendidikan Terakhir Ayah</label>
                    <p><?= $_POST["studiayahpmb"] ?></p>
                </div>
                <div class="col-md-6">
                    <label>Pendidikan Terakhir Ibu</label>
                    <p><?= $_POST["studiibupmb"] ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Status Ayah</label>
                    <p><?= $_POST["statusayahpmb"] ?></p>
                </div>
                <div class="col-md-6">
                    <label>Status Ibu</label>
                    <p><?= $_POST["statusibupmb"] ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Pekerjaan Ayah</label>
                    <p><?= $_POST["pekerjaanayahpmb"] ?></p>
                </div>
                <div class="col-md-6">
                    <label>Pekerjaan Ibu</label>
                    <p><?= $_POST["pekerjaanibupmb"] ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Penghasilan ayah</label>
                    <p><?= $_POST["penghasilanayahpmb"] ?></p>
                </div>
                <div class="col-md-6">
                    <label>Penghasilan ayah</label>
                    <p><?= $_POST["penghasilanibupmb"] ?></p>
                </div>
            </div>
            <br>
            <h2 class="col-lg-12 clearfix">PEMINATAN PROGRAM STUDI</h2>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <label>Pilihan Program Studi</label>
                    <p><?= $_POST["prodipmb"] ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="address">
                        <h3>UPJ</h3>
                        <p class="mb-4 mt-4">Jalan Cendrawasih Raya Blok B7/P, Bintaro, Tnagerang Selatan.</p>
                        <p><strong>Phone:</strong> (021) 7455555</p>
                        <p><strong>Email:</strong> marketing@upj,ac,id</p>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-6 footer-menus">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="fas fa-check"></i> <a href="#">Home</a></li>
                        <li><i class="fas fa-check"></i> <a href="#">About us</a></li>
                        <li><i class="fas fa-check"></i> <a href="#">Services</a></li>
                        <li><i class="fas fa-check"></i> <a href="#">Terms of service</a></li>
                        <li><i class="fas fa-check"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-sm-6 footer-menus">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="fas fa-check"></i> <a href="#">Web Design</a></li>
                        <li><i class="fas fa-check"></i> <a href="#">Web Development</a></li>
                        <li><i class="fas fa-check"></i> <a href="#">Product Management</a></li>
                        <li><i class="fas fa-check"></i> <a href="#">Marketing</a></li>
                        <li><i class="fas fa-check"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-sm-6 newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>



                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="text-center mb-2">&copy; Copyright <strong>markuptag</strong>. All Rights Reserved</p>
                    <p class="text-center mb-0">Created by <a href="https://www.markuptag.com/">markuptag</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
-->
</body>
</html>
