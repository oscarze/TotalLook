<?php

	$conexion=mysqli_connect('localhost','root','','pagina');

 ?>


<!DOCTYPE html>
<html lang="es">><!-- Inicio -->
<head><!--Colección de metadatos acerca del documento-->
	<title>mostrar datos</title>
	<link rel="stylesheet" href="css/estilos.css"><!--Estilo adjunto CSS-->
	<link rel="shortcut icon" href="img/minilogo.png" type="Logo de la pagina"><!--Imagen como logo de la web-->
</head>
<body><!--El contenido de la pagina con un color de fondo-->
<header class="headertabla">
<h1>Total Look Base de Datos </h1><!--Encabezado-->
<br><!--Salto de línea-->

	<table border="1" ><!--Apertura de una tabla-->
		<tr><!--Indica una fila de celdas de una tabla-->
			<td>id</td><!--Usada para definir una celda de una tabla-->
			<td>nombre</td>
			<td>email</td>
			<td>fecha_reg</td>
		</tr>

		<?php
		$sql="SELECT * from datos";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr><!--Indica una fila de celdas de una tabla-->
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['email'] ?></td>
			<td><?php echo $mostrar['fecha_reg'] ?></td>
		</tr>
	<?php
	}
	 ?>
	</table>
	</header>
</body><!--Fin del contenido de la pagina-->
</html>
