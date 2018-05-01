<?php

include "connect.php";

$id = $_POST['id'];

$nama  = $_POST['nama'];
$email = $_POST['email'];
$tel   = $_POST['phone'];
$jenis = $_POST['jenis'];
$tgl = $_POST['tgl'];

$sql = "UPDATE bukutelepon SET nama = '".$nama."', email = '".$email."', tel = '".$tel."', jenis = '".$jenis."', tgl_lahir = '".$tgl."' WHERE id = ".$id;
/* eksekusi query SQL */
$res = mysqli_query($link, $sql);
if($res) echo "<script>alert('Data berhasil disimpan!');".'window.location="select.php"'.";</script>";
else echo mysqli_error($link);
/* tutup koneksi MySQL */
mysqli_close($link);

 ?>
