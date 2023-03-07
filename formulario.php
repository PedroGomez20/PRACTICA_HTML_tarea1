
<?php
    session_start();
    if (!isset($_SESSION["logged"])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO ALUMNOS</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/style_formulario.css">
</head>



<body bgcolor="aqua">
    
    <section class="cabez">
       
    <a class="men" href="index.php"><span class="material-symbols-outlined">
                home
            </span> INICIO</a>

        <a class="men" href="logout.php"><span class="material-symbols-outlined">
                logout
            </span> CERRAR SESION</a>
        
        <!-- <ul>
            <li class="menus"> <a href="index.html"> MENU</a> </li>

        </ul> -->
    

    </section>

    

    <h1 class="titulo">FORMULARIO DE ALUMNOS CON INTERES DE INFORMACION PARA BECAS</h1>

    <section class="form_alum">

        <P class="nomb">DATOS PERSONALES</P>

        <form action="save.php" method="POST">
            <label for="nombre">NOMBRE:</label>
            <input class="control" type="text" id="nombre" name="nombre" placeholder="Nombre" />
            <br>
            <br>

            <label for="apellidoP">APELLIDO PATERNO:</label>
            <input class="control" type="text" id="apellidoP" name="apellidoP" placeholder="Apellido Paterno" />
            <br>
            <br>

            <label for="apellidoM">APELLIDO MATERNO:</label>
            <input class="control" type="text" id="apellidoM" name="apellidoM" placeholder="Apellido Materno" />
            <br>
            <br>

            <label for="semestre">SEMESTRE:</label>
            <input class="control" type="number" id="semestre" name="semestre" placeholder="Semestre" />
            <br>
            <br>

            <label for="califi">CALIFICACION:</label>
            <input class="control" type="number" id="califi" name="califi" placeholder="Calificacion" />
            <br>
            <br>

            <label for="correo">CORREO:</label>
            <input class="control" type="email" id="correo" name="correo" placeholder="CORREO" />
            <br>
            <br>

            <br>
            <button class="botns" type="submit"> ENVIAR</button>





        </form>
        <p class="terminos2">Acuerdo de terminos y condiciones</p>
        <a class="links" href="terminos.html">terminos y condiciones</a>
    </section>

    <footer class="piepag">

        <p class="copy">Copyray 2023</p>


    </footer>

</body>




</html>