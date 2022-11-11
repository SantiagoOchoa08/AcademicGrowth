<?php
$txtID = (isset($_POST['txtID'])) ? $_POST['txtID'] : "";
$txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
$txtTipo = (isset($_POST['txtTipo'])) ? $_POST['txtTipo'] : "";
$txtCorreo = (isset($_POST['txtCorreo'])) ? $_POST['txtCorreo'] : "";
$txtContrasena = (isset($_POST['txtContrasena'])) ? $_POST['txtContrasena'] : "";
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";



include('bd.php');

if ($accion) {
    
    //donde dice charik vas a poner el nombre de tu tabla
        $sentenciaSQL = $conexion->prepare("INSERT INTO registro (nombre, correo, contrasena, contrasena2) VALUES (:nombre, :correo, :contrasena, :contrasena2);");
        $sentenciaSQL->bindParam(':nombre', $txtNombre);
        $sentenciaSQL->bindParam(':correo', $txtTipo);
        $sentenciaSQL->bindParam(':contrasena', $txtCorreo);
        $sentenciaSQL->bindParam(':contrasena2', $txtContrasena);
        $sentenciaSQL->execute();
        header("location:registro.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/registro.css">
    <script src="https://kit.fontawesome.com/1e492ccad6.js" crossorigin="anonymous"></script>
    <title>Formulario Registro</title>
</head>

<body id="fondo">
<header id="header">
        <nav class="links">
          <div class="logo">
           <a href="index.html"><img src="./Imagenes/Logoo.PNG" alt="logo"></a>
          </div>
          <div>
            <a href="index.html">
            <button>
                Volver
            </button> 
            </a>
            <a href="iniciarsesion.html">
            <button>
                Iniciar sesion
            </button>
            </a>
          </div>
        </nav>
    </header>
    <section>

        <form method="POST"  class="form" id="registrarse">
                <h2 class="form__title">Registrarse</h2>
                <h2>Nombre completo</h2>
                <input class="control" name="txtNombre" type="text"  placeholder="Nombre" class="input" required />
                <h2>Correo electronico</h2>
                <input class="control" type="text" name="txtTipo" placeholder="email">
                <h2>Contraseña</h2>
                <input class="control" name="txtCorreo" type="text" placeholder="contraseña" class="input" required/>
                <h2>Confirmar contraseña</h2>
                <input class="control" type="password" name="txtContrasena"  placeholder="confirmar" class="input" required/>
                <button type="submit" name="accion"   value="enviar" class="btn">Registrarse</button>
            </form>
    </section>
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