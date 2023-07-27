<?php
	
	require_once 'config.php';

	
	$queryresultado = $pdo->query("SELECT * FROM teacher");
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
		<h1>Listado del docente</h1>
		<table class="table">
			<tr>
				<th>Id teacher</th>
				<th>Name</th>
				<th>Avatar</th>
			</tr>
			<?php foreach ($queryresultado as $row): ?> 
			<tr>
				<td> <?= $row['Idteacher'] ?> </td>
				<td> <?= $row['name'] ?> </td>
				<td> <?= $row['avatar'] ?> </td>
			</tr>
			<?php endforeach; ?>
		</table>
	</div>
	<br><br><br><br><br>
	<footer>
		&copy; Design by, LV
	</footer>
</body>
</html>