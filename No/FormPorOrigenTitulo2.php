<?php 
	require("EstaSesion.php");
	echo("<br>");
	require ("Funciones.php");
	$arreglo=Array();
	DevuelvoArrayLocalidades($arreglo);
?>
<html>
	<head>
	</head>
	<body>
		<BODY bgcolor="D7E3F6">
	    <br>		
		<form name="f_prof" id="f_prof" action="PorOrigenTitulo2.php" method="post">
			<HR width=100% align="center">
			<p><center><b>Localidad Origen del Titulo a Consultar TESTING</b></center><br />
			<center><select name="entradaselect"></center>
			
			<?php
				foreach ($arreglo as $descripcion) {
				   echo("<option>$descripcion</option>");
				   echo ($descripcion);
				}
			?>   
			<center><input type="submit" value="ENVIAR CONSULTA" name="ok" id="ok"></center>
			<HR width=100% align="center">
		</form>			
	</body>
</html>