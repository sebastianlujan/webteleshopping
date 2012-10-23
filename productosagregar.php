<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Agregar Productos</title>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap-responsive.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/styles.css">


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script type="text/javascript">
     $(document).on("ready",function(){

      $("#productos,#agregar").toggleClass("seleccionado");
      
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

<form action="" class="bs-docs-example form-horizontal" id="form" class="formu-produ">
          

      <div class="control-group info">
          <label class="control-label" for="inputError">Nombre:</label>
          <div class="controls">
            <input type="text" id="inputError">
            <span class="help-inline"></span>
          </div>
      </div>
      <div class="control-group info">
          <label class="control-label" for="inputError">Precio:</label>
          <div class="controls">
            <input type="text" id="inputError">
            <span class="help-inline"></span>
          </div>
      </div>
        <div class="control-group info">
          <label class="control-label" for="inputError">Descripcion:</label>
          <div class="controls">
            <textarea id="inputError" placeholder="Describa el Producto...">
            </textarea>
            <span class="help-inline"></span>
          </div>
      </div>
      <div class="control-group info">
          <label class="control-label" for="inputError">Imagen miniatura:</label>
          <div class="controls">
            <input type="file" id="inputError" class="image">
            <span class="help-inline"></span>
          </div>
      </div>
      <div class="control-group info">
          <label class="control-label" for="inputError">Imagen extendida:</label>
          <div class="controls">
            <input type="file" id="inputError" class="image">
            <span class="help-inline"></span>
          </div>
      </div>
        <div class="control-group info">
          <label class="control-label" for="inputError">Video del Producto:</label>
          <div class="controls">
            <input type="text" id="inputError" class="video">
            <span class="help-inline"></span>
          </div>
      </div>

      <div class="control-group info">
          <label class="control-label" for="inputError">Categoria:</label>
          <div class="controls">
            <select>
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