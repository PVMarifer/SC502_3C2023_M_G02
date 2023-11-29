<?php

require_once '../../model/reproduccion_celos/servicio.php';

switch ($_GET['op']) {
    case 'listar_tabla':
        $serviciodb = new servicio();
        $registros = $serviciodb->listarDB();
        $datos = array();
        foreach ($registros as $registro) {
            $datos[] = array(
                "0" => $registro->getIdPrefijo(),
                "1" => $registro->getIdAnimalVaca(),
                "2" => $registro->getIdAnimalToro(),
                "3" => $registro->getFechaDiagnostico(),
                "4" => $registro->getTipoServicio(),
                "6" => $registro->getIdCelo(),
                "7" => $registro->getObservaciones(),
                "8" =>'<button class="btn btn-danger" onclick="eliminar(\'' . $registro->getIdServicio() . '\')">Eliminar</button>'
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
        $idAnimalVaca = isset($_POST["id_animal"]) ? trim($_POST["id_animal"]) : "";
        $idAnimalToro = isset($_POST["id_animal"]) ? trim($_POST["id_animal"]) : "";

        $fechaDiagnostico = isset($_POST["fecha_servicio"]) ? trim($_POST["fecha_servicio"]) : "";
        $tipoServicio = isset($_POST["tipo_servicio"]) ? trim($_POST["tipo_servicio"]) : "";
        $idCelo = isset($_POST["id_celo"]) ? trim($_POST["id_celo"]) : "";
        $observaciones = isset($_POST["observaciones"]) ? trim($_POST["observaciones"]) : "";

        $servio = new servicio();
        $servicio->setIdAnimalVaca($idAnimalVaca);
        $servicio->setIdAnimalToro($idAnimalToro);

        $servicio->setFechaDiagnostico($fechaDiagnostico);
        $encontrado = $servicio->verificarExistenciaDb();
        if ($encontrado == false) {
            $servicio->setTipoServicio($tipoServicio);
            $servicio->setIdCelo($idCelo);
            $servicio->setObservaciones($observaciones);
            $servicio->guardarEnDb();
            if ($servicio->verificarExistenciaDb()) {
                echo 1; // se guardo exitosamente
            } else {
                echo 3; //problema con guardar
            }
        } else {

            echo 2; // ya existte
        }
        break;

    case "eliminar":
        $servicio = new servicio();
        $servicio -> setIdservicio(trim($_POST["id_servicio"]));
        $respuesta = $servicio->eliminar();
        echo $respuesta;
        break;
}
?>