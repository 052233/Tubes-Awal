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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="container1">
		<div style="width: 20rem">
			<h1>Register</h1>
			<form method="POST" >
				<div class="">
					<label for="email">Email</label>
					<input id="email" type="email" class="form-control" name="email" value="<?php echo isset($_SESSION['input_email']) ? $_SESSION['input_email'] : ''; ?>" required autofocus>
					<div class="error">
						<?php
								if ($_SERVER["REQUEST_METHOD"] == "POST") 
								if($resultEmail->num_rows > 0){
								echo"Email sudah terdaftar ";
						}
						?>
						</div>
					
					</div>

					<div class="">
						<label for="password">Password
						</label>
						<input id="password" type="password" minlength="8" class="form-control" name="password" required data-eye>
						
					</div>
					<div class="">
						<label for="confpassword">Confirm Password
						</label>
						<input id="confpassword" type="password" class="form-control" name="confpassword" required data-eye>
						<div class="error">
						<?php
						if ($_SERVER["REQUEST_METHOD"] == "POST")
							if($confirmPassword != $password && $password != ""){
							echo"Password tidak sama";	
							}
						?>
						</div>
					</div>
                    <div class="">
						<label for="username">Username
						</label>
						<input id="username" type="text" class="form-control" name="username" value="<?php echo isset($_SESSION['input_username']) ? $_SESSION['input_username'] : ''; ?>" required data-eye>
						<div class="error">
						<?php
								if ($_SERVER["REQUEST_METHOD"] == "POST") 
								if($resultUsername->num_rows > 0){
								echo"Username sudah digunakan";
						}
						?>
						</div>
					</div>
                    <div class="">
						<label for="phone">Phone Number
						</label>
						<input id="phone" type="text" class="form-control" name="phone" required data-eye value="<?php echo isset($_SESSION['input_phone']) ? $_SESSION['input_phone'] : ''; ?>">
					</div>
					<div class=" mt-3">
						<button type="submit" class="btn btn-primary btn-block" name="btnregis">
							Register
						</button>
					</div>
					<div class="mt-4 text-center">
						Already have an account? <a href="login.php">login</a>
					</div>
					</form>
				</div>
			</div>

</body>
</html>