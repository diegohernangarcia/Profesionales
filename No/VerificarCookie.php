<?php 
	// Se Comprueba si existe la cookie
	if (!$_COOKIE["Profesionales"]) {
	// Si no existe, se determina como pagina lan destinada al error de ErrorCookie.php
		//$Pagina="ErrorCookie.php";
		header ("Location: index.html"); 
		} elseif ($_COOKIE["Profesionales"]!="OK") {
			$Pagina="ErrorCookie.php";
			header ("Location: index.html"); 
			}
			else {
				echo ("<br>");
				echo ("cookie ok");
			}
?>
<html>
	<head>
		<script language="javascript" type="text/javascript">
			// se redirige a la pagina seleccionada
			location.href="<?php echo($Pagina);?>";
		</script>
	</head>
</html> 	
		