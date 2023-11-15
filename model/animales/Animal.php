<?php
require_once '../../config/conexion.php';

class Animal extends Conexion
{

    //Atributos
    protected static $conexion;

    private $nombre = null;

    private $numeroArete = null;

    private $fechaNacimiento = null;

    private $raza = null;

    private $peso = null;

    private $caracteristicas = null;

    private $areteMadre = null;

    private $aretePadre = null;

    private $estado = null;

    //constructores
    public function __construct()
    {
    }

    //Getter y setters

    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getNumeroArete()
    {
        return $this-> numeroArete;
    }
    public function setNumeroArete($numeroArete)
    {
        $this->numeroArete = $numeroArete;
    }
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
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
    public function getCaracteristicas()
    {
        return $this->caracteristicas;
    }
    public function setCaracteristicas($caracteristicas)
    {
        $this->caracteristicas = $caracteristicas;
    }
    public function getAreteMadre()
    {
        return $this->areteMadre;
    }
    public function setAreteMadre($areteMadre)
    {
        $this->areteMadre = $areteMadre;
    }
    public function getAretePadre()
    {
        return $this->aretePadre;
    }
    public function setAretepadre($aretePadre)
    {
        $this->aretePadre = $aretePadre;
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
                $animal ->setNumeroArete($encontrado["numero_arete"]);
                $animal ->setNombre($encontrado["nombre"]);
                $animal ->setFechaNacimiento($encontrado["fecha_nacimiento"]);
                $animal ->setRaza($encontrado["raza"]);
                $animal ->setPeso($encontrado["peso"]);
                $animal ->setCaracteristicas($encontrado["colores_caracteristicas"]);
                $animal ->setAreteMadre($encontrado["id_madre"]);
                $animal ->setAretePadre($encontrado["id_padre"]);
                $lista[] = $animal;
            }
            return $lista;
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error ".$Exception->getCode( ).": ".$Exception->getMessage( );;
            return json_encode($error);
        }
    }
}

?>