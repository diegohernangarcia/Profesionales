<html>
	<head>
		<script Language="JavaScript">
				function validar(formulario) {
					if (formulario.Provincia.value.length < 1)
					{
						alert("Por favor no deje en blanco la provincia a agregar");
						formulario.Provincia.focus()
						return (false);
					}
				}
		</script>
	<title> Agregar Provincia </title>
	<body>
	<form method="POST" name="registro" onSubmit="return validar(this)" action="AgregarProvincia.php">
    <BODY bgcolor="#cccccc">
		<h1> <CENTER> SISTEMA REGISTRO PROFESIONALES </center></h1> 
		<table>
		<br>
		<br>
		<br>
		<br>
		<br>
		<table border="2" cellpadding="3" cellspacing="0" align="center" valign="center">
			<tr> <th colspan="3">Agregar Provincia</th> </tr>
			<tr> <td> Provincia <input type="text" name="Provincia" id="Provincia"> </td>
			<tr> <th colspan="3"><input type="submit" value="ENVIAR" name="ok" id="ok"></th></tr>
			<th colspan="3"><a href="../Principal.html"target="blank"><img src="../Imagenes/atras.jpg"></a> </th></tr>
		</table>
		<body  onload="document.getElementById('Provincia').focus()">  
	</body>
</html>


