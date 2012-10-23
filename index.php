<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		
		<title>Menu</title>
		
		<link href="css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	  	<script type="text/javascript">
		     $(document).on("ready",function(){
		
			      $("#pagprincipal").toggleClass("seleccionado");
				  $("#slidersuperior").toggleClass("seleccionado");
		      
		     });
	
	
	  	</script>
	</head>
	<body>
		<?php require_once('leftbar.php'); ?>
	
	    <ul id="contenedor-topbar">
	      <li id="slidersuperior" ira="index.php" class="topbar-item">Slider superior</li>
	      <li id="slidermedio" ira="PaginaPrincipal-SliderMedio.php" class="topbar-item">Slider medio</li>
	      <li id="videomedio" ira="PaginaPrincipal-VideoMedio.php" class="topbar-item">Video medio</li>
	      <li id="productodesta" ira="PaginaPrincipal-ProductoDestacado" class="topbar-item">Producto destacado</li>
	      <li id="catalogo" ira="PaginaPrincipal-Catalogo.php" class="topbar-item">Catalogo</li>
	    </ul>
	    
	   <?php require_once('usrbar.php'); ?>
	
	
	
		
	<!--- ---------------------------------------- CONTENEDOR 2  ---------------------------------------->
	<div id="contenedor2">
	  
	<form action=""   class="form-inline" id="formu-slider-sup"> 
	              <select>
	                  <option value="figura">Modela tu figura</option>
	                  <option value="belleza">Belleza y bienestar</option>
	                  <option value="gimnasio">Tu gimnasio</option>
	                  <option value="hogar">Tu hogar</option>
	                  <option value="cocina">Tu cocina</option>
	                  <option value="varios">Varios</option>
	                  <option value="proximamente">Proximamente</option>
	              </select> 
	                <input type="file" id="inputError" class="image"><br>
	                <button type="submit" value="Agregar" class="btn btn-primary" id="btn-form">Cargar</button>
	      </form>
	
	
	
	
	
	  </div>    
	
	       
	
			
	</body>
</html>