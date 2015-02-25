<html>
	<head>
		<script Language="JavaScript">
				function validar(formulario) {
					if (formulario.Localidad.value.length < 1)
					{
						alert("Por favor no deje en blanco la localidad a agregar");
						formulario.Localidad.focus()
						return (false);
					}
				}
		</script>
	<title> Agregar Localidad </title>
	<body>
	<form method="POST" name="registro" onSubmit="return validar(this)" action="AgregarLocalidad.php">
    <BODY bgcolor="#cccccc">
		<h1> <CENTER> SISTEMA REGISTRO PROFESIONALES </center></h1> 
		<table>
		<br>
		<br>
		<br>
		<br>
		<br>
		<table border="2" cellpadding="3" cellspacing="0" align="center" valign="center">
			<tr> <th colspan="3">Agregar Localidad</th> </tr>
			<tr> <td> Localidad <input type="text" name="Localidad" id="Localidad"> </td>
			<tr> <th colspan="3"><input type="submit" value="ENVIAR" name="ok" id="ok"></th></tr>
			<th colspan="3"><a href="../Principal.html"target="blank"><img src="../Imagenes/atras.jpg"></a> </th></tr>
		</table>
		<body  onload="document.getElementById('Localidad').focus()">  
	</body>
</html>


