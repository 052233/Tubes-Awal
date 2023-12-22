
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="daftar.css">
</head>
<body>
    <div class="container1">
        <h1>Daftar</h1>
    <form method="POST" class="">

        <fieldset>
            <legend>Data Diri :</legend>
            <label for="">Username</label>
            :<input type="text" id="myInput" name="username" class="dd"><br>
            <label for="">Email</label>
            :<input type="text" id="myInput" name="email" class="dd"><br>
            <label for="">Telepon</label>
            :<input type="text" id="myInput" name="phone" class="dd"><br>
            <label for="">Password</label>
            :<input type="password" id="myInput" name="password" class="dd"><br>
            <label for="">Password</label>
            :<input type="password" id="myInput" name="confpassword" class="dd"><br>
        

            <br>
            <button type="submit">Log In</button>
        </fieldset>
    </form>
    </div>
    <?php
session_start();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		require_once "../login/koneksi.php";
        
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirmPassword = $_POST['confpassword'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$hashedPassword = hash('sha256', $password);
		$_SESSION['input_username'] = $username;
		$_SESSION['input_email'] = $email;
		$_SESSION['input_phone'] = $phone;
		$queryUsername = "SELECT * from anggota WHERE username='$username'";
		$resultUsername = $koneksi->query($queryUsername);

		$queryEmail = "SELECT * from anggota WHERE email='$email'";
		$resultEmail = $koneksi->query($queryEmail);

		if($resultEmail->num_rows > 0){
		}
		else if($confirmPassword != $password){
		}
		else if($resultUsername->num_rows > 0){
		}
		else{
			$sql = "INSERT INTO anggota(username, password, phone, email) VALUES('$username','$hashedPassword','$phone','$email')";
			if($koneksi->query($sql)===TRUE){
			  header("location: index.php");
			  unset($_SESSION['input_username']);
			  unset($_SESSION['input_email']);
			  unset($_SESSION['input_phone']);
			}
			else{
				echo"Registrasi Gagal";
			}
			
		}
	}
?>
</body>
</html>