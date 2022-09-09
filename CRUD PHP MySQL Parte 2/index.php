<?php
	require('conexion.php');
	
	$query="SELECT noticia,id_noticia ,titulo , texto,fecha,imagen FROM usuarios ";
	
	$resultado=$mysqli->query($query);
	?>

<html>
	<head>
		<title>Noticia</title>
	</head>
	<body>
		
		<center><h1>Noticia</h1></center>
		
		<a href="nuevo.php">Nueva noticia</a>
		<p></p>
		<a href="buscar.php">Buscar noticia</a>
		<p></p>
		
		<table border=1 width="80%">
			<thead>
				<tr>
					<td><b>noticia</b></td>
					<td><b>id_noticia</b></td>
					<td><b>titulo</b></td>
					<td><b>texto</b></td>
					<td><b>fecha</b></td>
					<td><b>imagen</b></td>
					<td></td>
					<td></td>
				</tr>      /*if ($result = $mysqli->query($consulta))*/
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td><?php echo $row['noticia'];?>
							</td>
							<td><?php echo $row['id_noticia'];?>
							</td>
							<td><?php echo $row['titulo'];?>
							</td>
							<td><?php echo $row['texto'];?>
							</td>
							<td><?php echo $row['fecha'];?>
							</td>
							<td>
								<?php echo $row['imagen'];?>
							</td>
							<td>
								<a href="modificar.php?id_noticia=<?php echo $row['id_noticia'];?>">Modificar</a>
							</td>
							<td>
								<a href="eliminar.php?id_noticia=<?php echo $row['id_noticia'];?>">Eliminar</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</body>
	</html>	
	
