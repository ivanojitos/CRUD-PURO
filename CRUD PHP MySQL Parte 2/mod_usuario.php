<?php 
	
	require('conexion.php');
	
	$noticia=$_POST['noticia'];
	$id_noticia=$_POST['id_noticia'];
	$titulo=$_POST['titulo'];
    $texto=$_POST['texto'];
	$fecha=$_POST['fecha'];
	$imagen=$_POST['imagen'];
	
	
	$query="UPDATE usuarios SET noticia='$noticia', id_noticia='$id_noticia', titulo='$titulo', texto='$texto',fecha='$fecha', imagen='$imagen' WHERE id_noticia='$id_noticia'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Modificar Notici</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<h1>Noticia Modificada</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar Noticia</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
</html>
				
				