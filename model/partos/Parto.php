<?php 
require_once '../../config/conexion.php';

class Parto extends Conexion
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
        $query = "SELECT * FROM Parto";
        $lista = array();
        try {
            self::getConexion();
            $resultado = self::$conexion->prepare($query);
            $resultado->execute();
            self::desconectar();
            foreach ($resultado->fetchAll() as $encontrado) {
                $Parto = new Parto();
                $Parto ->setIdVaca($encontrado["id_vaca"]);
                $Parto ->setNumeroArete($encontrado["numero_arete"]);
                $Parto ->setFechaParto($encontrado["fecha_parto"]);
                $Parto ->setTipoParto($encontrado["tipo_parto"]);
                $Parto ->setObservaciones($encontrado["observaciones"]);
            
                $lista[] = $Parto;
            }
            return $lista;
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error ".$Exception->getCode( ).": ".$Exception->getMessage( );;
            return json_encode($error);
        }
    }
    public function listarParto(){
        $query = "SELECT id_vaca, numero_arete FROM Parto";
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

    public function listarPartosGrafica()
    {
        $query = "SELECT MONTH(fecha_parto) AS mes, COUNT(*) AS cantidad_partos
        FROM parto
        GROUP BY MONTH(fecha_parto)";
        try {
            self::getConexion();
            $resultado = self::$conexion->prepare($query);
            $resultado->execute();
            self::desconectar();
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            ;
            return json_encode($error);
        } 
    }

    public function obtenerPartos()
    {
        $query = "SELECT *
                  FROM parto 
                  INNER JOIN Animal ON parto.id_vaca = Animal.id_animal";

        try {
            self::getConexion();
            $resultado = self::$conexion->prepare($query);
            $resultado->execute();
            self::desconectar();
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            ;
            return json_encode($error);
        }
    }
}

?>