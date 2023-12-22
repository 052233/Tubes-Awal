<?php
require "../login/koneksi.php";
$_SESSION['destinasi']='Medan';
header("location:../contoh/paket/paket.php");
?>