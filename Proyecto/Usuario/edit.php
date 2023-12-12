<?php
include('../config/config.php');
include('Usuario.php');
$p = new recetas();
$data = mysqli_fetch_object($p->getOne($_GET['id']));


if (isset($_POST) && !empty($_POST)){
  
  $update = $p->update($_POST);
  if ($update){
    $error = '<div class="alert alert-success" role="alert">Usuario modificado correctamente</div>';
  }else{
    $error = '<div class="alert alert-danger" role="alert" > Error al modificar un usuario </div>';
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<?php include('../menu.php') ?>

<?php
    if (isset($error)){
      echo $error;
    }
    ?>
<!-- CREAN FORMULARIO -->



<form method="POST" enctype="multipart/form-data" class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nombre</label>
    <input type="text" name="Nombre" id="Nombre"  value="<?= $data->Nombre?>" class="form-control" >
    <input type="hidden" name="id" id="id" value="<?= $data->id ?>" />
    
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Edad</label>
    <input type="text" name="Edad" id="Edad"  value="<?= $data->Edad?>" class="form-control" >
    
  </div>
    <label for="inputEmail4" class="form-label">Correo</label>
    <input type="email" name="Correo" id="Correo" value="<?= $data->Correo?>"  class="form-control" >
    
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Telefono</label>
    <input type="text" name="Telefono" id="Telefono" value="<?= $data->Telefono?>" class="form-control" >
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Expectativas</label>
    <input type="text" name="Expectativas" id="Expectativas"value="<?= $data->Expectativas?>" class="form-control"  >
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Preguntas</label>
    <input type="text" name="Preguntas" id="Preguntas"value="<?= $data->Preguntas?>" class="form-control"  >
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Utilidad</label>
    <input type="text" name="Utilidad" id="Utilidad" value="<?= $data->Utilidad?>" class="form-control" >
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Satisfaccion</label>
    <input type="text" name="Satisfaccion" id="Satisfaccion" value="<?= $data->Satisfaccion?>" class="form-control" >
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Recomendacion</label>
    <input type="text" name="Recomendacion" id="Recomendacion" value="<?= $data->Recomendacion?>" class="form-control" >
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Comentarios</label>
    <input type="text" name="Comentarios" id="Comentarios" value="<?= $data->Comentarios?>" class="form-control" >
  </div>
  
  <div class="col-12">
    <button  class="btn btn-primary">Modificar</button>
  </div>
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>