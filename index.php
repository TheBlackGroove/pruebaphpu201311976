<!DOCTYPE html>
 	<html>
	<head>
		<title>UPC PHP</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	</head>
 <body>
 	<div class="container-fluid div-titulo" align="center">
 		<h1>Prueba</h1>
 		<h3>Alumno: Fabio Catriel Cruz Gonella</h3>
 	</div>
 	<div class="container" style="margin-top: 100px;" align="center">
 		<img src="../images/header.PNG"/>
 	</div>
 	<div class="container" align="center" >
		<table>
			<theader>
				<td>icono</td>
				<td>Codigo</td>
				<td>Nombre</td>
				<td>Descripcion</td>
			</theader>
			<tbody>
				<?php
				$servername = "us-cdbr-iron-east-03.cleardb.net";
				$username = "b74ba3320e82ec";
				$password = "2d194843";
				$dbname = "ad_bb6ddb2f34daf52";
				
				$conn = new mysqli($servername, $username, $password, $dbname);
				
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				$sql = "SELECT * from servicios";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {?>
					<?php echo "<tr>"; ?>				
					<?php echo "<td>", $row['imegen_servicio'], "</td>"; ?>
					<?php echo "<td>", $row['codigo_servicio'], "</td>"; ?>
					<?php echo "<td>", $row['nombre_servicio'], "</td>"; ?>
					<?php echo "<td>", $row['descripcion_servicio'], "</td>"; ?>
					<?php echo "</tr>"; ?>
					<?php }
						} 
						else {
							echo "0 results";
							  }
						$conn->close();?> 
			</tbody>
		</table>
	</div>
	<div class="container" align="center">
		<img src="../images/footer.PNG"/>
	</div>
 </body>
 </html>