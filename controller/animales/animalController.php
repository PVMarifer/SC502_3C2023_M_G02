<?php

require_once '../../model/animales/Animal.php';

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

    case 'listar_animales':
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['obtenerAnimales'])) {
            $animalModel = new Animal();
            $animales = $animalModel->listarAnimales();
            echo json_encode($animales);
        }
        break;

    case 'listar_animales_no_vacunados':
        $animal_db = new Animal();
        $animales = $animal_db->listarNoVacunados();
        $datos = array();
        foreach ($animales as $animal) {
            $datos[] = array(
                "0" => $animal->getNumeroArete(),
                "1" => $animal->getNombre(),
                "2" => $animal->getPeso(),
                "3" => $animal->getFechaNacimiento()
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