<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		
		<title>Enviar Newsletter</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
	
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
		     $(document).on("ready",function(){
		
		      $("#newsletter").toggleClass("seleccionado");
		      
		     });
		
		
		</script>
	</head>
	<body>
	
	<?php require_once('leftbar.php'); ?>
	
	    <ul id="contenedor-topbar">
	    	<li class="topbar-item"><a href="">Importar E-Mails:</a></li>
	      	<li class="topbar-item"><a href="">Enviar Newsletter:</a></li>
	    </ul>
	    
	<?php require_once('usrbar.php'); ?>
	
	
	
		
	<!--- ---------------------------------------- CONTENEDOR 2  ---------------------------------------->
	<div id="contenedor2">
	  
		<form action="" class="form-inline" id="formu-slider-sup"> 
                <input type="file" id="inputError" class="image">
                <br>
                <input type="submit" value="Enviar Newsletter" class="btn btn-primary" id="btn-form">
	    </form>
	
	
	
	
	
	  </div>
	       
	
			
	</body>
</html>