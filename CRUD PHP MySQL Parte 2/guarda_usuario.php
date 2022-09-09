<?php 
	
	require('conexion.php');
	
	$noticia=$_POST['fecha'];
	$id_noticia=$_POST['id_noticia'];
	$titulo=$_POST['titulo'];
    $texto=$_POST['texto'];
	$fecha=$_POST['fecha'];
	$imagen=$_POST['imagen'];
	
	$query="INSERT INTO usuarios (noticia, id_noticia, titulo, texto, fecha, imagen) VALUES ('$noticia','$id_noticia','$titulo','$texto','$fecha','$imagen')";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Guardar noticia</title>
	</head>
	<body>
		<center>	
			
			<?php if($resultado>0){ ?>
				<h1>noticia Guardada</h1>
				<?php }else{ ?>
				<h1>Error al Guardar Noticia</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			<a input="index.php">Regresar</a>
			
		</center>
	</body>
	</html>	