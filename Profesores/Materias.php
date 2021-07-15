<?php
include_once('../config/DB-conect.php');

  $conexion = new Database;
  $resultado = $conexion->datesMaterias();

?>

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
    <link rel="stylesheet" href="Styles.css">
    <title>Materias</title>
  </head>

  <body class="background">
    <div class="d-flex justify-content-center">
      <div class="col-sm-8 col-xl-8 p-5">
        <div class="card">
          <div class="card-header">
            <div class="d-flex">
              <h4>Listado De Materias</h4>
              <a href="./CreacionDeMaterias.php" class="btn btn-primary ml-auto" role="button" aria-disabled="true">
                Crear Materias
              </a>
            </div>
          </div>

          <form class="card-body">
            <div class="alert alert-success" role="alert">
              Nose Pudo Realizar La Acciòn, Comunicate Con El Administrador
            </div>

            <table class="table ml-end">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Herramientas</th>
                </tr>
              </thead>
              <tbody>
              <?php
                  foreach($resultado as $row){
                         echo '<tr>
                            <td>'.$row['id'].'</td>
                            <td>'.$row['nombre'].'</td><!--cambiar a nombres-->
                            <td>
                            <a href="Edith_Materias.php?id='.$row['id'].'" type="button" class="btn btn-primary">Modificar</a>
                            <a href="#algo" type="button" class="btn btn-danger">Eliminar</a>
                            </td>
                       </tr>';    
                   }
                 ?>
              </tbody>
            </table>
          </form>
        </div>
      </div>
    </div>
  </body>