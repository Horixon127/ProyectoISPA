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

    <link rel="stylesheet" href="./Styles/Styles.css" />
    <title>Login</title>
  </head>
  <body class="background">
    <!-- Formulario -->

    <div class="container">
      <div class="d-flex row justify-content-center">
        <div class="col-sm-8 col-xl-8 p-5 m5">
          <div class="card">
            <div class="card-header">
              <div
                class="list-group list-group-horizontal"
                id="list-tab"
                role="tablist"
              >
                <a
                  class="list-group-item list-group-item-action active"
                  id="list-login-list"
                  data-toggle="list"
                  href="#list-login"
                  role="tab"
                  aria-controls="login"
                  >Login</a
                >
                <a
                  class="list-group-item list-group-item-action"
                  id="list-register-list"
                  data-toggle="list"
                  href="#list-register"
                  role="tab"
                  aria-controls="register"
                  >Register</a
                >
              </div>
            </div>
            <div class="card-body">
              <div class="tab-content" id="nav-tabContent">
                <div
                  class="tab-pane fade show active"
                  id="list-login"
                  role="tabpanel"
                  aria-labelledby="list-login-list"
                >
                  <form>
                    <div class="alert alert-danger" role="alert">
                      Por Favor, Inicie sesión para acceder a esta área
                    </div>
                    <div class="form-group">
                      <label for="email">Correo Electronico</label>
                      <input
                        required
                        type="email"
                        class="form-control"
                        id="email"
                        aria-describedby="emailHelp"
                      />
                      <small id="emailHelp" class="text-muted">
                        Escribe tu direccion de correo Electronico</small
                      >

                      <div class="form-group">
                        <label for="passwd">Contraseña</label>
                        <input
                          required
                          type="password"
                          class="form-control"
                          id="password"
                          aria-describedby="passwdHelp"
                        />
                        <small id="passwdHelp" class="form.text text-muted">
                          Escribe tu nombre de usuario sin espacios</small
                        >
                      </div>

                      <div class="check-container">
                        <input type="checkbox" name="remember" id="remember" />
                        <label for="remember">Recordar Contraseña</label>
                      </div>

                      <button type="submit" class="btn btn-primary btn-block">
                        Iniciar Sesion
                      </button>
                    </div>
                  </form>
                </div>

                <div
                  class="tab-pane fade"
                  id="list-register"
                  role="tabpanel"
                  aria-labelledby="list-register-list"
                >
                  <form action= "./config/Registro.php"  method="POST">
                  
                  <?php

                if (isset($_GET['confirm'])) {

                    if ($_GET['confirm'] === "0") {
                        echo '<div class="alert alert-danger" role="alert"> <h6>Datos no ingresados <h6> </div>';
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
                      <label for="userId">Identificación</label>
                      <input
                        required
                        type="id"
                        class="form-control"
                        name="identificacion"
                        id="userid"
                        aria-describedby="IdHelp"
                      />
                      <small id="IdHelp" class="form-text text-muted">
                        Escribe tu numero de Identificación</small
                      >

                      <div class="form-group">
                        <label for="name">Nombres</label>
                        <input
                          required
                          type="text"
                          class="form-control"
                          name="names"
                          id="names"
                          aria-describedby="nameHelp"
                        />
                        <small id="nameHelp" class="form-text text-muted">
                          Escribe tu nombre</small
                        >

                        <div class="form-group">
                          <label for="lastName">Apellido</label>
                          <input
                            required
                            type="lastName"
                            class="form-control"
                            name="apellidos"
                            id="lastname"
                            aria-describedby="lastNameHelp"
                          />
                          <small id="lastNameHelp" class="form-text text-muted">
                            Escribe tu apellido</small
                          >

                          <div class="form-group">
                            <label for="email">Correo Electronico</label>
                            <input
                              required
                              type="email"
                              class="form-control"
                              name="username"
                              id="usernames"
                              aria-describedby="emailHelp"
                            />
                            <small id="emailHelp" class="form-text text-muted">
                              Escribe tu direccion de correo Electronico</small
                            >

                            <div class="form-group">
                              <label for="passwd">Contraseña</label>
                              <input
                                required
                                type="password"
                                class="form-control"
                                name="pxssword"
                                id="passwd"
                                aria-describedby="passwdHelp"
                              />
                              <small
                                id="passwdHelp"
                                class="form-text text-muted"
                              >
                                Escribe tu Contraseña</small
                              >

                              <div class="form-group">
                                <label for="passwdconfirm">
                                  Confirmar Contraseña</label
                                >
                                <input
                                  required
                                  type="password"
                                  class="form-control"
                                  name="passwordconfirm"
                                  id="passwdConfirm"
                                  aria-describedby="passwdConfirmHelp"
                                />
                                <small
                                  id="passwdconfirmHelp"
                                  class="form-text text-muted"
                                >
                                  Escribe tu Contraseña</small
                                >
                              </div>

                              <div class="check-container">
                                <input
                                  type="checkbox"
                                  name="remember"
                                  id="remember"
                                />
                                <label for="remember"
                                  >Recordar Contraseña</label
                                >
                              </div>
                              <button
                                type="submit"
                                class="btn btn-primary btn-block"
                              >
                                Registrar
                              </button>
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
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
