<?php 
   /*require("../Funciones/EstaSesion.php");
   $nivelacceso=($_SESSION["nivel"]);
   if ($nivelacceso !=3) {
		include ("../Mensajes/SinPermisosPagina.php");
		die();
		}
		else{
		//  echo ("OK TENES LOS PERMISOS");
		} */
?>

 <html>
	<head>
		<script Language="JavaScript">
			function validarNro(e) {
				var key;
				if(window.event) // IE
					{
					key = e.keyCode;
					}
					else if(e.which) // Netscape/Firefox/Opera
					{
					key = e.which;
					}
				if (key < 48 || key > 57)
					{
					return false;
					}
				return true;
			}
			function validar(formulario) {
				if (formulario.Acta.value.length < 1)
					{
						alert("El N° de  Acta es obligatorio");
						formulario.Acta.focus()
						return (false);
					}
				if (formulario.Folio.value.length < 1)
					{
						alert("El N° de Folio es obligatorio");
						formulario.Folio.focus()
						return (false);
					}
				if (formulario.Libro.value.length < 1)
					{
						alert("El N° de Libro es obligatorio");
						formulario.Libro.focus()
						return (false);
					}
				if (formulario.Matricula.value.length < 1)
					{
						alert("El N° de Matricula es obligatorio");
						formulario.Matricula.focus()
						return (false);
					}
				if (formulario.Expediente.value.length < 1)
					{
						alert("El N° de Expediente es obligatorio");
						formulario.Expediente.focus()
						return (false);
					}
				if (formulario.Apellido.value.length < 1)
					{
						alert("El Apellido es obligatorio");
						formulario.Apellido.focus()
						return (false);
					}
				if (formulario.Nombre.value.length < 1)
					{
						alert("El Nombre es obligatorio");
						formulario.Nombre.focus()
						return (false);
					}
				if (formulario.Domicilio.value.length < 1)
					{
						alert("El Domicilio es obligatorio");
						formulario.Domicilio.focus()
						return (false);
					}
				if (formulario.NroDoc.value.length < 1)
					{
						alert("El Numero de Documento es obligatorio");
						formulario.NroDoc.focus()
						return (false);
					}
				}
			
		</script>
		<title> Alta de Profesionales</title>
		
		<body bgcolor="#cccccc">
        <form method="POST" name="registro" onSubmit="return validar(this)" action="Altas.php">

        <center><h1>REGISTRO DE PROFESIONALES DE TRABAJO SOCIAL RIO NEGRO</h1> </center>
		<!--<p>&larr; <a href="http://www.barelyfitz.com/projects/tabber/">Tabber Home</a></p> -->
			<hr>
			<h2>DATOS DE LA MATRICULA</h2>
			<table  width=100% border="0" cellpadding="2" cellspacing="0" align="center" valign="center">
				<tr> <td > Acta </td>
				<td><input type="text" name="Acta" id="Acta" SIZE=33> </td>
				<td width=5%> </td> 
				<td> N° Matricula </td>
				<td><input type="text" name="Matricula" id="Matricula" SIZE=33> </td> 
				<tr> <td> Folio </td>
				<td><input type="text" name="Folio" id="Folio" SIZE=33 > </td>
				<td > </td> 
				<td> Expediente </td>
				<td><input type="text" name="Expediente" id="Expediente" SIZE=33> </td> 
				<tr> <td> Libro </td>
				<td><input type="text" name="Libro" id="Libro" SIZE=33> </td> </td>
				<tr> <td> Fecha Inscripcion </td>
				<td>
				<input type="text" name="FechaInscripcion" id="FechaInscripcion" value="" style="width:210px"/> 
				<img src="ima/calendario.png" width="16" height="16" border="0" title="Fecha Inicial" id="lanzador">
				<script type="text/javascript"> 
 					  Calendar.setup({ 
  					  inputField     :    "FechaInscripcion",     // id del campo de texto 
   					  ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto 
    				  button     :    "lanzador"     // el id del botón que lanzará el calendario 
						}); 
				</script>
				
				 
			</TABLE>
			<hr>
			<h2>DATOS PERSONALES</h2>
			<table  width=100% border="0" cellpadding="2" cellspacing="0" align="center" valign="center">
			<tr> <td> Apellido </td>
			<td><input type="text" name="Apellido" id="Apellido" SIZE=33> </td>
			<td width=5%> </td> 
			<td> Nombres </td>
			<td><input type="text" name="Nombre" id="Nombre" SIZE=33> </td> 
			
			<tr> <td> Fecha De Nacimiento </td>
			<td>
				<input type="text" name="FechaNacimiento" id="FechaNacimiento" value="" style="width:210px"/> 
				<img src="ima/calendario.png" width="16" height="16" border="0" title="Fecha Inicial" id="lanzador2">
					<script type="text/javascript"> 
 					  Calendar.setup({ 
  					  inputField     :    "FechaNacimiento",     // id del campo de texto 
   					  ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto 
    				  button     :    "lanzador2"     // el id del botón que lanzará el calendario 
						}); 
				</script>
				
			
			
			<td> </td> 
			<td> Domicilio </td>
			<td><input type="text" name="Domicilio" id="Domicilio" SIZE=33> </td> 
			
			<tr> <td> Lugar De Nacimiento </td>
			<td> <!-- <input type="text" name="Nombre" id="Nombre"> </td> -->
			<?php 
				require ("../Funciones/Funciones.php");
				$arreglo=Array();
				DevuelvoArrayLocalidades($arreglo);
				?>
				<select name="LugarNacimiento" > 
				<?php
					foreach ($arreglo as $descripcion) {
						echo("<option>$descripcion</option>");
						echo ($descripcion);
					}
				?>   
			
			
			
			<td> </td> 
			<td> Localidad Residencia </td>
			<td>
			<?php 
				//require ("../Funciones/Funciones.php");
				$arreglo=Array();
				DevuelvoArrayLocalidades($arreglo);
				?>
				<select name="LugarResidencia" > 
				<?php
					foreach ($arreglo as $descripcion) {
						echo("<option>$descripcion</option>");
						echo ($descripcion);
					}
				?>  
			<tr> <td> Provincia </td>
			<td>
			<?php 
				//require ("../Funciones/Funciones.php");
				$arreglo=Array();
				DevuelvoArrayProvincias($arreglo);
				?>
				<select name="ProvinciaNacimiento" style="width:235px"> > 
				<?php
					foreach ($arreglo as $descripcion) {
						echo("<option>$descripcion</option>");
						echo ($descripcion);
					}
				?>  
			
			<td> </td> 
			<td> Departamento</td>
			<td>
			<?php 
				//require ("../Funciones/Funciones.php");
				$arreglo=Array();
				DevuelvoArrayDeptos($arreglo);
				?>
				<select name="Departamento" style="width:235px" > 
				<?php
					foreach ($arreglo as $descripcion) {
						echo("<option>$descripcion</option>");
						echo ($descripcion);
					}
				?>  
			
			
			<tr> <td> Pais </td>
			<td>
			<?php 
				//require ("../Funciones/Funciones.php");
				$arreglo=Array();
				DevuelvoArrayPaises($arreglo);
				?>
				<select name="PaisNacimiento" style="width:235px"> 
				<?php
					foreach ($arreglo as $descripcion) {
						echo("<option>$descripcion</option>");
						echo ($descripcion);
					}
				?>  
			
			
			<td> </td> 
			<td> Telefono </td>
			<td><input type="text" name="Telefono" id="Telefono" onkeypress="javascript:return validarNro(event)" SIZE=33> </td> 
			
			<tr> <td> Tipo Documento </td>
			<td>
			<?php 
				//require ("../Funciones/Funciones.php");
				$arreglo=Array();
				DevuelvoArrayTipoDocumento($arreglo);
				?>
				<select name="TipoDocumento"style="width:235px" > 
				<?php
					foreach ($arreglo as $descripcion) {
						echo("<option>$descripcion</option>");
						echo ($descripcion);
					}
				?>  
			
			<td> </td> 
			<td> N° Documento</td>
			<td><input type="text" name="NroDoc" id="NroDoc" onkeypress="javascript:return validarNro(event)" SIZE=33>  </td> 
			</table>
			<hr>
			<h2>DATOS DEL TITULO</h2>
			<table  width=100% border="0" cellpadding="2" cellspacing="0" align="center" valign="center">
			
			<tr> <td> Titulo</td>
			<td>
			<?php 
				//require ("../Funciones/Funciones.php");
				$arreglo=Array();
				DevuelvoArrayTitulos($arreglo);
				?>
				<select name="Titulo" style="width:235px"> > 
				<?php
					foreach ($arreglo as $descripcion) {
						echo("<option>$descripcion</option>");
						echo ($descripcion);
					}
				?>  
			
			
			<td> Origen </td>
			<td> 
			<?php 
				//require ("../Funciones/Funciones.php");
				$arreglo=Array();
				DevuelvoArrayOrigenTitulo($arreglo);
				?>
				<select name="OrigenTitulo" > 
				<?php
					foreach ($arreglo as $descripcion) {
						echo("<option>$descripcion</option>");
						echo ($descripcion);
					}
				?> 
			
			
			
			<td> Fecha Expedicion</td>
			<td>
				<input type="text" name="FechaExpedicion" id="FechaExpedicion" value="" style="width:190px" /> 
				<img src="ima/calendario.png" width="16" height="16" border="0" title="Fecha Inicial" id="lanzador3">
				<script type="text/javascript"> 
 					  Calendar.setup({ 
  					  inputField     :    "FechaExpedicion",     // id del campo de texto 
   					  ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto 
    				  button     :    "lanzador3"     // el id del botón que lanzará el calendario 
						}); 
				</script>
			
			
			<tr> <td> Municipio</td>
			<td>
			<?php 
				//require ("../Funciones/Funciones.php");
				$arreglo=Array();
				DevuelvoArrayLocalidades($arreglo);
				?>
				<select name="LocalidadTitulo" > 
				<?php
					foreach ($arreglo as $descripcion) {
						echo("<option>$descripcion</option>");
						echo ($descripcion);
					}
				?> 
			
			
			<td> Provincia </td>
			<td>
			<?php 
				//require ("../Funciones/Funciones.php");
				$arreglo=Array();
				DevuelvoArrayProvincias($arreglo);
				?>
				<select name="ProvinciaTitulo" style="width:355px"> > 
				<?php
					foreach ($arreglo as $descripcion) {
						echo("<option>$descripcion</option>");
						echo ($descripcion);
					}
				?>  
			
			
			<td> Pais</td>
			<td>
			<?php 
				//require ("../Funciones/Funciones.php");
				$arreglo=Array();
				DevuelvoArrayPaises($arreglo);
				?>
				<select name="PaisTitulo" style="width:207px"> 
				<?php
					foreach ($arreglo as $descripcion) {
						echo("<option>$descripcion</option>");
						echo ($descripcion);
					}
				?>  

			</td> 
			
			
			
			
		<!--	<tr> <th colspan=6"><input type="submit" value="ENVIAR" name="ok" id="ok"></th></tr>
			<th colspan="6"><a href="../Principal.html"target="blank"><img src="../Imagenes/atras.jpg"></a> </th></tr> -->
		</table>
		<hr>
	
		<CENTER>
		<input type="submit" value="ENVIAR" name="ok" id="ok">
		<BR>
		<BR>
		<a href="../Principal.html"target="blank"><img src="../Imagenes/atras.jpg"></a>
		</CENTER>
		</form>
        
		</body>
	</head>
	
</html>