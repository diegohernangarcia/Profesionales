<?php 
    require("../Funciones/EstaSesion.php");
	$nivelsesion=$_SESSION["nivel"];
	if ($nivelsesion != 3 ) {
			include ("../Mensajes/SinPermisosPagina.php");
		die();
	}
	$nombre=$_POST["nombre"];
	$apellido=$_POST["apellido"];	
	if ($nombre=="" && $apellido=="") {
	     /*require("../Mensajes/FaltaNombreApellido.html");
		 die();*/
		 $consulta="SELECT * FROM usuarios";
		 }
	// GENERO LA CONSULTA SEGUN LOS DATOS INGRESADOS
	if ($nombre=="" && $apellido!="") {
	    $consulta="SELECT * FROM usuarios WHERE Apellido LIKE '%".$apellido."%'";
		}
	if ($nombre!="" && $apellido=="") {
		    $consulta="SELECT * FROM usuarios WHERE Name LIKE '%".$nombre."%'";
		}
	if ($nombre!="" && $apellido!="") {
			    $consulta="SELECT * FROM usuarios WHERE Name LIKE '%".$nombre."%' AND Apellido LIKE '%".$apellido."%'";
			}
	// BUSCO LOS DATOS EN LA BASE DE DATOS
	require("../Funciones/UsarGestion.php");
	// Creo Consulta Seleccion
	//$consulta="SELECT * FROM usuarios WHERE name LIKE '*".$nombre."*' or apellido LIKE '*".$apellido."*'";
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
		<tr ><th colspan="4"> Consulta Por Nombre </th></tr>
		<!-- <th colspan="3">    <a href="../Principal.html">Volver</a></th></tr> -->
		<tr bgcolor="#cccccc"><th> Nombre </th>
		<th> Apellido </th>
		<th> Nombre De Usuario </th>
		<th> Nivel De Acceso</th>
		
		</tr>
		<?php 
			// Se crea bucle que se repetira tantas veces como elementos tenga la consulta
			$contador=0;
			for ($contador;$contador<$numeroderegistros;$contador++){
				// Se obtienen los datos almacenados en el elemento cursor 
				$NombreUsuario=mysql_result($hacerconsulta,$contador,"Name");
				$ApellidoUsuario=mysql_result($hacerconsulta,$contador,"Apellido");
				$User=mysql_result($hacerconsulta,$contador,"Nombre");
				$Nivel=mysql_result($hacerconsulta,$contador,"Nivel");
				switch ($Nivel) {
					case 1 : $nivel="Inicial - Solo Consultas" ; break;
					case 2 : $nivel="Medio - Consultas y Altas" ; break;
					case 3 : $nivel="Avanzado - Consulta, Altas, Manejo Usuarios" ; break; 
	}
				?>
				<tr bgcolor="#D7E3F6"><td><?php echo ($NombreUsuario); ?> </td>
				<td><?php echo ($ApellidoUsuario); ?> </td>
				<td><?php echo ($User); ?> </td>
				<td><?php echo ($nivel); ?> </td>
				
				<?php
			}
			?>
				<tr bgcolor="#FAFAFA"> <th colspan="23"><?php echo ("Cantidad Registros Encontrados :".$numeroderegistros); ?></th></tr>
				<tr bgcolor="#FAFAFA"> <th colspan="23">    <a href="../Principal.html">Volver</a></th></tr>
				
			</table>
			
	</body>		
</html>