<?php
	
	require('conexion.php');
	
	$id_noticia=$_GET['id_noticia'];
	
	$query="SELECT noticia, id_noticia, titulo, texto, fecha, imagen FROM usuarios WHERE id_noticia='$id_noticia'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();
	
?>

<html>
	<head>
		<title>Noticias</title>
	</head>
	<body>
		
		<center><h1>Modificar Noticias</h1></center>
		
		<form name="modificar_usuario" method="POST" action="mod_usuario.php">
			
			<table width="50%">
				<tr>
					<input type="hidden" name="id_noticia" value="<?php echo $id_noticia; ?>">
					<td width="20"><b>Noticia</b></td>
					<td width="30"><input type="text" name="noticia" size="25" value="<?php echo $row['noticia']; ?>" /></td>
				</tr>	
				<tr>
					<td><b>Id_Noticia</b></td>
					<td><input type="text" name="id_noticia" size="25" value="<?php echo $row['id_noticia']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Titulo</b></td>
					<td><input type="text" name="titulo" size="25" value="<?php echo $row['titulo']; ?>" /></td>
				</tr>
				
				<td><b>Texto</b></td>
					<td><input type="text" name="texto" size="25" value="<?php echo $row['texto']; ?>" /></td>
				</tr>
			<td><b>Fecha</b></td>
					<td><input type="date" name="fecha" size="25" value="<?php echo $row['fecha']; ?>" /></td>
				</tr>
		<td><b>Imagen</b></td>
					<td><input type="mediumblob" name="imagen" size="25" value="<?php echo $row['imagen']; ?>" /></td>
				</tr>
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>	
