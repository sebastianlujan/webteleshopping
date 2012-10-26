
<!-- saved from url=(0093)file:///C:/Users/MARY/Desktop/ultima/teleshopping%20(2)/teleshopping/productos/productos.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Lista de Usuarios</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap-responsive.css" rel="stylesheet">

   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script type="text/javascript">
     $(document).on("ready",function(){

      $("#usuarios, #listado").toggleClass("seleccionado");
      
     })


  </script>
</head>
<body>

	<?php require_once('leftbar.php'); ?>
   <ul id="contenedor-topbar">
      <li id="agregar" ira="usuarioagregar.php" class="topbar-item">Agregar Usuario</li>
      <li id="listado" ira="usuarioslista.php" class="topbar-item">Lista de Usuarios</li>
    </ul>
    
    <?php require_once('usrbar.php'); ?>
  



	
<!--- ---------------------------------------- CONTENEDOR 2  ---------------------------------------->
<div id="contenedor2">

           <div id="conteadmin">
        <div class="apple-btn" id="titulo1">Administradores</div>
          <div >
        <ul class="opciones-user" id="lista-admin">
                <li>pepe</li>
                <li>pepe</li> 
                <li>pepe</li>
                <li>pepe</li>
                <li>pepe</li>
                <li>pepe</li> 
                <li>pepe</li>
                <li>pepe</li>
        </ul>
      </div>        
      </div>
      <div id="conteuser">
          <div class="apple-btn" id="titulo2">Clientes</div>  
                <div >
        <ul class="opciones-user" id="lista-users">
                <li>paul</li>
                <li>paul</li> 
                <li>paul</li>
                <li>paul</li>
                <li>paul</li>
                <li>paul</li> 
                <li>paul</li>
                <li>paul</li>
                <li>paul</li>
                <li>paul</li>
                <li>paul</li> 
                <li>paul</li>
                <li>paul</li>

        </ul>
      </div> 

                
        </div>

</div>
</body>
</html>