<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href="css/bootstrap.css" rel="stylesheet">
 	<link href="css/bootstrap-responsive.css" rel="stylesheet">


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
      <li class="topbar-item"><a href="">Slider superior</a></li>
      <li class="topbar-item"><a href="">Slider medio</a></li>
      <li class="topbar-item"><a href="">Video medio</a></li>
      <li class="topbar-item"><a href="">Producto destacado</a></li>
      <li class="topbar-item"><a href="">Catalogo</a></li>
      
    </ul>
   <ul id="contenedor-usrbar">
      <li class="topbar-item"><a href="">Usuario00000</a></li>
      <li class="topbar-item" id="fle"><a href=""><i class="icon-chevron-down"></i></a></li>
   </ul>



	<?php require_once('leftbar.html'); ?>
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

</div>    

       

		
</body>
</html>