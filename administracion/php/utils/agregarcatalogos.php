<?php

//require_once 'utils/estalogueado.php';

@session_start();

if ( isset($_POST["path"] )) {
	
	require_once '../clases/dbmanager.class.php';
	require_once '../funciones/purificado.php';

	$_POST = PurificarHash($_POST); //antes que nada purificamos los datos para no tener problemas cuando lleguen a la BD
 	
 	$db = new DB_con();
 	
 	$db -> Insert('catalogos',$_POST);

	$_SESSION["mensaje"] = "Se ha creado un nuevo catalogo";
	echo "catalogo add";

} else {
	
	$_SESSION["mensaje"] = "No se ha podido crear el catalogo";
}

header("Location : ../../catalogosagregar.php");


?>