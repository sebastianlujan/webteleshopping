<?php 
@session_start();

require_once 'php/clases/dbmanager.class.php';

$db = new DB_con();

$res = mysql_fetch_array($db->Query("SELECT COUNT(*) AS pendientes FROM carrito WHERE confirmado = 0"));

$pendientes = $res['pendientes'];

if($pendientes > 99){
	$pendientes = "+".$pendientes;
}
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="js/tooltip.js"></script>
	<script type="text/javascript">
	     $(document).on("ready",function(){
	      
		    $(".leftbar-item,.topbar-item,.boton").on("click",function(){
		   		document.location = $(this).attr("ira");
		    });

		    $("li .boton").tooltip({
					placement:"left",
			    });

		    $(".leftbar-item").tooltip({
				placement:"top",
		    });
		    
		    
	     });
	</script>
</head>
<body>

	<div id="msg-bar">Prueba</div>
	<div id="leftbar">      
    <ul class="contenedor-leftbar">
			<li title="Pagina Principal" ira="index.php" id="pagprincipal" class="leftbar-item"><a href=""><i class="icon-th-large"></i></a></li><br>
			<li title="Productos" ira="Productosagregar.php" id="productos" class="leftbar-item"><a href=""><i class="icon-th-list"></i></a></li><br>
			<li title="Carrito" ira="Carrito.php" id="carrito" class="leftbar-item"><div class="circulo"><?php echo($pendientes);?></div><a href=""><i class="icon-shopping-cart"></i></a></li><br>
			<li title="Usuarios" ira="usuarioagregar.php" id="usuarios" class="leftbar-item"><a href=""><i class="icon-user"></i></a></li><br>
			<li title="Newsletter" ira="Newsletter-enviarnewsletter.php" id="newsletter" class="leftbar-item"><a href=""><i class="icon-envelope"></i></a></li><br>
	  </ul>
  </div>


		
</body>
</html>