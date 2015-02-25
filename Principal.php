<?php 
	require("Funciones/EstaSesion.php");
	// http://cssmenumaker.com/builder/step1.php
	session_start();
	if($_SESSION["nivel"]!=""){
			$nivelacceso=($_SESSION["nivel"]);
			}
	//echo ("NIVEL ACCESO :".$nivelacceso);
?>
 <html>
	<head>
 	     <link rel="stylesheet" type="text/css" media="screen" href="Estilos/EstiloMensajes.css">
		<title> Menu Principal Sistema Registro Profesionales </title>
		 <body>
		<?php 
			require("Mensajes/ImprimeUser-Nivel.php"); 
			
            ?>
         <!-- <BODY bgcolor="D7E3F6"> -->
         
		 <BODY bgcolor="#cccccc">
		 <p align=right> <b>Usuario : <?php echo (strtolower($user)." || Permisos : ".$nivel."(".$quenivel.")"); ?> </b> 
		 <br>
		 <!--  <script src="Fecha.js" type="text/javascript"></script> -->
		<!-- <HR width=100% align="center">
		 <p align=center>
		 <br>
		 <a href="Consultas/FormPorOrigenTitulo2.php">Consulta Por Titulo</a> 
		 <br>
		 <a href="Usuarios/FormNuevoUsuario.html">Nuevo Usuario</a>
		 <br>
		 <a href="Usuarios/FormModificarPassword.html">Modificar Password Usuario</a>
		 <br>
		 <a href="Usuarios/FormModificarPasswordModoAdministrador.html">Modificar Password Usuario Modo Administrador</a>
		 <br> 
		 <a href="Usuarios/FormModificarPermisos.html">Modificar Permisos</a>
		 <br>
		 <a href="Usuarios/FormConsultaUsuariosPorPermisos.html">Consulta Usuarios Por Tipo Permiso</a>
		 <br>
		 <a href="Usuarios/FormConsultaUsuariosPorNombre.html">Consulta Usuarios Por Nombre</a>
		 <br>
		 <a href="Mensajes/Salir.php">Salir</a> -->
         <?php 
			if ($nivelacceso ==1) {
						?>
						<html>
						<style media="all" type="text/css">@import "menu/menu_style.css";</style>
						<div class="menu">
						<ul>
						<li><a href="Principal.php" target="_self" >Consultas</a>
						<ul>
						<li><a href="Consultas/FormNroMatricula.php" target="_self">Numero Matricula</a></li>
						<li><a href="Consultas/FormActa-Libro-Folio.php" target="_self">Acta/Libro/Folio</a></li>
						<li><a href="Consultas/FormExpediente.php" target="_self">Expediente</a></li>
						<li><a href="Consultas/FormApellido-Nombre.php" target="_self">Apellido/Nombre</a></li>
						<li><a href="Consultas/FormLocalidadResidencia.php" target="_self">Localidad Residencia</a></li>
						<li><a href="Consultas/FormTitulo.php" target="_self">Titulo</a></li>
						<li><a href="Consultas/FormInstitucionTitulo.php" target="_self">Origen Titulo (Institucion)</a></li>
						<li><a href="Consultas/FormPorOrigenTitulo2.php" target="_self">Localidad Titulo</a></li>
						<li><a href="Consultas/FormPorDNI.php" target="_self">Numero Documento</a></li>
                        <li><a href="Consultas/FormBusquedaUnica.php" target="_self">Busqueda Unica</a></li>
						</ul>
						</li>
						<li><a href="Principal.php" target="_self" >Usuario</a>
						<ul>
						<li><a href="Usuarios/FormModificarPassword.html" target="_self">Modificar Contraseña</a></li>
						</ul>
						</li>
						<li><a href="Mensajes/Salir.php" target="_self" >Salir</a>
						<ul>
						<li><a href="Mensajes/Salir.php" target="_self">Salir</a></li>
						</ul>
						</li>
						</ul>
						</div>
						</html>
					<?php 
			}
			if ($nivelacceso ==2) {
						?>
						<html>
						<style media="all" type="text/css">@import "menu/menu_style.css";</style>
						<div class="menu">
						<ul>
						<li><a href="Principal.php" target="_self" >Consultas</a>
						<ul>
						<li><a href="Consultas/FormNroMatricula.php" target="_self">Numero Matricula</a></li>
						<li><a href="Consultas/FormActa-Libro-Folio.php" target="_self">Acta/Libro/Folio</a></li>
						<li><a href="Consultas/FormExpediente.php" target="_self">Expediente</a></li>
						<li><a href="Consultas/FormApellido-Nombre.php" target="_self">Apellido/Nombre</a></li>
						<li><a href="Consultas/FormLocalidadResidencia.php" target="_self">Localidad Residencia</a></li>
						<li><a href="Consultas/FormTitulo.php" target="_self">Titulo</a></li>
						<li><a href="Consultas/FormInstitucionTitulo.php" target="_self">Origen Titulo (Institucion)</a></li>
						<li><a href="Consultas/FormPorOrigenTitulo2.php" target="_self">Localidad Titulo</a></li>
						<li><a href="Consultas/FormPorDNI.php" target="_self">Numero Documento</a></li>
                        <li><a href="Consultas/FormBusquedaUnica.php" target="_self">Busqueda Unica</a></li>
						</ul>
						</li>
						<li><a href="Principal.php" target="_self" >Altas</a>
						<ul>
						<li><a href="Altas/FormAltas.php" target="_self">Altas</a></li>
						<li><a href="Altas/FormModificacion.php" target="_self">Modificacion</a></li>
						<li><a href="Bajas/FormBajas.php" target="_self">Bajas</a></li>
						</ul>
						</li>
						<li><a href="Principal.php" target="_self" >Usuario</a>
						<ul>
						<li><a href="Usuario/FormModificarPassword.html" target="_self">Modificar Contraseña</a></li>
						</ul>
						</li>
						<li><a href="Mensajes/Salir.php" target="_self" >Salir</a>
						</li>
						</ul>
						</div>
						</html>
					<?php 
			}
			if ($nivelacceso ==3) {
		?>
						<html>
						<style media="all" type="text/css">@import "menu/menu_style.css";</style>
						<div class="menu">
						<ul>
						<li><a href="Principal.php" target="_self" >Consultas</a>
						<ul>
						<li><a href="Consultas/FormNroMatricula.php" target="_self">Numero Matricula</a></li>
						<li><a href="Consultas/FormActa-Libro-Folio.php" target="_self">Acta/Libro/Folio</a></li>
						<li><a href="Consultas/FormExpediente.php" target="_self">Expediente</a></li>
						<li><a href="Consultas/FormApellido-Nombre.php" target="_self">Apellido/Nombre</a></li>
						<li><a href="Consultas/FormLocalidadResidencia.php" target="_self">Localidad Residencia</a></li>
						<li><a href="Consultas/FormTitulo.php" target="_self">Titulo</a></li>
						<li><a href="Consultas/FormInstitucionTitulo.php" target="_self">Origen Titulo (Institucion)</a></li>
						<li><a href="Consultas/FormPorOrigenTitulo2.php" target="_self">Localidad Titulo</a></li>
						<li><a href="Consultas/FormPorDNI.php" target="_self">Numero Documento</a></li>
                        <li><a href="Consultas/FormBusquedaUnica.php" target="_self">Busqueda Unica</a></li>
						</ul>
						</li>
						<li><a href="Principal.php" target="_self" >Altas</a>
						<ul>
						<li><a href="Altas/FormAltas.php" target="_self">Altas</a></li>
						<li><a href="Altas/FormModificacion.php" target="_self">Modificacion</a></li>
						<li><a href="Bajas/FormBajas.php" target="_self">Bajas</a></li>
						</ul>
						</li>
						<li><a href="Principal.php" target="_self" >Usuario</a>
						<ul>
						<li><a href="Usuarios/FormModificarPassword.html" target="_self">Modificar Contraseña</a></li>
						<li><a href="Usuarios/FormModificarPasswordModoAdministrador.html" target="_self">Modificar Contraseña Modo Admin</a></li>
						<li><a href="Usuarios/FormModificarPermisos.html" target="_self">Modificar Permisos Usuarios</a></li>
						<li><a href="Usuarios/FormNuevoUsuario.html" target="_self">Nuevo Usuario</a></li>
						<li><a href="Usuarios/FormConsultaUsuariosPorNombre.html" target="_self">Consulta Usuarios Por Nombre</a></li>
						<li><a href="Usuarios/FormConsultaUsuariosPorPermisos.html" target="_self">Consulta Usuarios Por Permisos</a></li>
						</ul>
						</li>
						<li><a href="Principal.php" target="_self" >Parametrizar</a>
						<ul>
						<li><a href="Parametrizar/FormAgregarDepartamento.php" target="_self">Agregar Departamento</a></li>
						<li><a href="Parametrizar/FormAgregarLocalidad.php" target="_self">Agregar Localidad</a></li>
						<li><a href="Parametrizar/FormAgregarInstitucion.php" target="_self">Agregar Institucion</a></li>
						<li><a href="Parametrizar/FormAgregarPais.php" target="_self">Agregar Pais</a></li>
						<li><a href="Parametrizar/FormAgregarProvincia.php" target="_self">Agregar Provincia</a></li>
						<li><a href="Parametrizar/FormAgregarTipoDocumento.php" target="_self">Agregar Tipo De Documento</a></li>
						<li><a href="Parametrizar/FormAgregarTitulo.php" target="_self">Agregar Titulo</a></li>
						</ul>
						</li>
						<li><a href="Mensajes/Salir.php" target="_self" >Salir</a>
						</li>
						</ul>
						</div>
						</html>
					<?php } ?>
	<br>
	<br>
	<br>
	<br>
<!--	<center><IMG SRC="Imagenes/area.jpg"></center>
	<BR><BR>
	
	<br>
	<a href="Altas/FormAltas2.php">Altas Viejo</a> --> 
	</body>
</html>

