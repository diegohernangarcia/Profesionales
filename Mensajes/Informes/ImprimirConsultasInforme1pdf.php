<?php 
	function Footer()
{
    // Go to 1.5 cm from bottom
    $this->SetY(-15);
    // Select Arial italic 8
    $this->SetFont('Arial','I',8);
    // Print centered page number
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}
	//echo ("IMPRIMIENDO LAS CONSULTAS"."<br>");
	$numerodepagina=1;
	session_start();
	$consultaguardada=$_SESSION["consulta"];
	//Llama al archivo que contiene la clase
	require("../../fpdf/fpdf.php");
	require ("../../Funciones/Funciones.php");
	$pdf= new FPDF("L","cm","A4");
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',10);
	
	// GENERO LA CABECERA DEL INFORMA
	$pdf->Image("logo.jpg",1,1,"jpg");
	$pdf->SetX(4);
	$pdf->Cell(25,0.5,"SISTEMA REGISTRO PROFESIONALES",0,1,"C",False);
	$pdf->SetY(5);
	$pdf->SetX(10);
	//$pdf->SetTextColor(255);
	//$pdf->SetFillColor(123);
	//$pdf->Cell(15,1,"PRUEBA",1,1,"C",True);
	$pdf-> SetX(1);
	$pdf-> SetY(2.5);
	$pdf->SetTextColor(255);
	$pdf->SetFillColor(123);
	$pdf->Cell(3,1,"Ciudad",1,0,"C",True);
	$pdf->Cell(2.2,1,"N° Matricula",1,0,"C",True);
	$pdf->Cell(4,1,"Apellido",1,0,"C",True);
	$pdf->Cell(4,1,"Nombre",1,0,"C",True);
	$pdf->Cell(3,1,"Tipo Doc.",1,0,"C",True);
	$pdf->Cell(3,1,"N° Documento",1,0,"C",True);
	$pdf->Cell(5,1,"Domicilio",1,0,"C",True);
	$pdf->Cell(4,1,"Titulo",1,0,"C",True);
	// GENERANDO LAS CONSULTAS
	require("../../Funciones/UsarGestion.php");
	// Creo Consulta Seleccion
	$consulta=$consultaguardada;
	// Ejecuto la consulta de Seleccion
	//echo($consulta);
	$hacerconsulta=mysql_query($consulta,$manejador);
	$numeroerror=mysql_errno();
	$descripcionerror=mysql_error();
	if ($numeroerror!=0) {
		//echo ("<br>".$numeroerror."<br>".$descripcionerror);
		}
		//Se obtiene la cantidad de registros de la consulta
	$numeroderegistros=mysql_num_rows($hacerconsulta);
	if ($numeroderegistros==0) {
		include ("../ErrorSinResultados.php");
		die ;}
	$contador=0;
	$lineas=0;
		for ($contador;$contador<$numeroderegistros;$contador++){
			// Se obtienen los datos almacenados en el elemento cursor 
			$lineas++;
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
			if ($lineas==16) {
				//$pdf->SetTextColor(1);
				//$pdf->SetXY(26,18.9);
				//$pdf->Cell(0,0,"PAGINA ".$numerodepagina,0,0,"C",False);
				$pdf->AddPage();
				$pdf->SetFont('Arial','B',10);
				// GENERO LA CABECERA DEL INFORMA
				//echo ($lineas."<br>");
				$lineas=1;
				$pdf->Image("logo.jpg",1,1,"jpg");
				$pdf->SetX(4);
				$pdf->Cell(25,0.5,"SISTEMA REGISTRO PROFESIONALES",0,1,"C",False);
				$pdf->SetY(5);
				$pdf->SetX(10);
				$pdf-> SetX(1);
				$pdf-> SetY(2.5);
				$pdf->SetTextColor(255);
				$pdf->SetFillColor(123);
				$pdf->Cell(3,1,"Ciudad",1,0,"C",True);
				$pdf->Cell(2.2,1,"N° Matricula",1,0,"C",True);
				$pdf->Cell(4,1,"Apellido",1,0,"C",True);
				$pdf->Cell(4,1,"Nombre",1,0,"C",True);
				$pdf->Cell(3,1,"Tipo Doc.",1,0,"C",True);
				$pdf->Cell(3,1,"N° Documento",1,0,"C",True);
				$pdf->Cell(5,1,"Domicilio",1,0,"C",True);
				$pdf->Cell(4,1,"Titulo",1,0,"C",True);
				// FIN CABECERA
				$numerodepagina++;							
			}	
			if ($lineas==1) {
				$pdf->SetTextColor(1);
				$pdf->SetXY(26,18.9);
				$pdf->Cell(0,0,"PAGINA ".$numerodepagina,0,0,"C",False);
			}
			$pdf->SetFont('Arial','B',8);
			$pdf->SetTextColor(1);
			$pdf->SetXY(1,2.5+$lineas);
			$pdf->SetFont('Arial','B',6);
			$pdf->Cell(3,1,$Ciudad,1,0,"L",False);
			$pdf->Cell(2.2,1,$matricula,1,0,"C",False);
			$pdf->Cell(4,1,$apellido,1,0,"L",False);
			$pdf->Cell(4,1,$nombre,1,0,"L",False);
			$pdf->Cell(3,1,$Tipodocumento,1,0,"C",False);
			$pdf->Cell(3,1,$nrodocumento,1,0,"C",False);
			$pdf->Cell(5,1,strtoupper($domicilio),1,0,"L",False);
			$pdf->Cell(4,1,$Titulo,1,0,"L",False);
			$pdf->SetFont('Arial','B',8);
		}
	$pdf->Output("Consulta.pdf","D");
?>