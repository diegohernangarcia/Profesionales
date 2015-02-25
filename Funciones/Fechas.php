<?php 
// COMPRUEBA QUE LA FECHA SEA VALIDA
	function comprobar_fecha($fecha){
		if ($fecha) {
		return ("TRUE");
		} else {
			return ("FALSE");}
	}
	// CON EL NOMBRE DE UN MES SE DEVUELVE EL N° DE MES DEL CALENDARIO
	Function DevuelvoMes($cual,&$id){
		switch ($cual) {
			case "Enero" : $id=1;break;
			case "Febrero" : $id=2;break;
			case "Marzo" : $id=3;break;
			case "Abril" : $id=4;break;
			case "Mayo" : $id=5;break;
			case "Junio" : $id=6;break;
			case "Julio" : $id=7;break;
			case "Agosto" : $id=8;break;
			case "Septiembre" : $id=9;break;
			case "Octubre" : $id=10;break;
			case "Noviembre" : $id=11;break;
			case "Diciembre" : $id=12;break;
		}
		return $id;
	}
	//////////////////////////////////////////////////// 
//Convierte fecha de mysql a normal 
//////////////////////////////////////////////////// 
function cambiaf_a_normal2($fecha){ 
	error_reporting ( E_ERROR );
   	ereg( "([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})", $fecha, $mifecha); 
   	$lafecha=$mifecha[3]."/".$mifecha[2]."/".$mifecha[1]; 
   	return $lafecha; 
} 

//////////////////////////////////////////////////// 
//Convierte fecha de normal a mysql 
//////////////////////////////////////////////////// 
function cambiaf_a_mysql($fecha){
	error_reporting ( E_ERROR );
   	ereg( "([0-9]{1,2})/([0-9]{1,2})/([0-9]{2,4})", $fecha, $mifecha); 
   	$lafecha=$mifecha[3]."-".$mifecha[2]."-".$mifecha[1]; 
   	return $lafecha; 
} 	
/*
$fecha = checkdate (10,18,1985);
echo (comprobar_fecha($fecha)); // nos devolvera correcta 18-10-1985
$fecha = checkdate (2,29,1985); // nos devolvera incorrecta ya que no es un año bisiesto 29-2-1985
echo (comprobar_fecha($fecha)); */
?>