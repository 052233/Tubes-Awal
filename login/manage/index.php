<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Web</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <?php
    require "../koneksi.php";
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
        <a href="../logout.php"><button class="btn btn-danger mr-3">Logout</button></a>
        </div>
    </div>
    <div class="mx-auto" style="width: 15%">
    <h3 class="mb-3">
    <?php 
        echo"Halo, ";
        echo$_SESSION['username'];
    ?>
    </h3>
    <div>
        <a href="anggota.php"><button class="btn btn-primary mb-3">Daftar Pengguna</button></a>
    </div>
    <div>
        <a href="pesanan.php"><button class="btn btn-primary mb">Daftar Pesanan</button></a>
    </div>
    <div>
        <a href="paket.php"><button class="btn btn-primary mb">Daftar Paket</button></a>
    </div>
        
    </div>
</body>
</html>