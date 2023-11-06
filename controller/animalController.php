<?php

require_once '../model/animal.php';

switch ($_GET['op']) {
    case 'listar_tabla':
        $animal_db = new Animal();
        $animales = $animal_db->listarDb();
        $datos = array();
        foreach ($animales as $animal) {
            $datos[] = array(
                "0" => $animal->getNombre(),
                "1" => $animal->getNumeroArete(),
                "2" => $animal->getFechaNacimiento(),
                "3" => $animal->getRaza(),
                "4" => $animal->getPeso(),
                "5" => $animal->getCaracteristicas(),
                "6" => $animal->getAreteMadre(),
                "7" => $animal->getAretePadre(),
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


}

?>