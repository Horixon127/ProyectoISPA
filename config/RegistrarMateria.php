  
<?php 
    include_once("DB-conect.php");

    if(isset($_POST['nombre'])) {
        if($_POST['nombre'] !== "") {
    
                $nombre = $_POST['nombre'];

                $conexion = new Database;
                $repeated = $conexion->db->query("SELECT nombre FROM materia WHERE nombre="."'".$nombre."'");
                $Rows = $repeated->rowCount();

                    if ($Rows <= 0) {

                $confirm = $conexion->insertarMateria($nombre);

                $confirm = 3;

                } else {

                $confirm = 2; 	}
            
            }
        }

  
    header('location: ../Profesores/CreacionDeMaterias?confirm='.$confirm);
?>