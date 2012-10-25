<?php 
@session_start();
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Agregar Productos</title>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap-responsive.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
	<style type="text/css">
	</style>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script type="text/javascript">
     $(document).on("ready",function(){

      $("#productos,#agregar").toggleClass("seleccionado");
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

<form action="php/utils/agregarproducto.php" method="POST" class="bs-docs-example form-horizontal" id="form" class="formu-produ" enctype="multipart/form-data">
          

      <div class="control-group info">
          <label class="control-label" for="inputError">Nombre:</label>
          <div class="controls">
            <input name="nombre" type="text" id="inputError">
            <span class="help-inline"></span>
          </div>
      </div>
      <div class="control-group info">
          <label class="control-label" for="inputError">Precio:</label>
          <div class="controls">
            <input name="precio" type="text" id="inputError">
            <span class="help-inline"></span>
          </div>
      </div>
        <div class="control-group info">
          <label class="control-label" for="inputError">Descripcion:</label>
          <div class="controls">
            <textarea style="width:400px" name="descripcion" id="inputError" placeholder="Describa el Producto...">
            </textarea>
            <span class="help-inline"></span>
          </div>
      </div>
      <div class="control-group info">
          <label class="control-label" for="inputError">Imagen miniatura:</label>
          <div class="controls">
            <input name="miniatura" type="file" id="inputError" class="image">
            <span class="help-inline"></span>
          </div>
      </div>
      <div class="control-group info">
          <label class="control-label" for="inputError">Imagen 1:</label>
          <div class="controls">
            <input name="imagen1" type="file" id="inputError" class="image">
            <span class="help-inline"></span>
          </div>
      </div>
      <div class="control-group info">
          <label class="control-label" for="inputError">Imagen 2:</label>
          <div class="controls">
            <input name="imagen2" type="file" id="inputError" class="image">
            <span class="help-inline"></span>
          </div>
      </div>
      <div class="control-group info">
          <label class="control-label" for="inputError">Imagen 3:</label>
          <div class="controls">
            <input name="imagen3" type="file" id="inputError" class="image">
            <span class="help-inline"></span>
          </div>
      </div>
        <div class="control-group info">
          <label class="control-label" for="inputError">Video del Producto:</label>
          <div class="controls">
            <input name="url" type="text" id="inputError" class="video">
            <span class="help-inline"></span>
          </div>
      </div>

      <div class="control-group info">
          <label class="control-label" for="inputError">Categoria:</label>
          <div class="controls">
            <select name="categoria">
                <option value="figura">Modela tu figura</option>
                <option value="belleza">Belleza y bienestar</option>
                <option value="gimnasio">Tu gimnasio</option>
                <option value="hogar">Tu hogar</option>
                <option value="cocina">Tu cocina</option>
                <option value="varios">Varios</option>
                <option value="proximamente">Proximamente</option>
            </select>
            <span class="help-inline"></span>
          </div>
      </div>


          <input type="submit" value="Agregar" class="btn btn-primary" id="btn-form">
          </form>


	

</div>
</body>
</html>