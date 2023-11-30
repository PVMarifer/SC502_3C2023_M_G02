<?php

require_once "../../config/conexion.php";

class servicio extends Conexion
{

    //Atributos de la clase
    protected static $conexion;
    private $idServicio =null;
    private $idAnimalVaca =null;
    private $idAnimalToro =null;

    private $idPrefijo = null;

    private $id_celo = null;

    private $areteAnimal = null;
    private $tipoServicio = null;


    private $fechaDiagnostico = null;

    private $observaciones = null;


    //metodos de la clase

    public function __construct()
    {
    }

    //getters y setters
    public function setIdServicio($idServicio)
    {
        $this->idServicio = $idServicio;
    }

    public function getIdServicio()
    {
        return $this->idServicio;
    }

    public function setIdAnimalVaca($idAnimalVaca)
    {
        $this->idAnimalVaca = $idAnimalVaca;
    }

    public function getIdAnimalVaca()
    {
        return $this->idAnimalVaca;
    }

    public function setIdAnimalToro($idAnimalToro)
    {
        $this->idAnimalToro = $idAnimalToro;
    }

    public function getIdAnimalToro()
    {
        return $this->idAnimalToro;
    }

    public function setIdPrefijo($idPrefijo)
    {
        $this->idPrefijo = $idPrefijo;
    }

    public function getIdPrefijo()
    {
        return $this->idPrefijo;
    }

    public function setIdCelo($idCelo)
    {
        $this->id_celo = $idCelo;
    }

    public function getIdCelo()
    {
        return $this->id_celo;
    }

    public function setAreteAnimal($areteAnimal)
    {
        $this->areteAnimal = $areteAnimal;
    }

    public function getAreteAnimal()
    {
        return $this->areteAnimal;
    }
    public function setTipoServicio($tipoServicio)
    {
        $this->tipoServicio = $tipoServicio;
    }

    public function getTipoServicio()
    {
        return $this->tipoServicio;
    }

    public function setFechaDiagnostico($fechaDiagnostico)
    {
        $this->fechaDiagnostico = $fechaDiagnostico;
    }

    public function getFechaDiagnostico()
    {
        return $this->fechaDiagnostico;
    }

    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    }

    public function getObservaciones()
    {
        return $this->observaciones;
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
        $query = "SELECT * FROM servicio 
        INNER JOIN animal ON servicio.id_animal = animal.id_animal
        INNER JOIN celo on servicio.id_animal = celo.id_celo";
                $lista = array();
        try {
            self::getConexion();
            $resultado = self::$conexion->prepare($query);
            $resultado->execute();
            self::desconectar();
            foreach ($resultado->fetchAll() as $encontrado) {
                $servicio = new servicio();
                $prefijo = "S";
                $servicio->setIdservicio($encontrado["id_servicio"]);
                $id_personalizado = $prefijo . str_pad($servicio->getIdservicio(), 2, '0', STR_PAD_LEFT);
                $servicio->setIdPrefijo($id_personalizado);
                $servicio->setIdAnimalVaca($encontrado["id_animal"]);
                $servicio->setFechaDiagnostico($encontrado["fecha_servicio"]);
                $servicio->setTipoServicio($encontrado["tipo_servicio"]);
                $servicio->setIdCelo($encontrado["id_celo"]);
                $servicio->setObservaciones($encontrado["observaciones"]);
                $lista[] = $servicio;
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
        $query = "INSERT INTO `servicio` (`id_servicio`,`id_animal`, `id_animal`, `fecha_servicio`, `tipo_servicio`, `id_celo`, `observaciones`) VALUES (:id_celo,:id_vaca, :id_toro, :fecha_servicio, :tipo_servicio, :id_celo, :observaciones)";
    
    try {
        self::getConexion();
        $id_vaca = $this->getIdAnimalVaca();
        $fecha_servicio = $this->getFechaDiagnostico();
        $tipo_servicio = $this->getTipoServicio();
        $id_celo = $this->getIdCelo();
        $observaciones = $this->getObservaciones();

        $resultado = self::$conexion->prepare($query);
        $resultado->bindParam(":id_celo", $id_vaca, PDO::PARAM_STR);
        $resultado->bindParam(":id_animal", $id_vaca, PDO::PARAM_STR);
        $resultado->bindParam(":fecha_servicio", $fecha_servicio, PDO::PARAM_STR);
        $resultado->bindParam(":tipo_servicio", $tipo_servicio, PDO::PARAM_STR);
        $resultado->bindParam(":id_celo", $id_celo, PDO::PARAM_STR);
        $resultado->bindParam(":observaciones", $observaciones, PDO::PARAM_STR);

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
        $query = "SELECT * FROM servicio where servicio.id_animal=:id_animal and fecha_servicio =:fecha_servicio";
        try {
            self::getConexion();
            $resultado = self::$conexion->prepare($query);
            $idAnimalVaca = $this->getIdAnimalVaca();
            $fechaDiagnostico = $this->getFechaDiagnostico();
            $resultado->bindParam(":id_animal", $idAnimalVaca, PDO::PARAM_STR);
            $resultado->bindParam(":id_animal", $idAnimalToro, PDO::PARAM_STR);
            $resultado->bindParam(":fecha_servicio", $fechaDiagnostico, PDO::PARAM_STR);
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

    public function verificarExistenciaId()
    {
        $query = "SELECT * FROM servicio where id_servicio=:id_servicio";
        try {
            self::getConexion();
            $resultado = self::$conexion->prepare($query);
            $id = (int) substr($this->getIdPrefijo(), 3);
            $resultado->bindParam(":id_servicio", $id, PDO::PARAM_STR);
            $resultado->execute();
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
        $id_celo = $this->getIdCelo(); 
        $query = "DELETE FROM servicio WHERE `servicio`.`id_servicio` = :id_servicio";
        try {
            self::getConexion();
            $resultado = self::$conexion->prepare($query);
            $resultado->bindParam(":id_servicio", $id_celo, PDO::PARAM_STR);
            $resultado->execute();
            self::desconectar();
            if (!(self::verificarExistenciaId())) {
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


    


}


?>