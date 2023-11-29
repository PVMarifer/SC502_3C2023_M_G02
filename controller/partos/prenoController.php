<?php

require_once '../../model/prenos/Preno.php';

switch ($_GET['op']) {
    case 'listar_tabla':
        $Preno_db = new Preno();
        $partos = $Parto_db->listarDb();
        $datos = array();
        foreach ($partos as $Parto) {
            $datos[] = array(
                "0" => $Parto->getIdVacaPrenada(),
                "1" => $Parto->getDetallesGestacion(),
                "2" => $Parto->getIdServicio(),
                "5" => $Parto->getObservaciones()
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

    case 'listar_Preno':
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['obtenerPrenos'])) {
            $PrenoModel = new Preno();
            $prenos = $PartoModel->listarPreno();
            echo json_encode($prenos);
        }
}

?>