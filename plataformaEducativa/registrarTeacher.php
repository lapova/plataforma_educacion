<?php
	require_once 'config.php';

	$resultado = false;

	if (!empty($_POST)){

	$Idteacher = $_POST['idteacher'];
	$Nombre = $_POST['nomteacher'];
	$Avatar = $_POST['avatar'];


	$sql = "INSERT INTO teacher(Idteacher, name, avatar) VALUES(:idteacher, :nomteacher, :avatar)";

	$query = $pdo->prepare($sql);

	
	$resultado = $query->execute(
		[
			'idteacher' =>  $Idteacher,
			'nomteacher' => $Nombre,
			'avatar' => $Avatar
		]

	);

	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edmodo.</title>
	<link rel="icon" type="imagen/jpg" href="imagen/edmodo.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Registrar docente</h1>
		<?php

			if ($resultado){
				echo '<div class="alert alert-success">Exitoso</div>';

			}
		?>
		<form action="registrarTeacher.php" method="post">
			<input type="text" name="idteacher" id="idteacher" placeholder="Id docente">
			<br><br>
			<input type="text" name="nomteacher" id="nomteacher" placeholder="Nombre docente">
			<br><br>
			<input type="text" name="avatar" id="avatar" placeholder="Avatar">
			<br><br>
			<input type="submit" value="Registrar">
		</form>
	</div>
	<br><br><br><br><br>
	<footer>
		&copy; Design by, LV
	</footer>
</body>
</html>