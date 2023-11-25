<?php

require_once '../../model/partos/Preno.php';

switch ($_GET['op']) {
    case 'listar_tabla':
        $preno_db = new Preno();
        $partos = $preno_db->listarDb();
        $datos = array();
        foreach ($partos as $preno) {
            $datos[] = array(
                "0" => $preno->getIdPrefijo(),
                "1" => $preno->getNombreVaca(),
                "2" => $preno->getNumeroArete(),
                "3" => $preno->getEstadoVaca(),
                "4" => $preno->getTipoParto(),
                "5" => $preno->getFechaParto(),
                "6" => $preno->getObservaciones(),
                "7" => '<button class="btn btn-success" id="modificarDato">Modificar</button>' . '<button class="btn btn-danger" onclick="eliminar(\'' . $preno->getIdParto() . '\')">Eliminar</button>'
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
        $nombreVaca = isset($_POST["nombreVaca"]) ? trim($_POST["nombreVaca"]) : "";
        $estado_vaca = isset($_POST["estado_vaca"]) ? trim($_POST["estado_vaca"]) : "";
        $numeroArete = isset($_POST["numeroArete"]) ? trim($_POST["numeroArete"]) : "";
        $tipo_parto = isset($_POST["tipo_parto"]) ? trim($_POST["tipo_parto"]) : "";
        $fecha_parto = isset($_POST["fecha_parto"]) ? trim($_POST["fecha_parto"]) : "";
        $observaciones = isset($_POST["observaciones"]) ? trim($_POST["observaciones"]) : "";

        $preno = new Preno();
        $preno->setNombreVacuna($nombreVaca);
        $preno->setNumeroArete($numeroArete);
        $encontrado = $preno->verificarExistenciaDb();
        if ($encontrado == false) {
            $preno->setEstadoVaca($estado_vaca);
            $preno->setTipoParto($tipo_parto); 
            $preno->setFechaParto($fecha_parto);
            $preno->setObservaciones($observaciones);
            $preno->guardarEnDb();
            if ($preno->verificarExistenciaDb()) {
                echo 1; // se guardo exitosamente
            } else {
                echo 3; //problema con guardar
            }
        } else {
            echo 2; // ya existte
        }
        break;

    case "eliminar":
        $preno = new Preno();
        $preno->setIdParto(trim($_POST["idParto"]));
        $respuesta = $preno->eliminar();
        echo $respuesta;
        break;

    case 'modificar':
        $IdParto = isset($_POST["idParto"]) ? trim($_POST["idParto"]) : "";
        $nombreVaca = isset($_POST["nombreVaca"]) ? trim($_POST["nombreVaca"]) : "";
        $estado_vaca = isset($_POST["estado_vaca"]) ? trim($_POST["estado_vaca"]) : "";
        $fecha_parto = isset($_POST["fecha_parto"]) ? trim($_POST["fecha_parto"]) : "";
        $tipo_parto = isset($_POST["tipo_parto"]) ? trim($_POST["tipo_parto"]) : "";   
        $observaciones = isset($_POST["observaciones"]) ? trim($_POST["observaciones"]) : "";  
        $numeroArete = isset($_POST["numeroArete"]) ? trim($_POST["numeroArete"]) : ""; 
        $preno = new Preno();
        $preno->setNombreVaca($nombreVaca);
        $preno->setNumeroArete($numeroArete);
        $encontrado = $preno->verificarExistenciaDb();
        if ($encontrado == true) {
            
            //$usuario->llenarCampos($id); 
            //$modulo->setNombre($nombreModif);
            $preno->setNombreVacuna($nombreVaca);
            $preno->setEstadoVaca($estado_vaca);
            $preno->setFechaParto($fecha_parto);
            $preno->setTipoParto($tipo_parto);
            $preno->setObservaciones($observaciones);
            $preno->setNumeroArete($numeroArete);
            $modificados = $preno->actualizarPreno();
            if ($modificados > 0) {
                echo 1;
            } else {
                echo 0;
            }
        } else {
            echo 2;
        }
        break;

        case 'obtener_prenos':
            
            if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['obtener_prenos'])) {
                $prenoModel = new Preno();
                $partos = $prenoModel->listarPreños();
                echo json_encode($partos);
            }



}
