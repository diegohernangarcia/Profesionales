<?php 
	//session_start();
	$user=$_SESSION["usuario"];
	$quenivel=$_SESSION["nivel"];
	switch ($quenivel) {
		case 1 : $nivel="Inicial - Solo Consultas" ; break;
		case 2 : $nivel="Medio - Consultas y Altas" ; break;
		case 3 : $nivel="Avanzado - Consulta, Altas, Manejo Usuarios" ; break; 
	}
?>