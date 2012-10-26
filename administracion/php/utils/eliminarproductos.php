<?php

	//require_once 'utils/estalogueado.php';

	@session_start();

	if (isset( $_GET["id"])){

		require_once '../clases/dbmanager.class.php';
		require_once '../funciones/purificado.php';

		$_GET = PurificarHash($_GET);

		$db = new DB_con();

		$res = $db -> Query(" SELECT * FROM productos where id = ".$_GET["id"] );
		$res = mysql_fetch_array($res);
		unlink("../../img/productos/".$res["miniatura"]);
		unlink("../../img/productos/".$res["imagen1"]);
		unlink("../../img/productos/".$res["imagen2"]);
		unlink("../../img/productos/".$res["imagen3"]);
		
		$db -> Delete("productos",$_GET["id"]);

			$_SESSION["mensaje"] = "Se ha eliminado el producto correctamente";

		} else {

			$_SESSION["mensaje"] = "Ocurrio un problema al intentar eliminar el producto";
		}

	header("Location: ../../productoslista.php");

?>