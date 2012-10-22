<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title>Menu</title>
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<link href="css/bootstrap.css" rel="stylesheet">
	 	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	
	
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		  <script type="text/javascript">
		     $(document).on("ready",function(){
		
		      $("#pagprincipal").toggleClass("seleccionado");
		      
		     })
		
		
		  </script>
	</head>
	<body>
	
		<?php require_once('leftbar.php'); ?>
		
	    <ul id="contenedor-topbar">
	      <li class="topbar-item"><a href="">Slider superior</a></li>
	      <li class="topbar-item"><a href="">Slider medio</a></li>
	      <li class="topbar-item"><a href="">Video medio</a></li>
	      <li class="topbar-item"><a href="">Producto destacado</a></li>
	      <li class="topbar-item"><a href="">Catalogo</a></li>
	    </ul>
	    
	   <?php require_once('usrbar.php'); ?>
	
	
	
		
	<!--- ---------------------------------------- CONTENEDOR 2  ---------------------------------------->
	<div id="contenedor2">
	  
		<form action=""   class="form-inline" id="formu-video-med"> 
	    	<div class="control-group info">
	          	<label class="control-label" for="inputError">Video Medio:</label>
	          	<div class="controls">
	            	<input type="text" id="inputError">
	            	<span class="help-inline"></span>
	          	</div>
	      	</div>
	
	                <button type="submit" value="Agregar" class="btn btn-primary" id="btn-form">Cargar</button>
	      </form>
	
	
	
	
	
	  </div>    
	
	       
	
			
	</body>
</html>