<?php

require "../../database/koneksi.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $gambar = $_FILES['gambar']['name'];
    $gambar_temp = $_FILES['gambar']['tmp_name'];
    $lokasi_simpan = 'direktori/gambar/'; // Sesuaikan dengan direktori tempat Anda menyimpan gambar
    move_uploaded_file($gambar_temp, $lokasi_simpan . $gambar);

    // Simpan nama file atau URL gambar ke dalam kolom gambar di database
    $query_update_gambar = "UPDATE packages SET gambar = '$gambar' WHERE id = '$row['id']";
    // Gantilah ID_PAKET_YANG_DIAKSES dengan ID paket yang sedang diakses atau diupdate
    $koneksi->query($query_update_gambar);

    echo "Gambar berhasil diunggah.";
}
?>
