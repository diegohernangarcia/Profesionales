<?php 
	session_start();
	$consultaguardada=$_SESSION["consulta"];
	require("../../Funciones/Funciones.php");
	// GENERANDO LAS CONSULTAS
	require("../../Funciones/UsarGestion.php");
	// Creo Consulta Seleccion
	$consulta=$consultaguardada;
	// Ejecuto la consulta de Seleccion
	//echo($consulta);
	$hacerconsulta=mysql_query($consulta,$manejador);
	$numeroerror=mysql_errno();
	$descripcionerror=mysql_error();
	$numeroderegistros=mysql_num_rows($hacerconsulta);
	if ($numeroderegistros==0) {
		include ("../ErrorSinResultados.php");
		die ;}
	$f = fopen("reporte.csv","w");
	$sep = ","; //separador	
	$linea = "Ciudad".$sep."Matricula".$sep."Apellido".$sep."Nombre".$sep."Tipo Documento".$sep."N° Documento".$sep."Domicilio".$sep."Titulo"."\n";
	fwrite($f,$linea);
	$contador=0;
	for ($contador;$contador<$numeroderegistros;$contador++){
			// Se obtienen los datos almacenados en el elemento cursor 
			$ciudad=mysql_result($hacerconsulta,$contador,"ciudad");
			DevuelvoLocalidad($ciudad,$Ciudad);	
			$matricula=mysql_result($hacerconsulta,$contador,"NumeroMatricula");
			$apellido=mysql_result($hacerconsulta,$contador,"Apellido");
			$nombre=mysql_result($hacerconsulta,$contador,"Nombre");
			$tipodocumento=mysql_result($hacerconsulta,$contador,"TipoDocumento");
			DevuelvoTipoDoc($tipodocumento,$Tipodocumento);
			$nrodocumento=mysql_result($hacerconsulta,$contador,"NumeroDocumento");
			$domicilio=mysql_result($hacerconsulta,$contador,"DomicilioActual");
			$titulo=mysql_result($hacerconsulta,$contador,"titulo");
			DevuelvoTitulo($titulo,$Titulo);
			$linea = $Ciudad.$sep.$matricula.$sep.$apellido.$sep.$nombre.$sep.$tipodocumento.$sep.$nrodocumento.$sep.$domicilio.$sep.$Titulo."\n";
			fwrite($f,$linea);
	}
    fclose($f);
	$file = "reporte.csv";
	header("Content-disposition: attachment; filename=$file");
	header("Content-type: application/octet-stream");
	readfile($file);
	
    
	
?>