<?php
	require("EstaSesion.php");
	echo("Por Origen Titulo Testing <br>");
	require ("Funciones.php");
	$ciudadabuscar= $_POST["entradaselect"];
	DevuelvoIdLocalidad($ciudadabuscar,$id);
	
	require("UsarGestion.php");
	// Creo Consulta Seleccion
	$consulta="SELECT * FROM registroprofesionales WHERE localidadtitulo='".$id."'" ;
	echo ($consulta."<br>");
	// Ejecuto la consulta de Seleccion
	$hacerconsulta=mysql_query($consulta,$manejador);
	$numeroerror=mysql_errno();
	$descripcionerror=mysql_error();
	if ($numeroerror!=0) {
		echo ("<br>".$numeroerror."<br>".$descripcionerror);}
	//Se obtiene la cantidad de registros de la consulta
	$numeroderegistros=mysql_num_rows($hacerconsulta);
	echo ($numeroderegistros);
?>
<html>
	<body>
	<BODY bgcolor="D7E3F6">
	<form name="f_prof" id="f_prof" action="MuestraIndividual.php" method="post">
	<table border="2" cellpadding="2" cellspaciong="0">
		<tr ><th colspan="24"> Consulta De Localidad Titulo</th></tr>
		<tr bgcolor="#FFFFFF"><th> Acta </th>
		<th> Libro </th>
		<th> Folio </th>
		<th> Expediente </th>
		<th> Fecha Inscripcion </th>
		<th> Apellido </th>
		<th> Nombre </th>
		<th> Lugar Nacimiento </th>
		<th> Fecha Nacimiento </th>
		<th> Provincia </th>
		<th> Pais </th>
		<th> Tipo Documento </th>
		<th> N° Documento </th>
		<th> Domicilio </th>
		<th> Ciudad </th>
		<th> Departamento </th>
		<th> Codigo Postal </th>
		<th> Telefono </th>
		<th> Titulo </th>
		<th> Fecha Exp. Titulo</th>
		<th> Origen Titulo </th>
		<th> Localidad Titulo </th>
		<th> Provincia Titulo</th>
		<th> Id </th>
		</tr>
		<?php 
			// Se crea bucle que se repetira tantas veces como elementos tenga la consulta
			$contador=0;
			for ($contador;$contador<$numeroderegistros;$contador++){
				// Se obtienen los datos almacenados en el elemento cursor 
				$id=mysql_result($hacerconsulta,$contador,"id");
				$acta=mysql_result($hacerconsulta,$contador,"acta");
				$libro=mysql_result($hacerconsulta,$contador,"libro");
				$folio=mysql_result($hacerconsulta,$contador,"folio");
				$expediente=mysql_result($hacerconsulta,$contador,"expediente");
				$fechainscripcion=mysql_result($hacerconsulta,$contador,"fechainscripcion");
				$apellido=mysql_result($hacerconsulta,$contador,"apellido");
				$nombre=mysql_result($hacerconsulta,$contador,"nombre");
				$lugarnacimiento=mysql_result($hacerconsulta,$contador,"lugarnacimiento");
				$fechanacimiento=mysql_result($hacerconsulta,$contador,"fechanacimiento");
				$provincia=mysql_result($hacerconsulta,$contador,"provincia");
				$pais=mysql_result($hacerconsulta,$contador,"pais");
				$tipodocumento=mysql_result($hacerconsulta,$contador,"tipodocumento");
				$numerodocumento=mysql_result($hacerconsulta,$contador,"numerodocumento");
				$domicilio=mysql_result($hacerconsulta,$contador,"DomicilioActual");
				$ciudadactual=mysql_result($hacerconsulta,$contador,"ciudad");
				$departamento=mysql_result($hacerconsulta,$contador,"departamento");
				$codigopostal=mysql_result($hacerconsulta,$contador,"codigopostal");
				$telefono=mysql_result($hacerconsulta,$contador,"telefono");
				$titulo=mysql_result($hacerconsulta,$contador,"titulO");
				$fechatitulo=mysql_result($hacerconsulta,$contador,"fechaexpediciontitulo");
				$origentitulo=mysql_result($hacerconsulta,$contador,"origentitulo");
				$localidadtitulo=mysql_result($hacerconsulta,$contador,"localidadTitulo");
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
				//echo($desclugarnaciomiento);	
				?>
				<tr bgcolor="#D7E3F6"><td><?php echo ($acta); ?> </td>
				<td><?php echo ($libro); ?> </td>
				<td><?php echo ($folio); ?> </td>
				<td><?php echo ($expediente); ?> </td>
				<td><?php echo (cambiaf_a_normal($fechainscripcion)); ?> </td>
				<td><?php echo ($apellido); ?> </td>
				<td><?php echo ($nombre); ?> </td>
				<td><?php echo ($desclugarnacimiento); ?> </td>
				<td><?php echo (cambiaf_a_normal($fechanacimiento)); ?> </td>
				<td><?php echo ($descprovincia); ?> </td>
				<td><?php echo ($descpais); ?> </td>
				<td><?php echo ($desctipodocumento); ?> </td>
				<td><?php echo ($numerodocumento); ?> </td>
				<td><?php echo ($domicilio); ?> </td>
				<td><?php echo ($descciudadactual); ?> </td>
				<td><?php echo ($descdepartamento); ?> </td>
				<td><?php echo ($codigopostal); ?> </td>
				<td><?php echo ($telefono); ?> </td>
				<td><?php echo ($desctitulo); ?> </td>
				<td><?php echo (cambiaf_a_normal($fechatitulo)); ?> </td>
				<td><?php echo ($descorigentitulo); ?> </td>
				<td><?php echo ($desclocalidadtitulo); ?> </td>
				<td><?php echo ($descprovinciatitulo); ?> </td>
				<td><?php echo ($id); ?> <center> <!-- <input type="submit" value="VER" name="ok" id="ok"></center> --></td>
				<?php
			}
			?>
				<tr bgcolor="#FAFAFA"> <th colspan="24"><?php echo ("Cantidad Registros Encontrados :".$numeroderegistros); ?></th></tr>
				
			</table>
	</body>		
</html>