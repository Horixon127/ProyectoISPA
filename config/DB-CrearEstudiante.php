
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

        public function datosCorredores() {
            $conexion = Database::getInstance();
            $query = $conexion->db->prepare("SELECT * from estudiantes");
            $query->execute();
            return $query;
            
        }
    }
?>      