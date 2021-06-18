<?php
    include_once('../config/DB-CrearEstudiante.php');

    $conexion = new Database;
    $resultado = $conexion->datosCorredores();

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
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
    <title>ListadoDeEstudiantes</title>
  </head>
  <body class="background">
    <div class="d-flex row justify-content-center">
      <div class=" col-sm-8 col-xl-auto p-5 m5">
        <div class="shadow-lg card rounded">
          <div class="card-header">
            <div class="d-flex">
              <h4>Listado De Estudiantes</h4>
                <a href="../Profesores/CrearEstudiante.php" class="btn btn-outline-primary ml-auto " tabindex="-1" role="button" aria-disabled="true">Crear Estudiante</a>
              </button>
            </div>
          </div>
          <div class="card-body">
            <form>

              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Identificación</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Herramientas</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  foreach ($resultado as $row) {
                    echo "<tr>
                    <th>".$row['userid']."</th>
                      <td>".$row['userid']."</td>
                      <td>".$row['names']."</td>
                      <td>".$row['lastname']."</td>
                      <td>".$row['email']."</td>
                      <td>".$row['numbers']."</td>
                      </tr>";
                    }
                  ?>
                </tbody>
              </table>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
 