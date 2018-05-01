<?php 
include "connect.php";

$id = $_GET['id'];
$sql = "SELECT * "
     . "FROM bukutelepon"." WHERE id =".$id;
$res = mysqli_query($link, $sql);
$baris = mysqli_fetch_array($res);
mysqli_close($link);
 ?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css"></head>
    <title>BUKU TELEPON : EDIT KONTAK</title>
<html>
    <body>
        <form action="update.php" method="POST">
        	<center>
        		<b>EDIT KONTAK</b><br><hr>
            Nama : <input type="text" 
                    name="nama" value="<?php echo $baris['nama'];?>" required><br>
            Email : <input type="email" 
                    name="email" value="<?php echo $baris['email'];?>" required><br>
            Phone : <input type="tel" 
                    name="phone" value="<?php echo$baris['tel'];?>" required><br>

                    <?php if ($baris['jenis']=="Laki-Laki") {
                   	echo '<label for="jenis" >Jenis Kelamin   : 
                    <input type="radio" name="jenis" value="Laki-Laki" checked>'."Laki-Laki".'  
                    <input type="radio" name="jenis" value="Perempuan" >'."Perempuan".'</label>
                    ';
                    } else if ($baris['jenis']=="Perempuan") {
                    echo 'Jenis Kelamin   : 
                    <input type="radio" name="jenis" value="Laki-Laki" >'."Laki-Laki".'  
                    <input type="radio" name="jenis" value="Perempuan" checked>'."Perempuan".'</label>
                    ';
                    } else{
                    echo 'Jenis Kelamin   : 
                    <input type="radio" name="jenis" value="Laki-Laki" checked>'."Laki-Laki".'  
                    <input type="radio" name="jenis" value="Perempuan" >'."Perempuan".'</label>
                    ';

                    }
                    ?><br>
            Tanggal lahir : <input type="date" name="tgl" value="<?php echo$baris['tgl_lahir'];?>">

                     <br>
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <hr>
            <input type="submit" value="SIMPAN"></center>
        </form>
    </body>
</html>