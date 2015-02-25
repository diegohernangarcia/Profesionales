<html>
	<head>
		<script Language="JavaScript">
				function validar(formulario) {
					if (formulario.Titulo.value.length < 1)
					{
						alert("Por favor no deje en blanco el titulo a agregar");
						formulario.Titulo.focus()
						return (false);
					}
				}
		</script>
	<title> Agregar Titulo </title>
	<body>
	<form method="POST" name="registro" onSubmit="return validar(this)" action="AgregarTitulo.php">
    <BODY bgcolor="#cccccc">
		<h1> <CENTER> SISTEMA REGISTRO PROFESIONALES </center></h1> 
		<table>
		<br>
		<br>
		<br>
		<br>
		<br>
		<table border="2" cellpadding="3" cellspacing="0" align="center" valign="center">
			<tr> <th colspan="3">Agregar Titulo</th> </tr>
			<tr> <td> Titulo <input type="text" name="Titulo" id="Titulo"> </td>
			<tr> <th colspan="3"><input type="submit" value="ENVIAR" name="ok" id="ok"></th></tr>
			<th colspan="3"><a href="../Principal.html"target="blank"><img src="../Imagenes/atras.jpg"></a> </th></tr>
		</table>
		<body  onload="document.getElementById('Titulo').focus()">  
	</body>
</html>


