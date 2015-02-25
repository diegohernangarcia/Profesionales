
 <?php 
 	//require("../Funciones/EstaSesion.php");
	require ("../Funciones/Funciones.php");
	$matricula=$_POST["Doc"];
	$consulta="";
	// Creo Consulta Seleccion	
	if ($matricula!="") {
		$consulta="SELECT * FROM registroprofesionales WHERE NumeroDocumento='".$matricula."';";}
		else {
			$consulta="SELECT * FROM registroprofesionales;";
			?>
			<script language="JavaScript" type="text/javascript">
			alert("Se mostraran todos los registros");
			</script>
			<?php }
	require("../Funciones/UsarGestion.php");
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
	if ($numeroderegistros>1) {
	  //  echo ("No se encuentran datos de la consulta");
		include ("../Mensajes/VariosProfesionales.php");
		die ;
				}
	//require ("OnScreen.php");
    // Se obtienen los datos almacenados en el elemento cursor 
	$contador=0;
	$acta=mysql_result($hacerconsulta,$contador,"Acta");
	$libro=mysql_result($hacerconsulta,$contador,"Libro");
	$folio=mysql_result($hacerconsulta,$contador,"Folio");
	$expediente=mysql_result($hacerconsulta,$contador,"Expediente");
	$fechainscripcion=mysql_result($hacerconsulta,$contador,"FechaInscripcion");
	$apellido=mysql_result($hacerconsulta,$contador,"Apellido");
	$nombre=mysql_result($hacerconsulta,$contador,"Nombre");
	$lugarnacimiento=mysql_result($hacerconsulta,$contador,"LugarNacimiento");
	$fechanacimiento=mysql_result($hacerconsulta,$contador,"FechaNacimiento");
	$provincia=mysql_result($hacerconsulta,$contador,"Provincia");
	$pais=mysql_result($hacerconsulta,$contador,"Pais");
	$tipodocumento=mysql_result($hacerconsulta,$contador,"TipoDocumento");
	$numerodocumento=mysql_result($hacerconsulta,$contador,"NumeroDocumento");
	$domicilio=mysql_result($hacerconsulta,$contador,"DomicilioActual");
	$ciudadactual=mysql_result($hacerconsulta,$contador,"Ciudad");
	$departamento=mysql_result($hacerconsulta,$contador,"Departamento");
	$codigopostal=mysql_result($hacerconsulta,$contador,"CodigoPostal");
	$telefono=mysql_result($hacerconsulta,$contador,"Telefono");
	$titulo=mysql_result($hacerconsulta,$contador,"Titulo");
	$fechatitulo=mysql_result($hacerconsulta,$contador,"FechaExpedicionTitulo");
	$origentitulo=mysql_result($hacerconsulta,$contador,"OrigenTitulo");
	$localidadtitulo=mysql_result($hacerconsulta,$contador,"LocalidadTitulo");
	$provinciatitulo=mysql_result($hacerconsulta,$contador,"provinciatitulo");				
	DevuelvoLocalidad($lugarnacimiento,$desclugarnacimiento);	
	DevuelvoProvincia($provincia,$descprovincia);
	DevuelvoPais($pais,$descpais);
	DevuelvoTipoDoc($tipodocumento,$desctipodocumento);
	DevuelvoLocalidad($ciudadactual,$descciudadactual);	
	DevuelvoDepartamento($departamento,$descdepartamento);
	DevuelvoOrigenTitulo($origentitulo,$descorigentitulo);
	DevuelvoLocalidad($localidadtitulo,$desclocalidadtitulo);	
	DevuelvoProvincia($provinciatitulo,$descprovinciatitulo);
	DevuelvoTitulo($titulo,$desctitulo);	
	//require ("../Funciones/Funciones.php");
	?>
    
    <!-- PRESENTACION DE INFO EN PANTALLA -->
   
 <body>
	<!--	<form name="f_prof" method="POST" onsubmit="return Validar(this) action="Altas.php"> -->
        <form method="POST" name="registro" onSubmit="return validar(this)" action="Altas.php">


		<BODY bgcolor="#cccccc">
		<h1> <CENTER> REGISTRO DE PROFESIONALES DE TRABAJO SOCIAL RIO NEGRO</center></h1> 
		<HR>
		<table  width=100% border="0" cellpadding="2" cellspacing="0" align="center" valign="center">
			<tr> <th colspan=5">DATOS DE LA MATRICULA</th> </tr>
			<tr> <td > <P STYLE="border:1px groove #CCCCCC; background:#ece7e7; margin:5px 0px; padding;5px">Acta </td>
			<td><P STYLE="border:1px groove #CCCCCC; background:#999797; margin:5px 0px; padding;5px"><?php echo($acta); ?>  </p> </td>
			<td width=5%> </td> 
			<td><P STYLE="border:1px groove #CCCCCC; background:#ece7e7; margin:5px 0px; padding;5px"> Nro Matricula </td>
   			<td><P STYLE="border:1px groove #CCCCCC; background:#999797; margin:5px 0px; padding;5px"><?php echo($matricula); ?>  </p> </td>

			<tr> <td><P STYLE="border:1px groove #CCCCCC; background:#ece7e7; margin:5px 0px; padding;5px"> Folio </td>
			<td><P STYLE="border:1px groove #CCCCCC; background:#999797; margin:5px 0px; padding;5px"><?php echo($folio); ?> </td>
			<td > </td> 
			<td><P STYLE="border:1px groove #CCCCCC; background:#ece7e7; margin:5px 0px; padding;5px"> Expediente </td>
			<td><P STYLE="border:1px groove #CCCCCC; background:#999797; margin:5px 0px; padding;5px"><?php echo($expediente); ?></td> 
			<tr> <td><P STYLE="border:1px groove #CCCCCC; background:#ece7e7; margin:5px 0px; padding;5px"> Libro </td>
			<td><P STYLE="border:1px groove #CCCCCC; background:#999797; margin:5px 0px; padding;5px"><?php echo($libro); ?> </td> </td>
			<td><td><P STYLE="border:1px groove #CCCCCC; background:#ece7e7; margin:5px 0px; padding;5px"> Fecha Inscripcion </td>
            <td><P STYLE="border:1px groove #CCCCCC; background:#999797; margin:5px 0px; padding;5px"><?php echo(cambiaf_a_normal($fechainscripcion)); ?> </td> </td>
			
            </TABLE>
			<HR>
			<BODY bgcolor="#cccccc">
			<table  width=100% border="0" cellpadding="2" cellspacing="0" align="center" valign="center">
			<tr> <th colspan=5">DATOS PERSONALES<BR></th> </tr> </td>
			<tr> <td> <P STYLE="border:1px groove #CCCCCC; background:#ece7e7; margin:5px 0px; padding;5px"> Apellido </td>
			<td><P STYLE="border:1px groove #CCCCCC; background:#999797; margin:5px 0px; padding;5px"><?php echo($apellido); ?>  </td>
			<td width=5%> </td> 
			<td> <P STYLE="border:1px groove #CCCCCC; background:#ece7e7; margin:5px 0px; padding;5px"> Nombres </td>
			<td><P STYLE="border:1px groove #CCCCCC; background:#999797; margin:5px 0px; padding;5px"><?php echo($nombre); ?>  </td> 
			
			<tr> <td> <P STYLE="border:1px groove #CCCCCC; background:#ece7e7; margin:5px 0px; padding;5px"> Fecha De Nacimiento </td>
			 <td><P STYLE="border:1px groove #CCCCCC; background:#999797; margin:5px 0px; padding;5px"><?php echo(cambiaf_a_normal($fechanacimiento)); ?> </td> </td>
			<td> </td> 
			<td> <P STYLE="border:1px groove #CCCCCC; background:#ece7e7; margin:5px 0px; padding;5px"> Domicilio </td>
			<td><P STYLE="border:1px groove #CCCCCC; background:#999797; margin:5px 0px; padding;5px"><?php echo($domicilio); ?> </td> 
			
			<tr> <td>  <P STYLE="border:1px groove #CCCCCC; background:#ece7e7; margin:5px 0px; padding;5px">Lugar De Nacimiento </td>
			<td><P STYLE="border:1px groove #CCCCCC; background:#999797; margin:5px 0px; padding;5px"><?php echo($desclugarnacimiento); ?> </td> 
			
			
			
			<td> </td> 
			<td>  <P STYLE="border:1px groove #CCCCCC; background:#ece7e7; margin:5px 0px; padding;5px">Localidad Residencia </td>
			<td>
			<P STYLE="border:1px groove #CCCCCC; background:#999797; margin:5px 0px; padding;5px"><?php echo($descciudadactual); ?>
			<tr> <td>  <P STYLE="border:1px groove #CCCCCC; background:#ece7e7; margin:5px 0px; padding;5px">Provincia </td>
			<td>
			<P STYLE="border:1px groove #CCCCCC; background:#999797; margin:5px 0px; padding;5px"><?php echo($descprovincia); ?>
			
			<td> </td> 
			<td> <P STYLE="border:1px groove #CCCCCC; background:#ece7e7; margin:5px 0px; padding;5px"> Departamento</td>
			<td>
			<P STYLE="border:1px groove #CCCCCC; background:#999797; margin:5px 0px; padding;5px"><?php echo($descdepartamento); ?>
			
			
			<tr> <td> <P STYLE="border:1px groove #CCCCCC; background:#ece7e7; margin:5px 0px; padding;5px"> Pais </td>
			<td>
			<P STYLE="border:1px groove #CCCCCC; background:#999797; margin:5px 0px; padding;5px"><?php echo($descpais); ?>
			
			
			<td> </td> 
			<td>  <P STYLE="border:1px groove #CCCCCC; background:#ece7e7; margin:5px 0px; padding;5px">Telefono </td>
			<td><P STYLE="border:1px groove #CCCCCC; background:#999797; margin:5px 0px; padding;5px"><?php echo($telefono); ?> </td> 
			
			<tr> <td>  <P STYLE="border:1px groove #CCCCCC; background:#ece7e7; margin:5px 0px; padding;5px">Tipo Documento </td>
			<td>
			<P STYLE="border:1px groove #CCCCCC; background:#999797; margin:5px 0px; padding;5px"><?php echo($desctipodocumento); ?>
			
			<td> </td> 
			<td>  <P STYLE="border:1px groove #CCCCCC; background:#ece7e7; margin:5px 0px; padding;5px">Nro Documento</td>
			<td><P STYLE="border:1px groove #CCCCCC; background:#999797; margin:5px 0px; padding;5px"><?php echo($numerodocumento); ?>  </td> 
			</table>
			<HR>
			
			
			
			
			<table  width=100% border="0" cellpadding="2" cellspacing="0" align="center" valign="center">
			<tr> <th colspan=6">DATOS DEL TITULO</th> </tr>
			<tr> <td><P STYLE="border:1px groove #CCCCCC; background:#ece7e7; margin:5px 0px; padding;5px"> Titulo</td>
			<td>
			<P STYLE="border:1px groove #CCCCCC; background:#999797; margin:5px 0px; padding;5px"><?php echo($desctitulo); ?>
			
			
			<td> <P STYLE="border:1px groove #CCCCCC; background:#ece7e7; margin:5px 0px; padding;5px">Origen </td>
			<td> 
			<P STYLE="border:1px groove #CCCCCC; background:#999797; margin:5px 0px; padding;5px"><?php echo($descorigentitulo); ?> 
			
			
			
			<tr><td> <P STYLE="border:1px groove #CCCCCC; background:#ece7e7; margin:5px 0px; padding;5px">Fecha Expedicion</td>
			<td>
			<P STYLE="border:1px groove #CCCCCC; background:#999797; margin:5px 0px; padding;5px"><?php echo(cambiaf_a_normal($fechatitulo)); ?>
			
			 <td> <P STYLE="border:1px groove #CCCCCC; background:#ece7e7; margin:5px 0px; padding;5px">Municipio</td>
			<td>
			<P STYLE="border:1px groove #CCCCCC; background:#999797; margin:5px 0px; padding;5px"><?php echo($desclocalidadtitulo); ?>
			
			
			<tr><td> <P STYLE="border:1px groove #CCCCCC; background:#ece7e7; margin:5px 0px; padding;5px">Provincia </td>
			<td>
			<P STYLE="border:1px groove #CCCCCC; background:#999797; margin:5px 0px; padding;5px"> <?php echo($descprovinciatitulo); ?>
			
			
			
			
			
			
			
		<!--	<tr> <th colspan=6"><input type="submit" value="ENVIAR" name="ok" id="ok"></th></tr>
			<th colspan="6"><a href="../Principal.html"target="blank"><img src="../Imagenes/atras.jpg"></a> </th></tr> -->
		</table>
		<HR>
		<CENTER>
        <input type="button" name="IMPRIMIR" value="Imprimir" onClick="window.print();" />
      

		<BR>
		<BR>
		<a href="../Principal.html"target="blank"><img src="../Imagenes/atras.jpg"></a>
		</CENTER>
		</form>
		<body  onload="document.getElementById('Acta').focus()">  
		</body>