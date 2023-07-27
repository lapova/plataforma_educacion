<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edmodo.</title>
	<link rel="icon"  type="imagen/jpg" href="imagen/edmodo.ico">
	<link rel="stylesheet" type="text/css" href="CSS/styleEdmodo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script type="text/javascript" src="JS/loginEdmodo.js"></script>
</head>
<body>
	<header>
		<div>
			<img src="imagen/edmodo_logo.jpg" width="250">
		</div>	
		<nav>
		<div id="buscar">
			<form>
				<input type="text" placeholder="Search" name="search" value="">
				<button onclick="">Search</button>
			</form>
		</div>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li>Listar</li>
				<ul>
					<li><a href="listarTeacher.php">Teacher</a></li>
					<li><a href="listarCourse.php">Course</a></li>
				</ul>
				<li>Registrar</li>
				<ul>
					<li><a href="registrarTeacher.php">Teacher</a></li>
					<li><a href="registrarCourse.php">Course</a></li>
				</ul>
			</ul>
		</nav>
	</header>
	<section class="main"> 
		<form>
			<label>Email adress</label>
			<br>
			<input type="Email" placeholder="Email@example.com" id="email" value="">
			<br><br>
			<label>Password</label>
			<br>
			<input type="Password" placeholder="Password" id="contraseña" value="">
			<br><br>
			<input type="checkbox" name="check">
			<label>Remember me</label>
			<br>
		</form>
		<button class="boton" onclick="edmodo()">Sign in</button>
		<br><br><br>
	<div>
		<a href="">New around here? Sign up</a>
		<br><br>
		<a href="">Forgot password?</a>
	</div>
	</section>
	<br><br>
	<footer>
		<div id="correo">
			<form>
				<input type="Email" placeholder="Correo electrónico" name="correo" value=""> <button onclick="">Suscríbase</button>
			</form>
		</div>
		<br><br>
		<div>
			&copy; Copyright 
		</div>
	</footer>
</body>
</html>