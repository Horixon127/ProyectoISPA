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


    <title>ModificarUsuario</title>
  </head>
  <body class="background">
    <div class="d-flex justify-content-center">
      <div class="col-sm-6 col-xl-6 p-5 my-5">
        <div class="card">
          <div class="card-header">
            <div class="d-flex">
              <h4>Modificar Usuario</h4>
            </div>
          </div>
          <div class="card-body">
            <form>
              <div class="alert alert-success" role="alert">
                Nose Pudo Realizar La Acciòn, Comunicate Con El Administrador
              </div>
              <form>
                <div class="form-group">
                  <br />
                  <label for="userId">Identificación</label>
                  <input
                    required
                    type="id"
                    class="form-control"
                    id="userId"
                    aria-describedby="IdHelp"
                  />

                  <div class="form-group">
                    <br />
                    <label for="name">Nombres</label>
                    <input
                      required
                      type="text"
                      class="form-control"
                      id="name"
                      aria-describedby="nameHelp"
                    />

                    <div class="form-group">
                      <br />
                      <label for="lastName">Apellido</label>
                      <input
                        required
                        type="lastName"
                        class="form-control"
                        id="lastName"
                        aria-describedby="lastNameHelp"
                      />

                      <div class="form-group">
                        <br />
                        <label for="User">Usuario</label>
                        <input
                          required
                          type="user"
                          class="form-control"
                          id="user"
                          aria-describedby="userHelp"
                        />

                        <div class="form-group">
                          <br />
                          <label for="passwd">Password</label>
                          <input
                            required
                            type="password"
                            class="form-control"
                            id="passwd"
                            aria-describedby="passwdHelp"
                          />

                          <div class="dropdown">
                            <br />
                            <label for="text">Rol</label><br />
                            <button
                              class="btn btn-light border btn-block dropdown-toggle"
                              type="button"
                              id="dropdownMenuButton"
                              data-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                            >
                              Administrador</button
                            ><br />
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#">administrador</a>
                              <a class="dropdown-item" href="#">profesor</a>
                              <a class="dropdown-item" href="#">estudiante</a>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary">
                            Actualizar
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </form>
          </div>
        </div>
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
