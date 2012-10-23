<html>
	<head>
		<title>Slider Medio</title>
		<link href="css/bootstrap.css" rel="stylesheet">
	 	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	  	<link rel="stylesheet" type="text/css" href="css/styles.css">
	
	
	  	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	  	<script type="text/javascript">
		     $(document).on("ready",function(){
		
		     	$("#pagprincipal").toggleClass("seleccionado");
		     	 $("#slidermedio").toggleClass("seleccionado");
		     });
	
	
	  	</script>
	</head>
	<body>
	
	<?php

		require_once('leftbar.php');
	    require_once('pagPrincipalTop-bar.php');
	   	require_once('usrbar.php');

	   ?>
	
	
	
		
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
	                <input type="submit" value="Cargar" class="btn btn-primary" id="btn-form">
	      </form>
	
	  </div>
	    	
	</body>
</html>