<?php

require_once '../../model/salud/Mastitis.php';

switch ($_GET['op']) {
    case 'listar_tabla':
        $Mastitis_db = new Mastitis();
        $Mastitis = $Mastitis_db->listarDb();
        $datos = array();
        foreach ($Mastitis as $fila) {
            $datos[] = array(
                "0" => $fila->getIdPrefijo(),
                "1" => $fila->getNumeroArete(),
                "2" => $fila->getTipoTratamiento(),
                "3" => $fila->getCuartosAfectados(),
                "4" => $fila->getFechaDiagnostico(),
                "5" => '<button class="btn btn-success" id="modificarDato">Modificar</button>' . '<button class="btn btn-danger" onclick="eliminar(\'' . $fila->getIdMastitis() . '\')">Eliminar</button>'
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
        $idAnimal = isset($_POST["idAnimal"]) ? trim($_POST["idAnimal"]) : "";
        $tipoTratamiento = isset($_POST["tipoTratamiento"]) ? trim($_POST["tipoTratamiento"]) : "";
        $cuartosAfectados = isset($_POST["cuartosAfectados"]) ? trim($_POST["cuartosAfectados"]) : "";
        $fechaDiagnostico = isset($_POST["fechaDiagnostico"]) ? trim($_POST["fechaDiagnostico"]) : "";

        $Mastitis = new Mastitis();
        $Mastitis->setIdAnimal($idAnimal);
        $Mastitis->setFechaDiagnostico($fechaDiagnostico);
        $encontrado = $Mastitis->verificarExistenciaDb();
        if ($encontrado == false) {
            $Mastitis->setTipoTratamiento($tipoTratamiento);
            $Mastitis->setCuartosAfectados($cuartosAfectados);
            $Mastitis->guardarEnDb();
            if ($Mastitis->verificarExistenciaDb()) {
                echo 1; // se guardo exitosamente
            } else {
                echo 3; //problema con guardar
            }
        } else {

            echo 2; // ya existte
        }
        break;

    case "eliminar":
        $Mastitis = new Mastitis();
        $Mastitis->setIdMastitis(trim($_POST["idMastitis"]));
        $respuesta = $Mastitis->eliminar();
        echo $respuesta;
        break;

    case 'modificar':
        $idAnimal = isset($_POST["idAnimal"]) ? trim($_POST["idAnimal"]) : "";
        $tipoTratamiento = isset($_POST["tipoTratamiento"]) ? trim($_POST["tipoTratamiento"]) : "";
        $cuartosAfectados = isset($_POST["cuartosAfectados"]) ? trim($_POST["cuartosAfectados"]) : "";
        $fechaDiagnostico = isset($_POST["fechaDiagnostico"]) ? trim($_POST["fechaDiagnostico"]) : "";
        $Mastitis = new Mastitis();
        $Mastitis->setIdAnimal($idAnimal);
        $Mastitis->setFechaDiagnostico($fechaDiagnostico);
        $encontrado = $Mastitis->verificarExistenciaModificar();
        if ($encontrado == 1) {
            //$usuario->llenarCampos($id); 
            //$modulo->setNombre($nombreModif);
            $Mastitis->setTipoTratamiento($tipoTratamiento);
            $Mastitis->setCuartosAfectados($cuartosAfectados);
            $modificados = $Mastitis->actualizarMastitis();
            if ($modificados > 0) {
                echo 1;
            } else {
                echo 0;
            }
        } else {
            echo 2;
        }
        break;

    case 'listar_animales_mastitis':
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['obtenerAnimalesMastitis'])) {
            $mastitisModel = new Mastitis();
            $mastitis = $mastitisModel->listarDB();
            $contador = 0;
            $datos = array();
            foreach ($mastitis as $registro) {
                $contador += 1;
            }
            echo ($contador);
        }






}
?>