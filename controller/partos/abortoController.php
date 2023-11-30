<?php

require_once '../../model/abortos/Aborto.php';

switch ($_GET['op']) {
    case 'listar_tabla':
        $preno_db = new Preno();
        $partos = $preno_db->listarDb();
        $datos = array();
        foreach ($partos as $preno) {
            $datos[] = array(
                "0" => $preno->getIdVaca(),
                "1" => $preno->getFechaAborto(),
                "2" => $preno->getEstadoVaca(),
                "3" => $preno->getObservaciones()
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

    case 'listar_abortos':
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['obtenerAbortos'])) {
            $prenoModel = new preno();
            $abortos = $abortoModel->listarAbortos();
            echo json_encode($partos);
        }
}

?>