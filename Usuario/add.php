<?php
include('../config/config.php');
include('Usuario.php');
if (isset($_POST) && !empty($_POST)){
  /* SI EXISTE UN REGISTRO Y NO ESTA VACIO */

  $data= new recetas(); /* LLAMO A MI LIBRO DE RECETAS */

 
  $save = $data-> save($_POST); /* UTILICE LA RECETA SAVE */
  if($save){
    $mensaje= '<div class="alert alert-success" role="alert">Usuario creado correctamente </div> ';
  }else{
    $mensaje='<div class="alert alert-danger" role="alert">Error al crear el usuario </div> ';
  }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
<body>
<?php include('../menu.php') ?>

<?php 
      if (isset($mensaje)){
        echo $mensaje;
      }
?>
<!-- CREAN FORMULARIO -->
<form method="POST" enctype="multipart/form-data" class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nombre</label>
    <input type="text" name="Nombre" id="Nombre"   class="form-control" >
    
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Edad</label>
    <input type="text" name="Edad" id="Edad"   class="form-control" >
    
  </div>
    <label for="inputEmail4" class="form-label">Correo</label>
    <input type="email" name="Correo" id="Correo"   class="form-control" >
    
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Telefono</label>
    <input type="text" name="Telefono" id="Telefono"  class="form-control" >
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Expectativas</label>
    <input type="text" name="Expectativas" id="Expectativas" class="form-control"  >
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Preguntas</label>
    <input type="text" name="Preguntas" id="Preguntas" class="form-control"  >
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Utilidad</label>
    <input type="text" name="Utilidad" id="Utilidad" class="form-control" >
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Satisfaccion</label>
    <input type="text" name="Satisfaccion" id="Satisfaccion" class="form-control" >
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Recomendacion</label>
    <input type="text" name="Recomendacion" id="Recomendacion" class="form-control" >
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Comentarios</label>
    <input type="text" name="Comentarios" id="Comentarios" class="form-control" >
  </div>
  
  <div class="col-12">
    <button  class="btn btn-primary">Registrar</button>
  </div>
</form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>