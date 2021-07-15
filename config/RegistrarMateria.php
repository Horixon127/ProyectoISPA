  
<?php 
    include_once("DB-conect.php");

    if(isset($_POST['nombre'])) {
        if($_POST['nombre'] !== "") {
    
                $nombre = $_POST['nombre'];

                $conexion = new Database;
                $repeated = $conexion->db->query("SELECT nombre FROM materias WHERE nombre="."'".$nombre."'");
                $Rows = $repeated->rowCount();

                    if ($Rows <= 0) {

                $confirm = $conexion->insertarMateria($nombre);

                $confirm = 1;

                } else {

                $confirm = 3; 	}
            
            }
        }

  
    header('location: ../Profesores/CreacionDeMaterias.php?confirm='.$confirm);
?>