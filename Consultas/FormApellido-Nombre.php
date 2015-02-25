<html>
	<head>
	<title> Consulta Por Nombre-Apellido </title>
	<body>
	<form name="f_prof" id="f_prof" action="PorApellidoNombre.php" method="post">
	<BODY bgcolor="#cccccc">
		<h1> <CENTER> SISTEMA REGISTRO PROFESIONALES </center></h1> 
		<table>
		<br>
		<br>
		<br>
		<br>
		<br>
		<table border="2" cellpadding="2" cellspacing="0" align="center" valign="center">
			<tr> <th colspan=2">Busqueda por Nombre-Apellido</th> </tr>
			<tr> <td> Nombre <input type="text" name="Nombre" id="Nombre"> </td>
			<td> Apellido <input type="text" name="Apellido" id="Apellido"> </td> 
			<tr> <th colspan=3"><input type="submit" value="ENVIAR" name="ok" id="ok"></th></tr>
			<th colspan="3"><a href="../Principal.html"target="blank"><img src="../Imagenes/atras.jpg"></a> </th></tr>
			
		</table>
		<body  onload="document.getElementById('Nombre').focus()">  
	</body>
</html>

	