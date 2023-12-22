<?php
require "../login/koneksi.php";


if(empty($_SESSION['username'])){
    header("location:login.php");
}
$nama=$_POST['nama'];
$phone=$_SESSION['phone'];
$tglpergi=$_POST['tglpergi'];
$destinasi=$_SESSION['destinasi'];
$sql="INSERT INTO pesanan(nama, phone, tglpergi, destinasi) VALUES('$nama','$phone','$tglpergi','$destinasi')";
if($koneksi->query($sql)===TRUE){
}
else{
    echo"Pesanan gagal disimpan";
}
echo $_SESSION['destinasi']
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Tiket</title>
    <link rel="stylesheet" href="pesan.css">
</head>
<body>
    <div class="container1">
        <h1>Pesanan telah terkirim!</h1>
        <button onclick="window.location.href='index.php'">Kembali</button>
        </div>
    </div>
</body>
</html>