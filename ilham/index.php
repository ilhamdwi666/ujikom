<!DOCTYPE html>
<html>
<head>
	<title>UJIKOM KASIR</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style = 'background:#004643;color:#fff;'>
	<div class="container">
		<div class="content">
			<div class="card mt-5">
				<div class="row">
					<div class="col-6">
						<div class="card-body">
							<h3><p class="text-center mt-5">Login Kasir</p></h3>
							<?php 
							if(isset($_GET['pesan'])){
								if($_GET['pesan']=="gagal"){
									echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
								}
							}
							?>
							<form method="post" action="cek_login.php">
								<div class="form-group">
									<label>Username</label>
									<input type="text" class="form-control" name="username" placeholder = 'Username' autofocus>
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" name="password" placeholder = 'Password' autofocus>
								</div>
								<div class="form-group mt-3">
									<button class="btn btn-primary form-control" type="submit">Login</button>
								</div>
							</form>
						</div>
					</div>
					<div class="col-6">
						<div class="card-body">
							<img src="kasir.png" width="500px	">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</body
