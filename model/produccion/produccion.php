<?php

require_once "../../config/conexion.php";

class produccion extends Conexion
{

    //Atributos de la clase
    protected static $conexion;

    private $areteAnimal = null;

    private $idProduccion = null;

    private $idAnimal= null;

    private $fechaProduccion = null;

    private $kilosProducidos = null;

    private $idPrefijo = null;

    private $observaciones = null;


    //metodos de la clase

    public function __construct()
    {

    }

    //getters y setters

    public function getId_Animal ()
    {
        return $this->id_animal ;
    }

    public function setId_animal ($id_animal)
    {
        $this->idAnimal  = $idAnimal ;
    } 
    
    public function getIdProduccion ()
    {
        return $this->getIdProduccion; 
    
    }

    public function setIdProduccion ($idProduccion )
    {  
        $this->getIdProduccion  = $IdProduccion ;
    } 


    public function getFechaProduccion ()
    {
        return $this->setFechaProduccion;
    }

    public function setFechaProduccion ($fechaProduccion )
    {
        $this->getFechaProduccion  = $fecha_Produccion;
    }

     
    public function getLitros ()
    {
        return $this->litros ;
    }

    public function getIdPrefijo()
    {
        return $this->idPrefijo;
    }

    public function setIdPrefijo($idPrefijo)
    {
        $this->idPrefijo = $idPrefijo;
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
        $query = "SELECT * FROM produccion
       INNER JOIN animal ON produccion.id_vaca = animal.id_animal";
        $lista = array();
        try {
            self::getConexion();
            $resultado = self::$conexion->prepare($query);
            $resultado->execute();
            self::desconectar();
            foreach ($resultado->fetchAll() as $encontrado) {
                $Produccion = new produccion();
                $prefijo = "PR";
                $Produccion->setIdProduccion($encontrado["idProduccion"]);
                $id_personalizado = $prefijo . str_pad($Produccion->getIdProduccion(), 2, '0', STR_PAD_LEFT);
                $Produccion->setIdPrefijo($id_personalizado);
                $Produccion->setAreteAnimal($encontrado["numero_arete"]);
                $Produccion->setIdAnimal($encontrado["id_vaca"]);
                $Produccion->setFechaProduccion($encontrado["fecha"]);
                $Produccion->setKilosProducidos($encontrado["litros"]);
                $Produccion->setObservaciones($encontrado["observaciones"]);
                $lista[] = $Produccion;
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
        $query = "INSERT INTO `Produccion` (`id_animal`,`fecha_Produccion`, `observaciones`, `litros`) VALUES (:id_animal, :fecha_Produccion, :observaciones, :litros)";
        try {
            self::getConexion();
          
            $id_animal = $this->getIdAnimal();
            $fecha_Produccion = $this->getFechaProduccion();
            $observaciones = $this->getObservaciones();
            $kilosProducidos = $this->getKilosProducidos();

            $resultado = self::$conexion->prepare($query);
            $resultado->bindParam(":id_animal", $id_animal, PDO::PARAM_STR);
            $resultado->bindParam(":fecha_Produccion", $fecha_Produccion, PDO::PARAM_STR);
            $resultado->bindParam(":observaciones", $observaciones, PDO::PARAM_STR);
            $resultado->bindParam(":litros", $kilosProducidos, PDO::PARAM_STR);

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
        $query = "SELECT * FROM produccion where produccion.id_animal=:id_animal  and fecha_produccion =:fecha_produccion";
        try {
            self::getConexion();
            $resultado = self::$conexion->prepare($query);
            $idAnimal = $this->getIdAnimal();
            $fechaProduccion = $this->getFechaProduccion();
            $resultado->bindParam(":id_animal", $idAnimal, PDO::PARAM_STR);
            $resultado->bindParam(":fecha_produccion", $fechaProduccion, PDO::PARAM_STR);
            $resultado->execute();
            self::desconectar();
            $encontrado = false;
            foreach ($resultado->fetchAll() as $reg) {
                echo("we");
                $encontrado = true;
            }
            return $encontrado;
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            return $error;
        }
    }

    public function verificarExistenciaModificar()
    {

         $idProduccion = $this->getIdProduccion();
        $query = "DELETE FROM Produccion WHERE `Produccion`.`id_Produccion` = :id_Produccion";
        try {
            self::getConexion();
            $resultado = self::$conexion->prepare($query);
            $resultado->bindParam(":id_Produccion", $idProduccion, PDO::PARAM_STR);
         
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
        $idProduccion = $this->getIdProduccion();
        $query = "DELETE FROM produccion WHERE `produccion`.`idProduccion` = :idProduccion";
        try {
            self::getConexion();
            $resultado = self::$conexion->prepare($query);
            $resultado->bindParam(":idProduccion", $idProduccion, PDO::PARAM_STR);
            $resultado->execute();
            self::desconectar();
            if (!(self::verificarExistenciaModificar())) {
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


    public function actualizarProduccion()
    {
        $query = "UPDATE Produccion
        SET sintomas_animal = :sintomas_animal,
            estado_animal = :estado_animal,
            observaciones = :observaciones
        WHERE enfermedad_animal.id_enfermedad = (
                SELECT id_enfermedad 
                FROM enfermedad 
                WHERE nombre_enfermedad = :nombre_enfermedad
            ) 
            AND enfermedad_animal.id_animal = (
                SELECT id_animal 
                FROM animal 
                WHERE numero_arete = :numero_arete
            ) 
            AND fecha_diagnostico = :fecha_diagnostico";
        try {
            self::getConexion();
            $sintomas = $this->getSintomasAnimal();
            $estadoAnimal = $this->getEstadoAnimal();
            $observaciones = $this->getObservaciones();
            $nombreEnfermedad = $this->getNombreEnfermedad();
            $areteAnimal = $this->getAreteAnimal();
            $fechaDiagnostico = $this->getFechaDiagnostico();
            $resultado = self::$conexion->prepare($query);
            $resultado->bindParam(":estado_animal", $estadoAnimal, PDO::PARAM_STR);
            $resultado->bindParam(":sintomas_animal", $sintomas, PDO::PARAM_STR);
            $resultado->bindParam(":observaciones", $observaciones, PDO::PARAM_STR);
            $resultado->bindParam(":nombre_enfermedad", $nombreEnfermedad, PDO::PARAM_STR);
            $resultado->bindParam(":numero_arete", $areteAnimal, PDO::PARAM_STR);
            $resultado->bindParam(":fecha_diagnostico", $fechaDiagnostico, PDO::PARAM_STR);
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

    public function obtenerCantidadProduccion() {
        $query = "SELECT COUNT(*) as cantidad FROM produccion";

        try {
            self::getConexion();
            $resultado = self::$conexion->prepare($query);
            $resultado->execute();
            $cantidad = $resultado->fetchColumn();
            self::desconectar();

            return $cantidad;
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            return json_encode(['error' => $error]);
        }
    }

    public function obtenerSumaIngresos() {
        $query = "SELECT SUM(litros) as suma FROM produccion";

        try {
            self::getConexion();
            $resultado = self::$conexion->prepare($query);
            $resultado->execute();
            $suma = $resultado->fetchColumn();
            self::desconectar();

            return $suma;
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            return json_encode(['error' => $error]);
        }
    }


}


?>