<?php
try {
    $dbname='mvc';
    $user='root';
    $password='1234';
    $dsn = "mysql:host=localhost;dbname=$dbname";
    $db = new PDO($dsn, $user, $password);
    // echo "Conexion exitosa";
} catch (PDOException $e){
    echo $e->getMessage();
}
?>