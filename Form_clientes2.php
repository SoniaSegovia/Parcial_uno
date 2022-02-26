
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ajax</title>
    <?php require_once "menu.php";?>
  </head>
  <body>
      <div class="container">
<div class="row justify-content-center">
<div class="col-6 p-5 bg-white shadow-lg rounded">
    <h3> NUEVO PRODUCTO CON AJAX</h3>
    <hr>
    <form method="post" action="">
        <div class="form-group">
            <label for="codigo">Codigo</label>
            <input id="codigo" class="form-control" type="text" Name="codigo" autocomplete= "off">
        </div>
        
         <div class="form-group">
         <label for="nombres">Nombres</label>
          <input id="nombres" class="form-control" type="text" name="nombres" autocomplete= "off">
         </div>
        
         <div class="form-group">
             <label for="apellidos">Apellidos</label>
             <input id="apellidos" class="form-control" type="text" name="apellidos" autocomplete= "off">
         </div>
        
         <div class="form-group">
             <label for="dui">DUI</label>
             <input id="dui" class="form-control" type="text" name="dui" autocomplete= "off">
         </div>
        
         <div class="form-group">
             <label for="direccion">Direccion</label>
             <input id="direccion" class="form-control" type="text" name="direccion" autocomplete= "off">
         </div>

         <div class="form-group">
             <label for="telefono">Telefono</label>
             <input id="telefono" class="form-control" type="text" name="telefono" autocomplete= "off">
         </div>

          <div class="form-group">
             <label for="email">Email</label>
             <input id="email" class="form-control" type="text" name="email" autocomplete= "off">
         </div>

         <br>
         <button class="btn btn-primary"  id="enviar" type="button">enviar</button>
    </form>
</div>     
                      </div>
                  </div>
              </div>
          </div>
      
      </div>
      <div id="Msg"></div>
    </div> 
    
    
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="Ajax/funcion.js"></script>

  </body>
