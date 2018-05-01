<?php

include "connect.php";

$id = $_GET['id'];

$sql = "DELETE FROM bukutelepon WHERE id = '$id'";

$res = mysqli_query($link, $sql);
if($res) echo "<script>alert('Data berhasil di hapus!');".'window.location="select.php"'.";</script>";
else echo mysqli_error($link);
mysqli_close($link);

exit;