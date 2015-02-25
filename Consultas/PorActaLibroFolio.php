<?php 
	require("../Funciones/EstaSesion.php");
	require ("../Funciones/Funciones.php");
	$acta=$_POST["Acta"];
	$libro=$_POST["Libro"];
	$folio=$_POST["Folio"];
    //echo($acta." ".$libro." ".$folio."<br>");
	$consulta="";
	// Creo Consulta Seleccion	
	// COMBINATORIA VERDAD 1
	if ($acta!="" && $libro!="" && $folio!="") {
			$consulta="SELECT * FROM registroprofesionales WHERE Acta='".$acta."' AND Libro='".$libro."' AND Folio='".$folio."';";}
	// COMBINATORIA VERDAD 2
	if ($acta!="" && $libro!="" && $folio=="") {
			$consulta="SELECT * FROM registroprofesionales WHERE Acta='".$acta."' AND Libro='".$libro."';";}
	// COMBINATORIA VERDAD 3
	if ($acta!="" && $libro=="" && $folio!="") {
			$consulta="SELECT * FROM registroprofesionales WHERE Acta='".$acta."' AND Folio='".$folio."';";}
	// COMBINATORIA VERDAD 4
	if ($acta!="" && $libro=="" && $folio=="") {
			$consulta="SELECT * FROM registroprofesionales WHERE Acta='".$acta."';";}
	// COMBINATORIA VERDAD 5
	if ($acta=="" && $libro!="" && $folio!="") {
			$consulta="SELECT * FROM registroprofesionales WHERE Libro='".$libro."' AND Folio='".$folio."';";}
	// COMBINATORIA VERDAD 6
	if ($acta=="" && $libro!="" && $folio=="") {
			$consulta="SELECT * FROM registroprofesionales WHERE Libro='".$libro."';";}
	// COMBINATORIA VERDAD 7
	if ($acta=="" && $libro=="" && $folio!="") {
			$consulta="SELECT * FROM registroprofesionales WHERE Folio='".$folio."';";}
	// COMBINATORIA VERDAD 8
	if ($acta=="" && $libro=="" && $folio==""){
			$consulta="SELECT * FROM registroprofesionales;";
			?>
			<script language="JavaScript" type="text/javascript">
			alert("Se mostraran todos los registros");
			</script>
			<?php }
	//echo $consulta;
	require("../Funciones/UsarGestion.php");
	// Ejecuto la consulta de Seleccion
	$hacerconsulta=mysql_query($consulta,$manejador);
	$numeroerror=mysql_errno();
	$descripcionerror=mysql_error();
	if ($numeroerror!=0) {
		echo ("<br>".$numeroerror."<br>".$descripcionerror);}
	//Se obtiene la cantidad de registros de la consulta
	$numeroderegistros=mysql_num_rows($hacerconsulta);
	//echo ($numeroderegistros);
	if ($numeroderegistros==0) {
	  //  echo ("No se encuentran datos de la consulta");
		include ("../Mensajes/ErrorSinResultados.php");
		die ;
				}
	require ("OnScreen.php");
	?>
