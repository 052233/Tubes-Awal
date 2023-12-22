<?php
require"../login/koneksi.php";
$_SESSION['title']=$judul['title'];
header("location:../contoh/pesan.php");?>