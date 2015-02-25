<?php 
	$servidormysql="localhost";
	$usuariomysql="wwwdata";
	$clavemysql="clavedata";
	$manejador=mysql_connect ($servidormysql,$usuariomysql,$clavemysql);
	$basededatos="profesionales";
	mysql_select_db($basededatos,$manejador);
	$numeroerror=mysql_errno();
	$descripcionerror=mysql_error();
	if ($numeroerror!=0) {
	    echo ("<br>".$numeroerror."<br>".$descripcionerror);}
?>
