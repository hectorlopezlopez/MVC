<!-- <?php  
include('../config/database.php')
?> -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <form method="post" action="../controllers/AuthController.php">
        <br />
        Login
        <p>Usuario</p>
        <input  name="username" type="text" />
        <p>Contraseña</p>
        <input name="password" type="text" />
        <button type="submit">Ingresar</button>
      </form>
    </div>
  </body>
</html>
