<?php

//require_once 'utils/estalogueado.php';

@session_start();

if ( isset($_GET["email"], $_GET["password"], $_GET["apellido"], $_GET["nombre"], $_GET["telefono"], $_GET["fechanacimiento"], $_GET["tipoDocumento"], $_GET["nroDocumento"], $_GET["celular"] , $_GET["sexo"], $_GET["calle"] , $_GET["departamento"], $_GET["ciudad"], $_GET["barrio"], $_GET["numero"], $_GET["depto"], $_GET["observaciones"], $_GET["codigoPostal"] )) {
	
	require_once '../clases/dbmanager.class.php';
	require_once '../funciones/purificado.php';

	$_GET = PurificarHash($_GET); //antes que nada purificamos los datos para no tener problemas cuando lleguen a la BD
 	
 	$db = new DB_con();
 	
 	$db -> Insert('usuarios',$_GET);

	$_SESSION["mensaje"] = "Se ha creado un nuevo usuario";
	echo "user add";

} else {
	
	$_SESSION["mensaje"] = "No se ha podido crear el usuario";
	echo "No se ha creado un usuario";
}

header("Location : ../../usuariosagregar.php");


?>