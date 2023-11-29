<?php
require_once '../../config/conexion.php';

class Animal extends Conexion
{

    //Atributos
    protected static $conexion;

    private $idAnimal =null;

    private $nombre = null;

    private $numero_arete = null;

    private $fecha_nacimiento = null;

    private $raza = null;

    private $peso = null;

    private $colores_caracteristicas = null;

    private $observaciones = null;

    private $estado = null;

    //constructores
    public function __construct()
    {
    }

    //Getter y setters

    public function getIdAnimal()
    {
        return $this->idAnimal;
    }
    public function setIdAnimal($idAnimal)
    {
        $this->idAnimal = $idAnimal;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getNumero_arete()
    {
        return $this-> numero_arete;
    }
    public function setNumero_arete($numero_arete)
    {
        $this->numero_arete = $numero_arete;
    }
    public function getFecha_nacimiento()
    {
        return $this->fecha_nacimiento;
    }
    public function setFecha_nacimiento($fecha_nacimiento)
    {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }
    public function getRaza()
    {
        return $this->raza;
    }
    public function setRaza($raza)
    {
        $this->raza = $raza;
    }
    public function getPeso()
    {
        return $this->peso;
    }
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }
    public function getColores_caracteristicas()
    {
        return $this->colores_caracteristicas;
    }
    public function setColores_caracteristicas($colores_caracteristicas)
    {
        $this->colores_caracteristicas = $colores_caracteristicas;
    }
    public function getObservaciones()
    {
        return $this->observaciones;
    }
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    }
    
    public function getEstado()
    {
        return $this->estado;
    }
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }



    //Metodos de la clase

    //conexion a base de datos
    public function getConexion()
    {
        self::$conexion = Conexion::conectar();
    }
    //desconexion con base de datos
    public function desconectar()
    {
        self::$conexion = null;
    }
    public function concatenarID(){
     
    }

    //funcion para sacar a todos los de la db
    public function listarDB(){
        $query = "SELECT * FROM animal";
        $lista = array();
        try {
            self::getConexion();
            $resultado = self::$conexion->prepare($query);
            $resultado->execute();
            self::desconectar();
            foreach ($resultado->fetchAll() as $encontrado) {
                $animal = new Animal();
                $animal ->setIdAnimal($encontrado["id_animal"]);
                $animal ->setNumero_arete($encontrado["numero_arete"]);
                $animal ->setNombre($encontrado["nombre"]);
                $animal ->setFecha_nacimiento($encontrado["fecha_nacimiento"]);
                $animal ->setRaza($encontrado["raza"]);
                $animal ->setPeso($encontrado["peso"]);
                $animal ->setColores_caracteristicas($encontrado["colores_caracteristicas"]);
                $animal ->setObservaciones($encontrado["observaciones"]);
                $lista[] = $animal;
            }
            return $lista;
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error ".$Exception->getCode( ).": ".$Exception->getMessage( );;
            return json_encode($error);
        }
    }
    
    public function guardarEnDb() {
            $query = "INSERT INTO `animal` ( `nombre`, `fecha_nacimiento`, `raza`, `peso`, `numero_arete`, `colores_caracteristicas`, `observaciones`) VALUES (:nombre,:fecha_nacimiento,:raza,:peso,:numero_arete, :colores_caracteristicas, :observaciones)";
            try {
                self::getConexion();
                $nombre = $this->getNombre();
                $fechaNacimiento = $this->getFecha_nacimiento();
                $raza = $this->getRaza();
                $peso = $this->getPeso();
                $numeroArete = $this->getNumero_arete();
                $coloresCaracteristicas = $this->getColores_caracteristicas();
                $observaciones = $this->getObservaciones();


                
                $resultado = self::$conexion->prepare($query);
                $resultado->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                $resultado->bindParam(':fecha_nacimiento', $fechaNacimiento, PDO::PARAM_STR);
                $resultado->bindParam(':raza', $raza, PDO::PARAM_STR);
                $resultado->bindParam(':peso', $peso, PDO::PARAM_STR);
                $resultado->bindParam(':numero_arete', $numeroArete, PDO::PARAM_STR);
                $resultado->bindParam(':colores_caracteristicas', $coloresCaracteristicas, PDO::PARAM_STR);
                $resultado->bindParam(':observaciones', $observaciones, PDO::PARAM_STR);
                
            $resultado->execute();
            self::desconectar();
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            return json_encode($error);
        }
    }

    public function verificarExistenciaDb(){
        $query = "SELECT * FROM animal where numero_arete=:numero_arete";
        
        try {
         self::getConexion();
            $resultado = self::$conexion->prepare($query);		
            $numero= $this->getNumero_arete();
            $resultado->bindParam(":numero_arete",$numero,PDO::PARAM_STR);
            $resultado->execute();
            self::desconectar();
            $encontrado = false;
            foreach ($resultado->fetchAll() as $reg) {
                $encontrado = true;
            }
            return $encontrado;
           } catch (PDOException $Exception) {
               self::desconectar();
               $error = "Error ".$Exception->getCode().": ".$Exception->getMessage();
             return $error;
           } 
    }
    public function listarAnimales(){
        $query = "SELECT id_animal, numero_arete FROM animal";
        try {
            self::getConexion();
            $resultado = self::$conexion->prepare($query);
            $resultado->execute();
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error ".$Exception->getCode( ).": ".$Exception->getMessage( );;
            return json_encode($error);
        }
    }
}

?>