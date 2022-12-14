<?php
session_start();
if ($_POST) {
  if (($_POST['Usuario'] == "santiagoochoaherrera08@gmail.com") && ($_POST['contrasena'] == "321")) {

    
    header('location:principal_estudiantes.html');
  } else {
    $mensaje = "Error: El usuario o contraseña son incorrectos";
  }
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
    <link rel="icon" href="./Imagenes/Logoo.PNG">
    <link rel="stylesheet" href="./assets/css/iniciarsesion.css">
    <script src="https://kit.fontawesome.com/1e492ccad6.js" crossorigin="anonymous"></script>
</head>
<body id="fondo">
    <header id="header">
        <nav class="links">
          <div class="logo">
           <a href="index.html"><img src="./Imagenes/Logoo.PNG" alt="logo"></a>
          </div>
          <div class="botones">
            <a href="index.html">
            <button>
                Volver
            </button>
            </a>
            <a href="registro.php">
            <button>
                Registrate
            </button>
            </a>
          </div>
        </nav>
    </header>
    <section id="home">
        <h1>Inicia sesión</h1> <br><br>
        <form id="iniciosesion" method="POST">
            <h2>Correo</h2> <br>
            <input type="email" placeholder="Ingrese su correo" name="Usuario"> <br> <br>
            <h2>Contraseña</h2> <br>
            <input type="password" placeholder="Ingrese su contraseña" name="contrasena"> <br> <br>
            <button type="submit">Iniciar sesión</button>
        </form> 
    </section> <br>
    <section id="recuerdo">
        <a href="RestablecerContra.html"> ¿Olvidaste tu contraseña? </a> <br> <br>
        <p>¿No tienes una cuenta? <a href="Registro.html"> Registrarte</a> </p>
    </section> <br>
    <footer>
        <a href="mailto: santiagoochoaherrera08@gmail.com"> Contactanos </a>
        <a href="quienessomos.html">¿Quienes somos?</a>
        <a href="#">Referencias</a>
        <p>Copy Right 2022</p>
        <div class="socials">
          <a href="https://github.com/SantiagoOchoa08" target="_blank">
            <i class="fa-brands fa-github"></i>
          </a>
          <a href="https://www.instagram.com/santiagoochoaherrera_08/" target="_blank">
            <i class="fa-brands fa-instagram"></i>
          </a>
        </div>
    </footer>
</body>
</html>
