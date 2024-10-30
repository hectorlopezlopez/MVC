<?php
session_start();
// Destruir todas las variables de sesión
session_destroy();
setcookie("inicio_sesion", "", time() - 601);
setcookie("reset_tiempo", "", time() - 601);

// Redirigir al usuario a la página de inicio de sesión después de cerrar sesión
header("Location: login.php");
exit();
?>