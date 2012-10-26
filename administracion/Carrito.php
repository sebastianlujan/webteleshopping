<html>
	<head>
	
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<title>Carrito</title>
		
		
		<link href="css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
		     $(document).on("ready",function(){
		
		      $("#carrito,#porconfirmar").toggleClass("seleccionado");
		      
		     })
		</script>
		
	</head>
	
	<body>
	
		<?php require_once('leftbar.php'); ?>
	
		<ul id="contenedor-topbar">
			<li id="porconfirmar" ira="Carrito.php" class="topbar-item">Ventas por confirmar</li>
			<li id="historial" ira="CarritoHistorial.php" class="topbar-item">Historial de ventas</li>
		</ul>
		
		<?php require_once('usrbar.php'); ?>
	
		
		<!--- ---------------------------------------- CONTENEDOR 2  ---------------------------------------->
		<div id="contenedor2">
	
			<ul id="contenedor-carritobar">
      				<li class="carritobar-item"><a href="">Usuario</a></li>
      				<li class="carritobar-item"><a href="">Producto</a></li>
      				<li class="carritobar-item"><a href="">Cantidad</a></li>
			</ul>


			<div class="opciones-carrito">
				<div class="op">
					<div class="centrar">
						<div class="elem" id="user">USUARIO</div>
						<div class="elem" id="producto">papawwwwwwwwwwws</div>
						<div class="elem" id="cant">3</div>
						<div class="boton btn-success">Confirmar</div>
						<div class="boton btn-danger">Eliminar</div>
					</div>
				</div>
				<div class="op">
					<div class="centrar">
						<div class="elem" id="user">USUARIO</div>
						<div class="elem" id="producto">papadsddddddwdwdwdwdwdws</div>
						<div class="elem" id="cant">3</div>
						<div class="boton btn-success">Confirmar</div>
						<div class="boton btn-danger">Eliminar</div>
					</div>
				</div>
				<div class="op">
					<div class="centrar">
						<div class="elem" id="user">USUARdfdddfffffIO</div>
						<div class="elem" id="producto">papddddddddddddddddasfffffffffffff</div>
						<div class="elem" id="cant">3</div>
						<div class="boton btn-success">Confirmar</div>
						<div class="boton btn-danger">Eliminar</div>
					</div>
				</div>
				<div class="op">
					<div class="centrar">
						<div class="elem" id="user">USUARIO</div>
						<div class="elem" id="producto">papadddddds</div>
						<div class="elem" id="cant">3</div>
						<div class="boton btn-success">Confirmar</div>
						<div class="boton btn-danger">Eliminar</div>
					</div>
				</div>
				<div class="op">
					<div class="centrar">
						<div class="elem" id="user">USUARIO</div>
						<div class="elem" id="producto">papadddddds</div>
						<div class="elem" id="cant">3</div>
						<div class="boton btn-success">Confirmar</div>
						<div class="boton btn-danger">Eliminar</div>
					</div>
				</div>
				<div class="op">
					<div class="centrar">
						<div class="elem" id="user">USUARIO</div>
						<div class="elem" id="producto">papadddddds</div>
						<div class="elem" id="cant">3</div>
						<div class="boton btn-success">Confirmar</div>
						<div class="boton btn-danger">Eliminar</div>
					</div>
				</div>
	
	
			</div>
	
		</div>
	</body>
</html>
