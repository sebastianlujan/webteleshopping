<?php

	require_once 'utils/estalogueado.php';

	@session_start();

	if (isset($_POST["id_usuario"])){

		require_once '../clases/dbmanager.class.php';
		require_once '../funciones/purificado.php';

		$_POST = PurificarHash($_POST);

		$db = new DB_con();

		$db -> Delete("usuarios" ,$_POST["id_usuario"]);


		$_SESSION["mensaje"] = "Se he eliminado el producto correctamente";

	} else {

		$_SESSION["mensaje"] = "No se ha eliminado el producto correctamente";
	}

		header("Location : ../../productoseliminar.php");

?>