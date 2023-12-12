<?php

require_once '../../model/produccion/produccion.php';

switch ($_GET['op']) {
    case 'listar_tabla':
        $produccion_db = new Produccion();
        $registros = $produccion_db->listarDb();
        $datos = array();
        foreach ($registros as $registro) {
            $datos[] = array(
                "0" => $registro->getIdPrefijo(),  
                "1" => $registro->getFechaSemana(),
                "2" => $registro->getNumero_Semana(),
                "3" => $registro->getKilosProducidos(),
                "4" => $registro->getCalidad_Bacteriologica(),
                "5" => $registro->getCelulas_Somaticas(),
                "6" => $registro->getPorcentaje_Grasa(),
                "7" => $registro->getPorcentaje_Proteina(),
                "8" => $registro->getPunto_Crioscopico(),
                "9" => $registro->getPresencia_inhibidores(),
                "10" => '<button class="btn btn-danger" onclick="eliminar(\'' . $registro->getid_Produccion_Semanal() . '\')">Eliminar</button>'
            );
        }
        $resultados = array(
            "sEcho" => 1,
            ##informacion para datatables
            "iTotalRecords" => count($datos),
            ## total de registros al datatable
            "iTotalDisplayRecords" => count($datos),
            ## enviamos el total de registros a visualizar
            "aaData" => $datos
        );
        echo json_encode($resultados);
        break;

    case 'insert':

        
        $fechaSemana = isset($_POST["FechaSemana"]) ? trim($_POST["FechaSemana"]) : "";
         $litros = isset($_POST["litros"]) ? trim($_POST["litros"]) : "";
        $calidad_bacteriologica = isset($_POST["calidad_bacteriologica"]) ? trim($_POST["calidad_bacteriologica"]) : "";
        $porcentaje_grasa = isset($_POST["porcentaje_grasa "]) ? trim($_POST["porcentaje_grasa"]) : "";
        $porcentaje_proteina = isset($_POST["porcentaje_proteina "]) ? trim($_POST["porcentaje_proteina"]) : "";
        $punto_crioscopico = isset($_POST["punto_crioscopico "]) ? trim($_POST["punto_crioscopico"]) : "";
        $presencia_inhibidores = isset($_POST["presencia_inhibidores"]) ? trim($_POST["presencia_inhibidores"]) : "";
       

        $produccion = new ProduccionSem();
        $produccion->setFechaProduccion($fechaproduccion);
        $produccion->setKilosProducidos($litros);
        $produccion->setCalidad_Bacteriologica($calidad_bacteriologica);
        $produccion->setPorcentaje_Grasa($porcentaje_grasa);
        $produccion->setPorcentaje_Proteina($porcentaje_proteina);
        $produccion->setPunto_Crioscopico($punto_crioscopico);
        $produccion->setPresencia_inhibidores($presencia_inhibidores);
        $encontrado = $produccion->verificarExistenciaDb();
        if ($encontrado == false) {
            $produccion->setFechaProduccion($fechaproduccion);
            $produccion->setKilosProducidos($litros);
            $produccion->setCalidad_Bacteriologica($calidad_bacteriologica);
            $produccion->setPorcentaje_Grasa($porcentaje_grasa);
            $produccion->setPorcentaje_Proteina($porcentaje_proteina);
            $produccion->setPunto_Crioscopico($punto_crioscopico);
            $produccion->setPresencia_inhibidores($presencia_inhibidores);
            $produccion->guardarEnDb();
            if ($produccion->verificarExistenciaDb()) {
                echo 1; // se guardo exitosamente
            } else {
                echo 3; //problema con guardar
            }
        } else {

            echo 2; // ya existe
        }
        break;

    case "eliminar":
        $produccion = new produccionSem();
        $produccion -> setid_Produccion_Semanal(trim($_POST["idRegistro"]));
        $respuesta = $produccion->eliminar();
        echo $respuesta;
        break;

}
?>