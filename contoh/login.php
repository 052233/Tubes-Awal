<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="login.css">
	<title>Login</title>
</head>

<body>
	<div class="container1">
		<h1>Login</h1>
		<form method="POST">
			<fieldset>
				<legend></legend>
				<label for="">Email</label>
				:<input type="text" name="email" required id="myInput">
				<br>
				<label for="">Password</label>
				:<input type="password" name="password" required id="myInput">
				<?php
				require "../login/koneksi.php";

				if (isset($_POST['btnlogin'])) {
					$user_login = $_POST['email'];
					$user_pass = $_POST['password'];
					$hashedPassword = hash('sha256', $user_pass);

					$sql = "SELECT * FROM anggota WHERE email='$user_login'";
					$query = mysqli_query($koneksi, $sql);

					if (!$query) {
						die("Query Gagal: " . mysqli_error($koneksi));
					}

					while ($row = mysqli_fetch_array($query)) {
						$user = $row['username'];
						$pass = $row['password'];
						$phone = $row['phone'];
						$email = $row['email'];
						$role = $row['role'];
					}


					if ($query->num_rows > 0) {

						if ($user_login == $email && $hashedPassword == $pass) {
							$_SESSION['username'] = $user;
							$_SESSION['phone'] = $phone;
							$_SESSION['email'] = $email;
							$_SESSION['role'] = $role;
							if ($role == "admin") {
								header("Location: ../manage/index.php");
							} elseif ($role == "user") {
								header("Location: index.php");
							}
						} else if ($user_login == $email && $user_pass != $pass) {
							echo "<h2>Password Salah</h2>";
						}
					} else {
						echo "<br><b>User Tidak Ditemukan</b>";
					}

					while ($row = mysqli_fetch_array($query));
				}
				?>
				<button type="submit" class="btn btn-primary btn-block" name="btnlogin">
					Login
				</button>
			</fieldset>
		</form>
	</div>
</body>

</html>


