<?php

//la idea de esto es usarlo cada momento que se necesite saber si el usuario esta logueado, si esta logueado el programa sigue, sino lo manda al login
if(!isset($_SESSION['user'])){
	header("Location: /inc/php/login.php");
}

?>