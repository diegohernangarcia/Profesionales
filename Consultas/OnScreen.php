<html>
	<head>
	<link rel="stylesheet" href="Lista/style.css" />
	<title> Consulta Por Titulo </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
	 <center>
 	<!--	<IMG SRC="../Imagenes/informe.gif">
		<a href="../Informes/ImprimirConsultasInforme1pdf.php"target="blank"><img src="../Imagenes/pdf.gif"></a>
		<a href="../Informes/ImprimirConsultasInforme1excel.php"target="blank"><img src="../Imagenes/xls.gif"></a>
		<a href="../Informes/ImprimirConsultaInforme1CSV.php"target="blank"><img src="../Imagenes/csv.gif"></a> 
		<IMG SRC="../Imagenes/informe.gif">
		<a href="../Informes/ImprimirConsultasInforme2pdf.php"target="blank"><img src="../Imagenes/pdf.gif"></a>
		<a href="../Informes/ImprimirConsultasInforme2excel.php"target="blank"><img src="../Imagenes/xls.gif"></a>
		<a href="../Informes/ImprimirConsultaInforme2CSV.php"target="blank"><img src="../Imagenes/csv.gif"></a> </center>
		<br> -->
		<?php
			require ("Menu.php");
		?>
		<center>
		<br>
		<h3> Numero de Registros Encontrados <?php echo ($numeroderegistros); ?> </h3>
		<table cellpadding="0" cellspacing="0" border="0" id="table" class="sortable">
		<thead>
			<tr>
				<th class="nosort">
				<h3>Acta</h3></th>
				<th ><h3>Libro</h3> </th>
				<th><h3>Folio</h3> </th>
				<th><h3>Expediente</h3> </th>
				<th><h3>Fecha Inscripcion</h3> </th>
				<th><h3>Apellido</h3> </th>
				<th><h3>Nombre</h3> </th>
				<th><h3>Lugar Nacimiento</h3> </th>
				<th><h3>Fecha Nacimiento</h3> </th>
				<th><h3>Provincia</h3> </th>
				<th><h3>Pais</h3> </th>
				<th><h3>Tipo Documento</h3> </th>
				<th><h3>N� Documento</h3> </th>
				<th><h3>Domicilio</h3> </th>
				<th><h3>Ciudad</h3> </th>
				<th><h3>Departamento</h3> </th>
				<th><h3>Codigo Postal</h3> </th>
				<th><h3>Telefono</h3> </th>
				<th><h3>Titulo</h3> </th>
				<th><h3>Fecha Exp. Titulo</h3></th>
				<th><h3>Origen Titulo</h3> </th>
				<th><h3>Localidad Titulo</h3> </th>
				<th><h3>Provincia Titulo</h3></th>
			</tr>
		</thead>
		<tbody>
		<?php 
			// Se crea bucle que se repetira tantas veces como elementos tenga la consulta
			$contador=0;
			?>
			<?php
			for ($contador;$contador<$numeroderegistros;$contador++){
				// Se obtienen los datos almacenados en el elemento cursor 
				$acta=mysql_result($hacerconsulta,$contador,"Acta");
				$libro=mysql_result($hacerconsulta,$contador,"Libro");
				$folio=mysql_result($hacerconsulta,$contador,"Folio");
				$expediente=mysql_result($hacerconsulta,$contador,"Expediente");
				$fechainscripcion=mysql_result($hacerconsulta,$contador,"FechaInscripcion");
				$apellido=mysql_result($hacerconsulta,$contador,"Apellido");
				$nombre=mysql_result($hacerconsulta,$contador,"Nombre");
				$lugarnacimiento=mysql_result($hacerconsulta,$contador,"LugarNacimiento");
				$fechanacimiento=mysql_result($hacerconsulta,$contador,"FechaNacimiento");
				$provincia=mysql_result($hacerconsulta,$contador,"Provincia");
				$pais=mysql_result($hacerconsulta,$contador,"Pais");
				$tipodocumento=mysql_result($hacerconsulta,$contador,"TipoDocumento");
				$numerodocumento=mysql_result($hacerconsulta,$contador,"NumeroDocumento");
				$domicilio=mysql_result($hacerconsulta,$contador,"DomicilioActual");
				$ciudadactual=mysql_result($hacerconsulta,$contador,"Ciudad");
				$departamento=mysql_result($hacerconsulta,$contador,"Departamento");
				$codigopostal=mysql_result($hacerconsulta,$contador,"CodigoPostal");
				$telefono=mysql_result($hacerconsulta,$contador,"Telefono");
				$titulo=mysql_result($hacerconsulta,$contador,"titulO");
				$fechatitulo=mysql_result($hacerconsulta,$contador,"FechaExpedicionTitulo");
				$origentitulo=mysql_result($hacerconsulta,$contador,"OrigenTitulo");
				$localidadtitulo=mysql_result($hacerconsulta,$contador,"LocalidadTitulo");
				$provinciatitulo=mysql_result($hacerconsulta,$contador,"ProvinciaTitulo");				
				DevuelvoLocalidad($lugarnacimiento,$desclugarnacimiento);	
				DevuelvoProvincia($provincia,$descprovincia);
				DevuelvoPais($pais,$descpais);
				DevuelvoTipoDoc($tipodocumento,$desctipodocumento);
				DevuelvoLocalidad($ciudadactual,$descciudadactual);	
				DevuelvoDepartamento($departamento,$descdepartamento);
				DevuelvoOrigenTitulo($origentitulo,$descorigentitulo);
				DevuelvoLocalidad($localidadtitulo,$desclocalidadtitulo);	
				DevuelvoProvincia($provinciatitulo,$descprovinciatitulo);
				DevuelvoTitulo($titulo,$desctitulo);
				//echo($desclugarnaciomiento);	
				?>
				<tr>
					<td><h5><?php echo ($acta); ?> </td>
					<td><h5><?php echo ($libro); ?> </td>
					<td><h5><?php echo ($folio); ?> </td>
					<td><h5><?php echo ($expediente); ?> </td>
					<td><h5><?php echo (cambiaf_a_normal($fechainscripcion)); ?> </td>
					<td><h5><?php echo ($apellido); ?> </td>
					<td><h5><?php echo ($nombre); ?> </td>
					<td><h5><?php echo ($desclugarnacimiento); ?> </td>
					<td><h5><?php echo (cambiaf_a_normal($fechanacimiento)); ?> </td>
					<td><h5><?php echo ($descprovincia); ?> </td>
					<td><h5><?php echo ($descpais); ?> </td>
					<td><h5><?php echo ($desctipodocumento); ?> </td>
					<td><h5><?php echo ($numerodocumento); ?> </td>
					<td><h5><?php echo ($domicilio); ?> </td>
					<td><h5><?php echo ($descciudadactual); ?> </td>
					<td><h5><?php echo ($descdepartamento); ?> </td>
					<td><h5><?php echo ($codigopostal); ?> </td>
					<td><h5><?php echo ($telefono); ?> </td>
					<td><h5><?php echo ($desctitulo); ?> </td>
					<td><h5><?php echo (cambiaf_a_normal($fechatitulo)); ?> </td>
					<td><h5><?php echo ($descorigentitulo); ?> </td>
					<td><h5><?php echo ($desclocalidadtitulo); ?> </td>
					<td><h5><?php echo ($descprovinciatitulo); ?> </td>
				</tr>
				<?php
			}
			?>
			<?php 
					session_start();
					$_SESSION["consulta"] = $consulta;	
					?>
			</tbody>
			</table>
			<div id="controls">
			<div id="perpage">
			<select onChange="sorter.size(this.value)">
			<option value="5">5</option>
				<option value="10" selected="selected">10</option>
				<option value="20">20</option>
				<option value="50">50</option>
				<option value="100">100</option>
			</select>
			<span>Entries Per Page</span>
		</div>
		<div id="navigation">
			<img src="Lista/images/first.gif" width="16" height="16" alt="First Page" onClick="sorter.move(-1,true)" />
			<img src="Lista/images/previous.gif" width="16" height="16" alt="First Page" onClick="sorter.move(-1)" />
			<img src="Lista/images/next.gif" width="16" height="16" alt="First Page" onClick="sorter.move(1)" />
			<img src="Lista/images/last.gif" width="16" height="16" alt="Last Page" onClick="sorter.move(1,true)" />
		</div>
		<div id="text">Displaying Page <span id="currentpage"></span> of <span id="pagelimit"></span></div>
	</div>
	<script type="text/javascript" src="Lista/script.js"></script>
	<script type="text/javascript">
  var sorter = new TINY.table.sorter("sorter");
	sorter.head = "head";
	sorter.asc = "asc";
	sorter.desc = "desc";
	sorter.even = "evenrow";
	sorter.odd = "oddrow";
	sorter.evensel = "evenselected";
	sorter.oddsel = "oddselected";
	sorter.paginate = true;
	sorter.currentid = "currentpage";
	sorter.limitid = "pagelimit";
	sorter.init("table",1);
  </script>
 <br>
  <center>
 	<a href="../Principal.html"target="_self"><img src="../Imagenes/atras.jpg"></a> </th></tr>
</body>		
</html>