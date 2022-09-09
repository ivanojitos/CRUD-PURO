<?php
	require('conexion.php');
	
	$usuario = $_POST['usuario'];
	
	$query="SELECT noticia, id_noticia, titulo,texto,fecha,imagen  FROM usuarios WHERE titulo LIKE '%$noticia%'";
	
	$resultado=$mysqli->query($query);
	
	$rows = $resultado->num_rows;
	
?>

<html>
	<head>
		<title>Noticias</title>
	</head>
	<body>
		
		<center><h1>Noticias</h1></center>
		
		<a href="nuevo.php">Nueva Noticia</a>
		<p></p>
		<a href="buscar.php">Buscar Noticia</a>
		<p></p>
		<a href="index.php">Inicio</a>
		<p></p>
		
		<?php if($rows > 0) { ?>
		
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
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td><?php echo $row['noticia'];?>
							</td>
							<td>
								<?php echo $row['id_noticia'];?>
							</td>
							<td><?php echo $row['titulo'];?>
							</td>
							<td>
								<?php echo $row['texto'];?>
							</td>
							<td><?php echo $row['fecha'];?>
							</td>
							<td>
								<?php echo $row['imagen'];?>
							</td>
							<td>
								<a href="modificar.php?id_noticia=<?php echo $row['id_noticia'];?>">Modificar</a>
							</td>
							<td>_
								<a href="eliminar.php?id_notiia=<?php echo $row['id_noticia'];?>">Eliminar</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
			
		<?php } else { ?>
		<h1>No se encontraron noticias</h1>
		<?php } ?>
		</body>
	</html>	
	
