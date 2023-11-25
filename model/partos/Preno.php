<?php

require_once "../../config/conexion.php";

class Preno extends Conexion
{

    //Atributos de la clase
    protected static $conexion;

    private $IdParto = null;

    private $idPrefijo = null;

    private $nombreVaca = null;

    private $fecha_parto = null;

    private $numeroArete = null;

    private $tipo_parto = null;

    private $estado_vaca = null;

    private $observaciones = null;

    //metodos de la clase

    public function __construct()
    {
    }

    //getters y setters

    public function getIdParto()
    {
        return $this->IdParto;
    }

    public function setIdVacuna($IdParto)
    {
        $this->IdParto = $IdParto;
    }

    public function getIdPrefijo()
    {
        return $this->idPrefijo;
    }

    public function setIdPrefijo($idPrefijo)
    {
        $this->idPrefijo = $idPrefijo;
    }

    public function getNombreVaca()
    {
        return $this->nombreVaca;
    }

    public function setNombreVaca($nombreVaca)
    {
        $this->nombreVaca = $nombreVaca;
    }

    public function getFechaParto()
    {
        return $this->fecha_parto;
    }

    public function setFechaParto($fecha_parto)
    {
        $this->fecha_parto = $fecha_parto;
    }

    public function getNumeroArete()
    {
        return $this->numeroArete;
    }

    public function setNumeroArete($numeroArete)
    {
        $this->numeroArete = $numeroArete;
    }

    public function getTipoParto()
    {
        return $this->tipo_parto;
    }

    public function setTipoParto($tipo_parto)
    {
        $this->tipo_parto = $tipo_parto;
    }

    public function getEstadoVaca()
    {
        return $this->estado_vaca;
    }

    public function setEstadoVaca($estado_vaca)
    {
        $this->estado_vaca = $estado_vaca;
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

    public function listarDB()
    {
        $query = "SELECT * FROM Preno";
        $lista = array();
        try {
            self::getConexion();
            $resultado = self::$conexion->prepare($query);
            $resultado->execute();
            self::desconectar();
            foreach ($resultado->fetchAll() as $encontrado) {
                $preno = new Preno();
                $prefijo = "PR";
                $preno->setIdParto($encontrado["id_vaca"]);
                $id_personalizado = $prefijo . str_pad($preno->getIdParto(), 2, '0', STR_PAD_LEFT);
                $preno->setIdPrefijo($id_personalizado);
                $preno->setNombreVaca($encontrado["nombre_vaca"]);
                $preno->setFechaParto($encontrado["fecha_parto"]);
                $preno->setNumeroArete($encontrado["numero_arete"]);
                $preno->setTipoParto($encontrado["tipo_preño"]);
                $preno->setEstadoVaca($encontrado["Descripcion_Estado"]);
                $preno->setObservaciones($encontrado["observaciones"]);
                $lista[] = $preno;
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
        $query = "INSERT INTO `preno`(`nombre_vaca`, `Descripcion_Estado`, `fecha_parto`, `tipo_preño`, `observaciones`,`numero_arete` ) VALUES (:nombre_vaca,:Descripcion_Estado,:fecha_parto,:tipo_preño, :observaciones,:numero_arete)";
        try {
            self::getConexion();
            $nombre_vaca = $this->getNombreVaca();
            $estado_vaca = $this->getEstadoVaca();
            $numeroArete = $this->getNumeroArete();
            $fecha_parto = $this->getFechaPreno();
            $tipo_parto = $this->getTipoParto();
            $observaciones = $this->getObservaciones();


            $resultado = self::$conexion->prepare($query);
            $resultado->bindParam(":nombre_vaca", $nombre_vaca, PDO::PARAM_STR);
            $resultado->bindParam(":estado_vaca", $estado_vaca, PDO::PARAM_STR);
            $resultado->bindParam(":numero_arete", $numeroArete, PDO::PARAM_STR);
            $resultado->bindParam(":fecha_parto", $fecha_parto, PDO::PARAM_STR);
            $resultado->bindParam(":tipo_parto", $tipo_parto, PDO::PARAM_STR);
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

    public function verificarExistenciaDb()
    {
        $query = "SELECT * FROM preno where nombre_vaca=:nombre_vaca and numero_arete=:numero_arete";
        try {
            self::getConexion();
            $resultado = self::$conexion->prepare($query);
            $nombre_vaca = $this->getNombreVaca();
            $numero_arete = $this->getnumeroArete();
            $resultado->bindParam(":nombre_vaca", $nombre_vaca, PDO::PARAM_STR);
            $resultado->bindParam(":numero_arete", $numero_arete, PDO::PARAM_STR);
            $resultado->execute();
            self::desconectar();
            $encontrado = false;
            foreach ($resultado->fetchAll() as $reg) {
                $encontrado = true;
            }
            return $encontrado;
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            echo $error;
        }
    }

    public function verificarExistenciaId()
    {
        $query = "SELECT * FROM preno where id_vaca=:id_vaca";
        try {
            self::getConexion();
            $resultado = self::$conexion->prepare($query);
            $id = (int) substr($this->getIdPrefijo(), 3);
            $resultado->bindParam(":id_vaca", $id, PDO::PARAM_STR);
            $resultado->execute();
            self::desconectar();
            $encontrado = false;
            foreach ($resultado->fetchAll() as $reg) {
                $encontrado = true;
            }
            return $encontrado;
        } catch (PDOException $Exception) {
            self::desconectar();
  
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            return $error;
        }
    }

    public function eliminar()
    {
        $idVacuna = $this->getIdParto();
        $query = "DELETE FROM preno WHERE `preno`.`id_vaca` = :id_vaca";
        try {
            self::getConexion();
            $resultado = self::$conexion->prepare($query);
            $resultado->bindParam(":id_vaca", $idVacuna, PDO::PARAM_STR);
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


    public function actualizarVaca()
    {
        $query = "UPDATE preno set observaciones=:observaciones where nombre_vaca=:nombre_vaca and numero_arete=:numero_arete" ;
        try {
            self::getConexion();
            $nombre_vaca = $this->getNombreVaca();
            $numero_arete = $this->getnumeroArete();
            $observaciones = $this->getObservaciones();
            $resultado = self::$conexion->prepare($query);
            $resultado->bindParam(":nombre_vaca", $nombre_vaca, PDO::PARAM_STR);
            $resultado->bindParam(":numero_arete", $numero_arete, PDO::PARAM_STR);
            $resultado->bindParam(":observaciones", $observaciones, PDO::PARAM_STR);
            self::$conexion->beginTransaction(); //desactiva el autocommit
            $resultado->execute();
            self::$conexion->commit(); //realiza el commit y vuelve al modo autocommit
            self::desconectar();
            return $resultado->rowCount();
        } catch (PDOException $Exception) {
            self::$conexion->rollBack();
            self::desconectar();
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            echo $error;
        }
    }


    public function listarPreños(){
        $query = "SELECT id_vaca, nombre_vaca FROM preno";
        
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