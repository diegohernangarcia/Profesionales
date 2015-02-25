 <?php 
	// DEVUELVE UN ARRAY CON TODAS LAS LOCALIDADES CARGADAS EN LA BASE LOCALIDAD
	Function DevuelvoArrayLocalidades(&$arreglo) {
		require ("UsarGestion.php");
		// Creo la consulta
		$consulta="SELECT * FROM localidad";
		// Se Ejecuta La Consulta
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		//Obtiene Cantidad Registros de la Consulta
		$numeroderegistros= mysql_num_rows($hacerconsulta);
		// Se crea un bucle que recorrera el cursor obtenido
		//$Arreglo=Array();
		for ($contador=0;$contador<$numeroderegistros;$contador++) {
			// Se obtienen los datos almacenados en el elemento del cursor 
			$descripcion=mysql_result($hacerconsulta,$contador,"Descripcion");
			//echo($Descripcion."<br>");
			$arreglo[$contador]=$descripcion;
		}
		Return $arreglo;
	}
	// DEVUELVE UN ARRAY CON TODAS LAS PROVINCIAS CARGADAS EN LA BASE PROVINCIAS
	Function DevuelvoArrayProvincias(&$arreglo) {
		require ("UsarGestion.php");
		// Creo la consulta
		$consulta="SELECT * FROM provincias";
		// Se Ejecuta La Consulta
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		//Obtiene Cantidad Registros de la Consulta
		$numeroderegistros= mysql_num_rows($hacerconsulta);
		// Se crea un bucle que recorrera el cursor obtenido
		//$Arreglo=Array();
		for ($contador=0;$contador<$numeroderegistros;$contador++) {
			// Se obtienen los datos almacenados en el elemento del cursor 
			$descripcion=mysql_result($hacerconsulta,$contador,"Descripcion");
			//echo($Descripcion."<br>");
			$arreglo[$contador]=$descripcion;
		}
		Return $arreglo;
	}
	// DEVUELVE UN ARRAY CON TODAS LOS DEPARTAMENTOS CARGADAS EN LA BASE DEPARTAMENTOS
	Function DevuelvoArrayDeptos(&$arreglo) {
		require ("UsarGestion.php");
		// Creo la consulta
		$consulta="SELECT * FROM  departamentos";
		// Se Ejecuta La Consulta
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		//Obtiene Cantidad Registros de la Consulta
		$numeroderegistros= mysql_num_rows($hacerconsulta);
		// Se crea un bucle que recorrera el cursor obtenido
		//$Arreglo=Array();
		for ($contador=0;$contador<$numeroderegistros;$contador++) {
			// Se obtienen los datos almacenados en el elemento del cursor 
			$descripcion=mysql_result($hacerconsulta,$contador,"Descripcion");
			//echo($Descripcion."<br>");
			$arreglo[$contador]=$descripcion;
		}
		Return $arreglo;
	}
	// DEVUELVE UN ARRAY CON TODAS LOS PAISES CARGADAS EN LA BASE PAIS
	Function DevuelvoArrayPaises(&$arreglo) {
		require ("UsarGestion.php");
		// Creo la consulta
		$consulta="SELECT * FROM  pais";
		// Se Ejecuta La Consulta
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		//Obtiene Cantidad Registros de la Consulta
		$numeroderegistros= mysql_num_rows($hacerconsulta);
		// Se crea un bucle que recorrera el cursor obtenido
		//$Arreglo=Array();
		for ($contador=0;$contador<$numeroderegistros;$contador++) {
			// Se obtienen los datos almacenados en el elemento del cursor 
			$descripcion=mysql_result($hacerconsulta,$contador,"Descripcion");
			//echo($Descripcion."<br>");
			$arreglo[$contador]=$descripcion;
		}
		Return $arreglo;
	}
	// DEVUELVE UN ARRAY CON TODOS LOS TIPOS DE DOCUMENTOS CARGADOS EN LA BASE TIPO DOCUMENTO
	Function DevuelvoArrayTipoDocumento(&$arreglo) {
		require ("UsarGestion.php");
		// Creo la consulta
		$consulta="SELECT * FROM   tipodocumento";
		// Se Ejecuta La Consulta
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		//Obtiene Cantidad Registros de la Consulta
		$numeroderegistros= mysql_num_rows($hacerconsulta);
		// Se crea un bucle que recorrera el cursor obtenido
		//$Arreglo=Array();
		for ($contador=0;$contador<$numeroderegistros;$contador++) {
			// Se obtienen los datos almacenados en el elemento del cursor 
			$descripcion=mysql_result($hacerconsulta,$contador,"Descripcion");
			//echo($Descripcion."<br>");
			$arreglo[$contador]=$descripcion;
		}
		Return $arreglo;
	}
	// DEVUELVE UN ARRAY CON TODOS LOS TITULOS CARGADOS EN LA BASE TITULOS
	Function DevuelvoArrayTitulos(&$arreglo) {
		require ("UsarGestion.php");
		// Creo la consulta
		$consulta="SELECT * FROM   titulo";
		// Se Ejecuta La Consulta
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		//Obtiene Cantidad Registros de la Consulta
		$numeroderegistros= mysql_num_rows($hacerconsulta);
		// Se crea un bucle que recorrera el cursor obtenido
		//$Arreglo=Array();
		for ($contador=0;$contador<$numeroderegistros;$contador++) {
			// Se obtienen los datos almacenados en el elemento del cursor 
			$descripcion=mysql_result($hacerconsulta,$contador,"Descripcion");
			//echo($Descripcion."<br>");
			$arreglo[$contador]=$descripcion;
		}
		Return $arreglo;
	}
	// DEVUELVE UN ARRAY CON TODOS LOS ORIGENES DE TITULOS CARGADOS EN LA BASE ORIGEN TITULOS
	Function DevuelvoArrayOrigenTitulo(&$arreglo) {
		require ("UsarGestion.php");
		// Creo la consulta
		$consulta="SELECT * FROM  origentitulo";
		// Se Ejecuta La Consulta
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		//Obtiene Cantidad Registros de la Consulta
		$numeroderegistros= mysql_num_rows($hacerconsulta);
		// Se crea un bucle que recorrera el cursor obtenido
		//$Arreglo=Array();
		for ($contador=0;$contador<$numeroderegistros;$contador++) {
			// Se obtienen los datos almacenados en el elemento del cursor 
			$descripcion=mysql_result($hacerconsulta,$contador,"Descripcion");
			//echo($Descripcion."<br>");
			$arreglo[$contador]=$descripcion;
		}
		Return $arreglo;
	}
	// DEVUELVE UN ARRAY CON LAS LOCALIDADES DEL TITULO EN LAS BASE, DEVUELVE UNICAMENTE LAS LOCALIDADES QUE POSEEN RELACION EN LA BD REGISTRO PROFESIONALES
	Function DevuelvoArrayLocalidadesUnicas(&$arreglo) {
		require ("UsarGestion.php");
		// Creo la consulta
		$consulta="SELECT distinct LocalidadTitulo FROM registroprofesionales";
		// Se Ejecuta La Consulta
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		//Obtiene Cantidad Registros de la Consulta
		$numeroderegistros= mysql_num_rows($hacerconsulta);
//		echo ($numeroderegistros);
		// Se crea un bucle que recorrera el cursor obtenido
		//$Arreglo=Array();
		for ($contador=0;$contador<$numeroderegistros;$contador++) {
			// Se obtienen los datos almacenados en el elemento del cursor 
			$descripcion=mysql_result($hacerconsulta,$contador,"LocalidadTitulo");
			DevuelvoDescripcionLocalidad($descripcion,$CualCiudad);
			//echo($Descripcion."<br>");
			$arreglo[$contador]=$CualCiudad;
		}
		Return $arreglo;}
	// DEVUELVE UN ARRAY CON LAS LOCALIDADES DE RESIDENCIA EN LAS BASE, DEVUELVE UNICAMENTE LAS LOCALIDADES QUE POSEEN RELACION EN LA BD REGISTRO PROFESIONALES
	Function DevuelvoArrayLocalidadesResidenciasUnicas(&$arreglo) {
		require ("UsarGestion.php");
		// Creo la consulta
		$consulta="SELECT distinct Ciudad FROM registroprofesionales";
		// Se Ejecuta La Consulta
		$hacerconsulta=mysql_query($consulta,$manejador);
		
		
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		
		//Obtiene Cantidad Registros de la Consulta
		$numeroderegistros= mysql_num_rows($hacerconsulta);
		echo ($numeroderegistros);
		// Se crea un bucle que recorrera el cursor obtenido
		//$Arreglo=Array();
		for ($contador=0;$contador<$numeroderegistros;$contador++) {
			// Se obtienen los datos almacenados en el elemento del cursor 
			$descripcion=mysql_result($hacerconsulta,$contador,"Ciudad");
			DevuelvoDescripcionLocalidad($descripcion,$CualCiudad);
			//echo($Descripcion."<br>");
			$arreglo[$contador]=$CualCiudad;
		}
		Return $arreglo;
	}
	
	// CAMBIA EL FORMATO DE LA FECHA DE MYSQL (AAAA/MM/DD) A FORMATO LATINO DD/MM/AAAA
	function cambiaf_a_normal($fecha){ 
   	 error_reporting ( E_ERROR );
	ereg( "([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})", $fecha, $mifecha); 
   	$lafecha=$mifecha[3]."/".$mifecha[2]."/".$mifecha[1]; 
   	return $lafecha; 
} 
	// DEVUELVE EL NOMBRE DE LA LOCALIDAD DE LA BASE LOCALIDADES EL CUAL COINCIDE CON EL ID.
	Function DevuelvoLocalidad($cual,&$id){
		require("UsarGestion.php");
		$id="";
		if ($cual==0) {
		    $id="NO ESPECIFICA";
			} else {
				$consulta="SELECT Descripcion FROM localidad WHERE Id='".$cual."'";
				//echo ("<br>".$consulta."<br>");
				$hacerconsulta=mysql_query($consulta,$manejador);
				$$numeroerror=mysql_errno();
				$descripcionerror=mysql_error();
				if ($$numeroerror!=0) {
					echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
				$id=mysql_result ($hacerconsulta,0,"Descripcion");
				}
		
		Return $id;
	}
	
	// DEVUELVE EL NOMBRE DE LA LOCALIDAD DE LA BASE LOCALIDADES EL CUAL COINCIDE CON EL ID.
	Function DevuelvoDescripcionLocalidad ($cual,&$id){
		require("UsarGestion.php");
		$consulta="SELECT Descripcion FROM localidad WHERE Id='".$cual."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$id=mysql_result ($hacerconsulta,0,"Descripcion");
		Return $id;
	}
	// DEVUELVE EL NOMBRE DE LA PROVINCIAL AL CUAL CORRESPONDE EL ID EN LA BASE DE PROVINCIAS
	Function DevuelvoProvincia ($cual,&$id){
		require("UsarGestion.php");
		$id="";
		if ($cual==0) {
		    $id="NO ESPECIFICA";
			} else {
				$consulta="SELECT Descripcion FROM provincias WHERE Id='".$cual."'";
				//echo ("<br>".$consulta."<br>");
				$hacerconsulta=mysql_query($consulta,$manejador);
				$$numeroerror=mysql_errno();
				$descripcionerror=mysql_error();
				if ($numeroerror!=0) {
					echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
				$id=mysql_result ($hacerconsulta,0,"Descripcion");
				}
				Return $id;
		}
	// DEVUELVE EL NOMBRE DEL PAIS EL CUAL CORRESPONDE EL ID ENVIADO
	Function DevuelvoPais ($cual,&$id){
		require("UsarGestion.php");
		$id="";
		if ($cual==0) {
		    $id="NO ESPECIFICA";
			} else {
				$consulta="SELECT Descripcion FROM pais WHERE Id='".$cual."'";
				//echo ("<br>".$consulta."<br>");
				$hacerconsulta=mysql_query($consulta,$manejador);
				$$numeroerror=mysql_errno();
				$descripcionerror=mysql_error();
				if ($numeroerror!=0) {
					echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
				$id=mysql_result ($hacerconsulta,0,"Descripcion");
				}
				Return $id;
		}
	// DEVUELVE DESCRIPCION DEL TIPO DE DOCUMENTO EL CUAL CORRESPONDE EL ID ENVIADO	
	Function DevuelvoTipoDoc ($cual,&$id){
		require("UsarGestion.php");
		$id="";
		if ($cual==0) {
		    $id="NO ESPECIFICA";
			} else {
				$consulta="SELECT Descripcion FROM tipodocumento WHERE Id='".$cual."'";
				//echo ("<br>".$consulta."<br>");
				$hacerconsulta=mysql_query($consulta,$manejador);
				$$numeroerror=mysql_errno();
				$descripcionerror=mysql_error();
				if ($numeroerror!=0) {
					echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
				$id=mysql_result ($hacerconsulta,0,"Descripcion");
				}
				Return $id;
		}
	// DEVUELVE DESCRIPCION DEL DEPARTAMENTO EL CUAL CORRESPONDE EL ID ENVIADO	
	Function DevuelvoDepartamento ($cual,&$id){
		require("UsarGestion.php");
		$id="";
		if ($cual==0) {
		    $id="NO ESPECIFICA";
			} else {
				$consulta="SELECT Descripcion FROM  departamentos WHERE Id='".$cual."'";
				//echo ("<br>".$consulta."<br>");
				$hacerconsulta=mysql_query($consulta,$manejador);
				$$numeroerror=mysql_errno();
				$descripcionerror=mysql_error();
				if ($numeroerror!=0) {
					echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
				$id=mysql_result ($hacerconsulta,0,"Descripcion");
				}
				Return $id;
		}
	// DEVUELVE LA DESCRIPCION DEL INSTITUTO AL CUAL CORRESPONDE EL ID.	
	Function DevuelvoOrigenTitulo($cual,&$id){
		require("UsarGestion.php");
		$id="";
		if ($cual==0) {
		    $id="NO ESPECIFICA";
			} else {
				$consulta="SELECT Descripcion FROM  origentitulo WHERE Id='".$cual."'";
				//echo ("<br>".$consulta."<br>");
				$hacerconsulta=mysql_query($consulta,$manejador);
				$$numeroerror=mysql_errno();
				$descripcionerror=mysql_error();
				if ($numeroerror!=0) {
					echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
				$id=mysql_result ($hacerconsulta,0,"Descripcion");
				}
				Return $id;
		}
	// DEVUELVE LA DESCRIPCION DEL TITULO QUE CORRESPONDE A LA ID ENVIADA
	Function DevuelvoTitulo($cual,&$id){
		require("UsarGestion.php");
		$id="";
		if ($cual==0) {
		    $id="NO ESPECIFICA";
			} else {
				$consulta="SELECT Descripcion FROM  titulo WHERE Id='".$cual."'";
				//echo ("<br>".$consulta."<br>");
				$hacerconsulta=mysql_query($consulta,$manejador);
				$$numeroerror=mysql_errno();
				$descripcionerror=mysql_error();
				if ($numeroerror!=0) {
					echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
				$id=mysql_result ($hacerconsulta,0,"Descripcion");
				}
				Return $id;
		}
	// DEVUELVE UN ARRAY CON LOS TITULOS QUE SOLO TIENEN RELACION EN LA TABLA REGISTROPROFESIONALES
	Function DevuelvoArrayTitulosUnicos(&$arreglo) {
		require ("UsarGestion.php");
		// Creo la consulta
		$consulta="SELECT distinct Titulo FROM registroprofesionales";
		// Se Ejecuta La Consulta
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		//Obtiene Cantidad Registros de la Consulta
		$numeroderegistros= mysql_num_rows($hacerconsulta);
		//echo ($numeroderegistros);
		// Se crea un bucle que recorrera el cursor obtenido
		//$Arreglo=Array();
		for ($contador=0;$contador<$numeroderegistros;$contador++) {
			// Se obtienen los datos almacenados en el elemento del cursor 
			$descripcion=mysql_result($hacerconsulta,$contador,"Titulo");
			DevuelvoTitulo($descripcion,$CualTitulo);
			//echo($Descripcion."<br>");
			$arreglo[$contador]=$CualTitulo;
		}
		Return $arreglo;
	}
	// DEVUELVE UN ARRAY CON LOS INSTITUTOS QUE SOLO TIENEN RELACION EN LA TABLA REGISTROPROFESIONALES
	Function DevuelvoArrayOrigenTitulosUnicos(&$arreglo) {
		require ("UsarGestion.php");
		// Creo la consulta
		$consulta="SELECT distinct OrigenTitulo FROM registroprofesionales";
		// Se Ejecuta La Consulta
		$hacerconsulta=mysql_query($consulta,$manejador);
				$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		//Obtiene Cantidad Registros de la Consulta
		$numeroderegistros= mysql_num_rows($hacerconsulta);
		//echo ($numeroderegistros);
		// Se crea un bucle que recorrera el cursor obtenido
		//$Arreglo=Array();
		for ($contador=0;$contador<$numeroderegistros;$contador++) {
			// Se obtienen los datos almacenados en el elemento del cursor 
			$descripcion=mysql_result($hacerconsulta,$contador,"OrigenTitulo");
			DevuelvoOrigenTitulo($descripcion,$CualTitulo);
			//echo($Descripcion."<br>");
			$arreglo[$contador]=$CualTitulo;
		}
		Return $arreglo;
	}
	// DEVUELVE LA DESCRIPCION DEL INSTITUTO AL CUAL CORRESPONDE EL ID.
	Function DevuelvoIdOrigenTitulo($cual,&$id){
		require("UsarGestion.php");
		$consulta="SELECT Id FROM origentitulo WHERE Descripcion='".$cual."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$id=mysql_result ($hacerconsulta,0,"id");
		Return $id;
		}
	// Devuelve la Fecha Actual en Formato DD/MM/AAAA
	
	Function DevuelveFechaActual(&$fecha){
	     $fecha=date("d/m/Y");
		 return $fecha;
	}
	// CON EL NOMBRE DE UNA LOCALIDAD SE DEVUELVE EL ID ASOCIADO EN LA BASE LOCALIDADES
	Function DevuelvoIdLocalidad ($cual,&$id){
		require("UsarGestion.php");
		$consulta="SELECT Id FROM localidad WHERE Descripcion='".$cual."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$id=mysql_result ($hacerconsulta,0,"Id");
		Return $id;
	}
	// CON EL NOMBRE DE UNA PROVINCIA SE DEVUELVE EL ID ASOCIADO EN LA BASE PROVINCIAS
	Function DevuelvoIdProvincia($cual,&$id){
		require("UsarGestion.php");
		$consulta="SELECT Id FROM provincias WHERE Descripcion='".$cual."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$id=mysql_result ($hacerconsulta,0,"Id");
		Return $id;
	}
	// CON EL NOMBRE DE UN PAIS SE DEVUELVE EL ID ASOCIADO EN LA BASE PAISES
	Function DevuelvoIdPais($cual,&$id){
		require("UsarGestion.php");
		$consulta="SELECT Id FROM pais WHERE Descripcion='".$cual."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$id=mysql_result ($hacerconsulta,0,"Id");
		Return $id;
	}
	// CON EL NOMBRE DE UN TIPO DOCUMENTO SE DEVUELVE EL ID ASOCIADO EN LA BASE TIPO DOCUMENTO
	Function DevuelvoIdTipoDoc($cual,&$id){
		require("UsarGestion.php");
		$consulta="SELECT Id FROM tipodocumento WHERE Descripcion='".$cual."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$id=mysql_result ($hacerconsulta,0,"Id");
		Return $id;
	}
	// CON EL NOMBRE DE UN DEPARTAMENTO SE DEVUELVE EL ID ASOCIADO EN LA BASE DEPARTAMENTOS
	Function DevuelvoIdDepartamentos($cual,&$id){
		require("UsarGestion.php");
		$consulta="SELECT Id FROM departamentos WHERE Descripcion='".$cual."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$id=mysql_result ($hacerconsulta,0,"Id");
		Return $id;
	}
	// CON EL NOMBRE DE UN TITULO SE DEVUELVE EL ID ASOCIADO EN LA BASE TITULO
	Function DevuelvoIdTitulo($cual,&$id){
		require("UsarGestion.php");
		$consulta="SELECT Id FROM titulo WHERE Descripcion='".$cual."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$id=mysql_result ($hacerconsulta,0,"Id");
		Return $id;
	}
	// CON EL NOMBRE DE UNA INSTITUCION SE DEVUELVE EL ID ASOCIADO EN LA BASE ORIGEN TITULO
	Function DevuelvoIdInstitucion($cual,&$id){
		require("UsarGestion.php");
		$consulta="SELECT Id FROM origentitulo WHERE Descripcion='".$cual."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$id=mysql_result ($hacerconsulta,0,"Id");
		Return $id;
	}
?>