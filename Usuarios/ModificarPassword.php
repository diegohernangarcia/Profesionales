<?php 
//   echo("LLEAL ".("LLEAL")."<br>");
 //  echo ("lleal ".("lleal")."<br>");
   require("../Funciones/EstaSesion.php");
   $usuarioacceso=($_SESSION["usuario"]);
   $clavenueva1=$_POST["clavenueva"];
	$clavenueva2=$_POST["clavenueva2"];	
    $clavenueva1=strtoupper($clavenueva1);
    $clavenueva2=strtoupper($clavenueva2);
//	echo ("Clave Nueva :".$clavenueva1." Usuario: ".$usuarioacceso);
	if ($clavenueva1=="" || $clavenueva2=="" || $usuarioacceso=="") {
	    require("../Mensajes/FaltanCampos.php");
		die();
	}
	if ($clavenueva1!=$clavenueva2) {
		require("../Mensajes/PasswordDistintas.php");
		die();
	}
	// VERIFICO SI EXISTE UN USUARIO CON ESE NOMBRE DE USUARIO Y CONTRASEÑabs
	require("../Funciones/UsarGestion.php");
	// Creo Consulta Seleccion
	$consulta="SELECT * FROM usuarios WHERE Nombre='".($usuarioacceso)."'" ;
	//echo("<br>".$consulta);
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
	//echo ("Login Correcto"); 
	$consulta="UPDATE usuarios SET Password='".($clavenueva1)."' WHERE Nombre='".($usuarioacceso)."';";
//	echo ("<br>"."SU CONSULTA ".$consulta);
	$hacerconsulta=mysql_query($consulta,$manejador);
	$numeroerror=mysql_errno();
	$descripcionerror=mysql_error();
	if ($numeroerror !=0) {
		echo ("<br>".$numeroerror."<br>".$descripcionerror);}
		else {
			require("../Mensajes/PasswordCambiadaOk.html");}
?>