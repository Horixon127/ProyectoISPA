<?php
include_once("../config/DB-Conect.php");

//id = id que llega del get
$id = $_GET['id'];

$conexion = new Database;
$materia = $conexion->editMateria($id);

$idMateria = "";
$nomMateria = "";
foreach ($materia->fetchAll(PDO::FETCH_OBJ) as $columnaMateria) {
    $idMateria = $columnaMateria->id;
    $nomMateria = $columnaMateria->nombre;
}
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
    <link rel="stylesheet" href="./Styles.css">

    <title>CrearDeMaterias</title>
  </head>

  <body class="background">
    <div class="d-flex justify-content-center">
      <div class="col-sm-8 col-xl-8 p-5 my-5 bg-white">
        <div class="card-header">
          <div class="d-flex">
            <h4>Creacion De Materias</h4>
            <button class="btn btn-primary text-white ml-auto">Regresar</button>
          </div>
        </div>
        <form action="../config/Update.php" method="POST">
            <div>
                <div class="form-group">
                  <label for="userId">Id</label>
                    <input value="<?=$idMateria?>" type="text" class="form-control" name="id" id="id" aria-describedby="idMateria">
                  <label for="userId">Nombre</label>
                    <input value="<?=$nomMateria?>" type="text" class="form-control" name="nombre" id="userId" aria-describedby="idHelp" required>
                </div>
             <button type="Submit" class="btn ml-auto btn-primary">Actualizar</button>
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
