<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="container-fluid w-25">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Update Data Akun</h1>
</div>
<div class="row">
    <?php
        require"../koneksi.php";
        $id = $_POST['id'];
        $query = "SELECT * FROM anggota WHERE id='$id'";
        $hasil = mysqli_query($koneksi,$query);
        foreach($hasil as $data){
    ?>
</div>
    <form method="POST" class="my-login-validation" novalidate="">
            <div class="form-group mb-3">
                <input hidden type="text" name="id" value="<?php echo $data ['id'];?>">
                <label for="username">Username</label>
                <input value="<?php echo $data ['username'];?>" id="username" type="text" class="form-control" name="username" required autofocus>

            </div>

            <div class="form-group mb-3">
                <label for="password">Password Baru</label>
                <input  id="password" type="password" class="form-control" name="password" required data-eye>
            </div>

            <div class="form-group mb-3">
                <label for="email">E-Mail</label>
                <input value="<?php echo $data ['email'];?>" id="email" type="email" class="form-control" name="email" required>
            </div>

            <div class="form-group mb-3">
                <label for="phone">No.HP</label><br>
                <input  value="<?php echo $data ['phone'];?>" type="text" name="phone" id="phone" class="form-control" ></input>
            </div>

            <div class="form-group m-0">
                <button name="btnUpdate" type="submit" class="btn btn-primary btn-block">
                    Update
                </button>
            </div>
        </form>
        <?php
        }
        ?>

        <?php
            if (isset($_POST['btnUpdate'])){
                $id = $_POST['id'];
                $password = $_POST['password'];
                $hashedPassword = hash('sha256', $password);
                $username = $_POST['username'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $query = "UPDATE anggota SET password='$hashedPassword',username='$username',email='$email',phone='$phone' WHERE id='$id'";
                $hasil = mysqli_query($koneksi,$query);
                echo "<p class='alert alert-success text-center'>";
                echo "<b>Data Berhasil Diupdate</b>";
                echo "</p>";
                $page = "anggota.php";
                $sec = "1";
                header("Refresh: $sec; url=$page");
            }
        ?>
</div>
</body>
</html>