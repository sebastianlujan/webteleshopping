<?php

	require_once 'utils/estalogueado.php';

	@session_start();

	if (isset( $_POST["id"])){

		require_once '../clases/dbmanager.class.php';
		require_once '../funciones/purificado.php';

		$_POST = PurificarHash($_POST);

		$db = new DB_con();

		$res = $db -> Query(" SELECT * FROM productos where id = ".$id );
		$res = mysql_fetch_array($res);
		unlink("../../../img/productos/".$res["miniatura"]);
		unlink("../../../img/productos/".$res["imagen1"]);
		unlink("../../../img/productos/".$res["imagen2"]);
		unlink("../../../img/productos/".$res["imagen3"]);
		
		$db -> Delete("productos",$_POST["id"]);

			$_SESSION["mensaje"] = "Se he eliminado el producto correctamente";
			echo "se elimino";

		} else {

			$_SESSION["mensaje"] = "No se ha eliminado el producto correctamente";
			echo "no se elimino";
		}

		header("Location : ../../productoseliminar.php");

?>