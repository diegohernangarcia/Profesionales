<?php 
	require("../Funciones/UsarGestion.php");
	$cualusuario=$_POST["queusuario"];
	$pass1=$_POST["Password"];
	$pass2=$_POST["Password2"];
	$tipo=$_POST["entradaselect"];
	$name= $_POST["nombre"];
	$apellido=$_POST["apellido"];
	$passmd5=($pass1);
	$usermd5=($cualusuario);
	//echo("password encriptada ".$passmd5."<br>");
	if ($cualusuario=="" || $pass1=="" || $pass2=="") {
		require("../Mensajes/FaltanCampos.php");
		}
	$nivel=0;		
	switch ($tipo) {
		case "Inicial: Solo Consultas" : $nivel=1; break;
		case "Medio: Consultas y Altas" : $nivel=2;  break;
		case "Avanzado: Consulta, Altas, Manejo Usuarios" : $nivel=3; break; 
		}
	if ($pass1!=$pass2)  {
	    require("../Mensajes/ClavesDistintas.php");
						}
	// VERIFICO SI EXISTE EL USUARIO
	require("../Funciones/EstaSesion.php");
	// Creo Consulta Seleccion
	$consulta="SELECT * FROM usuarios WHERE Nombre='".($cualusuario)."'" ;
	//echo ($consulta."<br>");
	// Ejecuto la consulta de Seleccion
	$hacerconsulta=mysql_query($consulta,$manejador);
	$numeroerror=mysql_errno();
	$descripcionerror=mysql_error();
	if ($numeroerror !=0) {
		echo ("<br>".$numeroerror."<br>".$descripcionerror);}
	//Se obtiene la cantidad de registros de la consulta
	$numeroderegistros=mysql_num_rows($hacerconsulta);
	//echo ("Registros Encontrados :".$numeroderegistros."<br>");
	if ($numeroderegistros !=0) {
	  //  Ese usuario ya existe en la base
		require("../Mensajes/YaExisteUsuario.php");
		}
	// GRABAMOS EL NUEVO USUARIO
	$consulta2="INSERT INTO usuarios (Name,Apellido,Nombre,Password,Nivel) VALUES ('".$name."','".$apellido."','".$cualusuario."','".$passmd5."','".$nivel."');";
	//echo ("<br>".$consulta2);
	$hacerconsulta=mysql_query($consulta2,$manejador);
	$numeroerror=mysql_errno();
	$descripcionerror=mysql_error();
	//$numeroerror =0;
	if ($numeroerror !=0) {
		echo ("<br>".$numeroerror."<br>".$descripcionerror);}
		else
		 { require("../Mensajes/UsuarioGrabadoOk.php");}
?>