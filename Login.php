<html>
	<head>
		<title>Sistema Registro Profesionales</title>
		<SCRIPT type="text/javascript" src="Mensajes/Alert/js/jquery.min.js"></SCRIPT>
		<SCRIPT type="text/javascript" src="Mensajes/Alert/js/jquery.easing.1.3.js"></SCRIPT>
		<SCRIPT type="text/javascript" src="Mensajes/Alert/js/alertbox.js"></SCRIPT>
		<LINK rel="stylesheet" type="text/css" media="all" href="Mensajes/Alert/js/style.css">
		<link rel="stylesheet" type="text/css" href="Alerts/dialog_box.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="Estilos/EstiloMensajes.css" >

		<script type="text/javascript" src="Alerts/dialog_box.js"></script>
      </head>
</html>
<?php 
	$Usuarios=$_POST["Usuario"];
	$Passwords=$_POST["Password"];
	// echo ("Resultado Login"."<br>");
	// echo ($Usuarios." ".$Passwords);
	$Usuarios= strtoupper ($Usuarios);
	$Passwords= strtoupper ($Passwords);
     ?>
     <script language="JavaScript">
       		
            var navegador = navigator.appName 
            if (navegador == "Microsoft Internet Explorer") 
                direccion=("Mensajes/Explorer.php");
			window.location=direccion; 
       </script>
    <?php
   // if ($Passwords=="" || $Passwords=="1234") {
	   $cuantos=strlen($Passwords);
    	if ($cuantos<5 && $cuantos !=0) {
		      	?>
            	<div class="alerta">La contraseña que esta utilizando en este momento es muy debil, por favor vaya al menu usuario - Modificar Contraseña para cambiar la misma</div>
        	 <?php
		    }
    //VERIFICO SI EL USUARIO Y CONTRASEÑA SON CORRECTOS EN LA BASE DE DATOS
	include("Funciones/UsarGestion.php");
	// Creo Consulta Seleccion
	$consulta="SELECT * FROM usuarios WHERE Nombre='".(($_POST["Usuario"]))."'" ;
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
	  Include ("Mensajes/ErrorMalLogin.php");
		die ;} 
	//echo ("CLAVE ".mysql_result($hacerconsulta,0,"Password")." USUARIO ".mysql_result($hacerconsulta,0,"Usuario"));
	if (mysql_result($hacerconsulta,0,"Password")==($Passwords)) {
	    //echo ("Login Correcto"); 
		$nivelusuario=mysql_result($hacerconsulta,0,"Nivel");
		session_start();
		$_SESSION["access"] = true;
		$_SESSION["nivel"]= $nivelusuario;
		$_SESSION["usuario"]=$Usuarios;
		$_SESSION["clavefloja"]="SI";
		require ("Principal.php");
		}
		  else {
		    require ("Mensajes/ErrorMalLogin.php");}
					    
?>
