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
//	$clavevieja=$_POST["clavevieja"];
	$clavenueva1=$_POST["clavenueva"];
	$clavenueva2=$_POST["clavenueva2"];	
	if ($clavenueva1=="" || $clavenueva2=="" || $usuarioacambiar=="") {
	    require("../Mensajes/FaltanCampos.php");
		die();
	}
    $clavenueva1=strtoupper($clavenueva1);
    $clavenueva2=strtoupper($clavenueva2);
	// VERIFICO SI EXISTE UN USUARIO CON ESE NOMBRE DE USUARIO Y CONTRASEÑabs
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
	if (1==1) {
	    //echo ("Login Correcto"); 
		$nivelusuario=mysql_result($hacerconsulta,0,"Nivel");
		//echo ("SI PODES CAMBIAR LA CLAVE");
		// CREO CONSULTA DE SELECCION
		$consulta="UPDATE usuarios SET Password='".($clavenueva1)."' WHERE Nombre='".($usuarioacambiar)."';";
		//echo ("<br>"."SU CONSULTA ".$consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($numeroerror !=0) {
			echo ("<br>".$numeroerror."<br>".$descripcionerror);}
			else {
				require("../Mensajes/PasswordCambiadaOk.html");}
		}
		  else {
		    Include ("../Mensajes/ErrorMalLogin.php");}
?>