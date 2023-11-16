<?php

require_once "../../config/conexion.php";

class Vacuna extends Conexion
{

    //Atributos de la clase
    protected static $conexion;

    private $id =null;

    private $idVacuna =null;

    private $nombreVacuna = null;

    private $descripcion = null;

    private $fechaVencimiento = null;

    private $lote = null;

    private $observaciones = null;

    //metodos de la clase

    public function __construct()
    {
    }

    //getters y setters

    public function getIdVacuna()
    {
        return $this->idVacuna;
    }

    public function setIdVacuna($idVacuna)
    {
        $this->idVacuna = $idVacuna;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNombreVacuna()
    {
        return $this->nombreVacuna;
    }

    public function setNombreVacuna($nombreVacuna)
    {
        $this->nombreVacuna = $nombreVacuna;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getFechaVencimiento()
    {
        return $this->fechaVencimiento;
    }

    public function setFechaVencimiento($fechaVencimientoas)
    {
        $this->fechaVencimiento = $fechaVencimiento;
    }

    public function getLote()
    {
        return $this->lote;
    }

    public function setLote($lote)
    {
        $this->lote = $lote;
    }

    public function getObservaciones()
    {
        return $this->lote;
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
        $query = "SELECT * FROM vacuna";
        $lista = array();
        try {
            self::getConexion();
            $resultado = self::$conexion->prepare($query);
            $resultado->execute();
            self::desconectar();
            foreach ($resultado->fetchAll() as $encontrado) {
                $vacuna = new Vacuna();
                $prefijo ="VC";
                $vacuna->setId($encontrado["id_vacuna"]);
                $id=$vacuna->getId();
                $id_personalizado = $prefijo . str_pad($id, 2, '0', STR_PAD_LEFT);
                $vacuna->setIdVacuna($id_personalizado);
                $vacuna->setNombreVacuna($encontrado["nombre_vacuna"]);
                $vacuna->setDescripcion($encontrado["descripcion"]);
                $vacuna->setFechaVencimiento($encontrado["fecha_vencimiento"]);
                $vacuna->setLote($encontrado["lote"]);
                $vacuna->setObservaciones($encontrado["observaciones"]);
                $lista[] = $vacuna;
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
        $query = "INSERT INTO `vacuna`(`nombre_vacuna`, `descripcion`, `fecha_vencimiento`, `lote`, `observaciones` ) VALUES (:nombre_vacuna,:descripcion,:fecha_vencimiento,:lote, :observaciones)";
        try {
            self::getConexion();
            $nombre_vacuna = $this->getNombreVacuna();
            $descripcion = $this->getDescripcion();
            $fecha_vencimiento = $this->getFechaVencimiento();
            $lote = $this->getLote();
            $observaciones = $this->getObservaciones();


            $resultado = self::$conexion->prepare($query);
            $resultado->bindParam(":nombre_Vacuna", $nombre_vacuna, PDO::PARAM_STR);
            $resultado->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
            $resultado->bindParam(":fecha_vencimiento", $fecha_vencimiento, PDO::PARAM_STR);
            $resultado->bindParam(":lote", $lote, PDO::PARAM_STR);
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
            $query = "SELECT * FROM vacuna where nombre_vacuna=:nombre_vacuna";
         try {
             self::getConexion();
                $resultado = self::$conexion->prepare($query);		
                $nombre_vacuna= $this->getNombreVacuna();	
                $resultado->bindParam(":nombre_vacuna",$nombre_vacuna,PDO::PARAM_STR);
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
        $nombre = $this->getNombreVacuna();
        $query = "DELETE FROM vacuna WHERE `vacuna`.`nombre_vacuna` = :nombre_vacuna";
        try {
            self::getConexion();
            $resultado = self::$conexion->prepare($query);
            $resultado->bindParam(":nombre_vacuna", $nombre, PDO::PARAM_STR);
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


    public function actualizarVacuna(){
        $query = "update vacuna set descripcion=:descripcion,sintomas=:sintomas,tratamiento=:tratamiento where nombre_Vacuna=:nombre_Vacuna";
        try {
            self::getConexion();
            $nombreVacuna = $this->getNombreVacuna();
            $descripcion=$this->getDescripcion();
            $sintomas=$this->getSintomas();
            $tratamiento=$this->getTratamiento();
            $resultado = self::$conexion->prepare($query);
            $resultado->bindParam(":nombre_Vacuna",$nombreVacuna, PDO::PARAM_STR);
            $resultado->bindParam(":descripcion",$descripcion,PDO::PARAM_STR);
            $resultado->bindParam(":sintomas",$sintomas,PDO::PARAM_STR);
            $resultado->bindParam(":tratamiento",$tratamiento,PDO::PARAM_STR);
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


}


?>