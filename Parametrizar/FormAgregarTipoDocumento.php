<html>
	<head>
		<script Language="JavaScript">
				function validar(formulario) {
					if (formulario.TipoDoc.value.length < 1)
					{
						alert("Por favor no deje en blanco el Tipo de Documento a agregar");
						formulario.TipoDoc.focus()
						return (false);
					}
				}
		</script>
	<title> Agregar Tipo Documento </title>
	<body>
	<form method="POST" name="registro" onSubmit="return validar(this)" action="AgregarTipoDocumento.php">
    <BODY bgcolor="#cccccc">
		<h1> <CENTER> SISTEMA REGISTRO PROFESIONALES </center></h1> 
		<table>
		<br>
		<br>
		<br>
		<br>
		<br>
		<table border="2" cellpadding="3" cellspacing="0" align="center" valign="center">
			<tr> <th colspan="3">Agregar Tipo De Documento</th> </tr>
			<tr> <td> Tipo De Documento <input type="text" name="TipoDoc" id="TipoDoc"> </td>
			<tr> <th colspan="3"><input type="submit" value="ENVIAR" name="ok" id="ok"></th></tr>
			<th colspan="3"><a href="../Principal.html"target="blank"><img src="../Imagenes/atras.jpg"></a> </th></tr>
		</table>
		<body  onload="document.getElementById('TipoDoc').focus()">  
	</body>
</html>


