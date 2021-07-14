<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./Styles.css">

    <title>CrearDeMaterias</title>
  </head>

  <body class="background">
    <div class="d-flex justify-content-center">
      <div class="col-sm-8 col-xl-8 p-5 my-5 bg-white">
        <div class="card-header">
          <div class="d-flex">
            <h4>Creacion De Materias</h4>
                <a href="./Materias.php" class="btn btn-primary ml-auto" role="button">Regresar</a>
          </div>
        </div>
        <form action="../config/RegistrarMateria.php" method="POST">
        <?php
                if (isset($_GET['confirm'])) {

                    if ($_GET['confirm'] === "0") {
                        echo '<div class="alert alert-danger" role="alert"> <h6>Datos no ingresadosh6> </div>';
                    }
                    if ($_GET['confirm'] === "1") {
                        echo '<div class="alert alert-success" role="alert"> <h6> Se Añadio correctamente a el estudiante<h6> </div>';
                    }
                    if ($_GET['confirm'] === "2") {
                        echo '<div class="alert alert-warning" role="alert"> <h6>Uno o mas campos estan vacios<h6> </div>';
                    }
                    if ($_GET['confirm'] === "3") {
                        echo '<div class="alert alert-warning" role="alert"> <h6>El usuario ya esta registrado<h6> </div>';
                    }

                }
            ?>
          <div class="form-group">
            <br />
            <label for="name">Nombre</label>
            <input
              required
              type="text"
              class="form-control"
              id="userid"
              name="nombre"
              aria-describedby="nameHelp"
              />
            <br />
            
            <button type="submit" class="btn btn-primary">Crear</button><br />
          </div>
        </form>
      </div>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
