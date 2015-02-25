<?php 
   require("../Funciones/EstaSesion.php");
   $nivelacceso=($_SESSION["nivel"]);
   if ($nivelacceso !=3) {
		include ("../Mensajes/SinPermisosPagina.php");
		die();
		}
	//	else {
		 // echo ("Tenes Permisos");
		//  }
	$usuarioacambiar=$_POST["queusuario"];
	//$clavevieja=$_POST["clavevieja"];
	$permisos=$_POST["entradaselect"];
	if ($usuarioacambiar=="") {
	    require("../Mensajes/FaltanCampos.php");
		die();
	}
	// VERIFICO SI EXISTE UN USUARIO CON ESE NOMBRE DE USUARIO Y CONTRASEÑabs
	switch ($permisos) {
		case "Inicial: Solo Consultas" : $nivel=1; break;
		case "Medio: Consultas y Altas" : $nivel=2;  break;
		case "Avanzado: Consulta, Altas, Manejo Usuarios" : $nivel=3; break; 
		}
	require("../Funciones/UsarGestion.php");
	// Creo Consulta Seleccion
	$consulta="SELECT * FROM usuarios WHERE Nombre='".(($_POST["queusuario"]))."'" ;
	// Ejecuto la consulta de Seleccion
	$hacerconsulta=mysql_query($consulta,$manejador);
	$numeroerror=mysql_errno();
	$descripcionerror=mysql_error();
	if ($numeroerror!=0) {
		echo ("<br>".$numeroerror."<br>".$descripcionerror);}
	//Se obtiene la cantidad de registros de la consulta
	$numeroderegistros=mysql_num_rows($hacerconsulta);
	if ($numeroderegistros==0) {
	//  echo ("No se encuentran datos de la consulta");
	  Include ("../Mensajes/ErrorMalLogin.php");
		die ;} 
	if (true){
	//mysql_result($hacerconsulta,0,"Password")==($clavevieja)) {
	    //echo ("Login Correcto"); 
		$nivelusuario=mysql_result($hacerconsulta,0,"Nivel");
		//echo ("SI PODES CAMBIAR PERMISO");
		// CREO CONSULTA DE SELECCION
		$consulta="UPDATE usuarios SET Nivel='".$nivel."' WHERE Nombre='".($usuarioacambiar)."';";
		//echo ("<br>"."SU CONSULTA ".$consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($numeroerror !=0) {
			echo ("<br>".$numeroerror."<br>".$descripcionerror);}
			else {
				require("../Mensajes/PermisosCambiadosOk.html");}
		}
		  else {
		    Include ("../Mensajes/ErrorMalLogin.php");}
   
 ?>