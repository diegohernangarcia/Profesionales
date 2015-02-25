<html>
	<head>
		<script Language="JavaScript">
				function validar(formulario) {
					if (formulario.Depto.value.length < 1)
					{
						alert("Por favor no deje en blanco el departamento a agregar");
						formulario.Depto.focus()
						return (false);
					}
				}
		</script>
	<title> Agregar Departamento </title>
	<body>
	<!-- <form name="f_prof" id="f_prof" onsubmit="return Validar(this) action="AgregarDepartamento.php" method="post"> -->
    
     <form method="POST" name="registro" onSubmit="return validar(this)" action="AgregarDepartamento.php">
    
	<BODY bgcolor="#cccccc">
		<h1> <CENTER> SISTEMA REGISTRO PROFESIONALES </center></h1> 
		<table>
		<br>
		<br>
		<br>
		<br>
		<br>
		<table border="2" cellpadding="3" cellspacing="0" align="center" valign="center">
			<tr> <th colspan="3">Agregar Departamento</th> </tr>
			<tr> <td> Departamento <input type="text" name="Depto" id="Depto"> </td>
			<tr> <th colspan="3"><input type="submit" value="ENVIAR" name="ok" id="ok"></th></tr>
			<th colspan="3"><a href="../Principal.html"target="blank"><img src="../Imagenes/atras.jpg"></a> </th></tr>
			
		</table>
		<body  onload="document.getElementById('Depto').focus()">  
	</body>
</html>


