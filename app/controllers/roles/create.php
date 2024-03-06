<?php 
include ("../../config.php");

$nombre_rol = $_POST["nombre_rol"];
$nombre_rol = mb_strtoupper($nombre_rol, "UTF-8"); // Convierte el texto todo a Mayusculas

if ($nombre_rol == "") {
    session_start();
    $_SESSION["mensaje"] = "Por favor, ingresa la información requerida en el campo Rol";
    $_SESSION["icono"] = "error";
    $_SESSION["timer"] = 1500;
    header("Location: " . APP_URL . "/admin/roles/create.php");
} else {
    $sentencia = $pdo->prepare("INSERT INTO roles (nombre_rol, fyh_creacion, estado) 
                                VALUES (:nombre_rol, :fyh_creacion, :estado)");
    
    $sentencia->bindParam("nombre_rol", $nombre_rol);
    $sentencia->bindParam("fyh_creacion", $fechaHora);
    $sentencia->bindParam("estado", $estado_de_registro);

    try {
        if ( $sentencia->execute() ) {
            session_start();
            $_SESSION["mensaje"] = "¡Registro completado exitosamente!";
            $_SESSION["icono"] = "success";
            $_SESSION["timer"] = 1500;
            header("Location: " . APP_URL . "/admin/roles");
        } else {
            session_start();
            $_SESSION["mensaje"] = "Lo sentimos, no se pudo completar el registro en este momento. Por favor, inténtalo de nuevo más tarde";
            $_SESSION["icono"] = "error";
            $_SESSION["timer"] = 1500;
            header("Location: " . APP_URL . "/admin/roles");
        }
    } catch (Exception $exception) {
            session_start();
            $_SESSION["mensaje"] = "Lo sentimos, ya existe un rol con este nombre. Por favor, intenta con un nombre de Rol diferente";
            $_SESSION["icono"] = "warning";
            $_SESSION["timer"] = 4000;
            header("Location: " . APP_URL . "/admin/roles/create.php");
    }
    
    
}

