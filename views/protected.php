<?php
session_start();
$rol = $_SESSION['role'];
if ($rol === 1) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <div class="container">
        </div>
        <form action="logout.php">
            <button>Cerrar sesion</button>
        </form>
    </body>

    </html>

    <?php
} else {
    echo '<script languaje="javascript">alert("No puedes ver esta pagina");</script>';
    echo '<script languaje="javascript">document.location.href="login.php"</script>';
}
?>
   <script src="../controllers/Api.js"></script>

