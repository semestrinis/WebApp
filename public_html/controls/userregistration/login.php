<?php
	session_start();
?>
<html>
<head>
	<title> Prisijungimas ir Registracija </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
	<body>
		<div class="container">
			<div class="login-box">
			<div class="row">
			<div class="col-md-6 login-left">
				<h2> PRISIJUNGIMAS </h2>
				<form action="validation.php" method="post">
					<div class="form-group">
						<label>Vartotojo vardas</label>
						<input type="text" name="user" class="form-control" required>
					</div>

					<div class="form-group">
						<label>Slaptažodis</label>
						<input type="password" name="password" class="form-control" required>
					</div>

					<?php 
						$fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

						if (strpos($fullURL, "prisijungimas=blogas") == true) 
						{
							echo "<p class='eroras'>Blogi duomenys!</p>";
						}
					?>

					<button type="submit" class="btn btn-primary"> Prisijungti </button>
				</form>
			</div>

			<div class="col-md-6 login-right">
				<h2> REGISTRACIJA </h2>
				<form action="registration.php" method="post">
					<div class="form-group">
						<label>Vardas</label>
						<input type="text" name="FirstName" class="form-control" required>
					</div>

					<div class="form-group">
						<label>Pavardė</label>
						<input type="text" name="LastName" class="form-control" required>
					</div>

					<div class="form-group">
						<label>Vartotojo vardas</label>
						<input type="text" name="user" class="form-control" required>
					</div>

					<div class="form-group">
						<label>El. Paštas</label>
						<input type="text" name="Email" class="form-control" required>
					</div>

					<div class="form-group">
						<label>Slaptažodis</label>
						<input type="password" name="password" class="form-control" required>
					</div>

					<?php 
						$fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

						if (strpos($fullURL, "registracija=nesekminga") == true) 
						{
							echo "<p class='eroras'>Vartotojo vardas jau užimtas!</p>";
						}
					?>

					<button type="submit" class="btn btn-primary"> Registruotis </button>
				</form>
			</div>

			</div>

			</div>
		</div>
	</body>
<body>

</body>
</html>