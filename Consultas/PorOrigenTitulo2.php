<?php
	require("../Funciones/EstaSesion.php");
	require ("../Funciones/Funciones.php");
	$ciudadabuscar= $_POST["entradaselect"];
	DevuelvoIdLocalidad($ciudadabuscar,$id);
	require("../Funciones/UsarGestion.php");
	// Creo Consulta Seleccion
	$consulta="SELECT * FROM registroprofesionales WHERE LocalidadTitulo='".$id."'" ;
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
	require ("OnScreen.php");	
?>
