<?php 
	@session_start();
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

      <?php 

				if(isset($_SESSION['mensaje'])){
					?>
						$("#msg-bar").html('<?php echo($_SESSION['mensaje']);?>').slideDown().delay(5000).slideUp()
					<?php 
					unset($_SESSION['mensaje']);
				}
	
			?>
      
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
        		$res = $db->Query("SELECT id,nombre FROM productos");
        		if(mysql_num_rows($res) > 0){
	        		while($producto = mysql_fetch_array($res)){
						echo '<li>'.$producto['nombre'].'<div ira=php/utils/eliminarproductos.php?id='.$producto['id'].' title="eliminar el producto" class="boton btn-danger" style="float:right;margin-right:20px;margin-top:-5px">Eliminar</div> <i > </i></li>';
					}
				}else{
					echo("<h1>No hay productos agregados en la base de datos</h1>");	
				}
        	?>
        </ul>
      </div>
</div>
</body>
</html>