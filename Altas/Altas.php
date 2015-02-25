<?php 
	$acta=strtoupper($_POST["Acta"]);
	$folio=strtoupper($_POST["Folio"]);
	$libro=strtoupper($_POST["Libro"]);
	$fechainscripcion=$_POST["FechaInscripcion"];
	$matricula=$_POST["Matricula"];
	$expediente=strtoupper($_POST["Expediente"]);
	$apellido=strtoupper($_POST["Apellido"]);
	$nombre=strtoupper($_POST["Nombre"]);
	$fechanacimiento=$_POST["FechaNacimiento"];
	$domicilio=strtoupper($_POST["Domicilio"]);
	$lugarnacimiento=$_POST["LugarNacimiento"];
	$localidadresidencia=$_POST["LugarResidencia"];
	$provincianacimiento=$_POST["ProvinciaNacimiento"];
	$departamento=$_POST["Departamento"];
	$tipodocumento=$_POST["TipoDocumento"];
	$nrodocumento=strtoupper($_POST["NroDoc"]);
	$telefono=strtoupper($_POST["Telefono"]);
	$paisnacimiento=$_POST["PaisNacimiento"];
	$titulo=$_POST["Titulo"];
	$origentitulo=$_POST["OrigenTitulo"];
	$fechaexpedicion=$_POST["FechaExpedicion"];
	$localidadtitulo=$_POST["LocalidadTitulo"];
	$provinciatitulo=$_POST["ProvinciaTitulo"];
	$paistitulo=$_POST["PaisTitulo"];
	/*echo ("<br>");
	echo ("Acta ".$acta."<br>");
	echo ("Folio ".$folio."<br>");
	echo ("Libro ".$libro."<br>");
	echo ("Matricula ".$matricula."<br>");
	echo ("Expediente ".$expediente."<br>"); 
	echo ("Fecha Nacimiento".$fechanacimiento."<br>");
	echo ("Fecha Expedicion".$fechaexpedicion."<br>");
	echo ("Fecha Inscripcion".$fechainscripcion."<br>");*/
/*	echo ("Fecha Inscripcion ".$fechainscripcion);
	echo ("<br>");
	echo("Fecha Expedicion ".$fechaexpedicion);
	echo ("<br>");
	echo("Fecha Nacimiento ".$fechanacimiento);
	echo ("<br>");
	echo("Apellido ".$apellido);
	echo ("<br>");
	echo("Nombre ".$nombre);
	echo ("<br>"); */
	require ("../Funciones/UsarGestion.php");
	require ("../Funciones/Funciones.php");
	require ("../Funciones/Fechas.php");
	$sqlfechainscripcion=cambiaf_a_mysql($fechainscripcion);
	$sqlfechaexpedicion=cambiaf_a_mysql($fechaexpedicion);
	$sqlfechanacimiento=cambiaf_a_mysql($fechanacimiento);
	DevuelvoIdLocalidad($lugarnacimiento,$Idlugarnacimiento);
	DevuelvoIdLocalidad($localidadresidencia,$Idlocalidadresidencia);
	DevuelvoIdProvincia($provincianacimiento,$Idprovincianacimiento);
	DevuelvoIdDepartamentos($departamento,$Iddepartamento);
	DevuelvoIdPais($paisnacimiento,$Idpaisnacimiento);
	DevuelvoIdTipoDoc($tipodocumento,$Idtipodocumento);
	DevuelvoIdTitulo($titulo,$Idtitulo);
	DevuelvoIdOrigenTitulo($origentitulo,$Idorigentitulo);
	DevuelvoIdLocalidad($localidadtitulo,$Idlocalidadtitulo);
	DevuelvoIdProvincia($provinciatitulo,$Idprovinciatitulo);
	DevuelvoIdPais($paistitulo,$Idpaistitulo);
	
	$consulta="INSERT INTO  registroprofesionales (NumeroMatricula,Acta,Libro,Folio,Expediente,FechaInscripcion";
	$consulta .=",Apellido,Nombre,LugarNacimiento,FechaNacimiento,Edad,Provincia,Pais,TipoDocumento,NumeroDocumento";
	$consulta .=",DomicilioActual,Ciudad,Departamento,CodigoPostal,Telefono,Titulo,FechaExpedicionTitulo,OrigenTitulo";
	$consulta .=",LocalidadTitulo,ProvinciaTitulo) VALUES ('$matricula','$acta','$libro','$folio','$expediente','$sqlfechainscripcion'";
	$consulta .=",'$apellido','$nombre','$Idlugarnacimiento','$sqlfechanacimiento','NULL','$Idprovincianacimiento','$Idpaisnacimiento'";
	$consulta .=",'$Idtipodocumento','$nrodocumento','$domicilio','$Idlocalidadresidencia','$Iddepartamento','NULL','$telefono','$Idtitulo'";
	$consulta .=",'$sqlfechaexpedicion','$Idorigentitulo','$Idlocalidadtitulo','$Idprovinciatitulo')";
	//echo ($consulta);
	
	// VERIFICO QUE EL PROFESIONAL NO ESTE CARGADO CON EL MISMO DNI Y TITULO
	$consulta2= "Select * From registroprofesionales WHERE NumeroDocumento='".$nrodocumento."' and Titulo='".$Idtitulo."'";
	$hacerconsulta=mysql_query($consulta2,$manejador);
	$numeroerror=mysql_errno();
	$descripcionerror=mysql_error();
	if ($numeroerror !=0) {
		echo ("<br>".$numeroerror."<br>".$descripcionerror);}
	//Se obtiene la cantidad de registros de la consulta
	$numeroderegistros=mysql_num_rows($hacerconsulta);
	//echo ("Registros Encontrados :".$numeroderegistros."<br>");
	if ($numeroderegistros !=0) {
	  //  Ese usuario ya existe en la base
		require("../Mensajes/YaExisteEseProfesional.php");
		}
	
	
	// GRABAMOS EL NUEVO PROFESIONAL
	$hacerconsulta=mysql_query($consulta,$manejador);
	$numeroerror=mysql_errno();
	$descripcionerror=mysql_error();
	//$numeroerror =0;
	if ($numeroerror !=0) {
		echo ("<br>".$numeroerror."<br>".$descripcionerror);}
		else
		 {require("../Mensajes/AltaGrabadaOk.php");
		// echo ("Grabado OK");
		 }	
?>