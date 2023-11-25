<?php 
require_once '../../config/conexion.php';

class Preno extends Conexion
{

    //Atributos
    protected static $conexion;

    private $idVaca =null;

    private $numeroArete = null;

    private $fechaDeParto = null;

    private $tipoParto = null;

    private $observaciones = null;

    //constructores
    public function __construct()
    {
    }

    //Getter y setters

    public function getIdVaca()
    {
        return $this->idVaca;
    }
    public function setIdVaca($idVaca)
    {
        $this->idVaca = $idVaca;
    }

    public function getNumeroArete()
    {
        return $this->numeroArete;
    }
    public function setNumeroArete($numeroArete)
    {
        $this->numeroArete = $numeroArete;
    }
    public function getFechaDeParto()
    {
        return $this-> fechaDeParto;
    }
    public function setFechaDeParto($fechaDeParto)
    {
        $this->fechaDeParto = $fechaDeParto;
    }
    public function getTipoParto()
    {
        return $this->tipoParto;
    }
    public function setTipoParto($tipoParto)
    {
        $this->tipoParto = $tipoParto;
    }
    public function getObservaciones()
    {
        return $this->observaciones;
    }
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
   
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
        $query = "SELECT * FROM preno";
        $lista = array();
        try {
            self::getConexion();
            $resultado = self::$conexion->prepare($query);
            $resultado->execute();
            self::desconectar();
            foreach ($resultado->fetchAll() as $encontrado) {
                $preno = new Preno();
                $preno ->setIdVaca($encontrado["id_vaca"]);
                $preno ->setNumeroArete($encontrado["numero_arete"]);
                $preno ->setFechaParto($encontrado["fecha_parto"]);
                $preno ->setTipoParto($encontrado["tipo_parto"]);
                $preno ->setObservaciones($encontrado["observaciones"]);
            
                $lista[] = $preno;
            }
            return $lista;
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error ".$Exception->getCode( ).": ".$Exception->getMessage( );;
            return json_encode($error);
        }
    }
    public function listarPreno(){
        $query = "SELECT id_vaca, numero_arete FROM preno";
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