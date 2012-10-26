<?php 
	require_once 'php/clases/dbmanager.class.php';
	
	$db = new DB_con();
?>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Lista de Productos</title>

  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">

   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script type="text/javascript">
     $(document).on("ready",function(){

      $("#productos,#listado").toggleClass("seleccionado");
      
     })


  </script>
</head>
<body>

<?php require_once('leftbar.php'); ?>
    <ul id="contenedor-topbar">
      <li id="agregar" ira="productosagregar.php" class="topbar-item">Agregar Productos</li>
      <li id="listado" ira="productoslista.php" class="topbar-item">Lista de productos</li>
     
      
    </ul>
   <?php require_once('usrbar.php'); ?>



	
<!--- ---------------------------------------- CONTENEDOR 2  ---------------------------------------->
<div id="contenedor2">

            <div >
        <ul class="opciones">
        	<?php 
        		$res = $db->Query("SELECT nombre FROM productos");
        		while($producto = mysql_fetch_array($res)){
					echo '<li>'.$producto['nombre'].'<div title="eliminar el producto" class="boton btn-danger" style="float:right;margin-right:20px;margin-top:-5px">Eliminar</div> <i > </i></li>';
				}
        	?>
        </ul>
      </div>
</div>
</body>
</html>