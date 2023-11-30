<?php

require_once '../../model/animales/Animal.php';

switch ($_GET['op']) {
    case 'listar_tabla':
        $animal = new Animal();
        $registros = $animal->listarDb();
        $datos = array();
        foreach ($registros as $registro) {
            $datos[] = array(
                "0" => $registro->getIdAnimal(),
                "1" => $registro->getNumero_arete(),
                "2" => $registro->getNombre(),
                "3" => $registro->getFecha_nacimiento(),
                "4" => $registro->getRaza(),
                "5" => $registro->getPeso(),
                "6" => $registro->getColores_caracteristicas(),
                "7" => $registro->getObservaciones(),
                "8" => '<button class="btn btn-success" id="modificarDato">Modificar</button>' . '<button class="btn btn-danger" onclick="eliminar(\'' . $registro->getIdAnimal() . '\')">Eliminar</button>'
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
        case 'insert':
            $nombre = isset($_POST["nombre"]) ? trim($_POST["nombre"]) : "";
            $fecha_nacimiento = isset($_POST["fecha_nacimiento"]) ? trim($_POST["fecha_nacimiento"]) : "";
            $raza = isset($_POST["raza"]) ? trim($_POST["raza"]) : "";
            $peso = isset($_POST["peso"]) ? trim($_POST["peso"]) : "";
            $numero_arete = isset($_POST["numero_arete"]) ? trim($_POST["numero_arete"]) : "";
            $colores_caracteristicas = isset($_POST["colores_caracteristicas"]) ? trim($_POST["colores_caracteristicas"]) : "";
            $observaciones = isset($_POST["observaciones"]) ? trim($_POST["observaciones"]) : "";
    
            $ingresarAnimal = new Animal();
            
            $ingresarAnimal->setNombre($nombre);
            $ingresarAnimal->setFecha_nacimiento($fecha_nacimiento);
            $ingresarAnimal->setRaza($raza);
            $ingresarAnimal->setPeso($peso);
            $ingresarAnimal->setNumero_arete($numero_arete);
            $ingresarAnimal->setColores_caracteristicas($observaciones);

            $encontrado = $ingresarAnimal->verificarExistenciaDb();
            if ($encontrado == false) {
                
                $ingresarAnimal->setNombre($nombre);
                $ingresarAnimal->setFecha_nacimiento($fecha_nacimiento);
                $ingresarAnimal->setRaza($raza);
                $ingresarAnimal->setPeso($peso);
                $ingresarAnimal->setNumero_arete($numero_arete);
                $ingresarAnimal->setColores_caracteristicas($observaciones);

                $ingresarAnimal->guardarEnDb();
                if ($ingresarAnimal->verificarExistenciaDb()) {
                    echo 1; // se guardo exitosamente
                } else {
                    echo 3; //problema con guardar
                }
            } else {
    
                echo 2; // ya existte
            }
            break;
    
        case "eliminar":
            $animal = new Animal();
            $animal -> setIdAnimal(trim($_POST["id_animal"]));
            $respuesta = $animal->eliminar();
            echo $respuesta;
            break;
    
        case 'modificar':
            $nombre = isset($_POST["nombre"]) ? trim($_POST["nombre"]) : "";
            $fecha_nacimiento = isset($_POST["fecha_nacimiento"]) ? trim($_POST["fecha_nacimiento"]) : "";
            $raza = isset($_POST["raza"]) ? trim($_POST["raza"]) : "";
            $peso = isset($_POST["peso"]) ? trim($_POST["peso"]) : "";
            $numero_arete = isset($_POST["numero_arete"]) ? trim($_POST["numero_arete"]) : "";
            $colores_caracteristicas = isset($_POST["colores_caracteristicas"]) ? trim($_POST["colores_caracteristicas"]) : "";
            $observaciones = isset($_POST["observaciones"]) ? trim($_POST["observaciones"]) : "";
    
            $ingresarAnimal = new Animal();
            
            $ingresarAnimal->setNombre($nombre);
            $ingresarAnimal->setFecha_nacimiento($fecha_nacimiento);
            $ingresarAnimal->setRaza($raza);
            $ingresarAnimal->setPeso($peso);
            $ingresarAnimal->setNumero_arete($numero_arete);
            $ingresarAnimal->setColores_caracteristicas($colores_caracteristicas);
            $encontrado = $ingresarAnimal->verificarExistenciaDb();
            if ($encontrado == 1) {
    
                //$usuario->llenarCampos($id); 
                //$modulo->setNombre($nombreModif);
                $ingresarAnimal->setNumero_arete($numero_arete);
                $ingresarAnimal->setColores_caracteristicas($colores_caracteristicas);
                $ingresarAnimal->setObservaciones($observaciones);
                $modificados = $ingresarAnimal->actualizarAnimal();
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