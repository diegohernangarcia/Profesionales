<?php 
	require("../Funciones/EstaSesion.php");
	echo("<br>");
	require ("../Funciones/Funciones.php");
	$arreglo=Array();
	DevuelvoArrayLocalidadesUnicas($arreglo);
?>
<html>
	<head>
	</head>
	<body>
		<BODY bgcolor="#cccccc">
	    <br>		
		<form name="f_prof" id="f_prof" action="PorOrigenTitulo2.php" method="post">
			<HR width=100% align="center">
			<p><center><b>Localidad Origen del Titulo a Consultar</b></center><br />
			<center><select name="entradaselect"></center>
			
			<?php
				foreach ($arreglo as $descripcion) {
				   echo("<option>$descripcion</option>");
				   echo ($descripcion);
				}
			?>   
			<center><input type="submit" value="ENVIAR CONSULTA" name="ok" id="ok"></center>
			<HR width=100% align="center">
			<br>
			<br>
			<center>  <a href="../Principal.html">Volver</a></center>
		</form>			
	</body>
</html>