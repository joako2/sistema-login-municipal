<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login y registro-Municipalidad</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <main>
        <div class="contenedor__todo">

            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            
            <!--formulario de login y registro-->
            <div class="contenedor__login-register">
                
                <form action="" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico">
                    <input type="password" placeholder="Contraseña">
                    <button>Entrar</button>
                </form>


                <!--registro-->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name= "nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name= "usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Registrarse</button>                
                </form>
            </div>
        </div>
          

    </main>
    <script src="js/script.js"></script>
</body>
</html>
