<?php

include "connect.php";
$sql2 = "ALTER TABLE bukutelepon DROP id";
$res2 = mysqli_query($link, $sql2);
$sql3 = "ALTER TABLE bukutelepon ADD id INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST";
$res3 = mysqli_query($link, $sql3);
$sql = "SELECT id, nama, email, tel, jenis, tgl_lahir "
     . "FROM bukutelepon";
$res = mysqli_query($link, $sql);
echo "<center><b>DAFTAR KONTAK</b></center><hr>";
echo "<center>";
echo "<table border=1>";
echo "<tr>";
echo "<td>ID</td>";
echo "<td>Nama</td>";
echo "<td>Email</td>";
echo "<td>Telepon</td>";
echo "<td>Jenis Kelamin</td>";
echo "<td>Tanggal Lahir</td>";
echo "<td>Action</td>";
echo "</tr>";
while($baris = mysqli_fetch_array($res)) {
    $id = $baris['id'];
    echo "<tr>";
    echo "<td>" . $id . "</td>";
    echo "<td>" . $baris['nama'] . "</td>";
    echo "<td>" . $baris['email'] . "</td>";
    echo "<td>" . $baris['tel'] . "</td>";
    echo "<td>" . $baris['jenis'] . "</td>";
    echo "<td>" . $baris['tgl_lahir'] . "</td>";
    echo '<td><a href="delete.php?id='.$id.'">Delete</a><a href="edit.php?id='.$id.'"> Edit</a></td>'; 
    echo "</tr>";
}
echo "</table>";
echo "</center> <hr>";
echo '<center><a href="form.html" ><button class="button">TAMBAH</button></a></center>';
mysqli_close($link);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>BUKU TELEPON : DAFTAR KONTAK</title>
</head>
<body>

</body>
</html>