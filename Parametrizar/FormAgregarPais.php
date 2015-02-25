<html>
	<head>
		<script Language="JavaScript">
				function validar(formulario) {
					if (formulario.Pais.value.length < 1)
					{
						alert("Por favor no deje en blanco el pais a agregar");
						formulario.Pais.focus()
						return (false);
					}
				}
		</script>
	<title> Agregar Pais </title>
	<body>
	<form method="POST" name="registro" onSubmit="return validar(this)" action="AgregarPais.php">
    <BODY bgcolor="#cccccc">
		<h1> <CENTER> SISTEMA REGISTRO PROFESIONALES </center></h1> 
		<table>
		<br>
		<br>
		<br>
		<br>
		<br>
		<table border="2" cellpadding="3" cellspacing="0" align="center" valign="center">
			<tr> <th colspan="3">Agregar Pais</th> </tr>
			<tr> <td> Pais <input type="text" name="Pais" id="Pais"> </td>
			<tr> <th colspan="3"><input type="submit" value="ENVIAR" name="ok" id="ok"></th></tr>
			<th colspan="3"><a href="../Principal.html"target="blank"><img src="../Imagenes/atras.jpg"></a> </th></tr>
		</table>
		<body  onload="document.getElementById('Pais').focus()">  
	</body>
</html>


