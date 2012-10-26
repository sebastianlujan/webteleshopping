<?php 
@session_start();
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
	      
		    $(".leftbar-item,.topbar-item").on("click",function(){
		   		document.location = $(this).attr("ira");
		    });

		    $("li").tooltip({
					placement:"top",
			    });
		    
	     });
	</script>
</head>
<body>

	<div id="msg-bar"></div>
	<div id="leftbar">      
    <ul class="contenedor-leftbar">
			<li title="Pagina Principal" ira="index.php" id="pagprincipal" class="leftbar-item"><a href=""><i class="icon-th-large"></i></a></li><br>
			<li title="Productos" ira="Productosagregar.php" id="productos" class="leftbar-item"><a href=""><i class="icon-th-list"></i></a></li><br>
			<li title="Carrito" ira="Carrito.php" id="carrito" class="leftbar-item"><div class="circulo">8</div><a href=""><i class="icon-shopping-cart"></i></a></li><br>
			<li title="Usuarios" ira="usuarioagregar.php" id="usuarios" class="leftbar-item"><a href=""><i class="icon-user"></i></a></li><br>
			<li title="Newsletter" ira="Newsletter-enviarnewsletter.php" id="newsletter" class="leftbar-item"><a href=""><i class="icon-envelope"></i></a></li><br>
	  </ul>
  </div>


		
</body>
</html>