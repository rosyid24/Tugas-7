<?php

include "connect.php";

$nama  = $_POST['nama'];
$email = $_POST['email'];
$tel   = $_POST['phone'];
$jenis = $_POST['jenis'];
$tgl = $_POST['tgl'];

$sql = "INSERT INTO bukutelepon (nama, email, tel, jenis, tgl_lahir) "
     . "VALUES ('$nama','$email','$tel', '$jenis', '$tgl')";
/* eksekusi query SQL */
$res = mysqli_query($link, $sql);
if($res) echo "<script>alert('Data berhasil di tambahkan!');history.go(-1);</script>";
else echo mysqli_error($link);

/* tutup koneksi MySQL */
mysqli_close($link);

