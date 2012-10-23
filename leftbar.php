<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript">
	     $(document).on("ready",function(){
	      
		    $(".leftbar-item,.topbar-item").on("click",function(){
		   		document.location = $(this).attr("ira");
		    });

		    
	     });
	</script>
</head>
<body>


	<div id="leftbar">      
    <ul class="contenedor-leftbar">
			<li ira="index.php" id="pagprincipal" class="leftbar-item"><a href=""><i class="icon-th-large"></i></a></li><br>
			<li ira="Productosagregar.php" id="productos" class="leftbar-item"><a href=""><i class="icon-th-list"></i></a></li><br>
			<li ira="Carrito.php" id="carrito" class="leftbar-item"><div class="circulo">8</div><a href=""><i class="icon-shopping-cart"></i></a></li><br>
			<li ira="usuarioagregar.php" id="usuarios" class="leftbar-item"><a href=""><i class="icon-user"></i></a></li><br>
			<li ira="Newsletter-enviarnewsletter.php" id="newsletter" class="leftbar-item"><a href=""><i class="icon-envelope"></i></a></li><br>
	  </ul>
  </div>


		
</body>
</html>