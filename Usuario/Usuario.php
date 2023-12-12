<?php
include('../config/config.php'); /* LLAMAMOS CONFIG DE URLS */
include('../config/database.php'); /* CONEXION A LA BD */


class recetas{
    public $conexion; /* LLAMO LA CONEXION DE MI BASE DE DATOS */

    function __construct(){
        $db= new Database(); /* LA CONEXION A LA BD SIEMPRE SE RENUEVE O ESTE EN LINEA */
        $this->conexion = $db->connectToDatabase();
    }

    function save($params){
        $Nombre = $params['Nombre'];
        $Edad =  $params['Edad'];
        $Correo = $params['Correo'];
        $Telefono =  $params['Telefono'];
        $Expectativas =  $params['Expectativas'];
        $Preguntas =  $params['Preguntas'];
        $Utilidad =  $params['Utilidad'];
        $Satisfaccion =  $params['Satisfaccion'];
        $Recomendacion = $params['Recomendacion'];
        $Comentarios =  $params['Comentarios'];

        $insert = "INSERT INTO usuarios VALUES (NULL,'$Nombre', '$Edad', '$Correo', '$Telefono', '$Expectativas', '$Preguntas', '$Utilidad', '$Satisfaccion', '$Recomendacion', '$Comentarios')";

        return mysqli_query($this->conexion, $insert); /* ENVIAR A LA BD TODO LO QUE ESTE DENTRO DE INSERT */

    }

    function getAll(){
        $basededatos= "SELECT * FROM usuarios"; /* Traigame todos los usuarios */
        return mysqli_query($this->conexion, $basededatos);
    }

    function getOne($id){
        $sql = "SELECT * FROM usuarios WHERE id = $id";
        return mysqli_query($this->conexion, $sql);
      }
    function update($params){
        $Nombre = $params['Nombre'];
        $Edad =  $params['Edad'];
        $Correo = $params['Correo'];
        $Telefono =  $params['Telefono'];
        $Expectativas =  $params['Expectativas'];
        $Preguntas =  $params['Preguntas'];
        $Utilidad =  $params['Utilidad'];
        $Satisfaccion =  $params['Satisfaccion'];
        $Recomendacion = $params['Recomendacion'];
        $Comentarios =  $params['Comentarios'];

        $id = $params['id'];
  
        $update = " UPDATE usuarios SET Nombre='$Nombre', Edad='$Edad', Correo='$Correo', Telefono='$Telefono', Expectativas='$Expectativas', Preguntas='$Preguntas', Utilidad='$Utilidad', Satisfaccion='$Satisfaccion', Recomendacion='$Recomendacion', Comentarios='$Comentarios' WHERE id = $id";
        return mysqli_query($this->conexion, $update);
      }
  
    function delete($id){
        $eliminar= "DELETE FROM usuarios WHERE id = $id"; /* Elimine de la tabla x, el id que me */
        return mysqli_query($this->conexion, $eliminar);
    }

}



?>