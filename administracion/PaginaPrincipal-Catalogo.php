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
				  $("#catalogo").toggleClass("seleccionado");
		      
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
	             
	                <input type="file" id="inputError" class="image"><br>
	                <input type="submit" value="Subir Catalogo" class="btn btn-primary" id="btn-form">
	      	</form>
	
	 </div>
	    
	
	       
	
			
	</body>
</html>