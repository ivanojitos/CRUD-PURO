<?php 
	
	require('conexion.php');
	
	$id_noticia=$_GET['id_noticia'];
	
	$query="DELETE FROM usuarios WHERE id_noticia='$id_noticia'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Eliminar Noticia</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h1>Noticia Eliminada</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar la Noticia</h1>
				
			<?php	} ?>
			<p></p>		
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
</html>