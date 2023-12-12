<?php

require_once "../../config/conexion.php";

class produccionSem extends Conexion
{

    //Atributos de la clase 
    


    protected static $conexion;

    private $id_produccion_semanal = null;

    private $fechaSemana = null;

    private $numero_semana = null;

    private $kilosProducidos = null;

    private $calidad_bacteorologica = null;

    private $celulas_somaticas = null;

    private $porcentaje_grasa= null;

    private $porcentaje_proteina= null;

    private $punto_crioscopico= null;

    private $presencia_inhibidores = null;

    private $idPrefijo = null;

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
    
    public function getid_Produccion_Semanal ()
    {
        return $this->id_produccion_semanal ;
    }

    public function setid_Produccion_Semanal ($id_produccion_semanal )
    {
        $this->id_produccion_semanal  = $id_produccion_semanal ;

  }
     public function getFechaSemana ()
        {
            return $this->getfechasemana ;
        }
    
        public function setFechaSemana ($fechasemana )
        {
            $this->fechasemana  = $fechaSemana ;
        }

        public function getNumero_Semana ()
        {
            return $this->getnumero_semana ;
        }
    
        public function setNumero_Semana ($numero_semana )
        {
            $this->numero_semana  = $numero_Semana ;
        }
        public function getKilosProducidos ()
       {
         return $this->kilosProducidos ;
       }

         public function setKilosProducidos ($kilosProducidos )
       {
        $this->kilosProducidos  = $kilosProducidos ;
       }
  

    public function getCalidad_Bacteriologica ()
    {
        return $this->calidad_Bacteriologica ;
    }

    public function setCalidad_Bacteriologica ($calidad_Bacteriologica )
    {
        $this->calidad_Bacteriologica  = $calidad_Bacteriologica ;
    }


    public function getCelulas_Somaticas ()
    {
        return $this->celulas_Somaticas ;
    }

    public function setCelulas_Somaticas ($celulas_Somaticas )
    {
        $this->celulas_Somaticas = $celulas_Somaticas ;
    }

    public function getPorcentaje_Grasa()
    {
        return $this->porcentaje_Grasa;
    }

    public function setPorcentaje_Grasa($porcentaje_Grasa)
    {
        $this->porcentaje_Grasa = $porcentaje_Grasa;
    }

    public function getPorcentaje_Proteina()
    {
        return $this->porcentaje_Proteina;
    }

    public function setPorcentaje_Proteina($porcentaje_Proteina)
    {
        $this->porcentaje_Proteina = $porcentaje_Proteina;
    }

    public function getPunto_Crioscopico()
    {
        return $this->punto_Crioscopico;
    }

    public function setPunto_Crioscopico($punto_Crioscopico)
    {
        $this->punto_Crioscopico = $punto_Crioscopico;
    }

    public function getPresencia_inhibidores()
    {
        return $this->presencia_inhibidores;
    }

    public function setPresencia_inhibidores($presencia_Inhibidores)
    {
        $this->presencia_Inhibidores = $presencia_Inhibidores;
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
                $Produccion = new produccionSem();
                $prefijo = "PRSEM";
                $Produccion->setid_produccion_semanal($encontrado["id_produccion_semanal"]);
                $Produccion->setFechaSemana($encontrado["fecha_semana"]);
                $Produccion->setNumero_Semana($encontrado["numero_semana"]);
                $Produccion->setKilosProducidos($encontrado["litros"]);
                $Produccion->setCalidad_Bacteriologica($encontrado["calidad_Bacteriologica"]);
                $id_personalizado = $prefijo . str_pad($Produccion->getCalidad_Bacteriologica(), 2, '0', STR_PAD_LEFT);
                $Produccion->setIdPrefijo($id_personalizado);
                $Produccion->setCelulas_Somaticas($encontrado["celulas_somaticas"]);
                $Produccion->setPorcentaje_Grasa($encontrado["porcentaje_grasa"]);
                $Produccion->setPorcentaje_Proteina($encontrado["porcentaje_proteina"]);
                $Produccion->setPunto_Crioscopico($encontrado["punto_crioscopico"]);
                $Produccion->setPresencia_inhibidores($encontrado["presencia_inhibidores"]);
                $lista[] = $ProduccionSem;
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
        $query = "INSERT INTO `ProduccionSem` (`id_produccion_semanal`,`fecha_semana`, `numero_semana`, `litros`,`calidad_Bacteriologica`,`celulas_sematicas`,`porcentaje_grasa`,`porcentaje_proteina`,`punto_crioscopico`,`presencia_inhibidores` ) VALUES (:id_produccion_semanal,:fecha_semana, :numero_semana, :litros,:calidad_Bacteriologica,:celulas_sematicas,:porcentaje_grasa,:porcentaje_proteina,:punto_crioscopico,:presencia_inhibidores)";
        try {
            self::getConexion();
          
            $id_animal = $this->getId_Animal();
            $fechaSemana = $this->getFechaSemana();
            $numero_Semana = $this->getNumero_Semana();
            $kilosProducidos = $this->getKilosProducidos();
            $calidad_Bacteriologica = $this->getCalidad_Bacteriologica();
            $celulas_Somaticas = $this->getCelulas_Somaticas();
            $porcentaje_Grasa = $this->getPorcentaje_Grasa();
            $porcentaje_Proteina = $this->getPorcentaje_Proteina();
            $punto_Crioscopico = $this->getPunto_Crioscopico();
            $presencia_Inhibidores = $this->getPresencia_inhibidores();
           

            $resultado = self::$conexion->prepare($query);
            $resultado->bindParam(":id_animal", $id_animal, PDO::PARAM_STR);    
            $resultado->bindParam(":fecha_semana", $fecha_Semana, PDO::PARAM_STR);
            $resultado->bindParam(":numero_semana", $numero_Semana, PDO::PARAM_STR);
            $resultado->bindParam(":id_animal", $id_animal, PDO::PARAM_STR);
            $resultado->bindParam(":litros", $kilosProducidos, PDO::PARAM_STR);
            $resultado->bindParam(":calidad_bacteriologica", $calidad_bacteorologica, PDO::PARAM_STR);
            $resultado->bindParam(":celulas_somaticas", $celulas_somaticas, PDO::PARAM_STR);
            $resultado->bindParam(":porcentaje_grasa", $porcentaje_grasa, PDO::PARAM_STR);
            $resultado->bindParam(":porcentaje_proteina", $porcentaje_proteina, PDO::PARAM_STR);
            $resultado->bindParam(":punto_crioscopico", $punto_crioscopico, PDO::PARAM_STR);
            $resultado->bindParam(":presencia_inhibidores", $presencia_inhibidores, PDO::PARAM_STR);
            
            
           
           

            $resultado->execute();
            self::desconectar();
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            echo $error;
            return json_encode($error);
        }
    }

    public function eliminar()
    {
        $idProduccion = $this->getId_Animal();
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
            $areteAnimal = $this->getPorcenaje_Grasa();
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


}


?>