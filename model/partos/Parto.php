<?php

require_once "../../config/conexion.php";

class Parto extends Conexion
{

    //Atributos de la clase
    protected static $conexion;

    private $idVaca =null;

    private $idPrefijo =null;
    private $numeroArete = null;

    private $fechaParto = null;

    private $tipoParto = null;

    private $observaciones = null;

    //metodos de la clase

    public function __construct()
    {
    }

    //getters y setters

    public function getIdPrefijo()
    {
        return $this->idPrefijo;
    }

    public function setIdPrefijo($idPrefijo)
    {
        $this->idPrefijo = $idPrefijo;
    }
    public function getNumeroArete()
    {
        return $this->numeroArete;
    }

    public function setNumeroArete($numeroArete)
    {
        $this->numeroArete = $numeroArete;
    }

    public function getIdVaca()
    {
        return $this->idVaca;
    }

    public function setIdVaca($idVaca)
    {
        $this->idVaca = $idVaca;
    }

    public function getFechaParto()
    {
        return $this->fechaParto;
    }

    public function setFechaParto($fechaParto)
    {
        $this->fechaParto = $fechaParto;
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


    //metodos de conexion

    public function getConexion()
    {
        self::$conexion = Conexion::conectar();
    }

    public function desconectar()
    {
        self::$conexion = null;
    }




    //metodos para los datos

    public function concatenarID(){
     
    }


    public function listarDB()
    {
        $query = "SELECT * FROM parto";
        $lista = array();
        try {
            self::getConexion();
            $resultado = self::$conexion->prepare($query);
            $resultado->execute();
            self::desconectar();
            foreach ($resultado->fetchAll() as $encontrado) {
                $parto = new Parto();
                $prefijo ="PA";
                $parto->setIdVaca($encontrado["id_vaca"]);
                $id_personalizado = $prefijo . str_pad($parto->getIdVaca(), 2, '0', STR_PAD_LEFT);
                $parto->setNumeroArete($id_personalizado);
                $parto->setfechaParto($encontrado["fecha_parto"]);
                $parto->setTipoParto($encontrado["tipo_parto"]);
                $parto->setObservaciones($encontrado["observaciones"]);

                $lista[] = $parto;
            }
            return $lista;
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            ;
            return json_encode($error);
        }
    }

    public function guardarEnDb()
    {
        $query = "INSERT INTO `parto`(`fecha_parto`, `tipo_parto`, `observaciones`) VALUES (:fecha_parto,:tipo_parto,:observaciones,)";
        try {
            self::getConexion();
            $fecha_parto = $this->getfechaParto();
            $tipoParto = $this->getTipoParto();
            $observaciones = $this->getObservaciones();


            $resultado = self::$conexion->prepare($query);
            $resultado->bindParam(":fecha_parto", $fecha_parto, PDO::PARAM_STR);
            $resultado->bindParam(":tipo_parto", $tipoParto, PDO::PARAM_STR);
            $resultado->bindParam(":observaciones", $observaciones, PDO::PARAM_STR);
   

            $resultado->execute();
            self::desconectar();
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            echo $error;
            return json_encode($error);
        }
    }

    public function verificarExistenciaDb(){
            $query = "SELECT * FROM parto where fecha_parto=:fecha_parto";
            
            try {
             self::getConexion();
                $resultado = self::$conexion->prepare($query);		
                $fechaParto= $this->getfechaParto();	
                $resultado->bindParam(":fecha_parto",$fechaParto,PDO::PARAM_STR);
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

    public function eliminar()
    {
        $nombre = $this->getfechaParto();
        $query = "DELETE FROM parto WHERE `parto`.`fecha_parto` = :fecha_parto";
        try {
            self::getConexion();
            $resultado = self::$conexion->prepare($query);
            $resultado->bindParam(":fecha_parto", $nombre, PDO::PARAM_STR);
            $resultado->execute();
            self::desconectar();
            if (!(self::verificarExistenciaDb())) {
                return 0;
            } else {
                return 1;
            }
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            return $error;
        }

    }


    public function actualizarparto(){
        $query = "update parto set tipoParto=:tipoParto,observaciones=:observaciones, wherefecha_parto=:fecha_parto";
        try {
            self::getConexion();
            $fechaParto = $this->getFechaParto();
            $tipoParto=$this->getTipoParto();
            $observaciones=$this->getObservaciones();

            $resultado = self::$conexion->prepare($query);
            $resultado->bindParam(":fecha_parto",$fechaParto, PDO::PARAM_STR);
            $resultado->bindParam(":tipo_parto",$tipoParto,PDO::PARAM_STR);
            $resultado->bindParam(":observaciones",$observaciones,PDO::PARAM_STR);

            self::$conexion->beginTransaction();//desactiva el autocommit
            $resultado->execute();
            self::$conexion->commit();//realiza el commit y vuelve al modo autocommit
            self::desconectar();
            return $resultado->rowCount();
        } catch (PDOException $Exception) {
            self::$conexion->rollBack();
            self::desconectar();
            $error = "Error ".$Exception->getCode().": ".$Exception->getMessage();
            echo $error;
        }
    }

    public function listarparto(){
        $query = "SELECT id_parto, fecha_parto FROM parto";
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