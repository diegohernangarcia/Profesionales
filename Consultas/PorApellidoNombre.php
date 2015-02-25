 <?php 
	require("../Funciones/EstaSesion.php");
	require ("../Funciones/Funciones.php");
	$apellido=$_POST["Apellido"];
	$nombre=$_POST["Nombre"];
	$consulta="";
	// Creo Consulta Seleccion	
	// COMBINATORIA VERDAD 1
	if ($nombre!="" && $apellido!="") {
			$consulta="SELECT * FROM registroprofesionales WHERE Nombre LIKE '%".$nombre."%' AND Apellido LIKE '%".$apellido."%'";}
	// COMBINATORIA VERDAD 2
	if ($nombre!="" && $apellido=="") {
			$consulta="SELECT * FROM registroprofesionales WHERE Nombre LIKE '%".$nombre."%'";}
	// COMBINATORIA VERDAD 3
	if ($nombre=="" && $apellido!="") {
			$consulta="SELECT * FROM registroprofesionales WHERE Apellido LIKE '%".$apellido."%'";}
	// COMBINATORIA VERDAD 4
	if ($nombre=="" && $apellido==""){
			$consulta="SELECT * FROM registroprofesionales;";
			?>
			<script language="JavaScript" type="text/javascript">
			alert("Se mostraran todos los registros");
			</script>
			<?php }
	//echo $consulta;
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
	require ("OnScreen.php");
	?>
