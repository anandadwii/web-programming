<?php
$namaServer = "localhost";
$username = "root";
$password = "";
$namaDatabase = "portfolio";

//membuat koneksi
$conn = mysqli_connect($namaServer,$username,$password,$namaDatabase);

//cek konek
if(!$conn){
    die('Koneksi Gagal' .mysqli_connect_error());

}
