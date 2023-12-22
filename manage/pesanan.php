<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Web</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <?php
    require "../login/koneksi.php";
    if($_SESSION['role']=="admin"){
    }
    else{
        header("location: .../contoh/index.php");
    }
    
    ?>
</head>
<body>
 
    <div class="header mb-4">
        <div class="float-end">
        <a href="../../contoh/index.php"><button class="btn btn-primary">Main Web</button></a>
        <a href="../logout.php"><button class="btn btn-danger">Logout</button></a>
        </div>
    </div>
    <div class="mx-auto" style="width: 95%">
    <h2 class=>Daftar Pesanan</h2>
    
        <?php
        

        $query = "SELECT * FROM pesanan";
        $hasil=mysqli_query($koneksi,$query);
        echo "<table class='table table-bordered table-striped'>";
        echo "<tr><th>Id</th><th>Nama</th><th>Phone</th><th>Tgl Berangkat</th><th>Paket</th><th colspan='2'>Destinasi</th></tr>";
        foreach($hasil as $data){
            echo"<tr>";
            echo"<td>$data[id]</td>";
            echo"<td>$data[nama]</td>";
            echo"<td>$data[phone]</td>";
            echo"<td>$data[tglpergi]</td>";
            echo"<td>$data[paket]</td>";
            echo"<td>$data[destinasi]</td>";
            // hapus
            echo"<td>";
            echo"<form method='POST' onsubmit=\"return confirm('Apakah anda yakin ingin menghapus?')\">";
            echo"<input type='text' hidden name='id' value='$data[id]'>";
            echo"<button type='submit' name='btnhapus' class='btn btn-danger'>Hapus</button>";
            echo"</form>";
            echo"</td>";
             
        }
        echo"</table>";
        
        
        ?>
        <?php
            if (isset($_POST['btnhapus'])){
                $id = $_POST['id'];
                if($koneksi){
                    $query = "DELETE FROM pesanan WHERE id=$id ";
                    mysqli_query($koneksi,$query);
                    echo"<p class='alert alert-success'>";
                    echo"<b>Data Berhasil Dihapus</b>";
                    echo"</p>";
                }
                elseif($koneksi->connect_error){
                    echo"<p class='alert alert-danger text-center'>";
                    echo"<b>Data Gagal Dihapus</b>";
                    echo"Terjadi Kesalahan: ".$koneksi->connect_error;
                    echo"</p>";
                }
            }
        ?>
    </div>
</body>
</html>