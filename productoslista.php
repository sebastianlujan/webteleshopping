

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Lista de Productos</title>

  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">

   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script type="text/javascript">
     $(document).on("ready",function(){

      $("#productos").toggleClass("seleccionado");
      
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

            <div >
        <ul class="opciones">
                <li>Liquidos<div class="boton btn-danger">Eliminar</div> <i > </i></li>
                <li>Aceites <div class="boton btn-danger">Eliminar</div><i > </i></li> 
                <li>Gasoil <div class="boton btn-danger">Eliminar</div><i > </i></li>
                <li>Liquido<div class="boton btn-danger">Eliminar</div></li>
                <li>Ruedas<div class="boton btn-danger">Eliminar</div></li>
                <li>Aceites<div class="boton btn-danger">Eliminar</div></li> 
                <li>Gasoil<div class="boton btn-danger">Eliminar</div></li>
                <li>Liquido<div class="boton btn-danger">Eliminar</div></li>
        </ul>
      </div>
</div>
</body>
</html>