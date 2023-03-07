<?php
session_start();
if (!isset($_SESSION["logged"])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,0" />
    <title>MENU</title>

    <link rel="stylesheet" href="css/style_indes.css">
</head>

<body class="fondo">

    <header class="encabezado">

  





    <div class="enca">
        <a class="indi" href="logout.php"><span class="material-symbols-outlined">
                logout
            </span>CERRAR SESION</a>
</div>
        <!-- <section>
        <p class="indi"><a class="men" href="logout.php"><span class="material-symbols-outlined">
                    logout
                </span> CERRAR SESION</a></p>
                </section> -->
    </header>





    <section class="cuerpo">
        <h1>MENU</h1>

        <a href="blog.php"> <span class="material-symbols-outlined">
                rss_feed
            </span>BLOG DE BECAS</a>
        <br>
        <br>
        <a href="formulario.php"> <span class="material-symbols-outlined">
                edit
            </span>REGISTRO DE ALUMNOS INTERESADOS</a>
        <br>
        <br>
        <a href="alumnos.php"> <span class="material-symbols-outlined">
                dataset
            </span>REGISTROS</a>
        <br>
        <br>
        <a href="login.php"> <span class="material-symbols-outlined">
                account_circle
            </span>LOGIN</a>
    </section>


    

</body>

</html>