<?php 
	header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");  
	header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");  
	header ("Cache-Control: no-cache, must-revalidate");  
	header ("Pragma: no-cache");  
	header ("Content-type: application/x-msexcel");  
	header ("Content-Disposition: attachment; filename=\"consulta.xls\"" );
 	session_start();
	$consultaguardada=$_SESSION["consulta"];
	require("../../Funciones/Funciones.php");
	
	echo "<table border=1>" ;
	/*echo "<tr><th> Estado </th><th> 2000  </th><th> 2001 </th><th> 2002 </th> </tr>";
	echo "<tr><td> Colima </td><td> 4.6  </td><td> 4.4 </td><td> 3.8 </td> </tr>";
	echo "<tr><td> Aguascalientes </td><td> 6.5  </td><td> 6.5 </td><td> 3.3 </td> </tr>";
	echo "<tr><td> Guerrero </td><td> 7.2  </td><td> 7.8 </td><td> 3.2 </td> </tr>";
	echo "<tr><td> Totales </td><td> =sum(b2:b4)  </td><td>  =c2+c3+c4 </td><td>  =sum(d2:d4) </td> </tr>";
	echo "</table>"; */
	
	
	// GENERANDO LAS CONSULTAS
	require("../../Funciones/UsarGestion.php");
	// Creo Consulta Seleccion
	$consulta=$consultaguardada;
	// Ejecuto la consulta de Seleccion
	//echo($consulta);
	$hacerconsulta=mysql_query($consulta,$manejador);
	$numeroerror=mysql_errno();
	$descripcionerror=mysql_error();
	$numeroderegistros=mysql_num_rows($hacerconsulta);
	if ($numeroderegistros==0) {
		include ("../ErrorSinResultados.php");
		die ;}
	echo ("<tr><th> Ciudad </th><th> Matricula </th><th> Apellido </th><th> Nombre </th> <th> Tipo Documento </th><th> Nro Documento </th><th> Domicilio </th><th> Titulo </th></tr>");
	//echo "Ciudad\tMatricula\tApellido\tNombre\tTipo Documento\tNro Documento\tDomicilio\tTitulo\t\n";
	$contador=0;
	for ($contador;$contador<$numeroderegistros;$contador++){
			// Se obtienen los datos almacenados en el elemento cursor 
			$ciudad=mysql_result($hacerconsulta,$contador,"ciudad");
			DevuelvoLocalidad($ciudad,$Ciudad);	
			$matricula=mysql_result($hacerconsulta,$contador,"NumeroMatricula");
			$apellido=mysql_result($hacerconsulta,$contador,"Apellido");
			$nombre=mysql_result($hacerconsulta,$contador,"Nombre");
			$tipodocumento=mysql_result($hacerconsulta,$contador,"TipoDocumento");
			DevuelvoTipoDoc($tipodocumento,$Tipodocumento);
			$nrodocumento=mysql_result($hacerconsulta,$contador,"NumeroDocumento");
			$domicilio=mysql_result($hacerconsulta,$contador,"DomicilioActual");
			$titulo=mysql_result($hacerconsulta,$contador,"titulo");
			DevuelvoTitulo($titulo,$Titulo);
			//$queimprimo=$Ciudad\$matricula\$apellido\$nombre\$Tipodocumento\$nrodocumento\$domicilio\$Titulo;
			//echo "<tr><th> Ciudad </th><th> Matricula </th><th> Apellido </th><th> Nombre </th> <th> Tipo Documento </th><th> Nro Documento </th><th> Domicilio </th><th> Titulo </th></tr>";
			?>
						<table border="1" cellpadding="2" cellspaciong="0"> 
						<th><?php echo $Ciudad; ?></b> </th>
						<th><?php echo ($matricula); ?> </th>
						<th><?php echo ($apellido); ?> </th>
						<th><?php echo ($nombre); ?> </th>
						<th><?php echo ($Tipodocumento); ?> </th>
						<th><?php echo ($nrodocumento); ?> </th>
						<th><?php echo (strtoupper($domicilio));?> </th>
						<th><?php echo ($Titulo);?> </th> </b>
						</table>
				
				
			<?php  }
?>