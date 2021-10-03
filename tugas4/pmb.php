<?php
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Form Pendaftaran</title>
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
                <h4>Pendaftaran Online</h4>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form class="form" method="post" action="konfirmasipmb.php">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12 marbot-10">
                                    <label>Jalur Penerimaan Mahasiswa Baru *</label>
                                    <select id="" class="form-control" required="" name="jalurpmb">
                                        <option value="">--- Pilih Jalur Penerimaan ---</option>
                                        <option value="Tahun akademik 2021-2022 Jalur Beasiswa Penuh UPJ - Beasiswa Akademik - Khusus Lulusan 2021">Tahun akademik 2021-2022 Jalur Beasiswa Penuh UPJ - Beasiswa Akademik - Khusus Lulusan 2021</option>
                                        <option value="Tahun akademik 2021-2022 Jalur Beasiswa Penuh UPJ - Beasiswa Non Akademik - Khusus Lulusan 2021">Tahun akademik 2021-2022 Jalur Beasiswa Penuh UPJ - Beasiswa Non Akademik - Khusus Lulusan 2021</option>
                                        <option value="Tahun akademik 2021-2022 Jalur Beasiswa Penuh UPJ - Beasiswa OSIS - Khusus Lulusan 2021">Tahun akademik 2021-2022 Jalur Beasiswa Penuh UPJ - Beasiswa OSIS - Khusus Lulusan 2021</option>
                                        <option value="Tahun akademik 2021-2022 Jalur Beasiswa ASAK (Ayo Sekolah Ayo Kuliah) Khusus Agama Katholik">Tahun akademik 2021-2022 Jalur Beasiswa ASAK (Ayo Sekolah Ayo Kuliah) Khusus Agama Katholik</option>
                                        <option value="Tahun Akademik 2021-2022 Jalur Reguler - Potongan Anak Karyawan Tetap Jaya Grup (Khusus untuk orang tua yang berkerja di Jaya Grup)">Tahun Akademik 2021-2022 Jalur Reguler - Potongan Anak Karyawan Tetap Jaya Grup (Khusus untuk orang tua yang berkerja di Jaya Grup)</option>
                                        <option value="Tahun Akademik 2021-2022 Jalur Reguler - Ujian Saringan Masuk (USM)">Tahun Akademik 2021-2022 Jalur Reguler - Ujian Saringan Masuk (USM)</option>
                                        <option value="Tahun Akademik 2021/2022 Jalur Reguler - Potongan Anak Guru/Staf Sekolah">Tahun Akademik 2021/2022 Jalur Reguler - Potongan Anak Guru/Staf Sekolah</option>
                                        <option value="Tahun Akademik 2021-2022 Jalur Reguler - Rata-rata Rapor">Tahun Akademik 2021-2022 Jalur Reguler - Rata-rata Rapor</option>
                                        <option value="Tahun Akademik 2021-2022 Jalur Reguler - Peringkat Kelas">Tahun Akademik 2021-2022 Jalur Reguler - Peringkat Kelas</option>
                                        <option value="Tahun Akademik 2021-2022 Jalur Reguler - Rapor dan USM">Tahun Akademik 2021-2022 Jalur Reguler - Rapor dan USM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12 marbot-10">
                                    <label>Nama Calon Mahasiswa (Sesuai Akte Kelahiran) *</label>
                                    <input id="" class="form-control" type="text" value="" required="" name="namapmb" placeholder="Nama Lengkap Anda">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label>Tempat dan Tanggal Lahir</label>
                                    <input id="" class="form-control" type="text" value="" required="" name="lahirpmb" placeholder="Masukkan Tempat dan Tanggal Lahir"
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>NIK (Nomor Induk Kependudukan KTP / KK) *</label>
                                <input id="" class="form-control" type="text" value="" required="" name="nikpmb" placeholder="Masukkan Nomor Induk Kependudukan"
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-4">
                                    <label>Jenis Kelamin</label>

                                </div>
                                <div class="col-md-4">
                                    <label>Agama</label>

                                </div>
                                <div class="col-md-4">
                                    <label>Status</label>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-4">
                                    <label>Jenis Kelamin</label>
                                    <select id="" class="form-control" required="" name="kelaminpmb">
                                        <option value="">--- Pilih ---</option>
                                        <option value="pria">Pria</option>
                                        <option value="wanita">Wanita</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>Agama</label>
                                    <select id="" class="form-control" required="" name="agamapmb">
                                        <option value="">--- Pilih ---</option>
                                        <option value="islam">Islam</option>
                                        <option value="katholik">Katholik</option>
                                        <option value="kristen">kristen</option>
                                        <option value="hindu">Hindu</option>
                                        <option value="buddha">Buddha</option>
                                        <option value="lainnya">lainnya</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>Status</label>
                                    <select id="" class="form-control" required="" name="statusnikahpmb">
                                        <option value="">--- Pilih ---</option>
                                        <option value="menikah">Menikah</option>
                                        <option value="janda">Janda</option>
                                        <option value="duda">Duda</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Alamat</label>
                                    <textarea id="" class="form-control" required=""  name="alamatpmb" placeholder="Masukkan Alamat Lengkap y"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-4">
                                    <label>Kode Pos</label>
                                    <input id="" class="form-control" type="text" value="" required="" name="kodepospmb" placeholder="Kode Pos">
                                </div>
                                <div class="col-md-4">
                                    <label>No. Handphone *</label>
                                    <input id="" class="form-control" type="text" value="" required="" name="nohppmb" placeholder="Nomor HP">
                                </div>
                                <div class="col-md-4">
                                    <label>Email *</label>
                                    <input id="" class="form-control" type="text" required="" name="emailpmb" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <br>
                        <h2 class="col-lg-12 clearfix">DATA SEKOLAH ASAL CALON MAHASISWA</h2>
                        <br>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-4">
                                    <label>Asal Sekolah (SMA/SMK/MA) *</label>
                                    <input id="" class="form-control" type="text" value="" required="" name="lulusanpmb" placeholder="asal mana dek?">
                                </div>
                                <div class="col-md-4">
                                    <label>Wilayah Sekolah *</label>
                                    <select id="" class="form-control" type="text" value="" required="" name="wilayahpmb">
                                        <option value="">--- Pilih ---</option>
                                        <option value="jakarta barat"> Jakarta Barat</option>
                                        <option value="jakarta timur">Jakarta Timur</option>
                                        <option value="jakarta utara">Jakarta Utara</option>
                                        <option value="jakarta selatan">Jakarta Selatan</option>
                                        <option value="jakarta pusat">Jakarta Pusat</option>
                                        <option value="bogor">Bogor</option>
                                        <option value="depok">Depok</option>
                                        <option value="tangerang">Tangerang</option>
                                        <option value="tangerang selatan">Tangerang Selatan</option>
                                        <option value="bekasi">Planet Bekasi</option>
                                        <option value="luar kota">Luar Kota</option>
                                        <option value="luar negeri">Luar Negeri</option>
                                        <option value="luar planet">Luar Planet</option>
                                        <option value="beda alam">Beda Alam</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>jurusan Sekolah *</label>
                                    <input id="" class="form-control" type="text" value="" required="" name="jurusanpmb" placeholder="jurusan mana dek?">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label>Tahun Lulus</label>
                                    <input id="" class="form-control" type="text" value="" required="" name="angkatanpmb" placeholder="angkatan tahun brp dek?">
                                </div>
                                <div class="col-md-6">
                                    <label>Biaya Kuliah dibiayai oleh *</label>
                                    <select id="" class="form-control" required="" name="biayapmb">
                                        <option value="">--- Pilih ---</option>
                                        <option value="beasiswa">Beasiswa</option>
                                        <option value="ikatan dinas">Ikatan Dinas</option>
                                        <option value="orangtua">Orang Tua</option>
                                        <option value="sendiri">sendiri</option>
                                        <option value="binomo">Binomo</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>
                        <h2 class="col-lg-12 clearfix">DATA ORANG TUA MAHASISWA</h2>
                        <br>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label>Nama Ayah</label>
                                    <input id="" class="form-control" type="text" value="" required="" name="namaayahpmb" placeholder="nama babeh lu siapa dek?">
                                </div>

                                <div class="col-md-6">
                                    <label>Nama Ibu</label>
                                    <input id="" class="form-control" type="text" value="" required="" name="namaibupmb" placeholder="nama emak lu siapa dek?">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Alamat </label>
                                    <textarea id="" class="form-control" type="text" value="" required="" name="alamatortupmb" placeholder="alamat ortu ada kan? isi"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label>Kode Pos</label>
                                    <input id="" class="form-control" type="text" value="" required="" name="kodeposortupmb" placeholder="kode posnya brp?">
                                </div>
                                <div class="col-md-6">
                                    <label>No. Handphone</label>
                                    <input id="" class="form-control" type="text" value="" required="" name="nohportupmb" placeholder="masukin nomor hp ortu lu bro">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label>Pendidikan Terakhir Ayah</label>
                                    <select id="" class="form-control" required="" name="studiayahpmb">
                                        <option value="">--- Pilih ---</option>
                                        <option value="A">A - Tidak lulus SD</option>
                                        <option value="B">B - SD</option>
                                        <option value="C">C - SMP</option>
                                        <option value="D">D - SMA</option>
                                        <option value="E">E - D1</option>
                                        <option value="F">F - D2-D3</option>
                                        <option value="G">G - D4-S1</option>
                                        <option value="H">H - S2</option>
                                        <option value="I">I - S3</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Pendidikan Terakhir Ibu</label>
                                    <select id="" class="form-control" required="" name="studiibupmb">
                                        <option value="">--- Pilih ---</option>
                                        <option value="A">A - Tidak lulus SD</option>
                                        <option value="B">B - SD</option>
                                        <option value="C">C - SMP</option>
                                        <option value="D">D - SMA</option>
                                        <option value="E">E - D1</option>
                                        <option value="F">F - D2-D3</option>
                                        <option value="G">G - D4-S1</option>
                                        <option value="H">H - S2</option>
                                        <option value="I">I - S3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label>Status Ayah</label>
                                    <select id="" class="form-control" required="" name="statusayahpmb">
                                        <option value="">--- Pilih ----</option>
                                        <option value="masih hidup">Alhamdulillah Masih Hidup</option>
                                        <option value="sudah meninggal">Udah beda server :(</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Status Ibu</label>
                                    <select id="" class="form-control" required="" name="statusibupmb">
                                        <option value="">--- Pilih ----</option>
                                        <option value="masih hidup">Alhamdulillah Masih Hidup</option>
                                        <option value="sudah meninggal">Udah beda server :(</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label>Pekerjaan Ayah</label>
                                    <select id="" class="form-control" required="" name="pekerjaanayahpmb">
                                        <option value="">--- Pilih ----</option>
                                        <option value="pegawai negeri">PNS nih bos</option>
                                        <option value="tni/polri">Angkatan nih bos</option>
                                        <option value="pegawai swasta">Swasta aja bos</option>
                                        <option value="wiraswasta">Usaha nih bos</option>
                                        <option value="pensiun">pensi bro</option>
                                        <option value="tidak bekerja">gada gawean, mau ngasih kerja?</option>
                                        <option value="lainnya">apaan kek</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Pekerjaan Ibu</label>
                                    <select id="" class="form-control" required="" name="pekerjaanibupmb">
                                        <option value="">--- Pilih ----</option>
                                        <option value="pegawai negeri">PNS nih bos</option>
                                        <option value="tni/polri">Angkatan nih bos</option>
                                        <option value="pegawai swasta">Swasta aja bos</option>
                                        <option value="wiraswasta">Usaha nih bos</option>
                                        <option value="pensiun">pensi bro</option>
                                        <option value="tidak bekerja">gada gawean, mau ngasih kerja?</option>
                                        <option value="lainnya">apaan kek</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label>Penghasilan ayah</label>
                                    <select id="" class="form-control" required="" name="penghasilanayahpmb">
                                        <option value="">--- Pilih ----</option>
                                        <option value="Rp. 1.000.000">sekojut</option>
                                        <option value="Rp 1.000.001 - Rp. 5.000.000">UMR an aja bang</option>
                                        <option value="Rp 5.000.001 - Rp. 10.000.000">gede dah</option>
                                        <option value="Rp 10.000.000 >">crazy rich</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Penghasilan Ibu</label>
                                    <select id="" class="form-control" required="" name="penghasilanibupmb">
                                        <option value="">--- Pilih ----</option>
                                        <option value="Rp. 1.000.000">sekojut</option>
                                        <option value="Rp 1.000.001 - Rp. 5.000.000">UMR an aja bang</option>
                                        <option value="Rp 5.000.001 - Rp. 10.000.000">gede dah</option>
                                        <option value="Rp 10.000.000 >">crazy rich</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>
                        <h2 class="col-lg-12 clearfix">PEMINATAN PROGRAM STUDI</h2>
                        <br>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label>Pilihan Program Studi</label>
                                    <select id="" class="form-control" required="" name="prodipmb">
                                        <option value="Akuntansi">Akuntansi</option>
                                        <option value="Manajemen">Manajemen</option>
                                        <option value="Psikologi">Psikologi</option>
                                        <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                                        <option value="Desain Produk">Desain Produk</option>
                                        <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                                        <option value="Informatika">Informatika</option>
                                        <option value="Sistem Informasi">Sistem Informasi</option>
                                        <option value="Teknik Sipil">Teknik Sipil</option>
                                        <option value="Arsitektur">Arsritektur</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>
                        <h2 class="col-lg-12 clearfix">Ujian Saringan Masuk</h2>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <p>USM (Ujian Saringan Masuk):  Jadwal dan link akan diberikan kemudian setelah proses awal pendaftaran dinyatakan memenuhi persyaratan</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12" style="clear:both; margin: 8px 0">
                                <div class="col-lg-3 ">
                                    <button class="btn btn-primary" value="Submit" name="submit" type="submit">Submit</button>
                                    <button class="btn btn-danger" value="Reset" name="B2" type="submit">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
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
