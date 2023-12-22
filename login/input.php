<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <?php
        require_once "koneksi.php";
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $hashedPassword = hash('sha256', $password);

        $sql = "INSERT INTO anggota(username, password, phone, email) VALUES('$username','$hashedPassword','$phone','$email')";
        if($koneksi->query($sql)===TRUE){
              header("location: index.php");
        }
        else{header("location: gagal.php");
        }
        





    ?>
</body>
</html>