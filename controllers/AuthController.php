<?php

session_start();

// Conexión a la base de datos
$db = new mysqli('localhost', 'root', '1234', 'mvc');
$db->set_charset("utf8"); // Asegura la codificación correcta

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Ajustamos la consulta para obtener también el rol del usuario
    $stmt = $db->prepare("SELECT * FROM usuario WHERE nombre = ? AND contraseña = ?");
    $stmt->bind_param('ss', $username, $password);

    if ($stmt->execute()) {
        // Almacenar el resultado
        // $stmt->store_result();

        // Verificar si se encontró el usuario
        // if ($stmt->num_rows > 0) {
            // Asociar los resultados
            // $stmt->bind_result($user_id, $user_role);
            $resultado=$stmt->get_result();
            if($datos=$resultado->fetch_assoc()){

            // Guardar el estado de inicio de sesión y el rol en la sesión
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $datos['idRol'];
            // $user_role;
            // echo  $datos['idRol'];
            header("Location: ../views/protected.php");
            exit;
            }
        // } else {
            // echo "Usuario o contraseña incorrectos.";
        // }
    } else {
        echo "Error al ejecutar la consulta.";
    }

    // Cerrar la consulta y la conexión
    $stmt->close();
    $db->close();
}

// session_start();

// $db = new mysqli('localhost', 'root', '1234', 'mvc');

// if ($db->connect_error) {
//     die("Error de conexión: " . $db->connect_error);
// }

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $username = $_POST['username'];
//     $password = $_POST['password'];

//     $stmt = $db->prepare("SELECT contraseña FROM usuario WHERE nombre = ? AND contraseña = ?");
//     $stmt->bind_param('ss', $username,$password);

//     if ($stmt->execute()) {
//         $stmt->store_result();

//         if ($stmt->num_rows > 0) {
//             $stmt->bind_result($user_id);
//             $stmt->fetch();
            
//                 $_SESSION['logged_in'] = true;
//                 $_SESSION['username'] = $username; 
//                 echo $user_id;
//                 exit;
          
//         } else {
//             echo "Usuario no encontrado.";
//         }
//     } else {
//         echo "Error al ejecutar la consulta.";
//     }

//     $stmt->close();
//     $db->close();
// }
