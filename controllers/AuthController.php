<?php

session_start();

$db = new mysqli('localhost', 'root', '1234', 'mvc');
$db->set_charset("utf8");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $db->prepare("SELECT * FROM usuario WHERE nombre = ? AND contraseña = ?");
    $stmt->bind_param('ss', $username, $password);

    if ($stmt->execute()) {
        // $stmt->store_result();

        $resultado = $stmt->get_result();
        if ($datos = $resultado->fetch_assoc()) {
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $datos['idRol'];
            header("Location: ../views/protected.php");
            exit;
        }else{
            echo "<script languaje='javascript'>alert('Usuario contreaseña no encontrados');</script>";
            echo "<script languaje='javascript'>document.location.href='../views/login.php'</script>";
        }
    } else {
        echo "Error al ejecutar la consulta.";
    }

    $stmt->close();
    $db->close();
}

