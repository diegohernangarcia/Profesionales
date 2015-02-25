<html>
	<head>
	<title> Consulta Por Acta-Libro-Folio </title>
	<body>
	<form name="f_prof" id="f_prof" action="PorActaLibroFolio.php" method="post">
	<BODY bgcolor="#cccccc">
		<h1> <CENTER> SISTEMA REGISTRO PROFESIONALES </center></h1> 
		<table>
		<br>
		<br>
		<br>
		<br>
		<br>
		<table border="2" cellpadding="3" cellspacing="0" align="center" valign="center">
			<tr> <th colspan=3">Busqueda por Acta-Libro-Folio</th> </tr>
			<tr> <td> Acta <input type="text" name="Acta" id="Acta"> </td>
			<td> Libro <input type="text" name="Libro" id="Libro"> </td> 
			<td> Folio <input type="text" name="Folio" id="Folio"> </td> </tr>
			<tr> <th colspan=3"><input type="submit" value="ENVIAR" name="ok" id="ok"></th></tr>
			<th colspan="3"><a href="../Principal.html"target="blank"><img src="../Imagenes/atras.jpg"></a> </th></tr>
			
		</table>
		<body  onload="document.getElementById('Acta').focus()">  
	</body>
</html>

	