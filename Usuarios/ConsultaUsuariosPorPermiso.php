<?php 
    require("../Funciones/EstaSesion.php");
	$nivelsesion=$_SESSION["nivel"];
	if ($nivelsesion != 3 ) {
			include ("../Mensajes/SinPermisosPagina.php");
		die();
	}
	$cualnivel=$_POST["entradaselect"];
	$nivelacceso=0;
	//echo($cualnivel."<br>");
	switch ($cualnivel) {
		case "Inicial: Solo Consultas" : $nivelacceso=1;break;
		case "Medio: Consultas y Altas" :$nivelacceso=2; break;
		case "Avanzado: Consulta, Altas, Manejo Usuarios" : $nivelacceso=3; break; 
		default : $nivelacceso=0;
	}
	//echo ($nivelacceso);
	// BUSCO LOS DATOS EN LA BASE DE DATOS
	require("../Funciones/UsarGestion.php");
	// Creo Consulta Seleccion
	$consulta="SELECT * FROM usuarios WHERE Nivel='".$nivelacceso."'" ;
	//echo ($consulta."<br>");
	// Ejecuto la consulta de Seleccion
	$hacerconsulta=mysql_query($consulta,$manejador);
	$numeroerror=mysql_errno();
	$descripcionerror=mysql_error();
	if ($numeroerror!=0) {
		echo ("<br>".$numeroerror."<br>".$descripcionerror);}
	//Se obtiene la cantidad de registros de la consulta
	$numeroderegistros=mysql_num_rows($hacerconsulta);
	//echo ($numeroderegistros);
	if ($numeroderegistros==0) {
	  //  echo ("No se encuentran datos de la consulta");
		include ("../Mensajes/ErrorSinResultados.php");
		die ;
				}
	//MUESTRO LOS DATOS DE LOS USUARIOS EN UNA TABLA
?>
<html>
	<body>
	<BODY bgcolor="D7E3F6">
	<center><table border="2" cellpadding="2" cellspaciong="0">
		<tr ><th colspan="3"> Consulta Por Permisos <?php echo ("<br>"."Con Nivel de Acceso: ".$cualnivel) ?></th></tr>
		<!-- <th colspan="3">    <a href="../Principal.html">Volver</a></th></tr> -->
		<tr bgcolor="#cccccc"><th> Nombre </th>
		<th> Apellido </th>
		<th> Nombre De Usuario </th>
		</tr>
		<?php 
			// Se crea bucle que se repetira tantas veces como elementos tenga la consulta
			$contador=0;
			for ($contador;$contador<$numeroderegistros;$contador++){
				// Se obtienen los datos almacenados en el elemento cursor 
				$NombreUsuario=mysql_result($hacerconsulta,$contador,"Name");
				$ApellidoUsuario=mysql_result($hacerconsulta,$contador,"Apellido");
				$User=mysql_result($hacerconsulta,$contador,"Nombre");
				?>
				<tr bgcolor="#D7E3F6"><td><?php echo ($NombreUsuario); ?> </td>
				<td><?php echo ($ApellidoUsuario); ?> </td>
				<td><?php echo ($User); ?> </td>
				<?php
			}
			?>
				<tr bgcolor="#FAFAFA"> <th colspan="23"><?php echo ("Cantidad Registros Encontrados :".$numeroderegistros); ?></th></tr>
				<tr bgcolor="#FAFAFA"> <th colspan="23">    <a href="../Principal.html">Volver</a></th></tr>
				
			</table>
			
	</body>		
</html>