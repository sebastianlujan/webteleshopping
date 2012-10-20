
<!-- saved from url=(0093)file:///C:/Users/MARY/Desktop/ultima/teleshopping%20(2)/teleshopping/productos/productos.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Agregar Usuario</title>
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
      <li class="topbar-item"><a href="">Agregar Usuario</a></li>
      <li class="topbar-item"><a href="">Lista de Usuarios</a></li>
     
      
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
          <label class="control-label" for="inputError">Email:</label>
          <div class="controls">
            <input type="text" id="inputError">
            <span class="help-inline"></span>
          </div>
      </div>
      <div class="control-group info">
          <label class="control-label" for="inputError">Apellidos:</label>
          <div class="controls">
            <input type="text" id="inputError">
            <span class="help-inline"></span>
          </div>
      </div>
      <div class="control-group info">
          <label class="control-label" for="inputError">Nombre:</label>
          <div class="controls">
            <input type="text" id="inputError">
            <span class="help-inline"></span>
          </div>
      </div>
      <div class="control-group info">
          <label class="control-label" for="inputError">Telefono:</label>
          <div class="controls">
            <input type="text" id="inputError">
            <span class="help-inline"></span>
          </div>
      </div>
      <div class="control-group info">
          <label class="control-label" for="inputError">Fecha de Nacimiento:</label>
          <div class="controls">
            <input type="text" id="inputError">
            <span class="help-inline"></span>
          </div>
      </div>
      <div class="control-group info">
          <label class="control-label" for="inputError">Tipo de Documento:</label>
          <div class="controls">
            <select>
                <option value="figura">Cedula de Identitdad:</option>
                <option value="belleza">Pasaporte:</option>
            </select>
            <span class="help-inline"></span>
          </div>
      </div>
      <div class="control-group info">
          <label class="control-label" for="inputError">Numero de Documento:</label>
          <div class="controls">
            <input type="text" id="inputError">
            <span class="help-inline"></span>
          </div>
      </div>
      <div class="control-group info">
          <label class="control-label" for="inputError">Celular:</label>
          <div class="controls">
            <input type="text" id="inputError">
            <span class="help-inline"></span>
          </div>
      </div>
      <div class="control-group info">
          <label class="control-label" for="inputError">Calle de Domicilio:</label>
          <div class="controls">
            <input type="text" id="inputError">
            <span class="help-inline"></span>
          </div>
      </div>
      <div class="control-group info">
          <label class="control-label" for="inputError">Categoria:</label>
          <div class="controls">
            <select>
                <OPTION VALUE=''>Seleccione...</OPTION>
                <OPTION VALUE='Artigas' >Artigas</OPTION>
                <OPTION VALUE='Salto' >Salto</OPTION>
                <OPTION VALUE='Paysandú' >Paysandú</OPTION>
                <OPTION VALUE='Río Negro' >Río Negro</OPTION>
                <OPTION VALUE='Soriano' >Soriano</OPTION>
                <OPTION VALUE='Colonia' >Colonia</OPTION>
                <OPTION VALUE='San José' >San José</OPTION>
                <OPTION VALUE='Canelones' >Canelones</OPTION>
                <OPTION VALUE='Montevideo' >Montevideo</OPTION>
                <OPTION VALUE='Flores' >Flores</OPTION>
                <OPTION VALUE='Florida' >Florida</OPTION>
                <OPTION VALUE='Durazno' >Durazno</OPTION>
                <OPTION VALUE='Lavalleja' >Lavalleja</OPTION>
                <OPTION VALUE='Maldonado' >Maldonado</OPTION>
                <OPTION VALUE='Rocha' >Rocha</OPTION>
                <OPTION VALUE='Treinta y Tres' >Treinta y Tres</OPTION>
                <OPTION VALUE='Cerro Largo' >Cerro Largo</OPTION>
                <OPTION VALUE='Tacuarembó' >Tacuarembó</OPTION>
                <OPTION VALUE='Rivera' >Rivera</OPTION>
            </select>
            <span class="help-inline"></span>
          </div>
      </div>
       <div class="control-group info">
          <label class="control-label" for="inputError">Ciudad/Localidad:</label>
          <div class="controls">
            <input type="text" id="inputError" class="video">
            <span class="help-inline"></span>
          </div>
      </div>
       <div class="control-group info">
          <label class="control-label" for="inputError">Barrio:</label>
          <div class="controls">
            <input type="text" id="inputError" class="video">
            <span class="help-inline"></span>
          </div>
      </div>
       <div class="control-group info">
          <label class="control-label" for="inputError">Numero:</label>
          <div class="controls">
            <input type="text" id="inputError" class="video">
            <span class="help-inline"></span>
          </div>
      </div
        <div class="control-group info">
          <label class="control-label" for="inputError">Obseervaciones:</label>
          <div class="controls">
            <input type="textarea" id="inputError" value="Describa el Producto...">
            <span class="help-inline"></span>
          </div>
      </div>
       <div class="control-group info">
          <label class="control-label" for="inputError">Codigo Postal:</label>
          <div class="controls">
            <input type="text" id="inputError" class="video">
            <span class="help-inline"></span>
          </div>
      </div>
      

          <input type="submit" value="Registrar" class="btn btn-primary" id="btn-form">
          </form>








       

		

</div></body></html>