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

    <title>ListadoDeUsuarios</title>
  </head>
  <body class="background">
    <div class="d-flex row justify-content-center">
      <div class="col-sm-8 col-xl-8 p-5 m2">
        <div class="card">
          <div class="card-header">
            <div class="card-body">
              <h4>Listado De Usuarios</h4>
            </div>
            <form>
              <div class="alert alert-success" role="alert">
                Nose Pudo Realizar La Acciòn, Comunicate Con El Administrador
              </div>

              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Herramientas</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Juan Ostios</td>
                    <td>
                      <button type="button" class="btn btn-primary">
                        Modificar
                      </button>
                      <button type="button" class="btn btn-danger">
                        Eliminar
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Mariuth Nicole</td>
                    <td>
                      <button type="button" class="btn btn-primary">
                        Modificar
                      </button>
                      <button type="button" class="btn btn-danger">
                        Eliminar
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Harold Sanchez</td>
                    <td>
                      <button type="button" class="btn btn-primary">
                        Modificar
                      </button>
                      <button type="button" class="btn btn-danger">
                        Eliminar
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Juan Gomez</td>
                    <td>
                      <button type="button" class="btn btn-primary">
                        Modificar
                      </button>
                      <button type="button" class="btn btn-danger">
                        Eliminar
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
