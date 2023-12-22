<?php require "../login/koneksi.php" ;?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pembelian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>

<?php
    
    // Pastikan pengguna sudah login
    // session_start();
    // if (!isset($_SESSION['id'])) {
    //     // Redirect atau tindakan lain jika pengguna belum login
    //     header("Location: login.php");
    //     exit();
    // }

    // Ambil ID pengguna dari sesi
    $_SESSION['id'] = $row['id'];
    $id_pelanggan = $_SESSION['id'];

    // Query untuk mendapatkan informasi pengguna dari tabel pengguna
    $query_pengguna = "SELECT * FROM anggota WHERE id = $id_pelanggan";
    $hasil_pengguna = mysqli_query($koneksi, $query_pengguna);

    // Pastikan pengguna dengan ID tersebut ada
    if ($hasil_pengguna && mysqli_num_rows($hasil_pengguna) > 0) {
        $data_pengguna = mysqli_fetch_assoc($hasil_pengguna);

        // Informasi pengguna
        $nama_pengguna = $data_pengguna['nama'];
        $email_pengguna = $data_pengguna['email'];

        // Sekarang kita punya informasi pengguna, kita dapat melanjutkan dengan mendapatkan riwayat pembelian
        $query_riwayat_pembelian = "SELECT * FROM pesanan WHERE id_pelanggan = $id_pelanggan";
        $hasil_riwayat_pembelian = mysqli_query($koneksi, $query_riwayat_pembelian);

        // Tampilkan data dalam tabel HTML
        echo "<table>";
        echo "<thead>
            <tr>
                <th>ID Pembelian</th>
                <th>Nama</th>
                <th>Destinasi</th>
                <th>Total Harga</th>
            </tr>
        </thead>";
        echo "<tbody>";

        while ($data_pembelian = mysqli_fetch_assoc($hasil_riwayat_pembelian)) {
            echo "<tr>";
            echo "<td>{$data_pembelian['id']}</td>";
            echo "<td>$nama_pengguna</td>";
            echo "<td>{$data_pembelian['destinasi']}</td>";
            echo "<td>{$data_pembelian['cost']}</td>";
            // Kolom lain sesuai kebutuhan
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    } else {
        // Handle jika pengguna dengan ID tersebut tidak ditemukan
        echo "Pengguna tidak ditemukan.";
    }
?>

</body>

</html>