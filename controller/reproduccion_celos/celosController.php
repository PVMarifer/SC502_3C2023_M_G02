<?php

require_once '../../model/reproduccion_celos/celos.php';

switch ($_GET['op']) {
    case 'listar_tabla':
        $celosdb = new celos();
        $registros = $celosdb->listarDb();
        $datos = array();
        foreach ($registros as $registro) {
            $datos[] = array(
                "0" => $registro->getIdPrefijo(),
                "1" => $registro->getAreteAnimal(),
                "2" => $registro->getFechaDiagnostico(),
                "3" => $registro->getDetallesCelos(),
                "4" => $registro->getObservaciones(),
                "5" =>'<button class="btn btn-danger" onclick="eliminar(\'' . $registro->getIdCelo() . '\')">Eliminar</button>'
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
        $idAnimal = isset($_POST["id_animal"]) ? trim($_POST["id_animal"]) : "";
        
        $fechaDiagnostico = isset($_POST["fecha_celo"]) ? trim($_POST["fecha_celo"]) : "";
        $detalles = isset($_POST["detalles_celos"]) ? trim($_POST["detalles_celos"]) : "";
        $observaciones = isset($_POST["observaciones"]) ? trim($_POST["observaciones"]) : "";

        $celo = new celos();
        $celo->setIdAnimal($idAnimal);
        $celo->setFechaDiagnostico($fechaDiagnostico);
        $encontrado = $celo->verificarExistenciaDb();
        if ($encontrado == false) {
            $celo->setDetallesCelo($detalles);
            $celo->setObservaciones($observaciones);
            $celo->guardarEnDb();
            if ($celo->verificarExistenciaDb()) {
                echo 1; // se guardo exitosamente
            } else {
                echo 3; //problema con guardar
            }
        } else {

            echo 2; // ya existte
        }
        break;

    case "eliminar":
        $celo = new celos();
        $celo -> setIdCelo(trim($_POST["id_celo"]));
        $respuesta = $celo->eliminar();
        echo $respuesta;
        break;
}
?>