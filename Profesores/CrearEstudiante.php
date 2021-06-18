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
    <title>Crear Estudiante</title>
  </head>

  <body class="background">
    <div class="d-flex justify-content-center">
      <div class="col-sm-5 col-xl-5 p-5 my-5 bg-white">
        <div class="card-header">
          <div class="d-flex">
            <h4>Crear Estudiantes</h4>
              <a href="../Profesores/ListadoDeEstudiantes.php" class="btn btn-outline-primary ml-auto " tabindex="-1" role="button" aria-disabled="true">Regresar</a>
          </div>
        </div> <br>
        <form action=" ../config/IN-estudiantes.php"  method="POST">
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
            <label for="userid">Identificación</label>
            <input
              required
              type="id"
              class="form-control"
              id="userid"
              name="userid"
              aria-describedby="IdHelp"
            />
            <small id="IdHelp" class="text-muted">
              Escribe tu numero de Identificación</small
            >
          </div>

          <div class="form-group">
            <label for="names">Nombres</label>
            <input
              required
              type="text"
              class="form-control"
              id="names"
              name="names"
              aria-describedby="namesHelp"
            />
            <small id="nameHelp" class="text-muted"> Escribe tu nombre</small>
          </div>

          <div class="form-group">
            <label for="lastname">Apellido</label>
            <input
              required
              type="lastname"
              class="form-control"
              id="lastname"
              name="lastname"
              aria-describedby="lastnameHelp"
            />
            <small id="lastNameHelp" class="text-muted"
              >Escribe tu apellido</small
            >
          </div>

          <div class="form-group">
            <label for="email">Correo Electronico</label>
            <input
              required
              type="email"
              class="form-control"
              id="email"
              name="email"
              aria-describedby="emailHelp"
            />
            <small id="emailHelp" class="text-muted"
              >Escribe tu direccion de correo Electronico</small
            >
          </div>

          <div class="form-group">
            <label for="numbers">Telefono</label>
            <input
              required
              type="numbers"
              class="form-control"
              id="numbers"
              name="numbers"
              aria-describedby="numbersHelp"
            />
            <small id="emailHelp" class="text-muted"
              >Escribe tu numero de Telefono</small
            >
          </div>

          <button type="submit" class="btn btn-primary btn-block">Crear</button>
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
