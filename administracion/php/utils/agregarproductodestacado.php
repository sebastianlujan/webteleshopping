<?php

//require_once 'utils/estalogueado.php';

@session_start();

if ( isset($_GET["imagen"] )) {
	
	require_once '../clases/dbmanager.class.php';
	require_once '../funciones/purificado.php';

	$_GET = PurificarHash($_GET); //antes que nada purificamos los datos para no tener problemas cuando lleguen a la BD
 	
 	$db = new DB_con();
 	
 	$db -> Insert('productodestacado',$_GET);

	$_SESSION["mensaje"] = "El producto destacado se ha creado correctamente";

} else {
	
	$_SESSION["mensaje"] = "No se ha podido crear el producto destacado";
}

header("Location : ../../productodestacadoagregar.php");


?>