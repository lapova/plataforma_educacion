<?php
	
	require_once 'config.php';

	$queryresultado = $pdo->query("SELECT * FROM course");
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
		<h2>Listado del curso</h2>
		<table class="table">
			<tr>
				<th>Id course</th>
				<th>Id teacher</th>
				<th>Name</th>
				<th>Themes</th>
				<th>Project</th>
			</tr>
			<?php foreach ($queryresultado as $row): ?>
			<tr>
				<td> <?= $row['Idcourse'] ?> </td>
				<td> <?= $row['Idteacher'] ?> </td>
				<td> <?= $row['name'] ?> </td>
				<td> <?= $row['themes'] ?> </td>
				<td> <?= $row['project'] ?> </td>
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