<?php 
    require("../Funciones/EstaSesion.php");
   	require("../Funciones/UsarGestion.php");
   	$deptonuevo= $_POST["Depto"];
    $deptonuevo= strtoupper ($deptonuevo);
    //echo ($deptonuevo);
   	// Creo Consulta Seleccion
	$consulta="SELECT * FROM departamentos WHERE Descripcion='".$deptonuevo."'" ;
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
	if ($numeroderegistros>0) {
	  //  echo ("No se encuentran datos de la consulta");
		include ("../Mensajes/YaEstaCargado.php");
		die ;}
        
   // GRABO EL DEPARTAMENTO EN LA BD
   	$consulta2="INSERT INTO departamentos (Descripcion) VALUES ('".$deptonuevo."');";
	//echo ("<br>".$consulta2);
	$hacerconsulta=mysql_query($consulta2,$manejador);
	$numeroerror=mysql_errno();
	$descripcionerror=mysql_error();
	//$numeroerror =0;
	if ($numeroerror !=0) {
		echo ("<br>".$numeroerror."<br>".$descripcionerror);}
		else
		 { require("../Mensajes/ParametroGrabadoOK.php");} 
    
    
?>
