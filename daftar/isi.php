<?php
include "koneksi.php";

$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$tgl_lahir = $_POST["tgl_lahir"];
$email = $_POST["email"];

$sql = "insert into user (nama,alamat,tgl_lahir,email) values ('$nama','$alamat','$tgl_lahir','$email')";
mysql_query($sql);
echo "<script>alert('Terima kasih, Anda Sudah Terdaftar. Silahkan menunggu pengumuman dari admin.')</script>";
echo "<meta http-equiv='refresh' content='0;url=index.php'>";
?>