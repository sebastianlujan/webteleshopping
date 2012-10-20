

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Agregar Productos</title>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap-responsive.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/styles.css">


  <script type="text/javascript">
     $(document).on("ready",function(){
      $(".contenedor-leftbar li").on ("click" ,function() {
        $(".seleccionado ").removeClass("seleccionado")
        $(this).toggleClass("seleccionado")
      })
     })


  </script>
</head>
<body>


    <ul id="contenedor-topbar">
      <li class="topbar-item"><a href="">Agregar Productos</a></li>
      <li class="topbar-item"><a href="">Lista de productos</a></li>
     
      
    </ul>
   <ul id="contenedor-usrbar">
      <li class="topbar-item"><a href="">Usuario00000</a></li>
      <li class="topbar-item" id="fle"><a href=""><i class="icon-chevron-down"></i></a></li>
   </ul>



	<?php require_once('leftbar.html'); ?>
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
            <input type="textarea" id="inputError" value="Describa el Producto...">
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