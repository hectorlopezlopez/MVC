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
            <div id="demo">
                <h2>Let AJAX change this text</h2>
                <button type="button" onclick="loadDoc()">Change Content</button>
            </div>

        </div>
        <form action="logout.php">
            <button>Cerrar sesion</button>
        </form>
    </body>

    </html>

    <?php
} else {
    echo "No puedes visualizar esta pagina";
}
?>

<script>
    function loadDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("demo").innerHTML = this.responseText;
    }
  xhttp.open("GET", "ajax_info.txt", true);
  xhttp.send();
}
</script>