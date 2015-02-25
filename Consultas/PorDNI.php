 <?php 
	require("../Funciones/EstaSesion.php");
	require ("../Funciones/Funciones.php");
	$matricula=$_POST["Doc"];
	$consulta="";
	// Creo Consulta Seleccion	
	if ($matricula!="") {
		$consulta="SELECT * FROM registroprofesionales WHERE NumeroDocumento='".$matricula."';";}
		else {
			$consulta="SELECT * FROM registroprofesionales;";
			?>
			<script language="JavaScript" type="text/javascript">
			alert("Se mostraran todos los registros");
			</script>
			<?php }
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
