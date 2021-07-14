
<?php

    class Database {

        public $db;
            private static $dns = "mysql:host=localhost;dbname=colegioispa"; 
            private static $user = "root";  
            private static $pass = "";      
            private static $instance;      

        public function __construct() {
            $this->db = new PDO(self::$dns, self::$user, self::$pass);         
        }

        public static function getInstance() {
            if(!isset(self::$instance)) {
                $object = __CLASS__;
                self::$instance = new $object;
            }

                return self::$instance;
        }

        public function insertar($userid, $names, $lastname, $email, $numbers) {


            try {
                $conexion = Database::getInstance(); 
                $query = $conexion->db->prepare("INSERT INTO estudiantes (userid, names, lastname, email, numbers) VALUES (:userid, :names, :lastname, :email, :numbers)");
                $query->execute(
                    array(

                        ':userid'      => $userid,
                        ':names'       => $names,
                        ':lastname'    => $lastname,
                        ':email'       => $email,
                        ':numbers'     => $numbers

                    )
                );

                return 1; 

            } catch(PDOException $error){

                return 0; 
            }
        }
        public function insertarMateria($nombre){
            try{
                $conexion = Database::getInstance();
                $query = $conexion->db->prepare('INSERT INTO materia (nombre) VALUES (:nombre)');
                $query->execute(
                    array(
                        ':nombre' => $nombre
                        )
                    );

                return 1;

            } catch(PDOException $error){

                return 0; 

            }
        }
            public function datesMaterias(){
                $conexion=Database::getInstance();
                $query=$conexion->db->prepare('SELECT * from materia');
                $query->execute();
                return $query;
     }

        public function validarIdentificacion($userid) {
            $conexion = Database::getInstance();
            $query = $conexion->db->prepare("SELECT userid FROM estudiantes WHERE userid=:userid");
            $query->execute(
                array(
                    ":userid" => $userid
                   )
                );
            return ($query);
        }

        public function datosUsuarios() {
            $conexion = Database::getInstance();
            $query = $conexion->db->prepare("SELECT * from estudiantes");
            $query->execute();
            return $query;
            
        }

        public function registrarUsuarios($identificacion, $names, $apellidos, $username, $pxssword){

            try{
                $conexion = Database::getInstance(); 
                $query = $conexion->db->prepare("INSERT INTO users (identificacion, names, apellidos, username, pxssword ) VALUES (:identificacion, :names, :apellidos, :username, :pxssword)");
                $query->execute(
                    array(
                        ':identificacion' => $identificacion,
                        ':names' => $names,
                        ':apellidos' => $apellidos,
                        ':username' => $username,
                        ':pxssword' => $pxssword
                        )
                    );

                return 1; 

            }catch(PDOException $error){

                return 0; 

            }
        }
        
        public function editMateria($id){
            $conexion=Database::getInstance();
            $query=$conexion->db->prepare('SELECT * from materias WHERE id=:id');
            $query->execute(
                array(
                    ':id'=>$id
                )
            );
            return $query; 
        }

        public function updateMateria($id, $nombre){

            try {

                $conexion=Database::getInstance();
                $query=$conexion->db->prepare('UPDATE materias SET nombre=:nombre WHERE id=:id');
                $query->execute(
                    array(
                    ':nombre'=>$nombre,
                    ':id'=>$id  
                    )
                );

                return $query;

            } catch(PDOException $error) {
                return '5';
            }

        }
    
    
    }
?>      