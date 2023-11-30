<?php 
require_once '../../config/conexion.php';

class Preno extends Conexion
{

    //Atributos
    protected static $conexion;

    private $idVacaPrenada =null;

    private $detallesGestacion = null;

    private $idServicio = null;

    private $observaciones = null;

    //constructores
    public function __construct()
    {
    }

    //Getter y setters

    public function getIdVacaPrenada()
    {
        return $this->idVacaPrenada;
    }
    public function setIdVacaPrenada($idVacaPrenada)
    {
        $this->idVacaPrenada = $idVacaPrenada;
    }

    public function getDetallesGestacion()
    {
        return $this->detallesGestacion;
    }
    public function setDetallesGestacion($detallesGestacion)
    {
        $this->detallesGestacion = $detallesGestacion;
    }
    public function getIdServicio()
    {
        return $this-> idServicio;
    }
    public function setIdServicio($idServicio)
    {
        $this->idServicio = $idServicio;
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
        $query = "SELECT * FROM Preno";
        $lista = array();
        try {
            self::getConexion();
            $resultado = self::$conexion->prepare($query);
            $resultado->execute();
            self::desconectar();
            foreach ($resultado->fetchAll() as $encontrado) {
                $Parto = new Parto();
                $Parto ->setIdVacaPrenada($encontrado["id_vaca_prenada"]);
                $Parto ->setDetalles_gestacion($encontrado["detalles_gestiacion"]);
                $Parto ->setIdServicio($encontrado["id_servicio"]);
                $Parto ->setObservaciones($encontrado["observaciones"]);
            
                $lista[] = $Preno;
            }
            return $lista;
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error ".$Exception->getCode( ).": ".$Exception->getMessage( );;
            return json_encode($error);
        }
    }
    public function listarPreno(){
        $query = "SELECT id_vaca_prenada, id_servicio FROM Preno";
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