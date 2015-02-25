
<?php 
	if(!isset($_SESSION)) 
			{session_start(); 
	}  
	if($_SESSION["access"]==true) {
		//echo "OK, tienes el acceso permitido";
	}
	else {
		//echo "Error, no tienes permiso.";
		?>
			<script language="JavaScript" type="text/javascript">
			var pagina="../Mensajes/ErrorSesion.php"
			function redireccionar() 
				{		
				location.href=pagina
				} 
			setTimeout ("redireccionar()", 0);

		</script> 
	<!-- 	header ("Location: ../Mensajes/ErrorSesion.php"); -->
	<?php 
	}
?>