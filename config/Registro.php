<?php 
    include_once("DB-Conect.php");

    if(isset($_POST['identificacion']) && isset($_POST['names']) && isset($_POST['apellidos']) && isset($_POST['username']) && isset($_POST['pxssword'])&& isset($_POST['passwordconfirm'])) {
        if($_POST['identificacion'] !== "" && $_POST['names'] !== "" && $_POST['apellidos'] !== "" && $_POST['username'] !== "" && $_POST['pxssword'] !== ""&& $_POST['passwordconfirm'] !== "") {
    

                $identificacion = $_POST['identificacion'];
                $names = $_POST['names'];
                $apellidos = $_POST['apellidos'];
                
                $username = $_POST['username'];
                $pxssword = $_POST['pxssword'];
                $passwordconfirm = $_POST['passwordconfirm'];
        
                $conexion = new Database;
                $resultado = $conexion->db->query("SELECT id FROM users WHERE identificacion='$identificacion' OR username='$username'");
                $count = $resultado->rowCount();

                    if ($count > 0) {

                $confirm = 3;

                }   else    {

                $confirm = $conexion->registrarUsuarios($identificacion, $names, $apellidos, $username, $pxssword);


                }

                }   else    {

                $confirm = 2;     }

            }     
          

    header('location: ../index.php?confirm='.$confirm)
?>