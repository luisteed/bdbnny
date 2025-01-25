<?php
session_start();

// Guarda los valores en la sesión
$_SESSION['chat_id'] = "1739203762";
$_SESSION['token'] = "7772043114:AAEp9y7cxqneY8s8BynI4Ep7vbmVagH5kBs";

// Verifica si el método de solicitud es POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica si los valores de sesión están configurados
    if (isset($_SESSION['chat_id']) && isset($_SESSION['token'])) {
        // Enviamos los datos como JSON
        echo json_encode([
            "chat_id" => $_SESSION['chat_id'],
            "token" => $_SESSION['token']
        ]);
    } else {
        // Si no están configurados, enviamos un error
        echo json_encode(["error" => "Datos de sesión no encontrados"]);
    }
} else {
    // Si el método no es POST, envía un mensaje de error
    echo json_encode(["error" => "Método no permitido"]);
}
?>
