<?php

require_once '../../model/partos/Preno.php';

switch ($_GET['op']) {
    case 'listar_tabla':
        $preno_db = new Preno();
        $partos = $preno_db->listarDb();
        $datos = array();
        foreach ($partos as $preno) {
            $datos[] = array(
                "0" => $preno->getIdVaca(),
                "1" => $preno->getNumeroArete(),
                "2" => $preno->getFechaParto(),
                "3" => $preno->getEstadoVaca(),
                "4" => $preno->getTipoParto(),
                "5" => $preno->getObservaciones()
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

    case 'listar_preno':
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['obtenerPrenos'])) {
            $prenoModel = new preno();
            $partos = $prenoModel->listarPreno();
            echo json_encode($partos);
        }
}

?>