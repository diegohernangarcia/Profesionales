<?php
	session_start();
	$consultaguardada=$_SESSION["borrar"];
	 require("../Funciones/UsarGestion.php");
	 // Ejecuto la consulta de Seleccion
	$hacerconsulta=mysql_query($consultaguardada,$manejador);
	$numeroerror=mysql_errno();
	$descripcionerror=mysql_error();
	if ($numeroerror!=0) {
		echo ("<br>".$numeroerror."<br>".$descripcionerror);}
	 else {
		 require ("../Mensajes/BorradoOk.php");}
?>
