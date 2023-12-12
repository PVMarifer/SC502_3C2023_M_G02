<?php
require_once '../../model/user/User.php';
switch ($_GET['op']) {

    case 'insert':
        $nombre = isset($_POST["nombre"]) ? trim($_POST["nombre"]) : "";
        $email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
        $password = isset($_POST["password_hash"]) ? trim($_POST["password_hash"]) : "";
        $confirmPassword = isset($_POST["confirm_password"]) ? trim($_POST["confirm_password"]) : "";
        $agreeTerms = isset($_POST["terms"]) ? $_POST["terms"] : false;

        if (!$agreeTerms) {
            echo json_encode(["error" => "Debe estar de acuerdo con los términos"]);
            exit; // Stop 
        }

        if ($password !== $confirmPassword) {
            echo json_encode(["error" => "Las contraseñas no coinciden"]);
            exit; // Stop
        }
        $ingresarUsuario = new User();

        $ingresarUsuario->setNombre($nombre);
        $ingresarUsuario->setEmail($email);
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $ingresarUsuario->setPassword($hashedPassword); // Ensure to hash the password before saving
        $ingresarUsuario ->setTerms($agreeTerms);

        $encontrado = $ingresarUsuario->usuarioExiste();
        if ($encontrado == false) {
            $ingresarUsuario->setNombre($nombre);
            $ingresarUsuario->setEmail($email);
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $ingresarUsuario->setPassword($hashedPassword); // Ensure to hash the password before saving
            $ingresarUsuario ->setTerms($agreeTerms);
            $ingresarUsuario->guardarDb();
            if ($ingresarUsuario->usuarioExiste()) {
                echo 1; // se guardó exitosamente
            } else {
                echo 3; // problema con guardar
            }
        } else {
            echo 2; // ya existe
        }
        break;

    default:
        echo "prueba";
        // Handle other cases if needed
        break;
}
?>


