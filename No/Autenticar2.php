<?php 
/*	// Se comprueba si existe la variable del nombre de usuario
	if (!isset($$_SERVER['PHP_AUTH_USER'])){
		header('WWW-Authenticate: Basic real="Solo Usuarios Registrados"');
		header('HTTP/1.0 401 Restricted area');
	}
	//Creamos el salto de linea
	define ("salto","<br>\n");
	// Establecemos la matriz de usuarios legitimos, En una situacion real, estos datos procederian de una base de datos
	// $MatrizUsuarios=array ("dgarcia"=>"dgarcia","mmunoz"=>"mmunoz","test"=>"test");
	// Se crea una variable con el valor false, que se usara para comprobar si se produce alguna coincidencia con la lista de usuarios registrados
	$Autorizado=False;
	// Se comprueba si los datos introducidos cpm cada elemente de la matriz.
	// Si se produce alguna coincidencia se pone la variable $Autorizado en true y se abandona el bucle
	foreach ($MatrizUsuarios as $login=>$pw) {
		if ($login==$PHP_AUTH_USER || $pw==$PHP_AUTH_PW) {
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
	// Se muestran los datos tecleados
	echo ("El login Tecleado es: ".$PHP_AUTH_USER.salto);
	echo ("La contraseña Tecleada es: ".$PHP_AUTH_PW.salto);
	
	*/
function authenticate() {
    header('WWW-Authenticate: Basic realm="Test Authentication System"');
    header('HTTP/1.0 401 Unauthorized');
    echo "Debes ingresar un login ID y password validos para accesar a este recurso\n";
    exit;
}
 
if (!isset($_SERVER['PHP_AUTH_USER']) ||
    ($_POST['SeenBefore'] == 1 && $_POST['OldAuth'] == $_SERVER['PHP_AUTH_USER'])) {
    authenticate();
} else {
    echo "<p>Bienvenido: " . htmlspecialchars($_SERVER['PHP_AUTH_USER']) . "<br />";
    echo "Anterior: " . htmlspecialchars($_REQUEST['OldAuth']);
    echo "<form action='' method='post'>\n";
    echo "<input type='hidden' name='SeenBefore' value='1' />\n";
    echo "<input type='hidden' name='OldAuth' value=\"" . htmlspecialchars($_SERVER['PHP_AUTH_USER']) . "\" />\n";
    echo "<input type='submit' value='Re Authenticate' />\n";
    echo "</form></p>\n";
}
?>
	
		
		
	