<?php

//require_once 'utils/estalogueado.php';

session_start();

	if ( isset($_POST["nombre"])) {
	
	require_once '../clases/dbmanager.class.php';
	require_once '../funciones/purificado.php';

	$_POST = PurificarHash($_POST); //antes que nada purificamos los datos para no tener problemas cuando lleguen a la BD
 	$db = new DB_con();

 	$imgs = array("miniatura","imagen1","imagen2","imagen3");
 	foreach($imgs as &$img){
 		$prefijo = substr(md5(uniqid(rand())),0,10);
 		$_FILES[$img]["name"] = str_replace(" ", "_", $_FILES[$img]["name"]);
 		$destino = "../../img/productos/".$prefijo."_".$_FILES[$img]["name"];
 		copy($_FILES[$img]["tmp_name"],$destino);
 		$_POST[$img] = $prefijo."_".$_FILES[$img]["name"];
 	}
 	
 	$db -> Insert('productos',$_POST);

	$_SESSION["mensaje"] = "El producto se ha creado correctamente";
		echo "El producto se ha creado correctamente";
	} else {
		$_SESSION["mensaje"] = "No se ha podido crear el producto";
		echo "El producto NO se ha creado correctamente";
	}

	header("Location: ../../productosagregar.php");


?>