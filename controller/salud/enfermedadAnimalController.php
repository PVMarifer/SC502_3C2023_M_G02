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
                "4" => $registro->getServicio(),
                "5" => $registro->getObservaciones(),
                "6" => '<button class="btn btn-success" id="modificarDato">Modificar</button>' . '<button class="btn btn-danger" onclick="eliminar(\'' . $registro->getIdEnfermedadAnimal() . '\')">Eliminar</button>'
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
        $idAnimal = isset($_POST["idAnimal"]) ? trim($_POST["idAnimal"]) : "";

        $fechaDiagnostico = isset($_POST["fechaDiagnostico"]) ? trim($_POST["fechaDiagnostico"]) : "";
        $sintomas = isset($_POST["sintomas"]) ? trim($_POST["sintomas"]) : "";
        $idEnfermedad = isset($_POST["idEnfermedad"]) ? trim($_POST["idEnfermedad"]) : "";
        $estadoEnfermedad = isset($_POST["estadoEnfermedad"]) ? trim($_POST["estadoEnfermedad"]) : "";
        $observaciones = isset($_POST["observaciones"]) ? trim($_POST["observaciones"]) : "";

        $enfermedadAnimal = new EnfermedadAnimal();
        $enfermedadAnimal->setIdEnfermedad($idEnfermedad);
        $enfermedadAnimal->setIdAnimal($idAnimal);
        $enfermedadAnimal->setFechaDiagnostico($fechaDiagnostico);
        $encontrado = $enfermedadAnimal->verificarExistenciaDb();
        if ($encontrado == false) {
            $enfermedadAnimal->setSintomasAnimal($sintomas);
            $enfermedadAnimal->setEstadoAnimal($estadoEnfermedad);
            $enfermedadAnimal->setObservaciones($observaciones);
            $enfermedadAnimal->guardarEnDb();
            if ($enfermedadAnimal->verificarExistenciaDb()) {
                echo 1; // se guardo exitosamente
            } else {
                echo 3; //problema con guardar
            }
        } else {

            echo 2; // ya existte
        }
        break;

    case "eliminar":
        $enfermedadAnimal = new EnfermedadAnimal();
        $nombreEnfermedad = isset($_POST["nombreEnfermedad"]) ? trim($_POST["nombreEnfermedad"]) : "";
        $areteAnimal = isset($_POST["areteAnimal"]) ? trim($_POST["areteAnimal"]) : "";
        $fechaDiagnostico = isset($_POST["fechaDiagnostico"]) ? trim($_POST["fechaDiagnostico"]) : "";

        $enfermedadAnimal -> setAreteAnimal($areteAnimal);
        $enfermedadAnimal -> setNombreEnfermedad($nombreEnfermedad);
        $enfermedadAnimal -> setFechaDiagnostico($fechaDiagnostico);
        $enfermedadAnimal -> setIdEnfermedadAnimal(trim($_POST["idRegistro"]));
        $respuesta = $enfermedadAnimal->eliminar();
        echo $respuesta;
        break;

    case 'modificar':
        $nombreEnfermedad = isset($_POST["nombreEnfermedad"]) ? trim($_POST["nombreEnfermedad"]) : "";
        $areteAnimal = isset($_POST["areteAnimal"]) ? trim($_POST["areteAnimal"]) : "";
        $fechaDiagnostico = isset($_POST["fechaDiagnostico"]) ? trim($_POST["fechaDiagnostico"]) : "";
        $sintomas = isset($_POST["sintomas"]) ? trim($_POST["sintomas"]) : "";
        $estadoEnfermedad = isset($_POST["estadoEnfermedad"]) ? trim($_POST["estadoEnfermedad"]) : "";
        $observaciones = isset($_POST["observaciones"]) ? trim($_POST["observaciones"]) : "";


        $enfermedadAnimal = new EnfermedadAnimal();
        $enfermedadAnimal->setNombreEnfermedad($nombreEnfermedad);
        $enfermedadAnimal->setAreteAnimal($areteAnimal);
        $enfermedadAnimal->setFechaDiagnostico($fechaDiagnostico);
        $encontrado = $enfermedadAnimal->verificarExistenciaModificar();
        if ($encontrado == 1) {

            //$usuario->llenarCampos($id); 
            //$modulo->setNombre($nombreModif);
            $enfermedadAnimal->setSintomasAnimal($sintomas);
            $enfermedadAnimal->setEstadoAnimal($estadoEnfermedad);
            $enfermedadAnimal->setObservaciones($observaciones);
            $modificados = $enfermedadAnimal->actualizarEnfermedadAnimal();
            if ($modificados > 0) {
                echo 1;
            } else {
                echo 0;
            }
        } else {
            echo 2;
        }
        break;



}
?>