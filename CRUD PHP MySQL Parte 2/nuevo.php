<html>
	<head>
		<title>Noticias</title>
	</head>
	<body>
		
		<center><h1>Nueva Noticia</h1></center>
		
		<form name="nuevo_usuario" method="POST" action="guarda_usuario.php">
			<table width="50%">
				<tr>
					<td width="20"><b>Noticia</b></td>
					<td width="30"><input type="text" name="notica" size="25" /></td>
				</tr>
				<tr>
					<td><b>Id_Noticia</b></td>
					<td><input type="text" name="id_noticia" size="25" /></td>
				</tr>
				<tr>
					<td><b>Titulo</b></td>
					<td><input type="text" name="titulo" size="25" /></td>
				</tr>
				<tr>
					<td><b>Texto</b></td>
					<td><input type="text" name="texto" size="25" /></td>
				</tr>
				<tr>
					<td><b>Fecha</b></td>
					<td><input type="date" name="fecha" size="25" /></td>
				</tr>
				<tr>
					<td><b>Imagen</b></td>
					<td><input type="mediumblob" name="imagen" size="25" /></td>
				</tr>
				
				<tr>
					<td colspan="2"><center><input type="submit" name="eviar" value="Registrar"  action="guarda_usuario.php" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>						