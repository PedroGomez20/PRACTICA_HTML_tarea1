<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,0" />
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="stylesheet" href="css/syle_login.css">
</head>


<body class="fondo">
<header class="header">
    <section class="links">

    <Div class="salir">
        <p class="indi"><a class="indi" href="index.php"><span class="material-symbols-outlined">
                    home
                </span> INICIO</a></p>
               

          <div class="vram">      
        <p class="indi"><a class="indi" href="logout.php"><span class="material-symbols-outlined">
                    logout
                </span> CERRAR SESION</a></p>
          </div>
                </Div>
        <!-- <ul >
            <li > <a href="index.html">MENU</a></li>
        </ul> -->

    </section>
    </header>


    <section class="_fom_login">
        <p class="ingre">INGRESE SUS DATOS</p>

        <form method="post" action="auth.php">

            <label for="usuario">USUARIO:</label>
            <input class="loginacc" type="text" id="usuario" name="usuario" placeholder="USUARIO" />
            <br>
            <br>

            <label for="contrasenia">CONTRASENIA</label>
            <input class="loginacc" type="password" id="contrasenia" name="contra" placeholder="Contrasenia" />


            <br>
            <br>
            <div class="bu">
                <button class="botns" type="submit"><span class="material-symbols-outlined">
                        login
                    </span> ENTRAR</button>
            </div>

        </form>


    </section>




</body>

</html>