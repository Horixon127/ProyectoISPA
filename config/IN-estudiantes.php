<?php
include_once("DB-Conect.php");

if(isset($_POST['userid']) && isset($_POST['names']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['numbers'])) {

    if($_POST['userid'] !== "" && $_POST['names'] !== "" && $_POST['lastname'] !== "" && $_POST['email'] !== ""  && $_POST['numbers'] !== "") {

        $userid = $_POST['userid'];
        $names = $_POST['names'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $numbers = $_POST['numbers'];

        $conexion = new Database;
        $resultado = $conexion->validarIdentificacion($userid);
        $contador = $resultado->rowCount();

    if($contador > 0){

        $confirm = 3;

    } else {

        $confirm = $conexion->insertar($userid, $names, $lastname, $email, $numbers);
            
    } 
} else {

        $confirm = 2;     }
    }    
    
    header('Location: ../Profesores/CrearEstudiante.php?confirm='.$confirm);


?>
