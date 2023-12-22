<?php
require "../../database/koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['title'];
    $cost = $_POST['cost'];
    $desc = $_POST['description'];

    $query = "INSERT INTO packages (title, cost, description) VALUES ('$judul', '$cost', '$desc')";


    if ($koneksi->query($query) === TRUE) {
        // Dapatkan ID yang baru saja di-generate oleh auto-increment
        $id = $koneksi->insert_id;

        // Lakukan proses upload gambar dan update kolom gambar
        $gambar = $_FILES['gambar']['name'];
        $gambar_temp = $_FILES['gambar']['tmp_name'];
        $lokasi_simpan = 'direktori/gambar/'; // Sesuaikan dengan direktori tempat Anda menyimpan gambar
        move_uploaded_file($gambar_temp, $lokasi_simpan . $gambar);

        // Update kolom gambar di database
        $query_update_gambar = "UPDATE packages SET gambar = '$gambar' WHERE id = $id";
        $koneksi->query($query_update_gambar);

        echo "Konten berhasil ditambahkan";
    } else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }
    if (isset($_FILES['gambar']) && !empty($_FILES['gambar']['name'])) {
        $gambar = $_FILES['gambar']['name'];
        $gambar_temp = $_FILES['gambar']['tmp_name'];
        $lokasi_simpan = 'direktori/gambar/'; // Sesuaikan dengan direktori tempat Anda menyimpan gambar
        move_uploaded_file($gambar_temp, $lokasi_simpan . $gambar);

        // Update kolom gambar di database
        $query_update_gambar = "UPDATE packages SET gambar = '$gambar' WHERE id = $id";
        $koneksi->query($query_update_gambar);

        echo "Konten berhasil ditambahkan";
    } else {
        echo "File gambar tidak terkirim.";
    }



    $koneksi->close();
}
?>


<?php


// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// $gambar_temp = $_FILES['gambar']['tmp_name'];
// $gambar_type = $_FILES['gambar']['type'];

// // Baca dan tampilkan gambar langsung di web
// $gambar_data = file_get_contents($gambar_temp);
// $gambar_base64 = 'data:' . $gambar_type . ';base64,' . base64_encode($gambar_data);

// // Tampilkan gambar menggunakan tag <img>
// // echo '<img src="' . $gambar_base64 . '" alt="Gambar">';

// // Jangan lakukan proses upload atau penyimpanan ke server
// }
?>
