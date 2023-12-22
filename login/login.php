<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="card fat">
		<div class="card-body mx-auto">
			<h4 class="card-title">Login</h4>
			<form method="POST" class="my-login-validation" novalidate="">
				<div class="form-group">
					<label for="email">Email</label>
					<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
					<div class="invalid-feedback">
						Email is invalid
					</div>
					</div>

					<div class="form-group">
						<label for="password">Password
						</label>
						<input id="password" type="password" class="form-control" name="password" required data-eye>
						<div class="invalid-feedback">
							Password is required
						</div>
					</div>

					<div class="form-group">
						<div class="custom-checkbox custom-control">
							<input type="checkbox" name="remember" id="remember" class="custom-control-input">
							<label for="remember" class="custom-control-label">Remember Me</label>
                        
				    	</div>
					</div>

					<div class="form-group m-0">
						<button type="submit" class="btn btn-primary btn-block" name="btnlogin">
							Login
						</button>
					</div>
					<div class="mt-4 text-center">
						Don't have an account? <a href="register.php">Create One</a>
					</div>
					</form>

					<?php
					require "koneksi.php";

					if(isset($_POST['btnlogin'])){
						$user_login = $_POST['email'];
						$user_pass = $_POST['password'];
						$hashedPassword = hash('sha256',$user_pass);

						$sql = "SELECT * FROM anggota WHERE email='$user_login' AND password='$hashedPassword'";
						$query = mysqli_query($koneksi, $sql);

						if(!$query){
							die("Query Gagal: ".mysqli_error($koneksi));
						}

						while($row = mysqli_fetch_array($query)){
							$user = $row['username'];
							$pass = $row['password'];
							$phone = $row['phone'];
							$email = $row['email'];
                            $role = $row['role'];
						}

								

						if($user_login==$email && $hashedPassword==$pass){
							$_SESSION['username'] = $user;
							$_SESSION['phone'] = $phone;
							$_SESSION['email'] = $email;
                            $_SESSION['role'] = $role;
                            if($role== "admin"){
							header("Location: manage/index.php"); 
                            }
                            elseif($role=="user"){
                                header("Location: ../contoh/index.html");
                            }
						}
						else if($user_login==$email && $user_pass!=$pass){
							echo"<h2>Password Salah</h2>";
						}

						else{
							echo"<b>User tidak ditemukan</b>";
						}

							while($row = mysqli_fetch_array($query));
						}
				?>
				</div>
			</div>
</body>
</html>