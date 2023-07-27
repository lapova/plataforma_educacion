<?php
	require_once 'config.php';

	$resultado = false;

	if (!empty($_POST)){

	$Idcourse = $_POST['idcourse'];
	$Idteacher = $_POST['idteacher'];
	$Nombre = $_POST['nomcourse'];
	$Temas = $_POST['themes'];
	$Proyecto = $_POST['project'];
	

	$sql = "INSERT INTO course(Idcourse, Idteacher, name, themes, project) VALUES(:idcourse, :idteacher, :nomcourse, :themes, :project)";

	$query = $pdo->prepare($sql);

	
	$resultado = $query->execute(
		[
			'idcourse' =>  $Idcourse,
			'Idteacher' => $Idteacher,
			'nomcourse' => $Nombre,
			'themes' => $Temas,
			'project' => $Proyecto
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
		<h1>Registrar curso</h1>
		<?php

			if ($resultado){
				echo '<div class="alert alert-success">Exitoso</div>';

			}
		?>
		<form action="registrarCourse.php" method="post">
			<input type="text" name="idcourse" id="idcourse" placeholder="Id course">
			<br><br>
			<input type="text" name="idteacher" id="idteacher" placeholder="Id teacher">
			<br><br>
			<input type="text" name="nomcourse" id="nomcourse" placeholder="Nombre">
			<br><br>
			<input type="text" name="themes" id="themes" placeholder="Temas">
			<br><br>
			<input type="text" name="project" id="project" placeholder="Proyecto">
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