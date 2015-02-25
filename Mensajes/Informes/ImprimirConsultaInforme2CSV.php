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
	$linea = "Matricula".$sep."Libro".$sep."Folio".$sep."Expediente".$sep."Fecha Inscripcion".$sep."Apellido".$sep."Nombre".$sep."Tipo Documento".$sep."N° Documento".$sep."Titulo".$sep."Fecha Expedicion".$sep."\n";
	fwrite($f,$linea);
	$contador=0;
	for ($contador;$contador<$numeroderegistros;$contador++){
			// Se obtienen los datos almacenados en el elemento cursor 
			$matricula=mysql_result($hacerconsulta,$contador,"NumeroMatricula");
			$apellido=mysql_result($hacerconsulta,$contador,"Apellido");
			$nombre=mysql_result($hacerconsulta,$contador,"Nombre");
			$tipodocumento=mysql_result($hacerconsulta,$contador,"TipoDocumento");
			DevuelvoTipoDoc($tipodocumento,$Tipodocumento);
			$nrodocumento=mysql_result($hacerconsulta,$contador,"NumeroDocumento");
			$titulo=mysql_result($hacerconsulta,$contador,"titulo");
			DevuelvoTitulo($titulo,$Titulo);
			$libro=mysql_result($hacerconsulta,$contador,"Libro");
			$folio=mysql_result($hacerconsulta,$contador,"Folio");
			$expediente=mysql_result($hacerconsulta,$contador,"Expediente");
			$fechainscripcion=mysql_result($hacerconsulta,$contador,"FechaInscripcion");
			$fechaexpedicion=mysql_result($hacerconsulta,$contador,"FechaExpedicionTitulo");
		
		
			$linea =$matricula.$sep.$libro.$sep.$folio.$sep.$expediente.$sep.$fechainscripcion.$sep.$apellido.$sep.$nombre.$sep.$Tipodocumento.$sep.$nrodocumento.$sep.$Titulo.$sep.$fechaexpedicion."\n";
			//$Ciudad.$sep.$matricula.$sep.$apellido.$sep.$nombre.$sep.$tipodocumento.$sep.$nrodocumento.$sep.$domicilio.$sep.$Titulo."\n";
			fwrite($f,$linea);
	}
    fclose($f);
	$file = "reporte.csv";
	header("Content-disposition: attachment; filename=$file");
	header("Content-type: application/octet-stream");
	readfile($file);
	
    
	
?>