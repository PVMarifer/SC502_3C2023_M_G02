<?php

require_once '../../model/salud/Vacuna.php';

switch ($_GET['op']) {
    case 'listar_tabla':
        $vacuna_db = new Vacuna();
        $vacunas = $vacuna_db->listarDb();
        $datos = array();
        foreach ($vacunas as $vacuna) {
            $datos[] = array(
                "0" => $vacuna->getIdPrefijo(),
                "1" => $vacuna->getNombrevacuna(),
                "2" => $vacuna->getCasaDistribuidora(),
                "3" => $vacuna->getDescripcion(),
                "4" => $vacuna->getLote(),
                "5" => $vacuna->getFechaVencimiento(),
                "6" => $vacuna->getObservaciones(),
                "7" => '<button class="btn btn-success" id="modificarDato">Modificar</button>' . '<button class="btn btn-danger" onclick="eliminar(\'' . $vacuna->getIdVacuna() . '\')">Eliminar</button>'
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

    case 'insertar':
        $nombreVacuna = isset($_POST["nombreVacuna"]) ? trim($_POST["nombreVacuna"]) : "";
        $descripcion = isset($_POST["descripcion"]) ? trim($_POST["descripcion"]) : "";
        $casaDistruidora = isset($_POST["casaDistribuidora"]) ? trim($_POST["casaDistribuidora"]) : "";
        $lote = isset($_POST["lote"]) ? trim($_POST["lote"]) : "";
        $fechaVencimiento = isset($_POST["fechaVencimiento"]) ? trim($_POST["fechaVencimiento"]) : "";
        $observaciones = isset($_POST["observaciones"]) ? trim($_POST["observaciones"]) : "";

        $vacuna = new Vacuna();
        $vacuna->setNombreVacuna($nombreVacuna);
        $vacuna->setCasaDistribuidora($casaDistruidora);
        $encontrado = $vacuna->verificarExistenciaDb();
        if ($encontrado == false) {
            $vacuna->setDescripcion($descripcion);
            $vacuna->setLote($lote); 
            $vacuna->setFechaVencimiento($fechaVencimiento);
            $vacuna->setObservaciones($observaciones);
            $vacuna->guardarEnDb();
            if ($vacuna->verificarExistenciaDb()) {
                echo 1; // se guardo exitosamente
            } else {
                echo 3; //problema con guardar
            }
        } else {
            echo 2; // ya existte
        }
        break;

    case "eliminar":
        $vacuna = new Vacuna();
        $vacuna->setIdVacuna(trim($_POST["idVacuna"]));
        $respuesta = $vacuna->eliminar();
        echo $respuesta;
        break;

    case 'modificar':
        $idVacuna = isset($_POST["idVacuna"]) ? trim($_POST["idVacuna"]) : "";
        $nombreVacuna = isset($_POST["nombreVacuna"]) ? trim($_POST["nombreVacuna"]) : "";
        $descripcion = isset($_POST["descripcion"]) ? trim($_POST["descripcion"]) : "";
        $fechaVencimiento = isset($_POST["fechaVencimiento"]) ? trim($_POST["fechaVencimiento"]) : "";
        $lote = isset($_POST["lote"]) ? trim($_POST["lote"]) : "";   
        $observaciones = isset($_POST["observaciones"]) ? trim($_POST["observaciones"]) : "";  
        $casaDistribuidora = isset($_POST["casaDistribuidora"]) ? trim($_POST["casaDistribuidora"]) : ""; 
        $vacuna = new Vacuna();
        $vacuna->setNombreVacuna($nombreVacuna);
        $vacuna->setCasaDistribuidora($casaDistribuidora);
        $encontrado = $vacuna->verificarExistenciaDb();
        if ($encontrado == true) {
            
            //$usuario->llenarCampos($id); 
            //$modulo->setNombre($nombreModif);
            $vacuna->setNombreVacuna($nombreVacuna);
            $vacuna->setDescripcion($descripcion);
            $vacuna->setFechaVencimiento($fechaVencimiento);
            $vacuna->setLote($lote);
            $vacuna->setObservaciones($observaciones);
            $vacuna->setCasaDistribuidora($casaDistribuidora);
            $modificados = $vacuna->actualizarVacuna();
            if ($modificados > 0) {
                echo 1;
            } else {
                echo 0;
            }
        } else {
            echo 2;
        }
        break;

        case 'obtener_vacunas':
            
            if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['obtenerVacunas'])) {
                $vacunaModel = new Vacuna();
                $vacunas = $vacunaModel->listarVacunas();
                echo json_encode($vacunas);
            }



}
