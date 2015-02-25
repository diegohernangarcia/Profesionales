<?php 
	// Se comprueba si existe la variable del nombre de usuario
	//if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    //echo 'Texto a enviar si el usuario pulsa el botón Cancelar';
    //exit;
	
	//Creamos el salto de linea
	define ("salto","<br>\n");
	// Establecemos la matriz de usuarios legitimos, En una situacion real, estos datos procederian de una base de datos
	$MatrizUsuarios=array ("dgarcia"=>"dgarcia","mmunoz"=>"mmunoz","test"=>"test");
	// Se crea una variable con el valor false, que se usara para comprobar si se produce alguna coincidencia con la lista de usuarios registrados
	$Autorizado=False;
	// Se comprueba si los datos introducidos cpm cada elemente de la matriz.
	// Si se produce alguna coincidencia se pone la variable $Autorizado en true y se abandona el bucle
	foreach ($MatrizUsuarios as $login=>$pw) {
		if ($login==$_SERVER['PHP_AUTH_USER'] || $pw==$_SERVER['PHP_AUTH_PW']) {
			$Autorizado=true;
			break;
		}
	}
	// Se comprueba si el usuario esta autorizado
	if ($Autorizado) {
		echo ("Bienvenido al Sistema De Registro De Profesionales");
		} else {
			echo ("No Estas autorizado a visitar este sitio");
	}
?>
		
		
	